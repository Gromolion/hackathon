@php
/**
 * @var $formData array
 */
@endphp
    <Report ReportInfo.Created="{{date('d/m/Y h:i:s')}}" ReportInfo.Modified="{{date('d/m/Y h:i:s')}}"
        ReportInfo.CreatorVersion="1.0.0.0" Name="Report">
    <Dictionary/>
    <ReportPage Watermark.Font="Arial, 60pt" Name="Page1">
        <DataBand Name="Data1" Width="718.20" Height="833.26">
            <TextObject VertAlign="Center" HorzAlign="Center" Top="18.90" Left="151.20" Name="Text1" Text="ИНН"
                        Width="47.25" Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            @php
                $inn = mb_str_split((string)($formData['INN'] ?? ''))
            @endphp
            @for($i = 198.45, $j = 0; $j <= 11; $i += 18.9, $j++)
            <TextObject Border.Lines="All" Border.Style="Dot" Border.Color="#000000" Left="{{$i}}" Top="18.90"
                        HorzAlign="Center" VertAlign="Center" Name="{{'inn'.$j}}" Text="{{$inn[$j] ?? '-'}}" Width="19.45" Height="19.45"
                        Padding="2, 0, 2, 0" Font="Comic Sans MS, 8pt"/>
            @endfor
            <TextObject Left="349.65" Top="56.70" HorzAlign="Center" VertAlign="Center" Name="Text192" Text="Стр."
                        Width="47.25" Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            <TextObject VertAlign="Center" HorzAlign="Center" Top="56.70" Left="396.90" Border.Color="#000000"
                        Border.Style="Dot" Border.Lines="All" Name="Text207" Text="-" Width="19.45" Height="19.45"
                        Padding="2, 0, 2, 0" Font="Comic Sans MS, 8pt"/>
            <TextObject VertAlign="Center" HorzAlign="Center" Top="56.70" Left="415.80" Border.Color="#000000"
                        Border.Style="Dot" Border.Lines="All" Name="Text209" Text="-" Width="19.45" Height="19.45"
                        Padding="2, 0, 2, 0" Font="Comic Sans MS, 8pt"/>
            <TextObject Border.Lines="All" Border.Style="Dot" Border.Color="#000000" Left="434.70" Top="56.70"
                        HorzAlign="Center" VertAlign="Center" Name="Text208" Text="-" Width="19.45" Height="19.45"
                        Padding="2, 0, 2, 0" Font="Comic Sans MS, 8pt"/>


            <TextObject Left="37.80" Top="85.06" HorzAlign="Center" VertAlign="Center" Name="Text196"
                        Text="Налоговая декларация&#13;&#13;&#13;&#13;&#13;&#13;&#13;&#10;по налогу на доходы физических лиц (форма 3-НДФЛ)"
                        Width="642.60" Height="28.90" Padding="2, 0, 2, 0" Font="Comic Sans MS, 9pt, style=Bold"/>
            <TextObject Left="37.81" Top="122.86" VertAlign="Center" Name="Text197"
                        Text="Номер&#13;&#13;&#13;&#13;&#13;&#13;&#13;&#10;корректировки" Width="75.60" Height="19.45"
                        Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            @php
                $correctionNumber = mb_str_split((string)($formData['correctionNumber'] ?? ''))
            @endphp
            @for($i = 113.40, $j = 0; $j <= 2; $i += 18.9, $j++)
            <TextObject Border.Lines="All" Border.Style="Dot" Border.Color="#000000" Left="{{$i}}" Top="122.85"
                        HorzAlign="Center" VertAlign="Center" Name="{{'correctionNumber'.$j}}" Text="{{$correctionNumber[$j] ?? '-'}}" Width="19.45" Height="19.45"
                        Padding="2, 0, 2, 0" Font="Comic Sans MS, 8pt"/>
            @endfor
            @php
                $taxPeriodCode = mb_str_split((string)($formData['taxPeriodCode'] ?? ''))
            @endphp
            @for($i = 255.17, $j = 0; $j <= 1; $i += 18.9, $j++)
                <TextObject VertAlign="Center" HorzAlign="Center" Top="122.85" Left="{{$i}}" Border.Color="#000000"
                            Border.Style="Dot" Border.Lines="All" Name="{{'taxPeriodCode'.$j}}" Text="{{$taxPeriodCode[$j]  ?? '-'}}" Width="19.45" Height="19.45"
                            Padding="2, 0, 2, 0" Font="Comic Sans MS, 8pt"/>
            @endfor

            <TextObject VertAlign="Center" Top="122.86" Left="189.02" Name="Text206"
                        Text="Налоговый&#13;&#13;&#13;&#13;&#13;&#13;&#13;&#10;период (код)" Width="66.15"
                        Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            @php
                $reportingYear = mb_str_split((string)($formData['reportingYear'] ?? ''))
            @endphp
            @for($i = 387.45, $j = 0; $j <= 3; $i += 18.9, $j++)
                <TextObject Border.Lines="All" Border.Style="Dot" Border.Color="#000000" Left="{{$i}}" Top="122.85"
                            HorzAlign="Center" VertAlign="Center" Name="{{'reportingYear'.$j}}" Text="{{$reportingYear[$j] ?? '-'}}" Width="19.45" Height="19.45"
                            Padding="2, 0, 2, 0" Font="Comic Sans MS, 8pt"/>
            @endfor

            <TextObject VertAlign="Center" HorzAlign="Center" Top="122.86" Left="311.87" Name="Text213"
                        Text="Отчетный год" Width="66.15" Height="19.45" Padding="2, 0, 2, 0"
                        Font="Comic Sans MS, 6pt"/>
            <TextObject Left="481.275" Top="122.85" VertAlign="Center" Name="Text216"
                        Text="Предоставляется в &#13;&#13;&#13;&#13;&#13;&#13;&#13;&#10;налоговый орган (код)"
                        Width="113.675" Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            @php
                $providedToTheTaxCode = mb_str_split((string)($formData['providedToTheTaxCode'] ?? ''))
            @endphp
            @for($i = 604.81, $j = 0; $j <= 3; $i += 18.89, $j++)
                <TextObject VertAlign="Center" HorzAlign="Center" Top="122.85" Left="{{$i}}" Border.Color="#000000"
                            Border.Style="Dot" Border.Lines="All" Name="{{'providedToTheTaxCode'.$j}}" Text="{{$providedToTheTaxCode[$j] ?? '-'}}" Width="19.45" Height="19.45"
                            Padding="2, 0, 2, 0" Font="Comic Sans MS, 8pt"/>
            @endfor
            <TextObject VertAlign="Center" HorzAlign="Center" Top="151.21" Left="28.38" Name="Text220"
                        Text="Сведения о налогоплательщике" Width="198.45" Height="10" Padding="2, 0, 2, 0"
                        Font="Comic Sans MS, 7pt, style=Bold"/>
            @php
                $countryCode = mb_str_split((string)($formData['countryCode'] ?? ''))
            @endphp
            @for($i = 113.41, $j = 0; $j <= 2; $i += 18.89, $j++)
                <TextObject VertAlign="Center" HorzAlign="Center" Top="170.11" Left="{{$i}}" Border.Color="#000000"
                            Border.Style="Dot" Border.Lines="All" Name="{{'countryCode'.$j}}" Text="{{$countryCode[$j] ?? '-'}}" Width="19.45" Height="19.45"
                            Padding="2, 0, 2, 0" Font="Comic Sans MS, 8pt"/>
            @endfor

            <TextObject VertAlign="Center" Top="170.11" Left="37.80" Name="Text224" Text="Код страны" Width="66.15"
                        Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            <TextObject Left="189" Top="170.11" VertAlign="Center" Name="Text225" Text="Код категории налогоплательщика"
                        Width="160.65" Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            @php
                $codeCategoryTaxpayer = mb_str_split((string)($formData['codeCategoryTaxpayer'] ?? ''))
            @endphp
            @for($i = 368.56, $j = 0; $j <= 2; $i += 18.89, $j++)
                <TextObject Border.Lines="All" Border.Style="Dot" Border.Color="#000000" Left="{{$i}}" Top="170.11"
                            HorzAlign="Center" VertAlign="Center" Name="{{'codeCategoryTaxpayer'.$j}}" Text="{{$codeCategoryTaxpayer[$j] ?? '-'}}" Width="19.45" Height="19.45"
                            Padding="2, 0, 2, 0" Font="Comic Sans MS, 8pt"/>
            @endfor

            <TextObject Left="37.80" Top="198.45" VertAlign="Center" Name="Text229" Text="Фамилия" Width="66.15"
                        Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>

            @php
                $lastName = mb_str_split((string)($formData['lastName'] ?? ''))
            @endphp
            @for($i = 113.41, $j = 0; $j <= 29; $i += 18.89, $j++)
                <TextObject VertAlign="Center" HorzAlign="Center" Top="198.45" Left="{{$i}}" Border.Color="#000000"
                            Border.Style="Dot" Border.Lines="All" Name="{{'lastName'.$j}}" Text="{{$lastName[$j] ?? '-'}}" Width="19.45" Height="19.45"
                            Padding="2, 0, 2, 0" Font="Comic Sans MS, 8pt"/>
            @endfor

            <TextObject VertAlign="Center" Top="226.80" Left="37.80" Name="Text302" Text="Имя" Width="66.15"
                        Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>

            @php
                $name = mb_str_split((string)($formData['name'] ?? ''));
            @endphp
            @for($i = 113.41, $j = 0; $j <= 29; $i += 18.89, $j++)
                <TextObject VertAlign="Center" HorzAlign="Center" Top="226.80" Left="{{$i}}" Border.Color="#000000"
                            Border.Style="Dot" Border.Lines="All" Name="{{'name'.$j}}" Text="{{$name[$j] ?? '-'}}" Width="19.45" Height="19.45"
                            Padding="2, 0, 2, 0" Font="Comic Sans MS, 8pt"/>
            @endfor

            <TextObject VertAlign="Center" Top="255.15" Left="37.80" Name="Text333" Text="Отчество*" Width="66.15"
                        Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>

            @php
                $patronymic = mb_str_split((string)($formData['patronymic'] ?? ''))
            @endphp
            @for($i = 113.41, $j = 0; $j <= 29; $i += 18.89, $j++)
                <TextObject VertAlign="Center" HorzAlign="Center" Top="255.15" Left="{{$i}}" Border.Color="#000000"
                            Border.Style="Dot" Border.Lines="All" Name="{{'patronymic'.$j}}" Text="{{$patronymic[$j] ?? '-'}}" Width="19.45" Height="19.45"
                            Padding="2, 0, 2, 0" Font="Comic Sans MS, 8pt"/>
            @endfor

            <TextObject VertAlign="Center" Top="283.52" Left="37.80" Name="Text334" Text="Дата рождения" Width="75.60"
                        Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            @php
                $date = strtotime((string)($formData['birthday'] ?? ''));
                $day = mb_str_split(date('d', $date));
                $month = mb_str_split(date('m', $date));
                $year = mb_str_split(date('Y', $date));
            @endphp
            {{-- День --}}
            <TextObject VertAlign="Center" HorzAlign="Center" Top="283.50" Left="226.82" Border.Color="#000000"
                        Border.Style="Dot" Border.Lines="All" Name="Text337" Text="{{$day[0]}}" Width="19.45" Height="19.45"
                        Padding="2, 0, 2, 0" Font="Comic Sans MS, 8pt"/>
            <TextObject Border.Lines="All" Border.Style="Dot" Border.Color="#000000" Left="245.72" Top="283.48"
                        HorzAlign="Center" VertAlign="Center" Name="Text336" Text="{{$day[1]}}" Width="19.45" Height="19.45"
                        Padding="2, 0, 2, 0" Font="Comic Sans MS, 8pt"/>
            <TextObject HorzAlign="Center" Left="245.73" Top="283.48" VertAlign="Center" Name="Text335" Text="-"
                        Width="47.80" Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt, style=Bold"/>
            {{-- Месяц --}}
            <TextObject Border.Lines="All" Border.Style="Dot" Border.Color="#000000" Left="274.07" Top="283.48"
                        HorzAlign="Center" VertAlign="Center" Name="Text338" Text="{{$month[0]}}" Width="19.45" Height="19.45"
                        Padding="2, 0, 2, 0" Font="Comic Sans MS, 8pt"/>
            <TextObject VertAlign="Center" HorzAlign="Center" Top="283.50" Left="292.95" Border.Color="#000000"
                        Border.Style="Dot" Border.Lines="All" Name="Text339" Text="{{$month[1]}}" Width="19.45" Height="19.45"
                        Padding="2, 0, 2, 0" Font="Comic Sans MS, 8pt"/>
            <TextObject VertAlign="Center" Top="283.50" Left="292.95" HorzAlign="Center" Name="Text343" Text="-"
                        Width="47.80" Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt, style=Bold"/>
            {{-- Год --}}
            <TextObject Border.Lines="All" Border.Style="Dot" Border.Color="#000000" Left="321.30" Top="283.50"
                        HorzAlign="Center" VertAlign="Center" Name="Text346" Text="{{$year[0]}}" Width="19.45" Height="19.45"
                        Padding="2, 0, 2, 0" Font="Comic Sans MS, 8pt"/>
            <TextObject Border.Lines="All" Border.Style="Dot" Border.Color="#000000" Left="340.22" Top="283.50"
                        HorzAlign="Center" VertAlign="Center" Name="Text345" Text="{{$year[1]}}" Width="19.45" Height="19.45"
                        Padding="2, 0, 2, 0" Font="Comic Sans MS, 8pt"/>
            <TextObject Border.Lines="All" Border.Style="Dot" Border.Color="#000000" Left="359.10" Top="283.50"
                        HorzAlign="Center" VertAlign="Center" Name="Text344" Text="{{$year[2]}}" Width="19.45" Height="19.45"
                        Padding="2, 0, 2, 0" Font="Comic Sans MS, 8pt"/>
            <TextObject VertAlign="Center" HorzAlign="Center" Top="283.50" Left="378" Border.Color="#000000"
                        Border.Style="Dot" Border.Lines="All" Name="Text347" Text="{{$year[3]}}" Width="19.45" Height="19.45"
                        Padding="2, 0, 2, 0" Font="Comic Sans MS, 8pt"/>

            <TextObject Left="37.80" Top="311.85" HorzAlign="Center" VertAlign="Center" Name="Text348"
                        Text="Сведения о документе, удостоверяющем личность:" Width="292.95" Height="19.45"
                        Padding="2, 0, 2, 0" Font="Comic Sans MS, 7pt, style=Bold"/>
            <TextObject VertAlign="Center" Top="340.20" Left="37.82" Name="Text351" Text="Код вида документов"
                        Width="103.95" Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>

            @php
                $codeDocumentType = mb_str_split((string)($formData['codeDocumentType'] ?? ''));
            @endphp
            <TextObject VertAlign="Center" HorzAlign="Center" Top="340.20" Left="151.21" Border.Color="#000000"
                        Border.Style="Dot" Border.Lines="All" Name="Text350" Text="{{$codeDocumentType[0] ?? '-'}}" Width="19.45" Height="19.45"
                        Padding="2, 0, 2, 0" Font="Comic Sans MS, 8pt"/>
            <TextObject Border.Lines="All" Border.Style="Dot" Border.Color="#000000" Left="170.10" Top="340.20"
                        HorzAlign="Center" VertAlign="Center" Name="Text349" Text="{{$codeDocumentType[1] ?? '-'}}" Width="19.45" Height="19.45"
                        Padding="2, 0, 2, 0" Font="Comic Sans MS, 8pt"/>

            <TextObject Left="37.80" Top="368.56" VertAlign="Center" Name="Text352" Text="Серия и номер" Width="103.95"
                        Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>

            @php
                $passportData = (string)($formData['passport'] ?? '');

                $passport = mb_str_split(substr($passportData, 0, 2) . "-" . substr($passportData, 2, 2) . "-" . substr($passportData, 4, 6));
            @endphp
            @for($i = 151.21, $j = 0; $j <= 27; $i += 18.9, $j++)
                <TextObject Border.Lines="All" Border.Style="Dot" Border.Color="#000000" Left="{{$i}}" Top="368.56"
                            HorzAlign="Center" VertAlign="Center" Name="{{'passport'.$j}}" Text="{{$passport[$j] ?? '-'}}" Width="19.45" Height="19.45"
                            Padding="2, 0, 2, 0" Font="Comic Sans MS, 8pt"/>
            @endfor

            @php
                $codeStatusTaxpayer = (string)($formData['codeStatusTaxpayer'] ?? '');
            @endphp
            <TextObject Left="37.80" Top="396.91" HorzAlign="Center" VertAlign="Center" Name="Text378"
                        Text="Код статуса налогоплательщика" Width="198.45" Height="19.45" Padding="2, 0, 2, 0"
                        Font="Comic Sans MS, 7pt, style=Bold"/>
            <TextObject Border.Lines="All" Border.Style="Dot" Border.Color="#000000" Left="255.16" Top="396.91"
                        HorzAlign="Center" VertAlign="Center" Name="Text0000022" Text="{{$codeStatusTaxpayer ?? '-'}}" Width="19.45" Height="19.45"
                        Padding="2, 0, 2, 0" Font="Comic Sans MS, 8pt"/>


            <TextObject Left="274.06" Top="387.45" VertAlign="Center" Name="Text380"
                        Text="1 - налоговый резидент Российской Федерации,&#13;&#13;&#13;&#13;&#13;&#13;&#13;&#10;2 - лицо, не являющееся налоговым резидентом Российской Федерации"
                        Width="321.30" Height="38.35" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>


            <TextObject VertAlign="Center" Top="425.82" Left="37.80" Name="Text401" Text="Номер контактного телефона"
                        Width="132.30" Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>

            @php
                $phoneNumber = mb_str_split((string)($formData['phoneNumber'] ?? ''))
            @endphp
            @for($i = 179.56, $j = 0; $j <= 19; $i += 18.89, $j++)
                <TextObject VertAlign="Center" HorzAlign="Center" Top="425.26" Left="{{$i}}" Border.Color="#000000"
                            Border.Style="Dot" Border.Lines="All" Name="{{'phoneNumber'.$j}}" Text="{{$phoneNumber[$j] ?? '-'}}" Width="19.45" Height="19.45"
                            Padding="2, 0, 2, 0" Font="Comic Sans MS, 8pt"/>
            @endfor


            <TextObject VertAlign="Center" Top="481.95" Left="37.80" Name="Text1000" Text="Декларация составлена на"
                        Width="132.85" Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>

            <TextObject Border.Lines="All" Border.Style="Dot" Border.Color="#000000" Left="170.10" Top="481.95"
                        HorzAlign="Center" VertAlign="Center" Name="Text1008" Text="-" Width="19.45" Height="19.45"
                        Padding="2, 0, 2, 0" Font="Comic Sans MS, 8pt"/>
            <TextObject VertAlign="Center" HorzAlign="Center" Top="481.95" Left="189" Border.Color="#000000"
                        Border.Style="Dot" Border.Lines="All" Name="Text1007" Text="-" Width="19.45" Height="19.45"
                        Padding="2, 0, 2, 0" Font="Comic Sans MS, 8pt"/>
            <TextObject Border.Lines="All" Border.Style="Dot" Border.Color="#000000" Left="207.90" Top="481.95"
                        HorzAlign="Center" VertAlign="Center" Name="Text1006" Text="-" Width="19.45" Height="19.45"
                        Padding="2, 0, 2, 0" Font="Comic Sans MS, 8pt"/>

            <TextObject Left="226.80" Top="481.95" HorzAlign="Center" VertAlign="Center" Name="Text1002"
                        Text="страницах с приложением подтверждающих документов или их копий на" Width="340.75"
                        Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>

            <TextObject VertAlign="Center" HorzAlign="Center" Top="481.95" Left="567.00" Border.Color="#000000"
                        Border.Style="Dot" Border.Lines="All" Name="Text1005" Text="-" Width="19.45" Height="19.45"
                        Padding="2, 0, 2, 0" Font="Comic Sans MS, 8pt"/>
            <TextObject Border.Lines="All" Border.Style="Dot" Border.Color="#000000" Left="585.90" Top="481.95"
                        HorzAlign="Center" VertAlign="Center" Name="Text1004" Text="-" Width="19.45" Height="19.45"
                        Padding="2, 0, 2, 0" Font="Comic Sans MS, 8pt"/>
            <TextObject VertAlign="Center" HorzAlign="Center" Top="481.95" Left="604.80" Border.Color="#000000"
                        Border.Style="Dot" Border.Lines="All" Name="Text1003" Text="-" Width="19.45" Height="19.45"
                        Padding="2, 0, 2, 0" Font="Comic Sans MS, 8pt"/>
            <TextObject VertAlign="Center" Top="481.95" Left="633.15" Name="Text1001" Text="листах" Width="37.80"
                        Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>


            <TextObject Left="37.80" Top="500.85" VertAlign="Center" Border.Lines="Bottom" Border.Color="#000000"
                        Name="Text1009" Width="633.15" Height="10" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            <TextObject Left="340.20" Top="510.30" VertAlign="Center" Border.Lines="Right" Border.Color="#000000"
                        Name="Text1010" Width="10" Height="246.25" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            <TextObject Left="396.90" Top="519.75" VertAlign="Center" HorzAlign="Center" Name="Text1011"
                        Text="Сведения о представлении декларации" Width="236.25" Height="19.45" Padding="2, 0, 2, 0"
                        Font="Comic Sans MS, 6pt"/>
            <TextObject HorzAlign="Center" VertAlign="Center" Top="500.85" Left="396.90" Name="Text1012"
                        Text="Заполняется работником налогового органа" Width="236.25" Height="38.35"
                        Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt, style=Bold"/>
            <TextObject Left="66.15" Top="510.30" VertAlign="Center" HorzAlign="Center" Name="Text1013"
                        Text="Достоверность и полноту сведений, указанных&#13;&#13;&#13;&#13;&#13;&#13;&#13;&#10;в настоящей декларации, подтверждаю: "
                        Width="255.15" Height="28.90" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt, style=Bold"/>

            @php
                $presentTaxpayer = (string)($formData['presentTaxpayer'] ?? '')
            @endphp
            <TextObject VertAlign="Center" HorzAlign="Center" Top="538.65" Left="37.80" Border.Color="#000000"
                        Border.Style="Dot" Border.Lines="All" Name="Text1014" Text="{{$presentTaxpayer}}" Width="19.45" Height="19.45"
                        Padding="2, 0, 2, 0" Font="Comic Sans MS, 8pt"/>
            <TextObject Left="56.70" Top="529.20" VertAlign="Center" Name="Text1015"
                        Text="1 - налогоплательщик&#13;&#13;&#13;&#13;&#13;&#13;&#13;&#10;2 - представитель налогоплательщика"
                        Width="321.30" Height="38.35" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>

            @php
                $presentLastName = ($formData['presentTaxpayerLastName'] ?? ($formData['lastName'] ?? ''));
                $presentTaxpayerLastName = mb_str_split((string)$presentLastName)
            @endphp
            @for($i = 37.80, $j = 0; $j <= 15; $i += 18.9, $j++)
                <TextObject VertAlign="Center" HorzAlign="Center" Top="567.00" Left="{{$i}}" Border.Color="#000000"
                            Border.Style="Dot" Border.Lines="All" AutoWidth="true" Angle="0" LineHeight="0" Name="{{'presentTaxpayerLastName'.$j}}"
                            Text="{{$presentTaxpayerLastName[$j] ?? '-'}}" Width="19.45" Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 8pt"/>
            @endfor

            @php
                $presentName = ($formData['presentTaxpayerName'] ?? ($formData['name'] ?? ''));

                $presentTaxpayerName = mb_str_split((string)$presentName)
            @endphp

            @for($i = 37.80, $j = 0; $j <= 15; $i += 18.9, $j++)
                <TextObject LineHeight="0" Angle="0" AutoWidth="true" Border.Lines="All" Border.Style="Dot"
                            Border.Color="#000000" Left="{{$i}}" Top="595.35" HorzAlign="Center" VertAlign="Center"
                            Name="{{'presentTaxpayerName'.$j}}" Text="{{$presentTaxpayerName[$j] ?? '-'}}" Width="19.45" Height="19.45" Padding="2, 0, 2, 0"
                            Font="Comic Sans MS, 8pt"/>
            @endfor

            @php
                $presentPatronymic = ($formData['presentTaxpayerPatronymic'] ?? ($formData['patronymic'] ?? ''));

                $presentTaxpayerPatronymic = mb_str_split((string)$presentPatronymic)
            @endphp

            @for($i = 37.80, $j = 0; $j <= 15; $i += 18.9, $j++)
                <TextObject VertAlign="Center" HorzAlign="Center" Top="623.70" Left="{{$i}}" Border.Color="#000000"
                            Border.Style="Dot" Border.Lines="All" AutoWidth="true" Angle="0" LineHeight="0" Name="{{'presentTaxpayerPatronymic'.$j}}"
                            Text="{{$presentTaxpayerPatronymic[$j] ?? '-'}}" Width="19.45" Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 8pt"/>
            @endfor

            <TextObject Left="47.27" Top="627.02" VertAlign="Center" Name="Text493"
                        Text="(фамилия, имя, отчество* представителя налогоплательщика)" Width="321.30" Height="47.80"
                        Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>

            <TextObject Border.Color="#000000" Border.Lines="Bottom" VertAlign="Center" Top="670.95" Left="85.05"
                        Name="Text1123" Width="56.70" Height="10" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>

            <TextObject VertAlign="Center" Top="661.50" Left="141.75" Name="Text1121" Text="Дата" Width="28.35"
                        Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            <TextObject Left="37.80" Top="661.50" VertAlign="Center" Name="Text1122" Text="Подпись" Width="122.85"
                        Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>

            {{-- День --}}
            <TextObject VertAlign="Center" HorzAlign="Center" Top="661.50" Left="170.10" Border.Color="#000000"
                        Border.Style="Dot" Border.Lines="All" Name="Text1111" Text="-" Width="19.45" Height="19.45"
                        Padding="2, 0, 2, 0" Font="Comic Sans MS, 8pt"/>
            <TextObject Border.Lines="All" Border.Style="Dot" Border.Color="#000000" Left="189" Top="661.50"
                        HorzAlign="Center" VertAlign="Center" Name="Text1112" Text="-" Width="19.45" Height="19.45"
                        Padding="2, 0, 2, 0" Font="Comic Sans MS, 8pt"/>

            <TextObject HorzAlign="Center" Left="189" Top="661.50" VertAlign="Center" Name="Text1114" Text="-"
                        Width="47.80" Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt, style=Bold"/>
            {{-- Месяц --}}
            <TextObject Border.Lines="All" Border.Style="Dot" Border.Color="#000000" Left="217.35" Top="661.50"
                        HorzAlign="Center" VertAlign="Center" Name="Text1115" Text="-" Width="19.45" Height="19.45"
                        Padding="2, 0, 2, 0" Font="Comic Sans MS, 8pt"/>
            <TextObject VertAlign="Center" HorzAlign="Center" Top="661.50" Left="236.25" Border.Color="#000000"
                        Border.Style="Dot" Border.Lines="All" Name="Text1113" Text="-" Width="19.45" Height="19.45"
                        Padding="2, 0, 2, 0" Font="Comic Sans MS, 8pt"/>


            <TextObject VertAlign="Center" Top="661.50" Left="236.25" HorzAlign="Center" Name="Text1116" Text="-"
                        Width="47.80" Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt, style=Bold"/>

            {{-- Год --}}
            <TextObject Border.Lines="All" Border.Style="Dot" Border.Color="#000000" Left="264.60" Top="661.50"
                        HorzAlign="Center" VertAlign="Center" Name="Text1119" Text="-" Width="19.45" Height="19.45"
                        Padding="2, 0, 2, 0" Font="Comic Sans MS, 8pt"/>
            <TextObject Border.Lines="All" Border.Style="Dot" Border.Color="#000000" Left="283.50" Top="661.50"
                        HorzAlign="Center" VertAlign="Center" Name="Text1118" Text="-" Width="19.45" Height="19.45"
                        Padding="2, 0, 2, 0" Font="Comic Sans MS, 8pt"/>
            <TextObject Border.Lines="All" Border.Style="Dot" Border.Color="#000000" Left="302.40" Top="661.50"
                        HorzAlign="Center" VertAlign="Center" Name="Text1117" Text="-" Width="19.45" Height="19.45"
                        Padding="2, 0, 2, 0" Font="Comic Sans MS, 8pt"/>
            <TextObject VertAlign="Center" HorzAlign="Center" Top="661.50" Left="321.30" Border.Color="#000000"
                        Border.Style="Dot" Border.Lines="All" Name="Text1120" Text="-" Width="19.45" Height="19.45"
                        Padding="2, 0, 2, 0" Font="Comic Sans MS, 8pt"/>

            <TextObject Left="37.80" Top="690.95" VertAlign="Center" HorzAlign="Center" Name="Text1125"
                        Text="&#13;&#13;&#13;&#13;&#13;&#13;&#10;Наименование и реквизиты документа,&#13;&#13;&#13;&#13;&#13;&#13;&#10;подтверждающего полномочия представителя налогоплательщика&#13;&#13;&#13;&#13;&#13;&#13;&#10;"
                        Width="321.30" Height="47.80" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>

            {{-- Уточнить что тут надо --}}
            @php
                $presentTaxpayerDocumentNameData = $formData['presentTaxpayerDocumentName'] ?? '';
                $presentTaxpayerDocumentName = mb_str_split((string)$presentTaxpayerDocumentNameData)
            @endphp
            @for($i = 37.80, $j = 0; $j <= 15; $i += 18.9, $j++)
                <TextObject LineHeight="0" Angle="0" AutoWidth="true" Border.Lines="All" Border.Style="Dot"
                            Border.Color="#000000" Left="{{$i}}" Top="708.75" HorzAlign="Center" VertAlign="Center"
                            Name="{{'presentTaxpayerDocumentName'.$j}}" Text="{{$presentTaxpayerDocumentName[$j] ?? '-'}}" Width="19.45" Height="19.45" Padding="2, 0, 2, 0"
                            Font="Comic Sans MS, 8pt"/>
            @endfor

            @php
                $presentTaxpayerDocumentRequisitesData = $formData['presentTaxpayerDocumentRequisites'] ?? '';
                $presentTaxpayerDocumentRequisites = mb_str_split((string)$presentTaxpayerDocumentRequisitesData)
            @endphp
            @for($i = 37.80, $j = 0; $j <= 15; $i += 18.9, $j++)
                <TextObject VertAlign="Center" HorzAlign="Center" Top="737.10" Left="{{$i}}" Border.Color="#000000"
                            Border.Style="Dot" Border.Lines="All" AutoWidth="true" Angle="0" LineHeight="0" Name="{{'presentTaxpayerDocumentRequisites'.$j}}"
                            Text="{{$presentTaxpayerDocumentRequisites[$j] ?? '-'}}" Width="19.45" Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 8pt"/>
            @endfor

            <TextObject HorzAlign="Center" VertAlign="Center" Top="746.55" Left="28.35" Name="Text1174"
                        Text="* Отчество указывается при наличии (относится ко всем листам документа) " Width="321.30"
                        Height="47.80" Padding="2, 0, 2, 0" Font="Comic Sans MS, 5pt"/>

            {{--Другая часть--}}

            <ShapeObject Left="18.90" Top="795.45" Fill.Color="#000000" Name="Shape3" Shape="Rectangle" Width="19.45"
                         Height="18.90"/>
            <TextObject Border.Lines="All" Border.Style="Dot" Border.Color="#000000" Left="576.45" Top="538.65"
                        HorzAlign="Center" VertAlign="Center" Name="Text1175" Width="19.45" Height="19.45"
                        Padding="2, 0, 2, 0" Font="Comic Sans MS, 8pt"/>
            <TextObject VertAlign="Center" HorzAlign="Center" Top="538.65" Left="595.35" Border.Color="#000000"
                        Border.Style="Dot" Border.Lines="All" Name="Text1176" Width="19.45" Height="19.45"
                        Padding="2, 0, 2, 0" Font="Comic Sans MS, 8pt"/>
            <TextObject VertAlign="Center" HorzAlign="Center" Top="538.65" Left="387.45" Name="Text1177"
                        Text="Данная декларация представлена (код)" Width="189.55" Height="19.45" Padding="2, 0, 2, 0"
                        Font="Comic Sans MS, 6pt"/>
            <TextObject VertAlign="Center" HorzAlign="Center" Top="567.00" Left="425.25" Border.Color="#000000"
                        Border.Style="Dot" Border.Lines="All" Name="Text1178" Width="19.45" Height="19.45"
                        Padding="2, 0, 2, 0" Font="Comic Sans MS, 8pt"/>
            <TextObject Border.Lines="All" Border.Style="Dot" Border.Color="#000000" Left="406.35" Top="567.00"
                        HorzAlign="Center" VertAlign="Center" Name="Text1179" Width="19.45" Height="19.45"
                        Padding="2, 0, 2, 0" Font="Comic Sans MS, 8pt"/>
            <TextObject VertAlign="Center" HorzAlign="Center" Top="567.00" Left="387.45" Border.Color="#000000"
                        Border.Style="Dot" Border.Lines="All" Name="Text1180" Width="19.45" Height="19.45"
                        Padding="2, 0, 2, 0" Font="Comic Sans MS, 8pt"/>
            <TextObject Left="368.55" Top="567.00" VertAlign="Center" Name="Text1181" Text="на" Width="19.45"
                        Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            <TextObject VertAlign="Center" Top="595.35" Left="368.55" Name="Text1182"
                        Text="с приложением подтверждающих документов " Width="208.45" Height="19.45"
                        Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            <TextObject VertAlign="Center" Top="567.00" Left="453.60" Name="Text1183" Text="страницах" Width="47.80"
                        Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            <TextObject Left="368.55" Top="623.70" VertAlign="Center" Name="Text1184" Text="или их копий на"
                        Width="76.15" Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            <TextObject Border.Lines="All" Border.Style="Dot" Border.Color="#000000" Left="472.50" Top="623.70"
                        HorzAlign="Center" VertAlign="Center" Name="Text1185" Width="19.45" Height="19.45"
                        Padding="2, 0, 2, 0" Font="Comic Sans MS, 8pt"/>
            <TextObject VertAlign="Center" HorzAlign="Center" Top="623.70" Left="491.40" Border.Color="#000000"
                        Border.Style="Dot" Border.Lines="All" Name="Text1186" Width="19.45" Height="19.45"
                        Padding="2, 0, 2, 0" Font="Comic Sans MS, 8pt"/>
            <TextObject Border.Lines="All" Border.Style="Dot" Border.Color="#000000" Left="453.60" Top="623.70"
                        HorzAlign="Center" VertAlign="Center" Name="Text1187" Width="19.45" Height="19.45"
                        Padding="2, 0, 2, 0" Font="Comic Sans MS, 8pt"/>
            <TextObject VertAlign="Center" Top="623.70" Left="519.75" Name="Text1189" Text="листах" Width="38.35"
                        Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            <TextObject VertAlign="Center" Top="633.15" Left="368.55" Name="Text1190"
                        Text="Дата представления&#13;&#13;&#13;&#13;&#10;декларации " Width="95.05" Height="57.25"
                        Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            <TextObject VertAlign="Center" HorzAlign="Center" Top="652.05" Left="453.60" Border.Color="#000000"
                        Border.Style="Dot" Border.Lines="All" Name="Text1191" Text="-" Width="19.45" Height="19.45"
                        Padding="2, 0, 2, 0" Font="Comic Sans MS, 8pt"/>
            <TextObject Border.Lines="All" Border.Style="Dot" Border.Color="#000000" Left="472.50" Top="652.05"
                        HorzAlign="Center" VertAlign="Center" Name="Text1192" Text="-" Width="19.45" Height="19.45"
                        Padding="2, 0, 2, 0" Font="Comic Sans MS, 8pt"/>
            <TextObject HorzAlign="Center" Left="472.50" Top="652.05" VertAlign="Center" Name="Text1193" Text="-"
                        Width="47.80" Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt, style=Bold"/>
            <TextObject Border.Lines="All" Border.Style="Dot" Border.Color="#000000" Left="500.85" Top="652.05"
                        HorzAlign="Center" VertAlign="Center" Name="Text1194" Text="-" Width="19.45" Height="19.45"
                        Padding="2, 0, 2, 0" Font="Comic Sans MS, 8pt"/>
            <TextObject Border.Lines="All" Border.Style="Dot" Border.Color="#000000" Left="519.75" Top="652.05"
                        HorzAlign="Center" VertAlign="Center" Name="Text1195" Text="-" Width="19.45" Height="19.45"
                        Padding="2, 0, 2, 0" Font="Comic Sans MS, 8pt"/>
            <TextObject VertAlign="Center" Top="652.05" Left="519.75" HorzAlign="Center" Name="Text1196" Text="-"
                        Width="47.80" Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt, style=Bold"/>
            <TextObject Border.Lines="All" Border.Style="Dot" Border.Color="#000000" Left="548.10" Top="652.05"
                        HorzAlign="Center" VertAlign="Center" Name="Text1197" Text="-" Width="19.45" Height="19.45"
                        Padding="2, 0, 2, 0" Font="Comic Sans MS, 8pt"/>
            <TextObject VertAlign="Center" HorzAlign="Center" Top="652.05" Left="567.00" Border.Color="#000000"
                        Border.Style="Dot" Border.Lines="All" Name="Text1199" Text="-" Width="19.45" Height="19.45"
                        Padding="2, 0, 2, 0" Font="Comic Sans MS, 8pt"/>
            <TextObject Left="585.90" Top="708.75" VertAlign="Center" Name="Text1204" Text="Подпись" Width="76.15"
                        Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            <TextObject VertAlign="Center" Top="708.75" Left="378.00" Name="Text1205" Text="Фамилия, И.О.*"
                        Width="76.15" Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            <TextObject Border.Color="#000000" Border.Lines="Bottom" VertAlign="Center" Top="699.30" Left="548.10"
                        Name="Text1206" Width="122.85" Height="10" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            <TextObject Left="359.10" Top="699.30" VertAlign="Center" Border.Lines="Bottom" Border.Color="#000000"
                        Name="Text1207" Width="122.85" Height="10" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            <ShapeObject Fill.Color="#000000" Top="795.45" Left="652.05" Name="Shape4" Shape="Rectangle" Width="19.45"
                         Height="18.90"/>
        </DataBand>
    </ReportPage>
    <ReportPage Name="Page2">
        <DataBand Name="Data4" Width="718.20" Height="831.57">
            <TextObject HorzAlign="Center" VertAlign="Center" Top="18.90" Left="151.20" Name="Text585" Text="ИНН"
                        Width="47.25" Height="18.90" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>

            @php
                $inn = mb_str_split((string)($formData['INN'] ?? ''))
            @endphp
            @for($i = 198.45, $j = 0; $j <= 11; $i += 18.9, $j++)
                <TextObject VertAlign="Center" Border.Style="Dot" Border.Color="#000000" Border.Lines="All" Top="18.90"
                            Left="{{$i}}" Name="{{'inn'.$j.'1'}}" Text="{{$inn[$j] ?? '-'}}" Width="18.90" Height="18.90" Padding="2, 0, 2, 0"
                            Font="Tahoma, 8pt"/>
            @endfor

            <TextObject Left="349.65" Top="56.70" VertAlign="Center" HorzAlign="Center" Name="Text600" Text="Стр."
                        Width="47.25" Height="18.90" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            <TextObject Left="396.90" Top="56.70" Border.Lines="All" Border.Color="#000000" Border.Style="Dot"
                        VertAlign="Center" Name="Text601" Text="-" Width="18.90" Height="18.90" Padding="2, 0, 2, 0"
                        Font="Tahoma, 8pt"/>
            <TextObject VertAlign="Center" Border.Style="Dot" Border.Color="#000000" Border.Lines="All" Top="56.70"
                        Left="434.70" Name="Text602" Text="-" Width="18.90" Height="18.90" Padding="2, 0, 2, 0"
                        Font="Tahoma, 8pt"/>
            <TextObject Left="415.80" Top="56.70" Border.Lines="All" Border.Color="#000000" Border.Style="Dot"
                        VertAlign="Center" Name="Text603" Text="0" Width="18.90" Height="18.90" Padding="2, 0, 2, 0"
                        Font="Tahoma, 8pt"/>
            <TextObject Left="37.80" Top="85.05" VertAlign="Center" HorzAlign="Center" Name="Text604" Text="Фамилия"
                        Width="47.25" Height="18.90" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>

            <TextObject Border.Color="#000000" Border.Lines="Bottom" HorzAlign="Center" VertAlign="Center" Top="85.05"
                        Left="85.05" Name="Text605" Width="396.90" Height="19.45" Padding="2, 0, 2, 0"
                        Font="Comic Sans MS, 6pt"/>

            <TextObject HorzAlign="Center" VertAlign="Center" Top="85.05" Left="481.95" Name="Text606" Text="И."
                        Width="18.90" Height="18.90" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>

            <TextObject Left="500.85" Top="85.05" VertAlign="Center" HorzAlign="Center" Border.Lines="Bottom"
                        Border.Color="#000000" Name="Text607" Width="85.05" Height="19.45" Padding="2, 0, 2, 0"
                        Font="Comic Sans MS, 6pt"/>
            <TextObject Left="585.90" Top="85.05" VertAlign="Center" HorzAlign="Center" Name="Text608" Text="О."
                        Width="18.90" Height="18.90" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>

            <TextObject Border.Color="#000000" Border.Lines="Bottom" HorzAlign="Center" VertAlign="Center" Top="85.05"
                        Left="604.80" Name="Text609" Width="85.05" Height="19.45" Padding="2, 0, 2, 0"
                        Font="Comic Sans MS, 6pt"/>

            <TextObject HorzAlign="Center" VertAlign="Center" Top="113.40" Left="37.80" Name="Text610"
                        Text="Раздел 1. Сведения о суммах налога, подлежащих уплате (доплате) в бюджет/возврату из бюджета "
                        Width="652.05" Height="18.90" Padding="2, 0, 2, 0" Font="Comic Sans MS, 7pt, style=Bold"/>
            <TextObject Left="37.80" Top="132.30" VertAlign="Center" Name="Text611"
                        Text="1. Сведения о суммах налога, подлежащих уплате (доплате) в бюджет (за исключением сумм налога, уплачиваемого в&#13;&#13;&#10;соответствии с пунктом 7 статьи 227 Налогового кодекса Российской Федерации)/возврату из бюджета"
                        Width="652.05" Height="28.35" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt, style=Bold"/>
            <TextObject HorzAlign="Center" VertAlign="Center" Top="160.65" Left="132.30" Name="Text612"
                        Text="Показатели" Width="56.70" Height="18.90" Padding="2, 0, 2, 0"
                        Font="Comic Sans MS, 6pt, style=Italic"/>
            <TextObject Left="311.85" Top="160.65" VertAlign="Center" HorzAlign="Center" Name="Text613"
                        Text="Код строки" Width="56.70" Height="18.90" Padding="2, 0, 2, 0"
                        Font="Comic Sans MS, 6pt, style=Italic"/>
            <TextObject HorzAlign="Center" VertAlign="Center" Top="160.65" Left="481.95" Name="Text614"
                        Text="Значения показателей" Width="113.40" Height="19.45" Padding="2, 0, 2, 0"
                        Font="Comic Sans MS, 6pt, style=Italic"/>
            <TextObject HorzAlign="Center" VertAlign="Center" Top="170.10" Left="141.75" Name="Text615" Text="1"
                        Width="38.35" Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            <TextObject Left="321.30" Top="170.10" VertAlign="Center" HorzAlign="Center" Name="Text616" Text="2"
                        Width="38.35" Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            <TextObject HorzAlign="Center" VertAlign="Center" Top="170.10" Left="519.75" Name="Text617" Text="3"
                        Width="38.35" Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>

            @php
                $excludePayment2227 = $formData['excludePayment2-227'][0] ?? [];
                $codeBudgetClassification020 = mb_str_split((string)($excludePayment2227['codeBudgetClassification020'] ?? ''));
            @endphp
            @for($i = 387.45, $j = 0; $j <= 15; $i += 18.9, $j++)
                <TextObject Left="{{$i}}" Top="189" Border.Lines="All" Border.Color="#000000" Border.Style="Dot"
                            VertAlign="Center" Name="{{'codeBudgetClassification020'.$j}}" Text="{{$codeBudgetClassification020[$j] ?? '-'}}" Width="18.90" Height="18.90" Padding="2, 0, 2, 0"
                            Font="Tahoma, 8pt"/>
            @endfor


            <TextObject HorzAlign="Center" VertAlign="Center" Top="189" Left="37.80" Name="Text618"
                        Text="Код бюджетной классификации" Width="141.75" Height="19.45" Padding="2, 0, 2, 0"
                        Font="Comic Sans MS, 6pt"/>
            <TextObject HorzAlign="Center" VertAlign="Center" Top="189" Left="311.85" Name="Text619" Text="020"
                        Width="56.70" Height="18.90" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>

            @php
                $codeOKTMO030 = mb_str_split((string)($excludePayment2227['codeOKTMO030'] ?? ''));
            @endphp
            @for($i = 387.45, $j = 0; $j <= 10; $i += 18.9, $j++)
                <TextObject VertAlign="Center" Border.Style="Dot" Border.Color="#000000" Border.Lines="All" Top="217.35"
                            Left="{{$i}}" Name="{{'codeOKTMO030'.$j}}" Text="{{$codeOKTMO030[$j] ?? '-'}}" Width="18.90" Height="18.90" Padding="2, 0, 2, 0"
                            Font="Tahoma, 8pt"/>
            @endfor

            <TextObject Left="37.80" Top="217.35" VertAlign="Center" Name="Text640" Text="Код по ОКТМО" Width="141.75"
                        Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            <TextObject Left="311.85" Top="217.35" VertAlign="Center" HorzAlign="Center" Name="Text641" Text="030"
                        Width="56.70" Height="18.90" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>

            @php
                $sumTaxesForPayToBudget040 = mb_str_split((string)($excludePayment2227['sumTaxesForPayToBudget040'] ?? ''));
            @endphp
            @for($i = 387.45, $j = 0; $j <= 12; $i += 18.9, $j++)
                <TextObject Left="{{$i}}" Top="245.70" Border.Lines="All" Border.Color="#000000" Border.Style="Dot"
                            VertAlign="Center" Name="{{'sumTaxesForPayToBudget040'.$j}}" Text="{{$sumTaxesForPayToBudget040[$j] ?? '-'}}" Width="18.90" Height="18.90" Padding="2, 0, 2, 0"
                            Font="Tahoma, 8pt"/>
            @endfor

            <TextObject HorzAlign="Center" VertAlign="Center" Top="245.70" Left="311.85" Name="Text664" Text="040"
                        Width="56.70" Height="18.90" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            <TextObject VertAlign="Center" Top="245.70" Left="37.80" Name="Text665"
                        Text="Сумма налога, подлежащая уплате (доплате) в бюджет (руб.)" Width="245.70" Height="19.45"
                        Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>

            @php
                $sumTaxesForReturnFromBudget050 = mb_str_split((string)($excludePayment2227['sumTaxesForReturnFromBudget050'] ?? ''));
            @endphp
            @for($i = 387.45, $j = 0; $j <= 12; $i += 18.9, $j++)
                <TextObject VertAlign="Center" Border.Style="Dot" Border.Color="#000000" Border.Lines="All" Top="274.05"
                            Left="{{$i}}" Name="{{'sumTaxesForReturnFromBudget050'.$j}}" Text="{{$sumTaxesForReturnFromBudget050[$j] ?? '-'}}" Width="18.90" Height="18.90" Padding="2, 0, 2, 0"
                            Font="Tahoma, 8pt"/>
            @endfor

            <TextObject Left="37.80" Top="274.05" VertAlign="Center" Name="Text670"
                        Text="Сумма налога, подлежащая возврату из бюджета (руб.)" Width="245.70" Height="19.45"
                        Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            <TextObject Left="311.85" Top="274.05" VertAlign="Center" HorzAlign="Center" Name="Text671" Text="050"
                        Width="56.70" Height="18.90" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>

            <TextObject Border.Color="#000000" Border.Lines="Top" VertAlign="Center" Top="302.40" Left="37.80"
                        Name="Text699"
                        Text="2. Сведения о суммах налога (авансового платежа по налогу), уплачиваемого в соответствии с пунктом 7 статьи 227&#13;&#13;&#10;Налогового кодекса Российской Федерации"
                        Width="652.05" Height="28.35" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt, style=Bold"/>

            @php
                $payment227 = $formData['payment2-227'][0] ?? [];
                $codeBudgetClassification060 = mb_str_split((string)($payment227['codeBudgetClassification060'] ?? ''));
            @endphp
            @for($i = 387.45, $j = 0; $j <= 15; $i += 18.9, $j++)
                <TextObject VertAlign="Center" Border.Style="Dot" Border.Color="#000000" Border.Lines="All" Top="340.20"
                            Left="{{$i}}" Name="{{'codeBudgetClassification060'.$j}}" Text="{{$codeBudgetClassification060[$j] ?? '-'}}" Width="18.90" Height="18.90" Padding="2, 0, 2, 0"
                            Font="Tahoma, 8pt"/>
            @endfor


            <TextObject Left="311.85" Top="340.20" VertAlign="Center" HorzAlign="Center" Name="Text716" Text="060"
                        Width="56.70" Height="18.90" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            <TextObject Left="37.80" Top="340.20" VertAlign="Center" HorzAlign="Center" Name="Text717"
                        Text="Код бюджетной классификации" Width="141.75" Height="19.45" Padding="2, 0, 2, 0"
                        Font="Comic Sans MS, 6pt"/>

            @php
                $codeOKTMO070 = mb_str_split((string)($payment227['codeOKTMO070'] ?? ''));
            @endphp
            @for($i = 387.45, $j = 0; $j <= 10; $i += 18.9, $j++)
                <TextObject Left="{{$i}}" Top="378" Border.Lines="All" Border.Color="#000000" Border.Style="Dot"
                            VertAlign="Center" Name="{{'codeOKTMO070'.$j}}" Text="{{$codeOKTMO070[$j] ?? '-'}}" Width="18.90" Height="18.90" Padding="2, 0, 2, 0"
                            Font="Tahoma, 8pt"/>
            @endfor

            <TextObject HorzAlign="Center" VertAlign="Center" Top="378" Left="311.85" Name="Text729" Text="070"
                        Width="56.70" Height="18.90" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            <TextObject VertAlign="Center" Top="378" Left="37.80" Name="Text730" Text="Код по ОКТМО" Width="141.75"
                        Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>

            @php
                $sumAdvancedPaymentFirstQuarter080 = mb_str_split((string)($payment227['sumAdvancedPaymentFirstQuarter080'] ?? ''));
            @endphp
            @for($i = 387.45, $j = 0; $j <= 12; $i += 18.9, $j++)
                <TextObject VertAlign="Center" Border.Style="Dot" Border.Color="#000000" Border.Lines="All" Top="406.35"
                            Left="{{$i}}" Name="{{'sumAdvancedPaymentFirstQuarter080'.$j}}" Text="{{$sumAdvancedPaymentFirstQuarter080[$j] ?? '-'}}" Width="18.90" Height="18.90" Padding="2, 0, 2, 0"
                            Font="Tahoma, 8pt"/>
            @endfor

            <TextObject Border.Style="Dot" Border.Color="#000000" Border.Lines="Top" Left="37.80" Top="368.55"
                        VertAlign="Center" Name="Text731" Width="652.05" Height="10" Padding="2, 0, 2, 0"
                        Font="Comic Sans MS, 6pt"/>
            <TextObject Left="37.80" Top="406.35" VertAlign="Center" Name="Text745"
                        Text="Сумма авансового платежа к уплате за первый квартал&#13;&#13;&#10;(руб.)" Width="245.70"
                        Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            <TextObject Left="311.85" Top="406.35" VertAlign="Center" HorzAlign="Center" Name="Text746" Text="080"
                        Width="56.70" Height="18.90" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>

            @php
                $codeOKTMO090 = mb_str_split((string)($payment227['codeOKTMO090'] ?? ''));
            @endphp
            @for($i = 387.45, $j = 0; $j <= 10; $i += 18.9, $j++)
                <TextObject VertAlign="Center" Border.Style="Dot" Border.Color="#000000" Border.Lines="All" Top="444.15"
                            Left="{{$i}}" Name="{{'codeOKTMO090'.$j}}" Text="{{$codeOKTMO090[$j] ?? '-'}}" Width="18.90" Height="18.90" Padding="2, 0, 2, 0"
                            Font="Tahoma, 8pt"/>
            @endfor

            <TextObject VertAlign="Center" Top="434.70" Left="37.80" Border.Lines="Top" Border.Color="#000000"
                        Name="Text773" Width="652.05" Height="10" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>

            @php
                $sumAdvancedPaymentHalfYear100 = mb_str_split((string)($payment227['sumAdvancedPaymentHalfYear100'] ?? ''));
            @endphp
            @for($i = 387.45, $j = 0; $j <= 12; $i += 18.9, $j++)
                <TextObject Left="{{$i}}" Top="472.50" Border.Lines="All" Border.Color="#000000" Border.Style="Dot"
                            VertAlign="Center" Name="{{'sumAdvancedPaymentHalfYear100'.$j}}" Text="{{$sumAdvancedPaymentHalfYear100[$j] ?? '-'}}" Width="18.90" Height="18.90" Padding="2, 0, 2, 0"
                            Font="Tahoma, 8pt"/>
            @endfor


            <TextObject HorzAlign="Center" VertAlign="Center" Top="472.50" Left="311.85" Name="Text787" Text="100"
                        Width="56.70" Height="18.90" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            <TextObject VertAlign="Center" Top="472.50" Left="37.80" Name="Text788"
                        Text="Сумма авансового платежа к уплате за полугодие (руб.)" Width="245.70" Height="19.45"
                        Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            <TextObject Left="37.80" Top="444.15" VertAlign="Center" Name="Text789" Text="Код по ОКТМО" Width="141.75"
                        Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            <TextObject Left="311.85" Top="444.15" VertAlign="Center" HorzAlign="Center" Name="Text790" Text="090"
                        Width="56.70" Height="18.90" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>

            <TextObject Left="37.80" Top="500.85" VertAlign="Center" Name="Text802"
                        Text="Сумма авансового платежа к уменьшению за полугодие&#13;&#13;&#10;(руб.) " Width="264.60"
                        Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            <TextObject Left="311.85" Top="500.85" VertAlign="Center" HorzAlign="Center" Name="Text803" Text="110"
                        Width="56.70" Height="18.90" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>

            @php
                $sumAdvancedDecreaseHalfYear110 = mb_str_split((string)($payment227['sumAdvancedDecreaseHalfYear110'] ?? ''));
            @endphp
            @for($i = 387.45, $j = 0; $j <= 12; $i += 18.9, $j++)
                <TextObject VertAlign="Center" Border.Style="Dot" Border.Color="#000000" Border.Lines="All" Top="500.85"
                            Left="{{$i}}" Name="{{'sumAdvancedDecreaseHalfYear110'.$j}}" Text="{{$sumAdvancedDecreaseHalfYear110[$j] ?? '-'}}" Width="18.90" Height="18.90" Padding="2, 0, 2, 0"
                            Font="Tahoma, 8pt"/>
            @endfor

            <TextObject HorzAlign="Center" VertAlign="Center" Top="538.65" Left="311.85" Name="Text931" Text="120"
                        Width="56.70" Height="18.90" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            <TextObject VertAlign="Center" Top="538.65" Left="37.80" Name="Text932" Text="Код по ОКТМО" Width="141.75"
                        Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>

            @php
                $codeOKTMO120 = mb_str_split((string)($payment227['codeOKTMO120'] ?? ''));
            @endphp
            @for($i = 387.45, $j = 0; $j <= 10; $i += 18.9, $j++)
                <TextObject Left="{{$i}}" Top="538.65" Border.Lines="All" Border.Color="#000000" Border.Style="Dot"
                            VertAlign="Center" Name="{{'codeOKTMO120'.$j}}" Text="{{$codeOKTMO120[$j] ?? '-'}}" Width="18.90" Height="18.90" Padding="2, 0, 2, 0"
                            Font="Tahoma, 8pt"/>
            @endfor

            <TextObject Left="37.80" Top="567" VertAlign="Center" Name="Text933"
                        Text="Сумма авансового платежа к уплате за девять месяцев&#13;&#13;&#10;(руб.) " Width="245.70"
                        Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            <TextObject Left="311.85" Top="567" VertAlign="Center" HorzAlign="Center" Name="Text934" Text="130"
                        Width="56.70" Height="18.90" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>

            @php
                $sumAdvancedPayedNineMonth130 = mb_str_split((string)($payment227['sumAdvancedPayedNineMonth130'] ?? ''));
            @endphp
            @for($i = 387.45, $j = 0; $j <= 12; $i += 18.9, $j++)
                <TextObject VertAlign="Center" Border.Style="Dot" Border.Color="#000000" Border.Lines="All" Top="567"
                            Left="{{$i}}" Name="{{'sumAdvancedPayedNineMonth130'.$j}}" Text="{{$sumAdvancedPayedNineMonth130[$j] ?? '-'}}" Width="18.90" Height="18.90" Padding="2, 0, 2, 0"
                            Font="Tahoma, 8pt"/>
            @endfor


            <TextObject HorzAlign="Center" VertAlign="Center" Top="595.35" Left="311.85" Name="Text918" Text="140"
                        Width="56.70" Height="18.90" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            <TextObject VertAlign="Center" Top="595.35" Left="37.80" Name="Text919"
                        Text="Сумма авансового платежа к уменьшению за девять&#13;&#13;&#10;месяцев (руб.) "
                        Width="245.70" Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>

            @php
                $sumAdvancedDecreaseNineMonth140 = mb_str_split((string)($payment227['sumAdvancedDecreaseNineMonth140'] ?? ''));
            @endphp
            @for($i = 387.45, $j = 0; $j <= 12; $i += 18.9, $j++)
                <TextObject Left="{{$i}}" Top="595.35" Border.Lines="All" Border.Color="#000000" Border.Style="Dot"
                            VertAlign="Center" Name="{{'sumAdvancedDecreaseNineMonth140'.$j}}" Text="{{$sumAdvancedDecreaseNineMonth140[$j] ?? '-'}}" Width="18.90" Height="18.90" Padding="2, 0, 2, 0"
                            Font="Tahoma, 8pt"/>
            @endfor

            <TextObject Border.Color="#000000" Border.Lines="Top" Left="37.80" Top="529.20" VertAlign="Center"
                        Name="Text948" Width="652.05" Height="10" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            <TextObject VertAlign="Center" Top="623.70" Left="37.80" Border.Lines="Top" Border.Color="#000000"
                        Name="Text949" Width="652.05" Height="10" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            <TextObject Left="37.80" Top="633.15" VertAlign="Center" Name="Text965" Text="Код по ОКТМО" Width="141.75"
                        Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            <TextObject Left="311.85" Top="633.15" VertAlign="Center" HorzAlign="Center" Name="Text966" Text="150"
                        Width="56.70" Height="18.90" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>

            @php
                $codeOKTMO150 = mb_str_split((string)($payment227['codeOKTMO150'] ?? ''));
            @endphp
            @for($i = 387.45, $j = 0; $j <= 10; $i += 18.9, $j++)
                <TextObject VertAlign="Center" Border.Style="Dot" Border.Color="#000000" Border.Lines="All" Top="633.15"
                            Left="{{$i}}" Name="{{'codeOKTMO150'.$j}}" Text="{{$codeOKTMO150[$j] ?? '-'}}" Width="18.90" Height="18.90" Padding="2, 0, 2, 0"
                            Font="Tahoma, 8pt"/>
            @endfor

            <TextObject HorzAlign="Center" VertAlign="Center" Top="661.50" Left="311.85" Name="Text963" Text="160"
                        Width="56.70" Height="18.90" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            <TextObject VertAlign="Center" Top="661.50" Left="37.80" Name="Text964"
                        Text="Сумма авансового платежа к уплате за год &#13;&#13;&#10;(руб.) " Width="245.70"
                        Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>

            @php
                $sumAdvancedPayedYear160 = mb_str_split((string)($payment227['sumAdvancedPayedYear160'] ?? ''));
            @endphp
            @for($i = 387.45, $j = 0; $j <= 12; $i += 18.9, $j++)
                <TextObject Left="{{$i}}" Top="661.50" Border.Lines="All" Border.Color="#000000" Border.Style="Dot"
                            VertAlign="Center" Name="{{'sumAdvancedPayedYear160'.$j}}" Text="{{$sumAdvancedPayedYear160[$j] ?? '-'}}" Width="18.90" Height="18.90" Padding="2, 0, 2, 0"
                            Font="Tahoma, 8pt"/>
            @endfor

            <TextObject Left="37.80" Top="689.85" VertAlign="Center" Name="Text978"
                        Text="Сумма авансового платежа к уменьшению за год&#13;&#13;&#10; (руб.) "
                        Width="245.70" Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            <TextObject Left="311.85" Top="689.85" VertAlign="Center" HorzAlign="Center" Name="Text979" Text="170"
                        Width="56.70" Height="18.90" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>

            @php
                $sumAdvancedDecreaseYear170 = mb_str_split((string)($payment227['sumAdvancedDecreaseYear170'] ?? ''));
            @endphp
            @for($i = 387.45, $j = 0; $j <= 12; $i += 18.9, $j++)
                <TextObject VertAlign="Center" Border.Style="Dot" Border.Color="#000000" Border.Lines="All" Top="689.85"
                            Left="{{$i}}" Name="{{'sumAdvancedDecreaseYear170'.$i}}" Text="{{$sumAdvancedDecreaseYear170[$j] ?? '-'}}" Width="18.90" Height="18.90" Padding="2, 0, 2, 0"
                            Font="Tahoma, 8pt"/>
            @endfor


            <TextObject HorzAlign="Center" VertAlign="Center" Top="718.20" Left="37.80" Name="Text993"
                        Text="Достоверность и полноту сведений, указанных на данной странице, подтверждаю:"
                        Width="652.05" Height="10" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt, style=Bold"/>
            <TextObject Border.Color="#000000" Border.Lines="Top" Left="170.10" Top="746.55" VertAlign="Center"
                        HorzAlign="Center" Name="Text994" Width="94.50" Height="10" Padding="2, 0, 2, 0"
                        Font="Comic Sans MS, 6pt, style=Bold"/>
            <TextObject HorzAlign="Center" VertAlign="Center" Top="746.55" Left="434.70" Border.Lines="Top"
                        Border.Color="#000000" Name="Text995" Width="94.50" Height="10" Padding="2, 0, 2, 0"
                        Font="Comic Sans MS, 6pt, style=Bold"/>
            <TextObject HorzAlign="Center" VertAlign="Center" Top="727.65" Left="245.70" Name="Text996" Text="(подпись)"
                        Width="75.60" Height="28.35" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            <TextObject Left="500.85" Top="727.65" VertAlign="Center" HorzAlign="Center" Name="Text997" Text="(дата)"
                        Width="85.05" Height="28.35" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            <TextObject Fill.Color="#000000" Left="37.80" Top="756" VertAlign="Center" HorzAlign="Center" Name="Text998"
                        Width="19.45" Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            <TextObject HorzAlign="Center" VertAlign="Center" Top="756" Left="670.95" Fill.Color="#000000"
                        Name="Text999" Width="19.45" Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
        </DataBand>
    </ReportPage>
    <ReportPage Name="Page3">
        <DataBand Name="Data5" Width="718.20" Height="955.00">
            <TextObject VertAlign="Center" HorzAlign="Center" Top="18.90" Left="151.20" Name="Text1209" Text="ИНН"
                        Width="47.25" Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            @for($i = 198.45, $j = 0; $j < 12; $i += 18.9, $j++)
                <TextObject Border.Style="Dot" Border.Color="#000000" Border.Lines="All" Left="{{ $i }}" Top="18.90"
                            VertAlign="Center" Name="{{'inn' . $j}}2" Text="{{$inn[$j] ?? '-'}}" Width="18.90" Height="19.45" Padding="2, 0, 2, 0"
                            Font="Comic Sans MS, 8pt"/>
            @endfor

            <TextObject Left="349.65" Top="56.70" HorzAlign="Center" VertAlign="Center" Name="Text1225" Text="Стр. "
                        Width="47.25" Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            <TextObject VertAlign="Center" Top="56.70" Left="396.90" Border.Lines="All" Border.Color="#000000"
                        Border.Style="Dot" Name="Text1226" Text="-" Width="18.90" Height="19.45" Padding="2, 0, 2, 0"
                        Font="Comic Sans MS, 8pt"/>
            <TextObject Border.Style="Dot" Border.Color="#000000" Border.Lines="All" Left="434.70" Top="56.70"
                        VertAlign="Center" Name="Text1227" Text="-" Width="18.90" Height="19.45" Padding="2, 0, 2, 0"
                        Font="Comic Sans MS, 8pt"/>
            <TextObject VertAlign="Center" Top="56.70" Left="415.80" Border.Lines="All" Border.Color="#000000"
                        Border.Style="Dot" Name="Text1228" Text="-" Width="18.90" Height="19.45" Padding="2, 0, 2, 0"
                        Font="Comic Sans MS, 8pt"/>
            <TextObject Left="37.80" Top="85.05" HorzAlign="Center" VertAlign="Center" Name="Text1232" Text="Фамилия"
                        Width="47.25" Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            <TextObject Border.Color="#000000" Border.Lines="Bottom" VertAlign="Center" HorzAlign="Center" Top="94.50"
                        Left="85.05" Name="Text1233" Width="396.90" Height="10" Padding="2, 0, 2, 0"
                        Font="Comic Sans MS, 6pt"/>
            <TextObject VertAlign="Center" HorzAlign="Center" Top="85.05" Left="481.95" Name="Text1234" Text="И."
                        Width="18.90" Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            <TextObject Left="500.85" Top="94.50" HorzAlign="Center" VertAlign="Center" Border.Lines="Bottom"
                        Border.Color="#000000" Name="Text1235" Width="85.05" Height="10" Padding="2, 0, 2, 0"
                        Font="Comic Sans MS, 6pt"/>
            <TextObject Left="585.90" Top="85.05" HorzAlign="Center" VertAlign="Center" Name="Text1236" Text="О."
                        Width="18.90" Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            <TextObject Border.Color="#000000" Border.Lines="Bottom" VertAlign="Center" HorzAlign="Center" Top="94.50"
                        Left="604.80" Name="Text1237" Width="85.05" Height="10" Padding="2, 0, 2, 0"
                        Font="Comic Sans MS, 6pt"/>
            <TextObject VertAlign="Center" HorzAlign="Center" Top="122.85" Left="37.80" Name="Text1238"
                        Text=" Раздел 2. Расчет налоговой базы и суммы налога по доходам " Width="652.05" Height="19.45"
                        Padding="2, 0, 2, 0" Font="Comic Sans MS, 7pt, style=Bold"/>
            <TextObject Left="66.15" Top="141.75" VertAlign="Center" Name="Text1239"
                        Text="Расчет налоговой базы (руб. коп.) " Width="179.55" Height="19.45" Padding="2, 0, 2, 0"
                        Font="Comic Sans MS, 6pt, style=Bold"/>
            <TextObject VertAlign="Center" Top="141.75" Left="37.80" Name="Text1240" Text="1." Width="18.90"
                        Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt, style=Bold"/>
            <TextObject VertAlign="Center" HorzAlign="Center" Top="141.75" Left="368.55" Name="Text1241" Text="001"
                        Width="28.35" Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>

            @php
                $incomeSum010 = (string)($formData['incomeSum010'] ?? '');
                $mainPart = array_reverse(mb_str_split(substr($incomeSum010, 0, strpos($incomeSum010, "."))));
                $penny = mb_str_split(substr($incomeSum010, strpos($incomeSum010, ".") + 1, 2));
            @endphp
            @for($i = 623.70, $j = 0; $j <= 12; $i -= 18.9, $j++)
                <TextObject VertAlign="Center" Top="170.10" Left="{{$i}}" Border.Lines="All" Border.Color="#000000"
                            Border.Style="Dot" Name="{{'incomeSum010'.$j}}" Text="{{$mainPart[$j] ?? '-'}}" Width="18.90" Height="19.45" Padding="2, 0, 2, 0"
                            Font="Comic Sans MS, 8pt"/>
            @endfor

            <TextObject VertAlign="Center" HorzAlign="Center" Top="170.10" Left="614.25" Name="Text1255" Text="."
                        Width="66.15" Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt, style=Bold"/>
            <TextObject Border.Style="Dot" Border.Color="#000000" Border.Lines="All" Left="652.05" Top="170.10"
                        VertAlign="Center" Name="Text1256" Text="{{$penny[0] ?? '-'}}" Width="18.90" Height="19.45" Padding="2, 0, 2, 0"
                        Font="Comic Sans MS, 8pt"/>
            <TextObject VertAlign="Center" Top="170.10" Left="670.95" Border.Lines="All" Border.Color="#000000"
                        Border.Style="Dot" Name="Text1257" Text="{{$penny[1] ?? '-'}}" Width="18.90" Height="19.45" Padding="2, 0, 2, 0"
                        Font="Comic Sans MS, 8pt"/>

            @php $incomeCode = mb_str_split((string)($formData['incomeCode001'] ?? '')) @endphp
            <TextObject Border.Style="Dot" Border.Color="#000000" Border.Lines="All" Left="396.90" Top="141.75"
                        VertAlign="Center" Name="incomeCode001_1" Text="{{ $incomeCode[0] ?? '-'}}" Width="18.90" Height="19.45" Padding="2, 0, 2, 0"
                        Font="Comic Sans MS, 8pt"/>
            <TextObject VertAlign="Center" Top="141.75" Left="415.80" Border.Lines="All" Border.Color="#000000"
                        Border.Style="Dot" Name="incomeCode001_2" Text="{{ $incomeCode[1] ?? '-'}}" Width="18.90" Height="19.45" Padding="2, 0, 2, 0"
                        Font="Comic Sans MS, 8pt"/>

            <TextObject Left="292.95" Top="141.75" HorzAlign="Center" VertAlign="Center" Name="Text1260"
                        Text="Код вида дохода" Width="75.60" Height="19.45" Padding="2, 0, 2, 0"
                        Font="Comic Sans MS, 6pt"/>
            <TextObject Left="37.80" Top="170.10" VertAlign="Center" Name="Text1261" Text="1.1." Width="18.90"
                        Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            <TextObject VertAlign="Center" Top="170.10" Left="66.15" Name="Text1262" Text="Сумма доходов" Width="179.55"
                        Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            <TextObject Left="368.55" Top="170.10" HorzAlign="Center" VertAlign="Center" Name="Text1263" Text="010"
                        Width="28.35" Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            <TextObject VertAlign="Center" HorzAlign="Center" Top="198.45" Left="368.55" Name="Text1265" Text="020"
                        Width="28.35" Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            <TextObject Left="66.15" Top="198.45" VertAlign="Center" Name="Text1266"
                        Text="Сумма доходов, не подлежащих налогообложению " Width="179.55" Height="19.45"
                        Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            <TextObject VertAlign="Center" Top="198.45" Left="37.80" Name="Text1267" Text="1.2." Width="18.90"
                        Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>

            @php
                $noTaxedIncomeSum020 = (string)($formData['noTaxedIncomeSum020'] ?? '');
                $mainPart = array_reverse(mb_str_split(substr($noTaxedIncomeSum020, 0, strpos($noTaxedIncomeSum020, "."))));
                $penny = mb_str_split(substr($noTaxedIncomeSum020, strpos($noTaxedIncomeSum020, ".") + 1, 2));
            @endphp
            @for($i = 623.70, $j = 0; $j <= 12; $i -= 18.9, $j++)
                <TextObject Border.Style="Dot" Border.Color="#000000" Border.Lines="All" Left="{{$i}}" Top="198.45"
                            VertAlign="Center" Name="{{'noTaxedIncomeSum020'.$j}}" Text="{{$mainPart[$j] ?? '-'}}" Width="18.90" Height="19.45" Padding="2, 0, 2, 0"
                            Font="Comic Sans MS, 8pt"/>
            @endfor


            <TextObject Border.Style="Dot" Border.Color="#000000" Border.Lines="All" Left="670.95" Top="198.45"
                        VertAlign="Center" Name="Text1268" Text="{{$penny[1] ?? '-'}}" Width="18.90" Height="19.45" Padding="2, 0, 2, 0"
                        Font="Comic Sans MS, 8pt"/>
            <TextObject VertAlign="Center" Top="198.45" Left="652.05" Border.Lines="All" Border.Color="#000000"
                        Border.Style="Dot" Name="Text1269" Text="{{$penny[0] ?? '-'}}" Width="18.90" Height="19.45" Padding="2, 0, 2, 0"
                        Font="Comic Sans MS, 8pt"/>
            <TextObject Left="614.25" Top="198.45" HorzAlign="Center" VertAlign="Center" Name="Text1270" Text="."
                        Width="66.15" Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt, style=Bold"/>


            @php
                $taxedIncomeSum030 = (string)($formData['taxedIncomeSum030'] ?? '');
                $mainPart = array_reverse(mb_str_split(substr($taxedIncomeSum030, 0, strpos($taxedIncomeSum030, "."))));
                $penny = mb_str_split(substr($taxedIncomeSum030, strpos($taxedIncomeSum030, ".") + 1, 2));
            @endphp
            @for($i = 623.70, $j = 0; $j <= 12; $i -= 18.9, $j++)
                <TextObject VertAlign="Center" Top="226.80" Left="{{$i}}" Border.Lines="All" Border.Color="#000000"
                            Border.Style="Dot" Name="{{'taxedIncomeSum030'.$j}}" Text="{{$mainPart[$j] ?? '-'}}" Width="18.90" Height="19.45" Padding="2, 0, 2, 0"
                            Font="Comic Sans MS, 8pt"/>
            @endfor

            <TextObject VertAlign="Center" HorzAlign="Center" Top="226.80" Left="614.25" Name="Text1297" Text="."
                        Width="66.15" Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt, style=Bold"/>
            <TextObject Border.Style="Dot" Border.Color="#000000" Border.Lines="All" Left="652.05" Top="226.80"
                        VertAlign="Center" Name="Text1298" Text="{{$penny[0] ?? '-'}}" Width="18.90" Height="19.45" Padding="2, 0, 2, 0"
                        Font="Comic Sans MS, 8pt"/>
            <TextObject VertAlign="Center" Top="226.80" Left="670.95" Border.Lines="All" Border.Color="#000000"
                        Border.Style="Dot" Name="Text1299" Text="{{$penny[1] ?? '-'}}" Width="18.90" Height="19.45" Padding="2, 0, 2, 0"
                        Font="Comic Sans MS, 8pt"/>

            <TextObject Left="37.80" Top="226.80" HorzAlign="Center" VertAlign="Center" Name="Text1300" Text="1.3."
                        Width="18.90" Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            <TextObject VertAlign="Center" Top="226.80" Left="66.15" Name="Text1301"
                        Text="&#9;Сумма доходов, подлежащих налогообложению " Width="179.55" Height="19.45"
                        Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            <TextObject Left="368.55" Top="226.80" HorzAlign="Center" VertAlign="Center" Name="Text1302" Text="030"
                        Width="28.35" Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>

            @php
                $taxReturnSum040 = (string)($formData['taxReturnSum040'] ?? '');
                $mainPart = array_reverse(mb_str_split(substr($taxReturnSum040, 0, strpos($taxReturnSum040, "."))));
                $penny = mb_str_split(substr($taxReturnSum040, strpos($taxReturnSum040, ".") + 1, 2));
            @endphp
            @for($i = 623.70, $j = 0; $j <= 12; $i -= 18.9, $j++)
                <TextObject VertAlign="Center" Top="255.15" Left="{{$i}}" Border.Lines="All" Border.Color="#000000"
                            Border.Style="Dot" Name="{{'taxReturnSum040'.$j}}" Text="{{$mainPart[$j] ?? '-'}}" Width="18.90" Height="19.45" Padding="2, 0, 2, 0"
                            Font="Comic Sans MS, 8pt"/>
            @endfor

            <TextObject VertAlign="Center" HorzAlign="Center" Top="255.15" Left="614.25" Name="Text1316" Text="."
                        Width="66.15" Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt, style=Bold"/>
            <TextObject Border.Style="Dot" Border.Color="#000000" Border.Lines="All" Left="652.05" Top="255.15"
                        VertAlign="Center" Name="Text1317" Text="{{$penny[0] ?? '-'}}" Width="18.90" Height="19.45" Padding="2, 0, 2, 0"
                        Font="Comic Sans MS, 8pt"/>
            <TextObject VertAlign="Center" Top="255.15" Left="670.95" Border.Lines="All" Border.Color="#000000"
                        Border.Style="Dot" Name="Text1318" Text="{{$penny[1] ?? '-'}}" Width="18.90" Height="19.45" Padding="2, 0, 2, 0"
                        Font="Comic Sans MS, 8pt"/>

            <TextObject Left="37.80" Top="255.15" VertAlign="Center" Name="Text1319" Text="1.4." Width="18.90"
                        Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            <TextObject VertAlign="Center" Top="255.15" Left="66.15" Name="Text1320" Text="Сумма налоговых вычетов "
                        Width="179.55" Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            <TextObject Left="368.55" Top="255.15" HorzAlign="Center" VertAlign="Center" Name="Text1321" Text="040"
                        Width="28.35" Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>

            @php
                $taxReduceSum050 = (string)($formData['taxReduceSum050'] ?? '');
                $mainPart = array_reverse(mb_str_split(substr($taxReduceSum050, 0, strpos($taxReduceSum050, "."))));
                $penny = mb_str_split(substr($taxReduceSum050, strpos($taxReduceSum050, ".") + 1, 2));
            @endphp
            @for($i = 623.70, $j = 0; $j <= 12; $i -= 18.9, $j++)
                <TextObject VertAlign="Center" Top="283.50" Left="{{$i}}" Border.Lines="All" Border.Color="#000000"
                            Border.Style="Dot" Name="{{'taxReduceSum050'.$j}}" Text="{{$mainPart[$j] ?? '-'}}" Width="18.90" Height="19.45" Padding="2, 0, 2, 0"
                            Font="Comic Sans MS, 8pt"/>
            @endfor

            <TextObject VertAlign="Center" HorzAlign="Center" Top="283.50" Left="614.25" Name="Text1335" Text="."
                        Width="66.15" Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt, style=Bold"/>
            <TextObject Border.Style="Dot" Border.Color="#000000" Border.Lines="All" Left="652.05" Top="283.50"
                        VertAlign="Center" Name="Text1336" Text="{{$penny[0] ?? '-'}}" Width="18.90" Height="19.45" Padding="2, 0, 2, 0"
                        Font="Comic Sans MS, 8pt"/>
            <TextObject VertAlign="Center" Top="283.50" Left="670.95" Border.Lines="All" Border.Color="#000000"
                        Border.Style="Dot" Name="Text1337" Text="{{$penny[1] ?? '-'}}" Width="18.90" Height="19.45" Padding="2, 0, 2, 0"
                        Font="Comic Sans MS, 8pt"/>

            <TextObject Left="37.80" Top="283.50" VertAlign="Center" Name="Text1338" Text="1.5." Width="18.90"
                        Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            <TextObject VertAlign="Center" Top="283.50" Left="66.15" Name="Text1339"
                        Text="Сумма расходов, принимаемых в уменьшение полученных доходов " Width="179.55"
                        Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            <TextObject Left="368.55" Top="283.50" HorzAlign="Center" VertAlign="Center" Name="Text1340" Text="050"
                        Width="28.35" Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>

            @php
                $taxBase060 = (string)($formData['taxBase060'] ?? '');
                $mainPart = array_reverse(mb_str_split(substr($taxBase060, 0, strpos($taxBase060, "."))));
                $penny = mb_str_split(substr($taxBase060, strpos($taxBase060, ".") + 1, 2));
            @endphp
            @for($i = 623.70, $j = 0; $j <= 12; $i -= 18.9, $j++)
                <TextObject VertAlign="Center" Top="311.85" Left="{{$i}}" Border.Lines="All" Border.Color="#000000"
                            Border.Style="Dot" Name="{{'taxBaseSumSecondPoint061'.$j}}" Text="{{$mainPart[$j] ?? '-'}}" Width="18.90" Height="19.45" Padding="2, 0, 2, 0"
                            Font="Comic Sans MS, 8pt"/>
            @endfor

            <TextObject VertAlign="Center" HorzAlign="Center" Top="311.85" Left="614.25" Name="Text1354" Text="."
                        Width="66.15" Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt, style=Bold"/>
            <TextObject Border.Style="Dot" Border.Color="#000000" Border.Lines="All" Left="652.05" Top="311.85"
                        VertAlign="Center" Name="Text1355" Text="{{$penny[0] ?? '-'}}" Width="18.90" Height="19.45" Padding="2, 0, 2, 0"
                        Font="Comic Sans MS, 8pt"/>
            <TextObject VertAlign="Center" Top="311.85" Left="670.95" Border.Lines="All" Border.Color="#000000"
                        Border.Style="Dot" Name="Text1356" Text="{{$penny[1] ?? '-'}}" Width="18.90" Height="19.45" Padding="2, 0, 2, 0"
                        Font="Comic Sans MS, 8pt"/>

            <TextObject Left="37.80" Top="311.85" VertAlign="Center" Name="Text1357" Text="1.6." Width="18.90"
                        Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            <TextObject VertAlign="Center" Top="311.85" Left="66.15" Name="Text1358"
                        Text=" Налоговая база для исчисления налога " Width="179.55" Height="19.45" Padding="2, 0, 2, 0"
                        Font="Comic Sans MS, 6pt"/>
            <TextObject Left="368.55" Top="311.85" HorzAlign="Center" VertAlign="Center" Name="Text1359" Text="060"
                        Width="28.35" Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            <TextObject VertAlign="Center" HorzAlign="Center" Top="415.80" Left="368.55" Name="Text1360" Text="063"
                        Width="28.35" Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            <TextObject Left="66.15" Top="415.80" VertAlign="Center" Name="Text1361" Text="Сумма иных налоговых баз "
                        Width="179.55" Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            <TextObject VertAlign="Center" HorzAlign="Center" Top="415.80" Left="37.80" Name="Text1362" Text="1.6.3."
                        Width="28.35" Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>

            @php
                $taxBaseSumSecondPoint061 = (string)($formData['taxBaseSumSecondPoint061'] ?? '');
                $mainPart = array_reverse(mb_str_split(substr($taxBaseSumSecondPoint061, 0, strpos($taxBaseSumSecondPoint061, "."))));
                $penny = mb_str_split(substr($taxBaseSumSecondPoint061, strpos($taxBaseSumSecondPoint061, ".") + 1, 2));
            @endphp
            @for($i = 623.70, $j = 0; $j <= 12; $i -= 18.9, $j++)
                <TextObject Border.Style="Dot" Border.Color="#000000" Border.Lines="All" Left="{{$i}}" Top="340.20"
                            VertAlign="Center" Name="{{'taxBaseSumThirdPoint062'.$j}}" Text="{{$mainPart[$j] ?? '-'}}" Width="18.90" Height="19.45" Padding="2, 0, 2, 0"
                            Font="Comic Sans MS, 8pt"/>
            @endfor

            <TextObject Left="614.25" Top="340.20" HorzAlign="Center" VertAlign="Center" Name="Text1403" Text="."
                        Width="66.15" Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt, style=Bold"/>
            <TextObject VertAlign="Center" Top="340.20" Left="652.05" Border.Lines="All" Border.Color="#000000"
                        Border.Style="Dot" Name="Text1402" Text="{{$penny[0] ?? '-'}}" Width="18.90" Height="19.45" Padding="2, 0, 2, 0"
                        Font="Comic Sans MS, 8pt"/>
            <TextObject Border.Style="Dot" Border.Color="#000000" Border.Lines="All" Left="670.95" Top="340.20"
                        VertAlign="Center" Name="Text1401" Text="{{$penny[1] ?? '-'}}" Width="18.90" Height="19.45" Padding="2, 0, 2, 0"
                        Font="Comic Sans MS, 8pt"/>

            @php
                $taxBaseSumThirdPoint062 = (string)($formData['taxBaseSumThirdPoint062'] ?? '');
                $mainPart = array_reverse(mb_str_split(substr($taxBaseSumThirdPoint062, 0, strpos($taxBaseSumThirdPoint062, "."))));
                $penny = mb_str_split(substr($taxBaseSumThirdPoint062, strpos($taxBaseSumThirdPoint062, ".") + 1, 2));
            @endphp
            @for($i = 623.70, $j = 0; $j <= 12; $i -= 18.9, $j++)
                <TextObject Border.Style="Dot" Border.Color="#000000" Border.Lines="All" Left="{{$i}}" Top="378.00"
                            VertAlign="Center" Name="{{'otherTaxBases063'.$j}}" Text="{{$mainPart[$j] ?? '-'}}" Width="18.90" Height="19.45" Padding="2, 0, 2, 0"
                            Font="Comic Sans MS, 8pt"/>
            @endfor

            <TextObject VertAlign="Center" Top="378.00" Left="37.80" Name="Text1381" Text="1.6.2." Width="28.35"
                        Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            <TextObject VertAlign="Center" Top="378.00" Left="652.05" Border.Lines="All" Border.Color="#000000"
                        Border.Style="Dot" Name="Text1383" Text="{{$penny[0] ?? '-'}}" Width="18.90" Height="19.45" Padding="2, 0, 2, 0"
                        Font="Comic Sans MS, 8pt"/>
            <TextObject Border.Style="Dot" Border.Color="#000000" Border.Lines="All" Left="670.95" Top="378.00"
                        VertAlign="Center" Name="Text1382" Text="{{$penny[1] ?? '-'}}" Width="18.90" Height="19.45" Padding="2, 0, 2, 0"
                        Font="Comic Sans MS, 8pt"/>

            @php
                $otherTaxBases063 = (string)($formData['otherTaxBases063'] ?? '');
                $mainPart = array_reverse(mb_str_split(substr($otherTaxBases063, 0, strpos($otherTaxBases063, "."))));
                $penny = mb_str_split(substr($otherTaxBases063, strpos($otherTaxBases063, ".") + 1, 2));
            @endphp
            @for($i = 623.70, $j = 0; $j <= 12; $i -= 18.9, $j++)
                <TextObject Border.Style="Dot" Border.Color="#000000" Border.Lines="All" Left="{{$i}}" Top="415.80"
                            VertAlign="Center" Name="{{'otherTaxBases063'.$j}}" Text="{{$mainPart[$j] ?? '-'}}" Width="18.90" Height="19.45" Padding="2, 0, 2, 0"
                            Font="Comic Sans MS, 8pt"/>
            @endfor

            <TextObject Border.Style="Dot" Border.Color="#000000" Border.Lines="All" Left="670.95" Top="415.80"
                        VertAlign="Center" Name="Text1363" Text="{{$penny[1] ?? '-'}}" Width="18.90" Height="19.45" Padding="2, 0, 2, 0"
                        Font="Comic Sans MS, 8pt"/>
            <TextObject VertAlign="Center" Top="415.80" Left="652.05" Border.Lines="All" Border.Color="#000000"
                        Border.Style="Dot" Name="Text1364" Text="{{$penny[0] ?? '-'}}" Width="18.90" Height="19.45" Padding="2, 0, 2, 0"
                        Font="Comic Sans MS, 8pt"/>
            <TextObject Left="614.25" Top="415.80" HorzAlign="Center" VertAlign="Center" Name="Text1365" Text="."
                        Width="66.15" Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt, style=Bold"/>

            <TextObject VertAlign="Center" HorzAlign="Center" Top="378.00" Left="368.55" Name="Text1379" Text="062"
                        Width="28.35" Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            <TextObject Left="66.15" Top="378.00" VertAlign="Center" Name="Text1380"
                        Text="Сумма налоговой базы для исчисления налога по ставке, предусмотренной абзацем третьим пункта 1 или абзацем третьим пункта 3.1 статьи 224 Налогового кодекса Российской Федерации"
                        Width="292.95" Height="28.90" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>


            <TextObject Left="614.25" Top="378.00" HorzAlign="Center" VertAlign="Center" Name="Text1384" Text="."
                        Width="66.15" Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt, style=Bold"/>


            <TextObject VertAlign="Center" HorzAlign="Center" Top="340.20" Left="368.55" Name="Text1398" Text="061"
                        Width="28.35" Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            <TextObject Left="66.15" Top="340.20" VertAlign="Center" Name="Text1399"
                        Text="Сумма налоговой базы для исчисления налога по ставке, предусмотренной абзацем вторым пункта 1 или абзацем вторым пункта 3.1 статьи 224 Налогового кодекса Российской Федерации"
                        Width="292.95" Height="28.90" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            <TextObject VertAlign="Center" Top="340.20" Left="37.80" Name="Text1400" Text="1.6.1." Width="28.35"
                        Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>




            <TextObject Left="37.80" Top="453.60" VertAlign="Center" Name="Text1474" Text="2." Width="18.90"
                        Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt, style=Bold"/>
            <TextObject VertAlign="Center" Top="453.60" Left="66.15" Name="Text1475"
                        Text=" Расчет суммы налога, подлежащей уплате (доплате) / возврату (руб.) " Width="349.65"
                        Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt, style=Bold"/>
            <TextObject VertAlign="Center" HorzAlign="Center" Top="491.40" Left="368.55" Name="Text1476" Text="070"
                        Width="28.35" Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            <TextObject Left="66.15" Top="491.40" VertAlign="Center" Name="Text1477"
                        Text=" Сумма налога, исчисленная к уплате " Width="179.55" Height="19.45" Padding="2, 0, 2, 0"
                        Font="Comic Sans MS, 6pt"/>
            <TextObject VertAlign="Center" Top="491.40" Left="37.80" Name="Text1478" Text="2.1." Width="18.90"
                        Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            @php $totalTaxSumToPay = mb_str_split((string)($formData['totalTaxSumToPay070'] ?? '')) @endphp
            @for($i = 396.90, $j = 0; $j < 13; $i += 18.9, $j++)
                <TextObject Border.Style="Dot" Border.Color="#000000" Border.Lines="All" Left="{{ $i }}" Top="491.40"
                            VertAlign="Center" Name="totalTaxSumToPay{{$j}}" Text="{{$totalTaxSumToPay[$j] ?? '-'}}" Width="18.90" Height="19.45" Padding="2, 0, 2, 0"
                            Font="Comic Sans MS, 8pt"/>
            @endfor

            @php $holdTaxesSum = mb_str_split((string)($formData['holdTaxesSum080'] ?? '')) @endphp
            @for($i = 396.90, $j = 0; $j < 13; $i += 18.9, $j++)
                <TextObject VertAlign="Center" Top="519.75" Left="{{$i}}" Border.Lines="All" Border.Color="#000000"
                            Border.Style="Dot" Name="holdTaxesSum{{$j}}" Text="{{ $holdTaxesSum[$j] ?? '-'}}" Width="18.90" Height="19.45" Padding="2, 0, 2, 0"
                            Font="Comic Sans MS, 8pt"/>
            @endfor
            <TextObject Left="37.80" Top="519.75" VertAlign="Center" Name="Text1505" Text="2.2." Width="18.90"
                        Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            <TextObject VertAlign="Center" Top="519.75" Left="66.15" Name="Text1506"
                        Text="Сумма налога, удержанная у источника выплаты " Width="179.55" Height="19.45"
                        Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            <TextObject Left="368.55" Top="519.75" HorzAlign="Center" VertAlign="Center" Name="Text1507" Text="080"
                        Width="28.35" Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            <TextObject VertAlign="Center" HorzAlign="Center" Top="585.90" Left="368.55" Name="Text1604" Text="090"
                        Width="28.35" Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            <TextObject Left="66.15" Top="585.90" VertAlign="Center" Name="Text1605"
                        Text="Сумма налога, удержанная c доходов в виде материальной выгоды" Width="179.55"
                        Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            <TextObject VertAlign="Center" Top="585.90" Left="37.80" Name="Text1606" Text="2.3." Width="18.90"
                        Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            @php $holdTaxesSumThirdPoint = mb_str_split((string)($formData['holdTaxesSumThirdPoint081'] ?? '')) @endphp
            @for($i = 396.90, $j = 0; $j < 13; $i += 18.9, $j++)
                <TextObject VertAlign="Center" Top="548.10" Left="{{$i}}" Border.Lines="All" Border.Color="#000000"
                            Border.Style="Dot" Name="holdTaxesSumThirdPoint{{$j}}" Text="{{ $holdTaxesSumThirdPoint[$j] ?? '-' }}" Width="18.90" Height="19.45" Padding="2, 0, 2, 0"
                            Font="Comic Sans MS, 8pt"/>
            @endfor
            @php $holdTaxesSumMaterial = mb_str_split((string)($formData['holdTaxesSumMaterial090'] ?? '')) @endphp
            @for($i = 396.90, $j = 0; $j < 13; $i += 18.9, $j++)
                <TextObject Border.Style="Dot" Border.Color="#000000" Border.Lines="All" Left="{{$i}}" Top="585.90"
                            VertAlign="Center" Name="holdTaxesSumMaterial{{$j}}" Text="{{ $holdTaxesSumMaterial[$j] ?? '-'}}" Width="18.90" Height="19.45" Padding="2, 0, 2, 0"
                            Font="Comic Sans MS, 8pt"/>
            @endfor
            @php $foreignTaxes = mb_str_split((string)($formData['foreignTaxes130'] ?? '')) @endphp
            @for($i = 396.90, $j = 0; $j < 13; $i += 18.9, $j++)
                <TextObject Border.Style="Dot" Border.Color="#000000" Border.Lines="All" Left="{{$i}}" Top="680.40"
                            VertAlign="Center" Name="foreignTaxes{{$j}}" Text="{{$foreignTaxes[$j] ?? '-'}}" Width="18.90" Height="19.45" Padding="2, 0, 2, 0"
                            Font="Comic Sans MS, 8pt"/>
            @endfor
            @php $patentTaxes = mb_str_split((string)($formData['patentTaxes140'] ?? '')) @endphp
            @for($i = 396.90, $j = 0; $j < 13; $i += 18.9, $j++)
                <TextObject VertAlign="Center" Top="708.75" Left="{{$i}}" Border.Lines="All" Border.Color="#000000"
                            Border.Style="Dot" Name="patentTaxes{{$j}}" Text="{{$patentTaxes[$j] ?? '-'}}" Width="18.90" Height="19.45" Padding="2, 0, 2, 0"
                            Font="Comic Sans MS, 8pt"/>
            @endfor
            @php $totalTaxSumToPayInBudget = mb_str_split((string)($formData['totalTaxSumToPayInBudget150'] ?? '')) @endphp
            @for($i = 396.90, $j = 0; $j < 13; $i += 18.9, $j++)
                <TextObject Border.Style="Dot" Border.Color="#000000" Border.Lines="All" Left="{{$i}}" Top="737.10"
                            VertAlign="Center" Name="totalTaxSumToPayInBudget{{$j}}" Text="{{$totalTaxSumToPay[$j] ?? '-'}}" Width="18.90" Height="19.45" Padding="2, 0, 2, 0"
                            Font="Comic Sans MS, 8pt"/>
            @endfor
            @php $totalTaxReturnSum = mb_str_split((string)($formData['totalTaxReturnSum160'] ?? '')) @endphp
            @for($i = 396.90, $j = 0; $j < 13; $i += 18.9, $j++)
                <TextObject VertAlign="Center" Top="765.45" Left="{{$i}}" Border.Lines="All" Border.Color="#000000"
                            Border.Style="Dot" Name="totalTaxReturnSum{{$j}}" Text="{{$totalTaxReturnSum[$j] ?? '-'}}" Width="18.90" Height="19.45" Padding="2, 0, 2, 0"
                            Font="Comic Sans MS, 8pt"/>
            @endfor
            <TextObject Left="37.80" Top="548.10" VertAlign="Center" Name="Text1633" Text="2.2.1." Width="28.35"
                        Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            <TextObject VertAlign="Center" Top="548.10" Left="66.15" Name="Text1634"
                        Text="Сумма налога, удержанная у источника выплаты по ставке, предусмотренной абзацем третьим пункта 1 или абзацем третьим пункта 3.1 статьи 224 Налогового кодекса Российской Федерации"
                        Width="292.95" Height="28.90" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            <TextObject Left="368.55" Top="548.10" HorzAlign="Center" VertAlign="Center" Name="Text1635" Text="081"
                        Width="28.35" Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            <TextObject VertAlign="Center" HorzAlign="Center" Top="680.40" Left="368.55" Name="Text1636" Text="120"
                        Width="28.35" Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            <TextObject Left="66.15" Top="680.40" VertAlign="Center" Name="Text1637"
                        Text=" Сумма налога, уплаченная в иностранных государствах, подлежащая зачету в Российской Федерации "
                        Width="255.15" Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            <TextObject VertAlign="Center" Top="680.40" Left="37.80" Name="Text1638" Text="2.6." Width="18.90"
                        Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            <TextObject Left="37.80" Top="708.75" VertAlign="Center" Name="Text1665" Text="2.7." Width="18.90"
                        Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            <TextObject VertAlign="Center" Top="708.75" Left="66.15" Name="Text1666"
                        Text="Сумма налога, уплаченная в связи с применением патентной системы налогообложения, подлежащая зачету"
                        Width="274.05" Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            <TextObject Left="368.55" Top="708.75" HorzAlign="Center" VertAlign="Center" Name="Text1667" Text="130"
                        Width="28.35" Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            <TextObject VertAlign="Center" HorzAlign="Center" Top="642.60" Left="368.55" Name="Text1668" Text="110"
                        Width="28.35" Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            <TextObject Left="66.15" Top="642.60" VertAlign="Center" Name="Text1669"
                        Text=" Сумма фиксированных авансовых платежей, уплаченная налогоплательщиком, или сумма налога на прибыль организаций, подлежащие зачету"
                        Width="292.95" Height="28.90" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            <TextObject VertAlign="Center" Top="642.60" Left="37.80" Name="Text1670" Text="2.5." Width="18.90"
                        Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            @php $payedSalesTax = mb_str_split((string)($formData['payedSalesTax100'] ?? '')) @endphp
            @for($i = 396.90, $j = 0; $j < 13; $i += 18.9, $j++)
                <TextObject VertAlign="Center" Top="614.25" Left="{{$i}}" Border.Lines="All" Border.Color="#000000"
                            Border.Style="Dot" Name="payedSalesTax{{$j}}" Text="{{$payedSalesTax[$j] ?? '-'}}" Width="18.90" Height="19.45" Padding="2, 0, 2, 0"
                            Font="Comic Sans MS, 8pt"/>
            @endfor
            @php $fixedExpenseSum = mb_str_split((string)($formData['fixedExpenseSum120'] ?? '')) @endphp
            @for($i = 396.90, $j = 0; $j < 13; $i += 18.9, $j++)
                <TextObject Border.Style="Dot" Border.Color="#000000" Border.Lines="All" Left="{{$i}}" Top="642.60"
                            VertAlign="Center" Name="fixedExpenseSum{{$j}}" Text="{{$fixedExpenseSum[$j] ?? '-'}}" Width="18.90" Height="19.45" Padding="2, 0, 2, 0"
                            Font="Comic Sans MS, 8pt"/>
            @endfor
            <TextObject Left="37.80" Top="614.25" VertAlign="Center" Name="Text1697" Text="2.4." Width="18.90"
                        Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            <TextObject VertAlign="Center" Top="614.25" Left="66.15" Name="Text1698"
                        Text=" Сумма торгового сбора, уплаченная в налоговом периоде, подлежащая зачету" Width="255.15"
                        Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            <TextObject Left="368.55" Top="614.25" HorzAlign="Center" VertAlign="Center" Name="Text1699" Text="100"
                        Width="28.35" Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            <TextObject VertAlign="Center" HorzAlign="Center" Top="737.10" Left="368.55" Name="Text1764" Text="140"
                        Width="28.35" Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            <TextObject Left="66.15" Top="737.10" VertAlign="Center" Name="Text1765"
                        Text=" Сумма налога, подлежащая уплате (доплате) в бюджет " Width="255.15" Height="19.45"
                        Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            <TextObject VertAlign="Center" Top="737.10" Left="37.80" Name="Text1766" Text="2.8." Width="18.90"
                        Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            <TextObject Left="37.80" Top="765.45" VertAlign="Center" Name="Text1793" Text="2.9." Width="18.90"
                        Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            <TextObject VertAlign="Center" Top="765.45" Left="66.15" Name="Text1794"
                        Text=" Сумма налога, подлежащая возврату из бюджета" Width="226.80" Height="19.45"
                        Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            <TextObject Left="368.55" Top="765.45" HorzAlign="Center" VertAlign="Center" Name="Text1795" Text="150"
                        Width="28.35" Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            <TextObject HorzAlign="Center" Left="37.80" Top="812.70" VertAlign="Center" Name="Text1796"
                        Text="Достоверность и полноту сведений, указанных на данной странице, подтверждаю:"
                        Width="652.05" Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt, style=Bold"/>
            <TextObject Border.Color="#000000" Border.Lines="Bottom" VertAlign="Center" Top="831.60" Left="170.10"
                        Name="Text1797" Width="113.40" Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            <TextObject Left="283.50" Top="831.60" VertAlign="Center" Name="Text1799" Text="(подпись)" Width="47.25"
                        Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            <TextObject VertAlign="Center" Top="831.60" Left="529.20" Name="Text1800" Text="(дата)" Width="47.25"
                        Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            <TextObject Left="415.80" Top="831.60" VertAlign="Center" Border.Lines="Bottom" Border.Color="#000000"
                        Name="Text1801" Width="113.40" Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            <TextObject Fill.Color="#000000" VertAlign="Center" Top="888.30" Left="37.80" Name="Text2170" Width="19.45"
                        Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
            <TextObject Left="670.95" Top="888.30" VertAlign="Center" Fill.Color="#000000" Name="Text2171" Width="19.45"
                        Height="19.45" Padding="2, 0, 2, 0" Font="Comic Sans MS, 6pt"/>
        </DataBand>
    </ReportPage>
</Report>
