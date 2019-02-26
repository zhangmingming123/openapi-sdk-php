<?php
return [ 'product' => [ 'name' => 'jaq', 'domain' => 'jaq.aliyuncs.com,jaq-share.aliyuncs.com,jaq.[RegionId].aliyuncs.com', 'type' => 'Outer', ], 'version' => [ 'product' => 'jaq', 'name' => '2017-04-13', ], 'api' => [ 'AfsAppCheck' => [ 'attributes' => [ 'visibility' => 'Public', 'version' => '2017-04-13', 'showJsonItemName' => 'true', 'name' => 'AfsAppCheck', 'parameterType' => 'Single', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'jaq', ], 'parameters' => [ 'Parameter' => [ 'CallerName' => [ 'name' => 'callerName', 'tagName' => 'CallerName', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', 'defaultValue' => 'POP', ], 'Session' => [ 'name' => 'session', 'tagName' => 'Session', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], ], ], 'IspProtocol' => [ 'version' => '1.0.0', 'protocol' => 'hsf', 'interface' => 'com.alibaba.jaq.api.hsf.riskcontrol.AccountRisk4pop', 'method' => 'afsAppCheck', 'group' => 'JAQ', 'invokeType' => 'com.alibaba.jaq.api.hsf.riskcontrol.bo.AfsAppCheckAccessParam4pop', 'timeout' => '10000', ], 'IsvProtocol' => [ 'protocol' => 'HTTP|HTTPS', 'method' => 'POST|GET', ], 'FlowControl' => null, 'name' => 'AfsAppCheck', ], 'ActivityPrevention' => [ 'attributes' => [ 'visibility' => 'Public', 'version' => '2017-04-13', 'showJsonItemName' => 'true', 'name' => 'ActivityPrevention', 'parameterType' => 'Single', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'jaq', ], 'parameters' => [ 'Parameter' => [ 'CallerName' => [ 'name' => 'callerName', 'tagName' => 'CallerName', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', 'defaultValue' => 'POP', ], 'Ip' => [ 'name' => 'ip', 'tagName' => 'Ip', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'ProtocolVersion' => [ 'name' => 'protocolVersion', 'tagName' => 'ProtocolVersion', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Source' => [ 'name' => 'source', 'tagName' => 'Source', 'type' => 'Integer', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'ActivityDescription' => [ 'name' => 'activityDescription', 'tagName' => 'ActivityDescription', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'ActivityId' => [ 'name' => 'activityId', 'tagName' => 'ActivityId', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Prize' => [ 'name' => 'prize', 'tagName' => 'Prize', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'PrizeType' => [ 'name' => 'prizeType', 'tagName' => 'PrizeType', 'type' => 'Integer', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'PhoneNumber' => [ 'name' => 'phoneNumber', 'tagName' => 'PhoneNumber', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Email' => [ 'name' => 'email', 'tagName' => 'Email', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'UserId' => [ 'name' => 'userId', 'tagName' => 'UserId', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'IdType' => [ 'name' => 'idType', 'tagName' => 'IdType', 'type' => 'Integer', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'CurrentUrl' => [ 'name' => 'currentUrl', 'tagName' => 'CurrentUrl', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Agent' => [ 'name' => 'agent', 'tagName' => 'Agent', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Cookie' => [ 'name' => 'cookie', 'tagName' => 'Cookie', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'SessionId' => [ 'name' => 'sessionId', 'tagName' => 'SessionId', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'MacAddress' => [ 'name' => 'macAddress', 'tagName' => 'MacAddress', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Referer' => [ 'name' => 'referer', 'tagName' => 'Referer', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'UserName' => [ 'name' => 'userName', 'tagName' => 'UserName', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'CompanyName' => [ 'name' => 'companyName', 'tagName' => 'CompanyName', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Address' => [ 'name' => 'address', 'tagName' => 'Address', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'IDNumber' => [ 'name' => 'IDNumber', 'tagName' => 'IDNumber', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'BankCardNumber' => [ 'name' => 'bankCardNumber', 'tagName' => 'BankCardNumber', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'RegisterIp' => [ 'name' => 'registerIp', 'tagName' => 'RegisterIp', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'RegisterDate' => [ 'name' => 'registerDate', 'tagName' => 'RegisterDate', 'type' => 'Long', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'ExtendData' => [ 'name' => 'extendData', 'tagName' => 'ExtendData', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'JsToken' => [ 'name' => 'JsToken', 'tagName' => 'JsToken', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'SDKToken' => [ 'name' => 'SDKToken', 'tagName' => 'SDKToken', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], ], ], 'IspProtocol' => [ 'version' => '1.0.0', 'protocol' => 'hsf', 'interface' => 'com.alibaba.jaq.api.hsf.riskcontrol.AccountRisk4pop', 'method' => 'campaignPrevention', 'group' => 'JAQ', 'invokeType' => 'com.alibaba.jaq.api.hsf.riskcontrol.bo.CampaignPreventionAccessParam4pop', 'timeout' => '10000', ], 'IsvProtocol' => [ 'protocol' => 'HTTP|HTTPS', 'method' => 'POST|GET', ], 'FlowControl' => null, 'name' => 'ActivityPrevention', ], 'MessagePrevention' => [ 'attributes' => [ 'visibility' => 'Public', 'version' => '2017-04-13', 'showJsonItemName' => 'true', 'name' => 'MessagePrevention', 'parameterType' => 'Single', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'jaq', ], 'parameters' => [ 'Parameter' => [ 'CallerName' => [ 'name' => 'callerName', 'tagName' => 'CallerName', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', 'defaultValue' => 'POP', ], 'Ip' => [ 'name' => 'ip', 'tagName' => 'Ip', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'ProtocolVersion' => [ 'name' => 'protocolVersion', 'tagName' => 'ProtocolVersion', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Source' => [ 'name' => 'source', 'tagName' => 'Source', 'type' => 'Integer', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'PhoneNumber' => [ 'name' => 'phoneNumber', 'tagName' => 'PhoneNumber', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Email' => [ 'name' => 'email', 'tagName' => 'Email', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'UserId' => [ 'name' => 'userId', 'tagName' => 'UserId', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'IdType' => [ 'name' => 'idType', 'tagName' => 'IdType', 'type' => 'Integer', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'CurrentUrl' => [ 'name' => 'currentUrl', 'tagName' => 'CurrentUrl', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Agent' => [ 'name' => 'agent', 'tagName' => 'Agent', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Cookie' => [ 'name' => 'cookie', 'tagName' => 'Cookie', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'SessionId' => [ 'name' => 'sessionId', 'tagName' => 'SessionId', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'MacAddress' => [ 'name' => 'macAddress', 'tagName' => 'MacAddress', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Referer' => [ 'name' => 'referer', 'tagName' => 'Referer', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'UserName' => [ 'name' => 'userName', 'tagName' => 'UserName', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'CompanyName' => [ 'name' => 'companyName', 'tagName' => 'CompanyName', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Address' => [ 'name' => 'address', 'tagName' => 'Address', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'IDNumber' => [ 'name' => 'IDNumber', 'tagName' => 'IDNumber', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'BankCardNumber' => [ 'name' => 'bankCardNumber', 'tagName' => 'BankCardNumber', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'RegisterIp' => [ 'name' => 'registerIp', 'tagName' => 'RegisterIp', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'RegisterDate' => [ 'name' => 'registerDate', 'tagName' => 'RegisterDate', 'type' => 'Long', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'LoginIp' => [ 'name' => 'loginIp', 'tagName' => 'LoginIp', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'LoginDate' => [ 'name' => 'loginDate', 'tagName' => 'LoginDate', 'type' => 'Long', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'ExtendData' => [ 'name' => 'extendData', 'tagName' => 'ExtendData', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'PasswordHash' => [ 'name' => 'passwordHash', 'tagName' => 'PasswordHash', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'JsToken' => [ 'name' => 'JsToken', 'tagName' => 'JsToken', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'SDKToken' => [ 'name' => 'SDKToken', 'tagName' => 'SDKToken', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], ], ], 'IspProtocol' => [ 'version' => '1.0.0', 'protocol' => 'hsf', 'interface' => 'com.alibaba.jaq.api.hsf.riskcontrol.AccountRisk4pop', 'method' => 'messagePrevention', 'group' => 'JAQ', 'invokeType' => 'com.alibaba.jaq.api.hsf.riskcontrol.bo.MessagePreventionAccessParam4pop', 'timeout' => '10000', ], 'IsvProtocol' => [ 'protocol' => 'HTTP|HTTPS', 'method' => 'POST|GET', ], 'FlowControl' => null, 'name' => 'MessagePrevention', ], 'LoginPrevention' => [ 'attributes' => [ 'visibility' => 'Public', 'version' => '2017-04-13', 'showJsonItemName' => 'true', 'name' => 'LoginPrevention', 'parameterType' => 'Single', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'jaq', ], 'parameters' => [ 'Parameter' => [ 'CallerName' => [ 'name' => 'callerName', 'tagName' => 'CallerName', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', 'defaultValue' => 'POP', ], 'Ip' => [ 'name' => 'ip', 'tagName' => 'Ip', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'ProtocolVersion' => [ 'name' => 'protocolVersion', 'tagName' => 'ProtocolVersion', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Source' => [ 'name' => 'source', 'tagName' => 'Source', 'type' => 'Integer', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'PhoneNumber' => [ 'name' => 'phoneNumber', 'tagName' => 'PhoneNumber', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Email' => [ 'name' => 'email', 'tagName' => 'Email', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'UserId' => [ 'name' => 'userId', 'tagName' => 'UserId', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'IdType' => [ 'name' => 'idType', 'tagName' => 'IdType', 'type' => 'Integer', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'CurrentUrl' => [ 'name' => 'currentUrl', 'tagName' => 'CurrentUrl', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Agent' => [ 'name' => 'agent', 'tagName' => 'Agent', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Cookie' => [ 'name' => 'cookie', 'tagName' => 'Cookie', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'SessionId' => [ 'name' => 'sessionId', 'tagName' => 'SessionId', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'MacAddress' => [ 'name' => 'macAddress', 'tagName' => 'MacAddress', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Referer' => [ 'name' => 'referer', 'tagName' => 'Referer', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'UserName' => [ 'name' => 'userName', 'tagName' => 'UserName', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'CompanyName' => [ 'name' => 'companyName', 'tagName' => 'CompanyName', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Address' => [ 'name' => 'address', 'tagName' => 'Address', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'IDNumber' => [ 'name' => 'IDNumber', 'tagName' => 'IDNumber', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'BankCardNumber' => [ 'name' => 'bankCardNumber', 'tagName' => 'BankCardNumber', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'RegisterIp' => [ 'name' => 'registerIp', 'tagName' => 'RegisterIp', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'RegisterDate' => [ 'name' => 'registerDate', 'tagName' => 'RegisterDate', 'type' => 'Long', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'AccountExist' => [ 'name' => 'accountExist', 'tagName' => 'AccountExist', 'type' => 'Integer', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'ExtendData' => [ 'name' => 'extendData', 'tagName' => 'ExtendData', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'JsToken' => [ 'name' => 'JsToken', 'tagName' => 'JsToken', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'SDKToken' => [ 'name' => 'SDKToken', 'tagName' => 'SDKToken', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'PasswordHash' => [ 'name' => 'passwordHash', 'tagName' => 'PasswordHash', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'LoginType' => [ 'name' => 'loginType', 'tagName' => 'LoginType', 'type' => 'Integer', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'PasswordCorrect' => [ 'name' => 'passwordCorrect', 'tagName' => 'PasswordCorrect', 'type' => 'Integer', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], ], ], 'IspProtocol' => [ 'version' => '1.0.0', 'protocol' => 'hsf', 'interface' => 'com.alibaba.jaq.api.hsf.riskcontrol.AccountRisk4pop', 'method' => 'loginPrevention', 'group' => 'JAQ', 'invokeType' => 'com.alibaba.jaq.api.hsf.riskcontrol.bo.LoginPreventionAccessParam4pop', 'timeout' => '10000', ], 'IsvProtocol' => [ 'protocol' => 'HTTP|HTTPS', 'method' => 'POST|GET', ], 'FlowControl' => null, 'name' => 'LoginPrevention', ], 'CheckAccountAndPasswordRisk' => [ 'attributes' => [ 'visibility' => 'Public', 'version' => '2017-04-13', 'showJsonItemName' => 'true', 'name' => 'CheckAccountAndPasswordRisk', 'parameterType' => 'Single', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'jaq', ], 'parameters' => [ 'Parameter' => [ 'CallerName' => [ 'name' => 'callerName', 'tagName' => 'CallerName', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', 'defaultValue' => 'POP', ], 'AccountName' => [ 'name' => 'accountName', 'tagName' => 'AccountName', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'PasswordHash' => [ 'name' => 'passwordHash', 'tagName' => 'PasswordHash', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], ], ], 'IspProtocol' => [ 'version' => '1.0.0', 'protocol' => 'hsf', 'interface' => 'com.alibaba.jaq.api.hsf.riskcontrol.AccountRisk4pop', 'method' => 'checkAccountAndPasswordRisk', 'group' => 'JAQ', 'invokeType' => 'com.alibaba.jaq.api.hsf.riskcontrol.bo.CheckAccountAndPasswordPreventionAccessParam4pop', 'timeout' => '10000', ], 'IsvProtocol' => [ 'protocol' => 'HTTP|HTTPS', 'method' => 'POST|GET', ], 'FlowControl' => null, 'name' => 'CheckAccountAndPasswordRisk', ], 'BbsPrevention' => [ 'attributes' => [ 'visibility' => 'Public', 'version' => '2017-04-13', 'showJsonItemName' => 'true', 'name' => 'BbsPrevention', 'parameterType' => 'Single', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'jaq', ], 'parameters' => [ 'Parameter' => [ 'CallerName' => [ 'name' => 'callerName', 'tagName' => 'CallerName', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', 'defaultValue' => 'POP', ], 'Ip' => [ 'name' => 'ip', 'tagName' => 'Ip', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'ProtocolVersion' => [ 'name' => 'protocolVersion', 'tagName' => 'ProtocolVersion', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Source' => [ 'name' => 'source', 'tagName' => 'Source', 'type' => 'Integer', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'PhoneNumber' => [ 'name' => 'phoneNumber', 'tagName' => 'PhoneNumber', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Email' => [ 'name' => 'email', 'tagName' => 'Email', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'UserId' => [ 'name' => 'userId', 'tagName' => 'UserId', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'IdType' => [ 'name' => 'idType', 'tagName' => 'IdType', 'type' => 'Integer', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'CurrentUrl' => [ 'name' => 'currentUrl', 'tagName' => 'CurrentUrl', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Agent' => [ 'name' => 'agent', 'tagName' => 'Agent', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Cookie' => [ 'name' => 'cookie', 'tagName' => 'Cookie', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'SessionId' => [ 'name' => 'sessionId', 'tagName' => 'SessionId', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'MacAddress' => [ 'name' => 'macAddress', 'tagName' => 'MacAddress', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Referer' => [ 'name' => 'referer', 'tagName' => 'Referer', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'NickName' => [ 'name' => 'nickName', 'tagName' => 'NickName', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'CompanyName' => [ 'name' => 'companyName', 'tagName' => 'CompanyName', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Address' => [ 'name' => 'address', 'tagName' => 'Address', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'JsToken' => [ 'name' => 'JsToken', 'tagName' => 'JsToken', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'SDKToken' => [ 'name' => 'SDKToken', 'tagName' => 'SDKToken', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'ExtendData' => [ 'name' => 'extendData', 'tagName' => 'ExtendData', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], ], ], 'IspProtocol' => [ 'version' => '1.0.0', 'protocol' => 'hsf', 'interface' => 'com.alibaba.jaq.api.hsf.riskcontrol.AccountRisk4pop', 'method' => 'bbsPrevention', 'group' => 'JAQ', 'invokeType' => 'com.alibaba.jaq.api.hsf.riskcontrol.bo.BbsPreventionAccessParam4pop', 'timeout' => '10000', ], 'IsvProtocol' => [ 'protocol' => 'HTTP|HTTPS', 'method' => 'POST|GET', ], 'FlowControl' => null, 'name' => 'BbsPrevention', ], 'AfsCheck' => [ 'attributes' => [ 'visibility' => 'Public', 'version' => '2017-04-13', 'showJsonItemName' => 'true', 'name' => 'AfsCheck', 'parameterType' => 'Single', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'jaq', ], 'parameters' => [ 'Parameter' => [ 'CallerName' => [ 'name' => 'callerName', 'tagName' => 'CallerName', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', 'defaultValue' => 'POP', ], 'Session' => [ 'name' => 'session', 'tagName' => 'Session', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Token' => [ 'name' => 'token', 'tagName' => 'Token', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Sig' => [ 'name' => 'sig', 'tagName' => 'Sig', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Platform' => [ 'name' => 'platform', 'tagName' => 'Platform', 'type' => 'Integer', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Scene' => [ 'name' => 'scene', 'tagName' => 'Scene', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], ], ], 'IspProtocol' => [ 'version' => '1.0.0', 'protocol' => 'hsf', 'interface' => 'com.alibaba.jaq.api.hsf.riskcontrol.AccountRisk4pop', 'method' => 'afsCheck', 'group' => 'JAQ', 'invokeType' => 'com.alibaba.jaq.api.hsf.riskcontrol.bo.AfsCheckAccessParam4pop', 'timeout' => '10000', ], 'IsvProtocol' => [ 'protocol' => 'HTTP|HTTPS', 'method' => 'POST|GET', ], 'FlowControl' => null, 'name' => 'AfsCheck', ], 'SpamRegisterPrevention' => [ 'attributes' => [ 'visibility' => 'Public', 'version' => '2017-04-13', 'showJsonItemName' => 'true', 'name' => 'SpamRegisterPrevention', 'parameterType' => 'Single', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'jaq', ], 'parameters' => [ 'Parameter' => [ 'CallerName' => [ 'name' => 'callerName', 'tagName' => 'CallerName', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', 'defaultValue' => 'POP', ], 'Ip' => [ 'name' => 'ip', 'tagName' => 'Ip', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'ProtocolVersion' => [ 'name' => 'protocolVersion', 'tagName' => 'ProtocolVersion', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Source' => [ 'name' => 'source', 'tagName' => 'Source', 'type' => 'Integer', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'PhoneNumber' => [ 'name' => 'phoneNumber', 'tagName' => 'PhoneNumber', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Email' => [ 'name' => 'email', 'tagName' => 'Email', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'UserId' => [ 'name' => 'userId', 'tagName' => 'UserId', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'IdType' => [ 'name' => 'idType', 'tagName' => 'IdType', 'type' => 'Integer', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'CurrentUrl' => [ 'name' => 'currentUrl', 'tagName' => 'CurrentUrl', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Agent' => [ 'name' => 'agent', 'tagName' => 'Agent', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Cookie' => [ 'name' => 'cookie', 'tagName' => 'Cookie', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'SessionId' => [ 'name' => 'sessionId', 'tagName' => 'SessionId', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'MacAddress' => [ 'name' => 'macAddress', 'tagName' => 'MacAddress', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Referer' => [ 'name' => 'referer', 'tagName' => 'Referer', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'NickName' => [ 'name' => 'nickName', 'tagName' => 'NickName', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'CompanyName' => [ 'name' => 'companyName', 'tagName' => 'CompanyName', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Address' => [ 'name' => 'address', 'tagName' => 'Address', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'IDNumber' => [ 'name' => 'IDNumber', 'tagName' => 'IDNumber', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'BankCardNumber' => [ 'name' => 'bankCardNumber', 'tagName' => 'BankCardNumber', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'JsToken' => [ 'name' => 'JsToken', 'tagName' => 'JsToken', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'SDKToken' => [ 'name' => 'SDKToken', 'tagName' => 'SDKToken', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'ExtendData' => [ 'name' => 'extendData', 'tagName' => 'ExtendData', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], ], ], 'IspProtocol' => [ 'version' => '1.0.0', 'protocol' => 'hsf', 'interface' => 'com.alibaba.jaq.api.hsf.riskcontrol.AccountRisk4pop', 'method' => 'spamRegisterPrevention', 'group' => 'JAQ', 'invokeType' => 'com.alibaba.jaq.api.hsf.riskcontrol.bo.SpamRegisterPreventionAccessParam4pop', 'timeout' => '10000', ], 'IsvProtocol' => [ 'protocol' => 'HTTP|HTTPS', 'method' => 'POST|GET', ], 'FlowControl' => null, 'name' => 'SpamRegisterPrevention', ], 'OtherPrevention' => [ 'attributes' => [ 'visibility' => 'Public', 'version' => '2017-04-13', 'showJsonItemName' => 'true', 'name' => 'OtherPrevention', 'parameterType' => 'Single', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'jaq', ], 'parameters' => [ 'Parameter' => [ 'CallerName' => [ 'name' => 'callerName', 'tagName' => 'CallerName', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', 'defaultValue' => 'POP', ], 'Ip' => [ 'name' => 'ip', 'tagName' => 'Ip', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'ProtocolVersion' => [ 'name' => 'protocolVersion', 'tagName' => 'ProtocolVersion', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Source' => [ 'name' => 'source', 'tagName' => 'Source', 'type' => 'Integer', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'PhoneNumber' => [ 'name' => 'phoneNumber', 'tagName' => 'PhoneNumber', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Email' => [ 'name' => 'email', 'tagName' => 'Email', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'UserId' => [ 'name' => 'userId', 'tagName' => 'UserId', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'IdType' => [ 'name' => 'idType', 'tagName' => 'IdType', 'type' => 'Integer', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'CurrentUrl' => [ 'name' => 'currentUrl', 'tagName' => 'CurrentUrl', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Agent' => [ 'name' => 'agent', 'tagName' => 'Agent', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Cookie' => [ 'name' => 'cookie', 'tagName' => 'Cookie', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'SessionId' => [ 'name' => 'sessionId', 'tagName' => 'SessionId', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'MacAddress' => [ 'name' => 'macAddress', 'tagName' => 'MacAddress', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Referer' => [ 'name' => 'referer', 'tagName' => 'Referer', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'UserName' => [ 'name' => 'userName', 'tagName' => 'UserName', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'CompanyName' => [ 'name' => 'companyName', 'tagName' => 'CompanyName', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Address' => [ 'name' => 'address', 'tagName' => 'Address', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'IDNumber' => [ 'name' => 'IDNumber', 'tagName' => 'IDNumber', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'BankCardNumber' => [ 'name' => 'bankCardNumber', 'tagName' => 'BankCardNumber', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'RegisterIp' => [ 'name' => 'registerIp', 'tagName' => 'RegisterIp', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'RegisterDate' => [ 'name' => 'registerDate', 'tagName' => 'RegisterDate', 'type' => 'Long', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'LoginIp' => [ 'name' => 'loginIp', 'tagName' => 'LoginIp', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'LoginDate' => [ 'name' => 'loginDate', 'tagName' => 'LoginDate', 'type' => 'Long', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'ExtendData' => [ 'name' => 'extendData', 'tagName' => 'ExtendData', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'PasswordHash' => [ 'name' => 'passwordHash', 'tagName' => 'PasswordHash', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'JsToken' => [ 'name' => 'JsToken', 'tagName' => 'JsToken', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'SDKToken' => [ 'name' => 'SDKToken', 'tagName' => 'SDKToken', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], ], ], 'IspProtocol' => [ 'version' => '1.0.0', 'protocol' => 'hsf', 'interface' => 'com.alibaba.jaq.api.hsf.riskcontrol.AccountRisk4pop', 'method' => 'otherPrevention', 'group' => 'JAQ', 'invokeType' => 'com.alibaba.jaq.api.hsf.riskcontrol.bo.OtherPreventionAccessParam4pop', 'timeout' => '10000', ], 'IsvProtocol' => [ 'protocol' => 'HTTP|HTTPS', 'method' => 'POST|GET', ], 'FlowControl' => null, 'name' => 'OtherPrevention', ], ],];
