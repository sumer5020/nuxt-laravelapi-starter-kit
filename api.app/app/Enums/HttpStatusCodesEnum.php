<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

final class HttpStatusCodesEnum extends Enum
{
    const unexpected = 0;
    # HTTP Codes
    const Ok = 200;
    const Created = 201;
    const NoContent = 204;
    const NotModified = 304;
    const InvalidRequest = 400;
    const AuthenticationFailure = 401;
    const NoAccessPermissions = 403;
    const NotFound = 404;
    const NotAllowedMethod = 405;
    const Conflict = 409;
    const LengthRequired = 411;
    const PreconditionFailed = 412;
    const RequestBodyTooLarge = 413;
    const InvalidRange = 416;
    const ServerError = 500;
    const ServerBusy = 503;
    const UnprocessableEntity = 422;

    # General Codes
    const Success = 1000;
    const UnexpectedErrorOccurred =1005;
    /**
     * Get the Extension for an enum value.
     *
     * @param  mixed  $value
     * @return array
     */
    public static function getExtensionList($value)
    {
        switch ($value) {

            # HTTP Codes
            case self::Ok : {return ['code'=>'200','code_key'=>'Ok','code_group'=>'1','description_en'=>'success','description_ar'=>'تمت بنجاح']; break;}
            case self::Created : {return ['code'=>'201','code_key'=>'Created','code_group'=>'1','description_en'=>'created','description_ar'=>'تم الانشاء']; break;}
            case self::NoContent : {return ['code'=>'204','code_key'=>'NoContent','code_group'=>'1','description_en'=>'no content','description_ar'=>'لايوجد محتوى']; break;}
            case self::NotModified : {return ['code'=>'304','code_key'=>'NotModified','code_group'=>'1','description_en'=>'not modified','description_ar'=>'لم يتم التعديل']; break;}
            case self::InvalidRequest : {return ['code'=>'400','code_key'=>'InvalidRequest','code_group'=>'1','description_en'=>'invalid request','description_ar'=>'طلب غيرصالح']; break;}
            case self::AuthenticationFailure : {return ['code'=>'401','code_key'=>'AuthenticationFailure','code_group'=>'1','description_en'=>'authentication failure','description_ar'=>'فشل المصادقة']; break;}
            case self::NoAccessPermissions : {return ['code'=>'403','code_key'=>'NoAccessPermissions','code_group'=>'1','description_en'=>'no permissions to access','description_ar'=>'لا تمتلك أذونات للوصول']; break;}
            case self::NotFound : {return ['code'=>'404','code_key'=>'NotFound','code_group'=>'1','description_en'=>'not found','description_ar'=>'لم يتم العثورعلى اي نتائج']; break;}
            case self::NotAllowedMethod : {return ['code'=>'405','code_key'=>'NotAllowedMethod','code_group'=>'1','description_en'=>'not allowed method','description_ar'=>'عملية غيرمسموح بها']; break;}
            case self::Conflict : {return ['code'=>'409','code_key'=>'Conflict','code_group'=>'1','description_en'=>'conflict','description_ar'=>'عدم تعيين']; break;}
            case self::LengthRequired : {return ['code'=>'411','code_key'=>'LengthRequired','code_group'=>'1','description_en'=>'length required','description_ar'=>'تم تجاوزالطول المطلوب']; break;}
            case self::PreconditionFailed : {return ['code'=>'412','code_key'=>'PreconditionFailed','code_group'=>'1','description_en'=>'precondition failed','description_ar'=>'فشل الشرط المسبق']; break;}
            case self::RequestBodyTooLarge : {return ['code'=>'413','code_key'=>'RequestBodyTooLarge','code_group'=>'1','description_en'=>'request body too large','description_ar'=>'نص الطلب كبير جدًا']; break;}
            case self::InvalidRange : {return ['code'=>'416','code_key'=>'InvalidRange','code_group'=>'1','description_en'=>'invalid range','description_ar'=>'نطاق غير صالح']; break;}
            case self::ServerError : {return ['code'=>'500','code_key'=>'ServerError','code_group'=>'1','description_en'=>'server error','description_ar'=>'خطأ في الخادم']; break;}
            case self::ServerBusy : {return ['code'=>'503','code_key'=>'ServerBusy','code_group'=>'1','description_en'=>'server busy','description_ar'=>'الملقم مشغول']; break;}
            case self::UnprocessableEntity : {return ['code'=>'422','code_key'=>'UnprocessableEntity','code_group'=>'1','description_en'=>'unprocessable entity','description_ar'=>'مدخلات غيرقابل للمعالجة']; break;}

            # General Codes
            case self::Success : {return ['code'=>'1000','code_key'=>'Success','code_group'=>'2','description_en'=>'success','description_ar'=>'تمت بنجاح']; break;}
            case self::UnexpectedErrorOccurred : {return ['code'=>'1005','code_key'=>'UnexpectedErrorOccurred','code_group'=>'2','description_en'=>'unexpected error occurred','description_ar'=>'حدث خطأ غيرمتوقع']; break;}

            default: {return ['code'=>'1005','code_key'=>'UnexpectedErrorOccurred','code_group'=>'2','description_en'=>'unexpected error occurred','description_ar'=>'حدث خطأ غيرمتوقع'];}
        }
    }

    /**
     * Get response Array for an enum value.
     *
     * @param  mixed  $value
     * @return array
     */
    public static function getResponseArrayStatusCode($value)
    {
        $result = [
            'code' => self::UnexpectedErrorOccurred,
            'desc' => self::getDescription(self::UnexpectedErrorOccurred),
        ];

        if(self::hasValue($value)){
            $result = [
                'code' => $value,
                'desc' => self::getDescription($value),
            ];
        }

        return $result;
    }
}
