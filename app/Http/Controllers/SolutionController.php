<?php

namespace App\Http\Controllers;

use App\Models\Solution;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SolutionController extends Controller
{
    public function index()
    {
        $solutions = Solution::all();
        return view('admin.solution.index', compact('solutions'));
    }

    public function create()
    {
        $solutions = Solution::all();
        return view('admin.solution.create', compact('solutions'));
    }

    public function postCreate(Request $request)
    {
        // $solutions = $request->all();
        // $id = $request->solution_id;
        // $name = $request->solution_name;
        // $desc = $request->solution_description;
        // $img = $request->solution_image;
        // $file = $request->solution_file;
        // $tag = $request->solution_tag;

        $check_exist = DB::table('solutions')->where('solution_id', $request->solution_id)->first();
        if ($check_exist != null && $check_exist->exists()) {
            return redirect('admin/solution/index')->with('error', 'Giải Pháp Có Thể Đã Được Tạo');
        } else {
            //file format
            if ($request->hasFile('solution_file')) {
                $file2 = $request->file('solution_file');

                $ext2 = $file2->getClientOriginalExtension(); //lay duoi
                $accept_ext2 = ['pdf', 'docx'];
                if (in_array($ext2, $accept_ext2)) {
                    $fileName2 = $file2->getClientOriginalName();
                    $fileName2 = date('d-m-y') . '-' . $fileName2;
                    //move to folder images
                    $file2->move('files/', $fileName2);
                } else {
                    return back()->with('error', 'File phải có đuôi .pdf hoặc .docx');
                }
            } else {
                $fileName2 = null; #nên chọn một file default ở đây
            }

            //kiem tra xem co chon hinh hay ko
            if ($request->hasFile('solution_image')) {
                $file = $request->file('solution_image');
                //dd($file);
                $ext = $file->getClientOriginalExtension(); //lay duoi
                $accept_ext = ['jpg', 'png', 'gif', 'jpeg'];
                if (in_array($ext, $accept_ext)) {
                    //kiem tra kich thuoc cua hinh
                    $size = $file->getSize();
                    if ($size < 2 * 1024 * 1024) //nho hon 2mb
                    {
                        $fileName = $file->getClientOriginalName();
                        //rename image
                        $fileName = date('d-m-y') . '-' . $fileName;
                        //move to folder images
                        $file->move('images/', $fileName);
                    } else {
                        return back()->with('error', 'Hinh phai nho hon 2MB');
                    }
                } else {
                    return back()->with('error', 'Hinh chua dung dinh dang');
                }
            } else // ko chon hinh thi lay hinh default
            {
                $fileName = 'default.png';
            }

            $tags = explode(',', $request->input('solution_tag'));
            $tagString = implode(',', $tags);

            $solution_tag = $tagString;


            $s = new Solution([
                'solution_id' => $request->input('solution_id'),
                'solution_name' => $request->input('solution_name'),
                'solution_description' => $request->input('solution_description'),
                'solution_file' => $fileName2,
                'solution_image' => $fileName,
                'solution_tag' => $solution_tag,
            ]);

            $s->save();
            return redirect('admin/solution/index')->with('success', 'Thêm Giải Pháp Thành Công');
        }
    }

    public function edit($id)
    {
        $solutions = DB::table('solutions')->where('solution_id', $id)->first();
        return view('admin.solution.edit', compact('solutions'));
    }

    public function postEdit(Request $request)
    {
        $id = $request->solution_id;
        $solution = DB::table('solutions')->where('solution_id', $id)->first(); //find the solution which ID is from $id

        //file format
        if ($request->hasFile('solution_file')) {
            $file2 = $request->file('solution_file');

            $ext2 = $file2->getClientOriginalExtension(); //lay duoi
            $accept_ext2 = ['pdf', 'docx'];
            if (in_array($ext2, $accept_ext2)) {
                $fileName2 = $file2->getClientOriginalName();
                $fileName2 = date('d-m-y') . '-' . $fileName2;
                //move to folder images
                $file2->move('files/', $fileName2);
            } else {
                return back()->with('error', 'File phải có đuôi .pdf hoặc .docx');
            }
        } else {
            $fileName2 = $solution->solution_file; #nên chọn một file default ở đây
        }

        //kiem tra xem co chon hinh hay ko
        if ($request->hasFile('solution_image')) {
            $file = $request->file('solution_image');
            //dd($file);
            $ext = $file->getClientOriginalExtension(); //lay duoi
            $accept_ext = ['jpg', 'png', 'gif', 'jpeg'];
            if (in_array($ext, $accept_ext)) {
                //kiem tra kich thuoc cua hinh
                $size = $file->getSize();
                if ($size < 2 * 1024 * 1024) //nho hon 2mb
                {
                    $fileName = $file->getClientOriginalName();
                    //rename image
                    $fileName = date('d-m-y') . '-' . $fileName;
                    //move to folder images
                    $file->move('images/', $fileName);
                } else {
                    return back()->with('error', 'Hinh phai nho hon 2MB');
                }
            } else {
                return back()->with('error', 'Hinh chua dung dinh dang');
            }
        } else {
            $fileName = $solution->solution_image;
        }
        DB::table('solutions')->where('solution_id', $id)->update([
            'solution_id' => $id,
            'solution_file' => $fileName2,
            'solution_image' => $fileName,
            'solution_name' => $request->solution_name,
            'solution_tag' => $request->solution_tag,
            'solution_description' => $request->solution_description
        ]);
        return redirect('admin/solution/index')->with('success', 'Chỉnh Sửa Giải Pháp Thành Công');
    }

    public function delete($id)
    {
        DB::table('solutions')->where('solution_id', '=', $id)->delete();
        return redirect('admin/solution/index')->with('success', 'Xóa Giải Pháp Thành Công');
    }

    public function view($id)
    {
        $solutions = DB::table('solutions')->where('solution_id', $id)->first();
        return view('admin.solution.view-solution', compact('solutions'));
    }
}
