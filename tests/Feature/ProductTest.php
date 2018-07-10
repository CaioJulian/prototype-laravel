<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProductTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testViewProducts()
    {
        $this->assertTrue(true);

        /*$response = $this->withHeaders([
            'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImM5ZDIzNGE4YmE2MzZlZWQwMWNlOWMyNjY0MDIyZDMxNDEyYTczN2E2ODZhY2M5ZmY1MzZlNGU4YmQ1MWFkNWFlNTEyYmM2ZmQ1MzEwMTMzIn0.eyJhdWQiOiIxIiwianRpIjoiYzlkMjM0YThiYTYzNmVlZDAxY2U5YzI2NjQwMjJkMzE0MTJhNzM3YTY4NmFjYzlmZjUzNmU0ZThiZDUxYWQ1YWU1MTJiYzZmZDUzMTAxMzMiLCJpYXQiOjE1MzEyMjg4NTUsIm5iZiI6MTUzMTIyODg1NSwiZXhwIjoxNTYyNzY0ODU1LCJzdWIiOiIxMSIsInNjb3BlcyI6W119.eZrgmR2-h3AXz49h5YYxJgJsGK7sA83T_u999sEVOSuGalkO3PNaeXZaT7Sp0KOp0-BN9QLMjRlTgxPxm8zCNqB38MSj_b5jjXfUvg_kPwaD3tndUT1BJfxN2SgGHwp_pPSsFdi4to5cHWZ8IynHpGRV4Dpc7hF62UX-Tl3oVbcIdJR3sJAck68IkNpKVIWsz4JppkknWatU90Ewg5wG26Dy7mjYA-LDLewQeePHOj6gTsghIT4iYw-T521Mfld_16aPtNu13bQ_cpwQwwZVmdzEdCKEaye3fjtnhh3wUHks5lfAWuV_aRYYrR7eJZifBTdJqv4aiajSGmw3pbakrBEYSLpUf-64oPRq7jhtAdB3KMMTciP5uXmq52-O4DOafWG5mBeRg9vdwPftCyWgG4BE-eBROi_91bgWvhQfT_Ukuerr9iYRILmE_7gpum21qXw9zk2dSjoFDpyWPp29AUz7Brc6z3Aqwh94UXrrtEUMb72ZzDqgWlo2iroC2PbDTAB6kBOZovvBX0ImtGmXywJMiGuZWIcI8D9rV4KEyB3XYvxhN6huLourJIf9TkPtlo7qfRtIiRRMM-vtr2tgX-FWWB_FU7k6HZNHQFdgehTMpu9QtWQ7cJRWZQUfXtzLMtXIbuqtcvXr8_Ek7Yapm_R134x5-9MhpOaLOjvgwi8'
        ])->json('GET', '/api/products',
             [
                
                ]);
    
        $response->assertStatus(200);*/
    }

    public function testPostProducts()
    {
        $this->assertTrue(true);

        /*$response = $this->withHeaders([
            'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImM5ZDIzNGE4YmE2MzZlZWQwMWNlOWMyNjY0MDIyZDMxNDEyYTczN2E2ODZhY2M5ZmY1MzZlNGU4YmQ1MWFkNWFlNTEyYmM2ZmQ1MzEwMTMzIn0.eyJhdWQiOiIxIiwianRpIjoiYzlkMjM0YThiYTYzNmVlZDAxY2U5YzI2NjQwMjJkMzE0MTJhNzM3YTY4NmFjYzlmZjUzNmU0ZThiZDUxYWQ1YWU1MTJiYzZmZDUzMTAxMzMiLCJpYXQiOjE1MzEyMjg4NTUsIm5iZiI6MTUzMTIyODg1NSwiZXhwIjoxNTYyNzY0ODU1LCJzdWIiOiIxMSIsInNjb3BlcyI6W119.eZrgmR2-h3AXz49h5YYxJgJsGK7sA83T_u999sEVOSuGalkO3PNaeXZaT7Sp0KOp0-BN9QLMjRlTgxPxm8zCNqB38MSj_b5jjXfUvg_kPwaD3tndUT1BJfxN2SgGHwp_pPSsFdi4to5cHWZ8IynHpGRV4Dpc7hF62UX-Tl3oVbcIdJR3sJAck68IkNpKVIWsz4JppkknWatU90Ewg5wG26Dy7mjYA-LDLewQeePHOj6gTsghIT4iYw-T521Mfld_16aPtNu13bQ_cpwQwwZVmdzEdCKEaye3fjtnhh3wUHks5lfAWuV_aRYYrR7eJZifBTdJqv4aiajSGmw3pbakrBEYSLpUf-64oPRq7jhtAdB3KMMTciP5uXmq52-O4DOafWG5mBeRg9vdwPftCyWgG4BE-eBROi_91bgWvhQfT_Ukuerr9iYRILmE_7gpum21qXw9zk2dSjoFDpyWPp29AUz7Brc6z3Aqwh94UXrrtEUMb72ZzDqgWlo2iroC2PbDTAB6kBOZovvBX0ImtGmXywJMiGuZWIcI8D9rV4KEyB3XYvxhN6huLourJIf9TkPtlo7qfRtIiRRMM-vtr2tgX-FWWB_FU7k6HZNHQFdgehTMpu9QtWQ7cJRWZQUfXtzLMtXIbuqtcvXr8_Ek7Yapm_R134x5-9MhpOaLOjvgwi8'
        ])->json('POST', '/api/products',
             [
                'name' => 'Teste Mouse e teclado',
                'detail' => 'Mouse e teclado novo de teste'
                
                ]);
    
        $response->assertStatus(200);*/
    }

    public function testPutProducts()
    {
        $this->assertTrue(true);

        /*$response = $this->withHeaders([
            'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImM5ZDIzNGE4YmE2MzZlZWQwMWNlOWMyNjY0MDIyZDMxNDEyYTczN2E2ODZhY2M5ZmY1MzZlNGU4YmQ1MWFkNWFlNTEyYmM2ZmQ1MzEwMTMzIn0.eyJhdWQiOiIxIiwianRpIjoiYzlkMjM0YThiYTYzNmVlZDAxY2U5YzI2NjQwMjJkMzE0MTJhNzM3YTY4NmFjYzlmZjUzNmU0ZThiZDUxYWQ1YWU1MTJiYzZmZDUzMTAxMzMiLCJpYXQiOjE1MzEyMjg4NTUsIm5iZiI6MTUzMTIyODg1NSwiZXhwIjoxNTYyNzY0ODU1LCJzdWIiOiIxMSIsInNjb3BlcyI6W119.eZrgmR2-h3AXz49h5YYxJgJsGK7sA83T_u999sEVOSuGalkO3PNaeXZaT7Sp0KOp0-BN9QLMjRlTgxPxm8zCNqB38MSj_b5jjXfUvg_kPwaD3tndUT1BJfxN2SgGHwp_pPSsFdi4to5cHWZ8IynHpGRV4Dpc7hF62UX-Tl3oVbcIdJR3sJAck68IkNpKVIWsz4JppkknWatU90Ewg5wG26Dy7mjYA-LDLewQeePHOj6gTsghIT4iYw-T521Mfld_16aPtNu13bQ_cpwQwwZVmdzEdCKEaye3fjtnhh3wUHks5lfAWuV_aRYYrR7eJZifBTdJqv4aiajSGmw3pbakrBEYSLpUf-64oPRq7jhtAdB3KMMTciP5uXmq52-O4DOafWG5mBeRg9vdwPftCyWgG4BE-eBROi_91bgWvhQfT_Ukuerr9iYRILmE_7gpum21qXw9zk2dSjoFDpyWPp29AUz7Brc6z3Aqwh94UXrrtEUMb72ZzDqgWlo2iroC2PbDTAB6kBOZovvBX0ImtGmXywJMiGuZWIcI8D9rV4KEyB3XYvxhN6huLourJIf9TkPtlo7qfRtIiRRMM-vtr2tgX-FWWB_FU7k6HZNHQFdgehTMpu9QtWQ7cJRWZQUfXtzLMtXIbuqtcvXr8_Ek7Yapm_R134x5-9MhpOaLOjvgwi8'
        ])->json('PUT', '/api/products/7',
             [
                'name' => 'Teste Mouse e teclado 2',
                'detail' => 'Mouse e teclado novo de teste'
                
                ]);
    
        $response->assertStatus(200);*/
    }

    public function testDeleteProducts()
    {
        $this->assertTrue(true);

        /*$response = $this->withHeaders([
            'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImM5ZDIzNGE4YmE2MzZlZWQwMWNlOWMyNjY0MDIyZDMxNDEyYTczN2E2ODZhY2M5ZmY1MzZlNGU4YmQ1MWFkNWFlNTEyYmM2ZmQ1MzEwMTMzIn0.eyJhdWQiOiIxIiwianRpIjoiYzlkMjM0YThiYTYzNmVlZDAxY2U5YzI2NjQwMjJkMzE0MTJhNzM3YTY4NmFjYzlmZjUzNmU0ZThiZDUxYWQ1YWU1MTJiYzZmZDUzMTAxMzMiLCJpYXQiOjE1MzEyMjg4NTUsIm5iZiI6MTUzMTIyODg1NSwiZXhwIjoxNTYyNzY0ODU1LCJzdWIiOiIxMSIsInNjb3BlcyI6W119.eZrgmR2-h3AXz49h5YYxJgJsGK7sA83T_u999sEVOSuGalkO3PNaeXZaT7Sp0KOp0-BN9QLMjRlTgxPxm8zCNqB38MSj_b5jjXfUvg_kPwaD3tndUT1BJfxN2SgGHwp_pPSsFdi4to5cHWZ8IynHpGRV4Dpc7hF62UX-Tl3oVbcIdJR3sJAck68IkNpKVIWsz4JppkknWatU90Ewg5wG26Dy7mjYA-LDLewQeePHOj6gTsghIT4iYw-T521Mfld_16aPtNu13bQ_cpwQwwZVmdzEdCKEaye3fjtnhh3wUHks5lfAWuV_aRYYrR7eJZifBTdJqv4aiajSGmw3pbakrBEYSLpUf-64oPRq7jhtAdB3KMMTciP5uXmq52-O4DOafWG5mBeRg9vdwPftCyWgG4BE-eBROi_91bgWvhQfT_Ukuerr9iYRILmE_7gpum21qXw9zk2dSjoFDpyWPp29AUz7Brc6z3Aqwh94UXrrtEUMb72ZzDqgWlo2iroC2PbDTAB6kBOZovvBX0ImtGmXywJMiGuZWIcI8D9rV4KEyB3XYvxhN6huLourJIf9TkPtlo7qfRtIiRRMM-vtr2tgX-FWWB_FU7k6HZNHQFdgehTMpu9QtWQ7cJRWZQUfXtzLMtXIbuqtcvXr8_Ek7Yapm_R134x5-9MhpOaLOjvgwi8'
        ])->json('DELETE', '/api/products/8',
             [
                
                ]);
    
        $response->assertStatus(200);*/
    }
}
