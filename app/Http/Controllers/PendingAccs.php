<?php

namespace App\Http\Controllers;
use App\Models\PendingAcc;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PendingAccs extends Controller
{
    public function indexAcc()
    {
        $pacc = PendingAcc::all();
        return view('admin.pacc.verifyacc', compact('pacc'));
    }

    public function postCreateAcc(Request $request)
    {
        $pacc = $request->all();

        try {
            $host_account = DB::table('users')->where('role', '=' , 'Host')->exists();

            if($host_account)
            {
                ;
            }
            else
            {
                User::create([
                    'name' => 'Host_WTM',
                    'email' => 'namkhanhvuduy0867@gmail.com',
                    'role' => "Host",
                    'password' => Hash::make("khanh"),
                ]);
            }

            $pacc = new PendingAcc([
                'admin_name' => $request->input('admin_name'),
                'admin_email' => $request->input('admin_email'),
                'role' => "Admin",
            ]);
    
            $pacc->save();

            $latest_id = PendingAcc::latest()->first()->id;

            return redirect('login')->with('success', 'Gửi Yêu Cầu Thành Công, Số Thứ Tự Của Bạn Là: '. $latest_id);
        } catch (\Exception $e) {
            return redirect('login')->with('error', 'Tài Khoản Không Hợp Lệ Hoặc Đã Tồn Tại, Yêu Cầu Sẽ Không Được Gửi Đi');
        }        
    }

    public function confirmAcc(Request $request)
    {
        try
        {
            User::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'role' => "Admin",
                'password' => Hash::make($request->input('password')),
            ]);
            DB::table('pending_accs')->where('admin_email', '=' , $request->input('email'))->delete();
            return redirect('admin/pacc/verifyacc')->with('success', 'Khởi tạo tài khoản thành công');
        }
        catch (\Exception $e)
        {
            return redirect('admin/pacc/verifyacc')->with('error', 'Khởi tạo tài khoản không thành công, có thể do trùng email');
        }
    }

    public function deleteAcc($admin_email)
    {
        try
        {
            DB::table('pending_accs')->where('admin_email', '=' , $admin_email)->delete();
            return redirect('admin/pacc/verifyacc')->with('success', 'Từ Chối Đơn Đăng Kí Thành Công');
        }
        catch(\Exception $e)
        {
            return redirect('admin/pacc/verifyacc')->with('error', 'Lỗi');
        }
    }
}
