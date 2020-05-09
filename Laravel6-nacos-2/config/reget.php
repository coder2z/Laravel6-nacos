<?php
return [
    'driver' => 'nacos',
    'nacos' => [
        'register_host' => env('NACOS_REGISTER_HOST', 'http://127.0.0.1:8848'),
        'ip' => env('NACOS_SERVICE_HOST', '127.0.0.1'),   // 服务实例IP
        'port' => env('NACOS_SERVICE_PORT', '8081'), // 服务实例port
        'namespaceId' => env('NACOS_SERVICE_NAMESPACE_ID', 'f085b4ec-7d89-4363-be37-5e29580f7c9b'), // 命名空间ID
        'weight' => env('NACOS_SERVICE_WEIGHT', '1.0'),  // 权重
        'enabled' => env('NACOS_SERVICE_ENABLE', 'true'),  // 是否上线
        'healthy' => env('NACOS_SERVICE_HEALTHY', 'true'),  // 是否健康
        'metadata' => env('NACOS_SERVICE_METADATA', '{}'),  // 扩展信息 json
        'clusterName' => env('NACOS_SERVICE_CLUSTER_NAME', 'DEFAULT'),  // 集群名
        'serviceName' => env('NACOS_SERVICE_NAME', 'nacos_2'), // 服务名
        'groupName' => env('NACOS_SERVICE_GROUP_NAME', 'DEFAULT_GROUP'),  // 分组名
        'ephemeral' => env('NACOS_SERVICE_EPHEMERAL', 'true'), // 是否临时实例
        'scheduled' => env('NACOS_SERVICE_SCHEDULED', 'true')
    ]
];
