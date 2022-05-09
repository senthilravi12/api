<?php

$headerss=[
        'User-Agent: Example REST API Client',
        'Authorization :token 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 '
    ];
        $ch=curl_init("https://github.com/senthilravi12/curl");
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
         curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

       


        curl_exec($ch);

        curl_close();

        ?>