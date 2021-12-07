<?php

use PHPUnit\Framework\TestCase;

class InvoiceServiceTest extends TestCase
{
    /** @test */
    function if_process_invoice(): void
    {
        $salesTaxServiceMock = $this->createMock(SalesTaxService::class);
        $gatewayServiceMock = $this->createMock(PaymentGatewayService::class);
        $emailServiceMock = $this->createMock(EmailService::class);

        $gatewayServiceMock->method('charge')->willReturn(true);

        $invoiceService = new InvoiceService(
            $salesTaxServiceMock, 
            $gatewayServiceMock, 
            $emailServiceMock
        );

        $customer = ['name' => 'Gio'];
        $amount = 150;
        $result = $invoiceService->process($customer, $amount);
        $this->assertTrue($result);
    }
}
