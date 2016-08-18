<?php
#Задание1
    $xmlPath = 'data';
    //Создаем объект класса SimpleXMLElement
    $PurchaseOrder = simplexml_load_file($xmlPath);

    $attributes = $PurchaseOrder->attributes();

    echo 'ORDER №: '.$attributes['PurchaseOrderNumber']."<br/>".'DATE: '.$attributes['OrderDate']."<br/>";
    echo "<hr/><br/>";

    $Shipping = $PurchaseOrder->Address[0];
    $Billing = $PurchaseOrder->Address[1];

    echo "Deliver to $Shipping->Name, $Shipping->Street, $Shipping->City, $Shipping->State,
    $Shipping->Zip, $Shipping->Country"."<br/>";

    echo "Billing by $Billing->Name, $Billing->Street, $Billing->City, $Billing->State,
    $Billing->Zip, $Billing->Country"."<br/>";

    $Lawnmower = $PurchaseOrder->Items[0]->Item[0];
    $LawnAttrs = $Lawnmower->attributes();
    $PartNum1 = $LawnAttrs['PartNumber'];

    $BabyMonitor = $PurchaseOrder->Items[0]->Item[1];
    $BMAttrs = $BabyMonitor->attributes();
    $PartNum2 = $BMAttrs['PartNumber'];

    echo 'Items: ';
    echo "<p>"."1.ProductName: $Lawnmower->ProductName."."<br/>"." Quantity: $Lawnmower->Quantity.".
    "<br/>"." Price: $Lawnmower->USPrice."."<br/>"."Comment: $Lawnmower->Comment"."<br/>".$PartNum1."</p>";

    echo "<p>"."2.ProductName: $BabyMonitor->ProductName."."<br/>"." Quantity: $BabyMonitor->Quantity.".
    "<br/>"." Price: $BabyMonitor->USPrice."."<br/>"."ShipDate: $BabyMonitor->ShipDate"."<br/>".$PartNum2."</p>";

    echo "<hr/><br/>";
    echo "DELIVERY NOTICE: $PurchaseOrder->DeliveryNotes";
