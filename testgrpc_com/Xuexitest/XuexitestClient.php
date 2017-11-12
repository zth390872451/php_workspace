<?php
namespace Xuexitest;

/**
 * service Xuexitest{}
 * ��д (gprc ���� Xuexitest ����)�Ŀͻ���
 */
class XuexitestClient extends \Grpc\BaseStub{

    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * rpc SayTest(TestRequest) returns (TestReply) {}
     * ������������ (gprc ���� Xuexitest ����)�ķ���һ��
     * �����������Ӧ�÷���
     */
    public function SayTest(\Xuexitest\TestRequest $argument,$metadata=[],$options=[]){
        // (/xuexitest.Xuexitest/SayTest) �����������Ǹ�����ͷ����������� proto �ļ�����һ��
        // (\Xuexitest\TestReply) ����Ӧ��Ϣ���Ǹ��ࣩ�������� proto �ļ�����һ��
        return $this->_simpleRequest('/xuexitest.Xuexitest/SayTest',
            $argument,
            ['\Xuexitest\TestReply', 'decode'],
            $metadata, $options);
    }

}