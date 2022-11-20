@php
    use php_rutils\RUtils;

    /**
     * @var $formData array
     */

    $ruMonths = [
        1 => 'Января',
        2 => 'Февраля',
        3 => 'Марта',
        4 => 'Апреля',
        5 => 'Мая',
        6 => 'Июня',
        7 => 'Июля',
        8 => 'Августа',
        9 => 'Сентября',
        10 => 'Октября',
        11 => 'Ноября',
        12 => 'Декабря',
    ];

    $documentDate = date_create_from_format('Y-m-d', $formData['actDate']);
@endphp

<Report ReportInfo.Created="{{ date('d/m/Y h:i:s') }}" ReportInfo.Modified="{{ date('d/m/Y h:i:s') }}"
        ReportInfo.CreatorVersion="1.0.0.0" Name="Report">
    <Dictionary/>
    <ReportPage Watermark.Font="Arial, 60pt" Name="Page1">
        <DataBand Name="Data1" Width="718.20" Height="812.70">
            <TextObject HorzAlign="Center" VertAlign="Center" Top="0" Left="0" Name="Text2"
                        Text="Акт № {{$formData['actNumber']}} от {{$documentDate->format('d')}} {{$ruMonths[$documentDate->format('m')]}} {{$documentDate->format('Y')}}г." Width="718.53" Height="51.71" Padding="2, 0, 2, 0"
                        Font="Tahoma, 13pt, style=Bold"/>
            <TextObject Left="18.90" Top="55.42" VertAlign="Center" HorzAlign="Right" Name="Text3" Text="Исполнитель"
                        Width="87.29" Height="10" Padding="2, 0, 2, 0" Font="Tahoma, 9pt"/>
            <TextObject VertAlign="Center" Top="126.63" Left="18.90" Name="Text4" Text="Заказчик" Width="77.84"
                        Height="15.80" Padding="2, 0, 2, 0" Font="Tahoma, 9pt"/>
            @php
                $executorText = ($formData['executorCompanyFormat'] ?? '') . ' "' . $formData['executorCompanyName'] . '"';
                $executorText .= $formData['executorINN'] ? ', ИНН ' . $formData['executorINN'] : '';
                $executorText .= $formData['executorKPP'] ? ', КПП ' . $formData['executorKPP'] : '';
                $executorText .= $formData['executorCompanyLocation'] ? ', ' . $formData['executorCompanyLocation'] : '';
                $executorText .= $formData['executorCheckingAccount'] ? ', ' . $formData['executorCheckingAccount'] : '';
            @endphp
            <TextObject Left="122.85" Top="52.92" Name="Text6" Text="{{ $executorText }}" Width="580.58" Height="61.16"
                        Padding="2, 0, 2, 0" Font="Tahoma, 7pt, style=Bold"/>
            @php
                $clientText = ($formData['clientCompanyFormat'] ?? '') . ' "' . $formData['clientCompanyName'] . '"';
                $clientText .= $formData['clientINN'] ? ', ИНН ' . $formData['clientINN'] : '';
                $clientText .= $formData['clientKPP'] ? ', КПП ' . $formData['clientKPP'] : '';
                $clientText .= $formData['clientCompanyLocation'] ? ', ' . $formData['clientCompanyLocation'] : '';
            @endphp
            <TextObject Top="122.85" Left="122.85" Name="Text7" Text="{{ $clientText }}" Width="580.58" Height="61.16"
                        Padding="2, 0, 2, 0" Font="Tahoma, 7pt, style=Bold"/>
            <TextObject Left="18.90" Top="198.45" VertAlign="Center" Name="Text8" Text="Основание" Width="77.84"
                        Height="15.80" Padding="2, 0, 2, 0" Font="Tahoma, 9pt"/>
            <TextObject VertAlign="Center" Top="198.45" Left="122.85" Name="Text9" Text="{{ $formData['reason'] }}"
                        Width="578.69" Height="15.80" Padding="2, 0, 2, 0" Font="Tahoma, 7pt, style=Bold"/>
            <TableObject GrowToBottom="true" Top="236.24" Left="18.90" Name="Table1" Width="679.80" Height="35.20">
                <TableColumn MaxWidth="500" MinWidth="0" Width="48.61" Name="Column1"/>
                <TableColumn MaxWidth="500" MinWidth="0" Width="216.06" Name="Column2"/>
                <TableColumn MaxWidth="500" MinWidth="0" Width="85.07" Name="Column3"/>
                <TableColumn MaxWidth="500" MinWidth="0" Width="84.87" Name="Column13"/>
                <TableColumn MaxWidth="500" MinWidth="0" Width="84.87" Name="Column14"/>
                <TableColumn MaxWidth="500" MinWidth="0" Width="84.87" Name="Column15"/>
                <TableColumn MaxWidth="500" MinWidth="0" Width="75.45" Name="Column22"/>
                <TableRow MaxHeight="500" MinHeight="0" Height="19.45" Name="Row1">
                    <TableCell HorzAlign="Center" ColSpan="1" RowSpan="1" Name="Cell1" Text="№" Padding="2, 0, 2, 0"
                               Font="Tahoma, 10pt, style=Bold"/>
                    <TableCell HorzAlign="Center" ColSpan="1" RowSpan="1" Name="Cell2" Text="Наименование услуги"
                               Padding="2, 0, 2, 0" Font="Tahoma, 10pt, style=Bold"/>
                    <TableCell HorzAlign="Center" ColSpan="1" RowSpan="1" Name="Cell3" Text="Кол-вo"
                               Padding="2, 0, 2, 0" Font="Tahoma, 10pt, style=Bold"/>
                    <TableCell HorzAlign="Center" ColSpan="1" RowSpan="1" Name="Cell37" Text="Ед." Padding="2, 0, 2, 0"
                               Font="Tahoma, 10pt, style=Bold"/>
                    <TableCell HorzAlign="Center" ColSpan="1" RowSpan="1" Name="Cell40" Text="Цена" Padding="2, 0, 2, 0"
                               Font="Tahoma, 10pt, style=Bold"/>
                    <TableCell HorzAlign="Center" ColSpan="1" RowSpan="1" Name="Cell43" Text="НДС, %"
                               Padding="2, 0, 2, 0" Font="Tahoma, 10pt, style=Bold"/>
                    <TableCell ColSpan="1" RowSpan="1" Name="Cell39" Text="Сумма" Padding="2, 0, 2, 0"
                               Font="Tahoma, 10pt, style=Bold"/>
                </TableRow>
                @php
                    $rowNumber = 2;
                    $totalSum = 0;
                @endphp
                @foreach($formData['servicesTable'] as $row)
                    @php
                        $sum = $row['serviceAmount'] * $row['servicePrice'] - $row['serviceAmount'] * $row['servicePrice'] * $row['NDS'] / 100;
                        $totalSum += $sum;
                    @endphp
                    <TableRow MaxHeight="500" MinHeight="0" Height="15.75" Name="Row2">
                        <TableCell ColSpan="1" RowSpan="1" Name="Cell4" Padding="2, 0, 2, 0" Font="Tahoma, 10pt" Text="{{ $rowNumber - 1 }}"/>
                        <TableCell ColSpan="1" RowSpan="1" Name="Cell5" Padding="2, 0, 2, 0" Font="Tahoma, 10pt" Text="{{ $row['serviceName'] }}"/>
                        <TableCell HorzAlign="Right" ColSpan="1" RowSpan="1" Name="Cell6" Padding="2, 0, 2, 0"
                                   Font="Tahoma, 10pt" Text="{{ $row['serviceAmount'] }}"/>
                        <TableCell HorzAlign="Right" ColSpan="1" RowSpan="1" Name="Cell38" Padding="2, 0, 2, 0"
                                   Font="Tahoma, 10pt" Text="{{ $row['serviceMeasurement'] }}"/>
                        <TableCell HorzAlign="Right" ColSpan="1" RowSpan="1" Name="Cell41" Padding="2, 0, 2, 0"
                                   Font="Tahoma, 10pt" Text="{{ $row['servicePrice'] }}"/>
                        <TableCell HorzAlign="Right" ColSpan="1" RowSpan="1" Name="Cell44" Padding="2, 0, 2, 0"
                                   Font="Tahoma, 10pt" Text="{{ $row['NDS'] }}"/>
                        <TableCell ColSpan="1" RowSpan="1" Name="Cell42" Padding="2, 0, 2, 0"
                                   Font="Tahoma, 10pt" Text="{{ $sum }}"/>
                    </TableRow>
                    @php $rowNumber++ @endphp
                @endforeach
            </TableObject>
            <TextObject VertAlign="Center" Top="283.50" Left="529.20" Name="Text11" Text="Итого:" Width="58.94"
                        Height="25.25" Padding="2, 0, 2, 0" Font="Tahoma, 9pt, style=Bold"/>
            <TextObject Border.Color="#000000" Border.Lines="Bottom" Top="283.50" Left="585.90" Name="Text12"
                        Width="113.40" Height="19.45" Padding="2, 0, 2, 0" Font="Tahoma, 10pt"/>
            @php
                $words = [];

                $amount = bcmul(abs($totalSum), '1', 2);
                $ruble = floor($amount);
                $kopeck = round(bcsub($amount, $ruble, 2) * 100);

                $words[] = RUtils::numeral()->sumString($amount, RUtils::MALE, [
                    'рубль', 'рубля', 'рублей',
                ]);

                if ($kopeck > 0) {
                    $words[] = sprintf('%02d', $kopeck);

                    $words[] = RUtils::numeral()->choosePlural($kopeck, ['копейка', 'копейки', 'копеек',]);
                }

                $wordsTotalSum = join(' ', $words);
            @endphp
            <TextObject Left="18.90" Top="321.31" Name="Text13" Text="Всего оказано услуг {{ count($formData['servicesTable']) }} на сумму {{ number_format($totalSum, 2, ',', ' ') }} руб. " Width="578.69"
                        Height="19.45" Padding="2, 0, 2, 0" Font="Tahoma, 9pt"/>
            <TextObject Top="340.19" Left="18.90" Name="Text49" Width="578.69" Height="19.45" Padding="2, 0, 2, 0"
                        Font="Tahoma, 9pt, style=Bold" Text="{{ $wordsTotalSum }}"/>
            <TextObject Top="378" Left="18.90" Name="Text14"
                        Text="{{ $formData['commentary'] }}"
                        Width="682.64" Height="44.15" Padding="2, 0, 2, 0" Font="Tahoma, 9pt"/>
            <TextObject Left="18.90" Top="434.70" VertAlign="Center" Name="Text15" Text="ИСПОЛНИТЕЛЬ" Width="125.09"
                        Height="15.80" Padding="2, 0, 2, 0" Font="Tahoma, 9pt, style=Bold"/>
            <TextObject VertAlign="Center" Top="434.70" Left="406.35" Name="Text16" Text="ЗАКАЗЧИК" Width="96.74"
                        Height="15.80" Padding="2, 0, 2, 0" Font="Tahoma, 9pt, style=Bold"/>
            <TextObject Border.Color="#000000" Border.Lines="Bottom" VertAlign="Center" Top="491.40"
                        Left="18.90" Name="Text17" Width="295.19" Height="15.80" Padding="2, 0, 2, 0"
                        Font="Tahoma, 9pt"/>
            <TextObject Left="406.35" Top="491.40" VertAlign="Center" Border.Lines="Bottom" Border.Color="#000000"
                        Name="Text18" Width="295.19" Height="15.80" Padding="2, 0, 2, 0" Font="Tahoma, 9pt"/>
        </DataBand>
    </ReportPage>
</Report>
