<?php

namespace cccdl\tencent_sdk\Im;


use cccdl\tencent_sdk\Traits\Request;

class imOpenLoginSvc extends Im
{

    /**
     * 内部服务名，不同的 servicename 对应不同的服务类型
     * @var string
     */
    protected $servicename = 'im_open_login_svc';

    /**
     * 导入单个帐号
     * @param String $Identifier 用户名，长度不超过32字节
     * @param String $Nick 用户昵称
     * @param String $FaceUrl 用户头像 URL
     */
    public function accountImport($Identifier, $Nick, $FaceUrl)
    {
        $this->command = 'account_import';

        $url = $this->getUrl();

        $param = [
            'Identifier' => $Identifier,
            'Nick' => $Nick,
            'FaceUrl' => $FaceUrl,
        ];

        return Request::post($url, $param);


    }


}