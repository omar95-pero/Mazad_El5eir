<?php

namespace App\Http\Controllers\Admin;

use App\Models\ContactUs;
use Illuminate\Http\Request;
use App\Http\Traits\SendEmail;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use Yoeunes\Toastr\Toastr;
use function Couchbase\basicDecoderV1;

class MessageController extends Controller
{
    use SendEmail;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages = ContactUs::orderBy('id','DESC')->get();
        $i=1;
        return view('Admin/Admin/index-messages',compact(['messages','i']));
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showMessage($id)
    {

        if (admin()->user()->id == $id){
            return  view('Admin/profile');
        }else{
            $find = ContactUs::findOrFail($id);
//        dd($find);
            return  view('Admin/Admin/show-message-details',compact(['find','id']));
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function ShowReplyForm($id)
    {

        if (admin()->user()->id == $id){
            return  view('Admin/profile');
        }else{
            $find = ContactUs::findOrFail($id);
            return  view('Admin/Admin/reply-message',compact(['find','id']));
        }

    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function replyMessage(Request $request, $id)
    {
                    $find = ContactUs::findOrFail($id);
                   $email =  $find -> email;
                   $text = $request->message;
                   $title = 'MazaadElkheir';

            $this->send_EmailFun($email,$text,$title);
         return redirect()->route('MessagesIndex');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $find = ContactUs::findOrFail($id);
        $find->delete();
        return response('yes');

    }//end fun
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function ShowAdminsCheckDelete(Request $request){

        $ids = check_delete($request);
        $get=ContactUs::whereIn('id', $ids)->get();
        foreach ($get as $delete_){
            if ($delete_->image!=null){
                delete_file($delete_->image);
            }
        }
        $delete_=ContactUs::whereIn('id', $ids)->delete();
        return response('yes');
    }
}
