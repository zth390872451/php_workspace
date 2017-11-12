<?php
//���� composer ���Զ��ؼ�
require __DIR__ . '/vendor/autoload.php';

//�������� �����
$client = new \Xuexitest\XuexitestClient('192.168.0.60:50052', [
    'credentials' => Grpc\ChannelCredentials::createInsecure()
]);

//ʵ���� TestRequest ������
$request = new \Xuexitest\TestRequest();
$request->setTypeid(1);

//����Զ�̷���
$get = $client->SayTest($request)->wait();

//��������
//$reply �� TestReply ����
//$status ������
list($reply, $status) = $get;

//����
$getdata = $reply->getGetdataarr();

foreach ($getdata as $k=>$v){
    echo $v->getId(),'=>',$v->getName(),"\n\r";
}