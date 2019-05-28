<?php
/**
 * Created by PhpStorm.
 * User: boliveira
 * Date: 28/05/19
 * Time: 11:31
 */

namespace Emporium\Auth;


use Illuminate\Auth\GenericUser;
use Laravel\Passport\HasApiTokens;

class EmporiumUser extends GenericUser
{
    use HasApiTokens;
}