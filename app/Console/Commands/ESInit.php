<?php

namespace App\Console\Commands;

use GuzzleHttp\Client;
use Illuminate\Console\Command;

class ESInit extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'es:init';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'laravel ea for post';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //创建template
        $client=new Client();

        $url=config('scout.elasticsearch.host')[0].'/_template/tmp';

        $client->delete($url);

        $param=[
            'json'=>[
                'template'=>config('scout.elasticsearch.index'),
                'mappings'=>[
                    '_default_'=>[
                        'dynamic_templates'=>[
                            [
                                'strings'=>[
                                    'math_mapping_type'=>'strings',
                                    'mapping'=>[
                                        'type'=>'text',
                                        'analyzer'=>'ik_smart',
                                        'fields'=>[
                                            'keyword'=>[
                                                'type'=>'keyword'
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]

            ]


        ];


        $client->put($url,$param);
        $this->info('====成功=====');


        //创建index
        $url = config('scout.elasticsearch.hosts')[0] . '/' . config('scout.elasticsearch.index');
        $client->delete($url);
        $param=[
            'json' => [
                'settings' => [
                    'refresh_interval' => '5s',
                    'number_of_shards' => 1,
                    'number_of_replicas' => 0,
                ],
                'mappings' => [
                    '_default_' => [
                        '_all' => [
                            'enabled' => false
                        ]
                    ]
                ]
            ]
        ];
        $client->put($url,$param);
        $this->info('====SY成功=====');
    }
}
