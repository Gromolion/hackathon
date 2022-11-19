<Report ReportInfo.Created="{{ date('d/m/Y h:i:s') }}" ReportInfo.Modified="{{ date('d/m/Y h:i:s') }}"
        ReportInfo.CreatorVersion="1.0.0.0" Name="Report">
    <Dictionary/>
    <ReportPage Watermark.Font="Arial, 60pt" Name="Page1">
        <DataBand Name="Data1" Width="718.20" Height="812.70">
            <TextObject HorzAlign="Center" VertAlign="Center" Top="0" Left="0" Name="Text2"
                        Text="Акт № 1 от 20 октября 2022г." Width="718.53" Height="51.71" Padding="2, 0, 2, 0"
                        Font="Tahoma, 13pt, style=Bold"/>
            <TextObject Left="18.90" Top="55.42" VertAlign="Center" HorzAlign="Right" Name="Text3" Text="Исполнитель"
                        Width="87.29" Height="10" Padding="2, 0, 2, 0" Font="Tahoma, 9pt"/>
            <TextObject VertAlign="Center" Top="126.63" Left="18.90" Name="Text4" Text="Заказчик" Width="77.84"
                        Height="15.80" Padding="2, 0, 2, 0" Font="Tahoma, 9pt"/>
            <TextObject Left="122.85" Top="52.92" Name="Text6" Text="Исполнитель№" Width="580.58" Height="61.16"
                        Padding="2, 0, 2, 0" Font="Tahoma, 7pt, style=Bold"/>
            <TextObject Top="122.85" Left="122.85" Name="Text7" Text="Заказчик№" Width="580.58" Height="61.16"
                        Padding="2, 0, 2, 0" Font="Tahoma, 7pt, style=Bold"/>
            <TextObject Left="18.90" Top="198.45" VertAlign="Center" Name="Text8" Text="Основание" Width="77.84"
                        Height="15.80" Padding="2, 0, 2, 0" Font="Tahoma, 9pt"/>
            <TextObject VertAlign="Center" Top="198.45" Left="122.85" Name="Text9" Text="Счет № 1 от 20.10.2022"
                        Width="578.69" Height="15.80" Padding="2, 0, 2, 0" Font="Tahoma, 7pt, style=Bold"/>
            <TableObject GrowToBottom="true" Top="236.25" Left="18.90" Name="Table1" Width="679.95" Height="35.20">
                <TableColumn MaxWidth="500" MinWidth="0" Width="48.61" Name="Column1"/>
                <TableColumn MaxWidth="500" MinWidth="0" Width="291.66" Name="Column2"/>
                <TableColumn MaxWidth="500" MinWidth="0" Width="85.07" Name="Column3"/>
                <TableColumn MaxWidth="500" MinWidth="0" Width="84.87" Name="Column13"/>
                <TableColumn MaxWidth="500" MinWidth="0" Width="84.87" Name="Column14"/>
                <TableColumn MaxWidth="500" MinWidth="0" Width="84.87" Name="Column15"/>
                <TableRow MaxHeight="500" MinHeight="0" Height="19.45" Name="Row1">
                    <TableCell HorzAlign="Center" ColSpan="1" RowSpan="1" Name="Cell1" Text="№" Padding="2, 0, 2, 0"
                               Font="Tahoma, 10pt, style=Bold"/>
                    <TableCell HorzAlign="Center" ColSpan="1" RowSpan="1" Name="Cell2" Text="Наименование работ, услуг"
                               Padding="2, 0, 2, 0" Font="Tahoma, 10pt, style=Bold"/>
                    <TableCell HorzAlign="Center" ColSpan="1" RowSpan="1" Name="Cell3" Text="Кол-вo"
                               Padding="2, 0, 2, 0" Font="Tahoma, 10pt, style=Bold"/>
                    <TableCell HorzAlign="Center" ColSpan="1" RowSpan="1" Name="Cell37" Text="Ед." Padding="2, 0, 2, 0"
                               Font="Tahoma, 10pt, style=Bold"/>
                    <TableCell HorzAlign="Center" ColSpan="1" RowSpan="1" Name="Cell40" Text="Цена" Padding="2, 0, 2, 0"
                               Font="Tahoma, 10pt, style=Bold"/>
                    <TableCell HorzAlign="Center" ColSpan="1" RowSpan="1" Name="Cell43" Text="Сумма"
                               Padding="2, 0, 2, 0" Font="Tahoma, 10pt, style=Bold"/>
                </TableRow>
                <!-- todo foreach -->
                <TableRow MaxHeight="500" MinHeight="0" Height="15.75" Name="Row2">
                    <TableCell ColSpan="1" RowSpan="1" Name="Cell4" Padding="2, 0, 2, 0" Font="Tahoma, 10pt"/>
                    <TableCell ColSpan="1" RowSpan="1" Name="Cell5" Padding="2, 0, 2, 0" Font="Tahoma, 10pt"/>
                    <TableCell HorzAlign="Right" ColSpan="1" RowSpan="1" Name="Cell6" Padding="2, 0, 2, 0"
                               Font="Tahoma, 10pt"/>
                    <TableCell HorzAlign="Right" ColSpan="1" RowSpan="1" Name="Cell38" Padding="2, 0, 2, 0"
                               Font="Tahoma, 10pt"/>
                    <TableCell HorzAlign="Right" ColSpan="1" RowSpan="1" Name="Cell41" Padding="2, 0, 2, 0"
                               Font="Tahoma, 10pt"/>
                    <TableCell HorzAlign="Right" ColSpan="1" RowSpan="1" Name="Cell44" Padding="2, 0, 2, 0"
                               Font="Tahoma, 10pt"/>
                </TableRow>
                <!-- todo endforeach -->
            </TableObject>
            <TextObject VertAlign="Center" Top="283.50" Left="529.20" Name="Text11" Text="Итого:" Width="58.94"
                        Height="25.25" Padding="2, 0, 2, 0" Font="Tahoma, 9pt, style=Bold"/>
            <TextObject Border.Color="#000000" Border.Lines="Bottom" Top="283.50" Left="585.90" Name="Text12"
                        Width="113.40" Height="19.45" Padding="2, 0, 2, 0" Font="Tahoma, 10pt"/>
            <TextObject Left="18.90" Top="321.30" Name="Text13" Text="Всего оказано услуг " Width="276.29"
                        Height="44.15" Padding="2, 0, 2, 0" Font="Tahoma, 9pt"/>
            <TextObject Top="378.00" Left="18.90" Name="Text14"
                        Text="Вышеперечисленные услуги выполнены полностью и в срок. Заказчик претензий по объему, качеству и срокам оказания услуг не имеет. "
                        Width="682.64" Height="44.15" Padding="2, 0, 2, 0" Font="Tahoma, 9pt"/>
            <TextObject Left="18.90" Top="434.70" VertAlign="Center" Name="Text15" Text="ИСПОЛНИТЕЛЬ" Width="125.09"
                        Height="15.80" Padding="2, 0, 2, 0" Font="Tahoma, 9pt, style=Bold"/>
            <TextObject VertAlign="Center" Top="434.70" Left="406.35" Name="Text16" Text="ЗАКАЗЧИК" Width="96.74"
                        Height="15.80" Padding="2, 0, 2, 0" Font="Tahoma, 9pt, style=Bold"/>
            <TextObject Border.Color="#000000" Border.Lines="Bottom" VertAlign="Center" Top="491.40" Left="18.90"
                        Name="Text17" Width="295.19" Height="15.80" Padding="2, 0, 2, 0" Font="Tahoma, 9pt"/>
            <TextObject Left="406.35" Top="491.40" VertAlign="Center" Border.Lines="Bottom" Border.Color="#000000"
                        Name="Text18" Width="295.19" Height="15.80" Padding="2, 0, 2, 0" Font="Tahoma, 9pt"/>
        </DataBand>
        <DataBand Name="Data2" Width="718.20" Height="207.87"/>
        <DataBand Name="Data3" Width="718.20" Height="207.87"/>
    </ReportPage>
</Report>
