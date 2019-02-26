<?php
return [ 'product' => [ 'name' => 'Ram', 'domain' => 'ram.aliyuncs.com,ram-inner.aliyuncs.com,ram-in-west-antgroup-1.aliyuncs.com,ram-share.aliyuncs.com,ram-openapi-daily.alibaba.net,ram-global.aliyuncs.com', 'type' => 'Outer', ], 'version' => [ 'product' => 'Ram', 'name' => '2018-03-02', ], 'api' => [ 'PhysicalDeleteResource' => [ 'attributes' => [ 'visibility' => 'Private', 'version' => '2018-03-02', 'showJsonItemName' => 'true', 'name' => 'PhysicalDeleteResource', 'parameterType' => 'Single', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'Ram', 'controlPolicy' => 'ControlPolicyForAccountDelete', ], 'parameters' => [ 'Parameter' => [ 'Pk' => [ 'name' => 'Pk', 'tagName' => 'Pk', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Bid' => [ 'name' => 'Bid', 'tagName' => 'Bid', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Hid' => [ 'name' => 'Hid', 'tagName' => 'Hid', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Country' => [ 'name' => 'Country', 'tagName' => 'Country', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'TaskIdentifier' => [ 'name' => 'TaskIdentifier', 'tagName' => 'TaskIdentifier', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'TaskExtraData' => [ 'name' => 'TaskExtraData', 'tagName' => 'TaskExtraData', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'GmtWakeup' => [ 'name' => 'GmtWakeup', 'tagName' => 'GmtWakeup', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], ], ], 'IspProtocol' => [ 'protocol' => 'http', 'sign' => 'true', 'signKeyName' => 'ABS_PRODUCT', 'signPolicy' => 'Local', 'resultType' => 'Object', 'httpHost' => 'http://ram-master-public.aliyun-inc.com/api_pop/PhysicalDeleteResource', 'timeout' => '5000', 'httpsValidation' => 'true', ], 'IsvProtocol' => [ 'protocol' => 'HTTP|HTTPS', 'method' => 'POST|GET', ], 'FlowControl' => null, 'name' => 'PhysicalDeleteResource', ], 'CheckResource' => [ 'attributes' => [ 'visibility' => 'Private', 'version' => '2018-03-02', 'showJsonItemName' => 'true', 'name' => 'CheckResource', 'parameterType' => 'Single', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'Ram', 'controlPolicy' => 'ControlPolicyForAccountDelete', ], 'parameters' => [ 'Parameter' => [ 'Pk' => [ 'name' => 'Pk', 'tagName' => 'Pk', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Bid' => [ 'name' => 'Bid', 'tagName' => 'Bid', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Hid' => [ 'name' => 'Hid', 'tagName' => 'Hid', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Country' => [ 'name' => 'Country', 'tagName' => 'Country', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'TaskIdentifier' => [ 'name' => 'TaskIdentifier', 'tagName' => 'TaskIdentifier', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'TaskExtraData' => [ 'name' => 'TaskExtraData', 'tagName' => 'TaskExtraData', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'GmtWakeup' => [ 'name' => 'GmtWakeup', 'tagName' => 'GmtWakeup', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], ], ], 'IspProtocol' => [ 'protocol' => 'http', 'sign' => 'true', 'signKeyName' => 'ABS_PRODUCT', 'signPolicy' => 'Local', 'resultType' => 'Object', 'httpHost' => 'http://ram-master-public.aliyun-inc.com/api_pop/CheckResource', 'timeout' => '5000', 'httpsValidation' => 'true', ], 'IsvProtocol' => [ 'protocol' => 'HTTP|HTTPS', 'method' => 'POST|GET', ], 'FlowControl' => null, 'name' => 'CheckResource', ], ],];
