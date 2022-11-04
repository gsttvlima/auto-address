<?php 

namespace TDD;

require __DIR__.'\..\vendor\autoload.php';

use PHPUnit\Framework\TestCase;

use APP\ViaCep;
use stdClass;

class ViaCepTest extends TestCase{

    public function testSearch(){

        $cep = '37026083';

        $expected = new stdClass;
        $expected->cep = '37026-083'; 
        $expected->logradouro = 'Avenida Princesa do Sul'; 
        $expected->complemento = 'de 19 a 251 - lado ímpar'; 
        $expected->bairro = 'Jardim Andere'; 
        $expected->localidade = 'Varginha'; 
        $expected->uf = 'MG'; 
        $expected->ibge = '3170701'; 
        $expected->gia = ''; 
        $expected->ddd = '35'; 
        $expected->siafi = '5413'; 
        
        $viacep = new ViaCep;
        $result = $viacep->Search($cep);

        $this->assertEquals($expected, $result, 'Invalid response');

    }

}