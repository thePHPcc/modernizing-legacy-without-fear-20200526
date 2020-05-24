<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class OrderIntegrationTest extends TestCase
{
    /**
     * @medium
     * @group edge-to-edge
     */
    public function test_can_be_retrieved_as_JSON_document_by_HTTP_request(): void
    {
        $_GET['jahr'] = 2020;

        $response = (new Factory())->getOrderListAction()->execute();

        $json   = $response->body();
        $orders = json_decode($json, true);

        $this->assertSame(
            [
                [
                    'Auftragsnummer' => '1',
                    'Datum' => '26.05.2020',
                    'Auftraggeber' => 'ACME GmbH, Foostrasse 123, 12345 Barhausen',
                ],
            ],
            $orders
        );

        $this->assertContains(
            'Content-Type: application/json; charset=utf-8',
            $response->headers()
        );
    }
}
