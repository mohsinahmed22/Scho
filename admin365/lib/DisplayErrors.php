<?php
/**
 * Created by PhpStorm.
 * User: Mohsin
 * Date: 12/11/2018
 * Time: 3:51 PM
 */

class DisplayErrors extends Exception
{

//    Error Message
    private $ErrorSessionOut = "Session Timeout, Please login again";
    private $ErrorDuplicateEmail = "Email Already Registered, Try with new email address";
    private $ErrorRegister = "";
    private $ErrorLogin = "Invalid email or password";
    private $ErrorInactive = "Account is inactive please check your email address and verify you account";



//    Success Message
    private $SuccessAdded = "Sucessfully Added";
    private $SuccessLogout = "Account Successfully Logout";
    private $SuccessRegister = "Account Successfully registered. Please check your acccount to verify your mail addresss";
    private $SuccessActive = "Successfully Active";
    private $SuccessDelete = "Successfully Deleted.";
    private $SuccessUpdated = "Successfully Update";
    private $SuccessEmailSend = "Email successfully sent to your email address.";


    /**
     * @param $ErrorMsg
     */
    public function ShowError($ErrorMsg){

        echo "<div class=\"alert alert-danger\">{$ErrorMsg}</div>";


    }

    /**
     * @param $SuccessMsg
     */
    public function ShowSuccess($SuccessMsg){

        echo "<div class=\"alert alert-success\">{$SuccessMsg}</div>";


    }

    /**
     * @param $msg
     * @param $MsgType
     */
    public function DisplayMessage($msg, $MsgType){
        if($MsgType == 'Success'){
            return $this->ShowSuccess($msg);
        }else{
            return $this->ShowError($msg);
        }

    }

}