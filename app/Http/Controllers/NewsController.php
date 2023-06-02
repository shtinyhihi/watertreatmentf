<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\News;
use mysqli_result;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::all();
        return view('admin.news.index', compact('news'));
    }

    public function create()
    {
        $news = News::all();
        return view('admin.news.create', compact('news'));
    }

    public function postCreate(Request $request)
    {
        $news = $request->all();

        $check_exist = DB::table('news')->where('news_id', $request->news_id)->first();
        if ($check_exist != null && $check_exist->exists()) {
            return redirect('admin/news/index')->with('error', 'Tin Tức Có Thể Đã Được Tạo');
        } else {
            //kiem tra xem co chon hinh hay ko
            if ($request->hasFile('news_image')) {
                $file = $request->file('news_image');
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

            $news = new News();
            $news->news_id = $request->input('news_id');
            $news->news_title = $request->input('news_title');
            $news->news_News = $request->input('news_News');
            $news->news_image = $fileName;
            $news->news_tag = $request->input('news_tag');
            $news->save();
            return redirect('admin/news/index')->with('success', 'Thêm Giải Pháp Thành Công');
        }
    }

    public function edit($id)
    {
        $news = DB::table('news')->where('news_id', $id)->first();
        return view('admin.news.edit', compact('news'));
    }

    public function postEdit(Request $request)
    {
        $id = $request->news_id;
        $news = DB::table('news')->where('news_id', $id)->first(); //find the news which ID is from $id

        //file format
        if ($request->hasFile('news_file')) {
            $file2 = $request->file('news_file');

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
            $fileName2 = $news->news_file; #nên chọn một file default ở đây
        }

        //kiem tra xem co chon hinh hay ko
        if ($request->hasFile('news_image')) {
            $file = $request->file('news_image');
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
            $fileName = $news->news_image;
        }
        DB::table('news')->where('news_id', $id)->update([
            'news_id' => $id,
            'news_file' => $fileName2,
            'news_image' => $fileName,
            'news_title' => $request->news_title,
            'news_tag' => $request->news_tag,
            'news_News' => $request->news_News,
        ]);
        return redirect('admin/news/index')->with('success', 'Chỉnh Sửa Tin Tức Thành Công');
    }

    public function delete($id)
    {
        DB::table('news')->where('news_id', '=' , $id)->delete();
        return redirect('admin/news/index')->with('success', 'Xóa Tin Tức Thành Công');
    }

    public function view($id)
    {
        $news = DB::table('news')->where('news_id', $id)->first();
        return view('admin.news.view-news', compact('news'));
    }
}
