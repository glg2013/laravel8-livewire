<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // realrashid/sweet-alert 使用
        Alert::success('提示', '欢迎归来！');
        //alert()->success('', '欢迎回来哦');
        //toast()->success('欢迎回来哦！');
        //alert()->question('Title','Lorem Lorem Lorem');

        /*
        alert()->image(
            'Image Title!',
            'Image Description',
            'https://img2.a9vg.com/i/a9-game_x310/games/cover/0dd148cf0e22752474bc3d4b83834a05.jpg',
            '310',
            '310',
            ''
        );
        */

        // html
        //alert()->html('<i>HTML</i> <u>example</u>'," You can use <b>bold text</b>, <a href='//github.com'>links</a> and other HTML tags ",'success')->position('top-end');

        // 不点不关闭
        //alert()->success('SuccessAlert','Lorem ipsum dolor sit amet.')->persistent(true,false);

        // 自动关闭
        //toast('Success Toast','success')->autoClose(5000);

        // 按钮换位
        //alert()->question('Are you sure?','You won\'t be able to revert this!')
        //    ->showConfirmButton('Yes! Delete it', '#3085d6')
        //    ->showCancelButton('Cancel', '#aaa')->reverseButtons();

        // footer
        //alert()->error('Oops...', 'Something went wrong!')->footer('<a href="#">Why do I have this issue?</a>');

        // 转换成toast
        //alert()->success('Post Created', 'Successfully')->toToast();

        // ToHTML
        //alert()->success('Post Created', '<strong>Successfully</strong>')->toHtml();

        // 改变背景
        //alert('Title','Lorem Lorem Lorem', 'success')->background('#01BBB8');

        // 动画效果？测试没看出有什么不同
        //alert()->info('InfoAlert','Lorem ipsum dolor sit amet.')
        //    ->animation('tada faster','fadeInUp faster');

        // 使用默认的丑陋按钮原始样式
        //alert()->success('Post Created', 'Successfully')->buttonsStyling(false);

        // 使用字体图标样式(似乎不能显示图标？测试发现是浏览器缓存造成，清理后就有图标了)
        //alert()->success('Post Created', 'Successfully')->iconHtml('<i class="fas fa-cat"><strong>Successfully</strong></i>')->persistent(true,false);

        // 聚焦在确定按钮
        //alert()->question('Are you sure?','You won\'t be able to revert this!')->showCancelButton()->showConfirmButton()->focusConfirm(true);

        // 带倒计时进度条
        //toast('Signed in successfully','success')->timerProgressBar();
        //toast('Success Toast','success')->autoClose(2000)->timerProgressBar();

        return view('home');
    }
}
