<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>

        .row {
            clear: both;
        }
        .column-1-2 {
            width: 48%;
            float: left;
        }
        .column-full {
            width: 98%;
        }
        .text-center {
            text-align: center;
        }
        .padding-1 {
            padding: 1%;
        }
        .font-bold {
            font-weight: bold;
        }
        .text-size-xl {
            font-size: 12px;
        }
        .text-size-lg {
            font-size: 9px;
        }
        .text-size-md {
            font-size: 8px;
        }
        .text-size-sm {
            font-size: 7px;
        }
        .text-white {
            color: white;
        }
        table {
            border: 1px solid black;
            border-collapse: collapse;
            margin: 0;
            padding: 0;
            width: 100%;
            table-layout: fixed;
        }

        table caption {
            font-size: 1.5em;
            margin: .5em 0 .75em;
        }

        table tr, table td, table th {
            background-color: white;
            border: 1px solid black;
            padding: .35em;
        }

        table th,
        table td {
            padding: .625em;
            text-align: center;
        }

        table th {
            font-size: .85em;
            letter-spacing: .1em;
            text-transform: uppercase;
        }

        @media screen and (max-width: 600px) {
            table {
                border: 0;
            }

            table caption {
                font-size: 1.3em;
            }

            table thead {
                border: none;
                clip: rect(0 0 0 0);
                height: 1px;
                margin: -1px;
                overflow: hidden;
                padding: 0;
                position: absolute;
                width: 1px;
            }

            table tr {
                border-bottom: 3px solid black;
                display: block;
                margin-bottom: .625em;
            }

            table td {
                border-bottom: 1px solid black;
                display: block;
                font-size: .8em;
                text-align: right;
            }

            table td::before {
                /*
                * aria-label has no advantage, it won't be read inside a table
                content: attr(aria-label);
                */
                content: attr(data-label);
                float: left;
                font-weight: bold;
                text-transform: uppercase;
            }

            table td:last-child {
                border-bottom: 0;
            }
        }
        .bg-black {
            background-color: black;
        }
    </style>
</head>
<body>
    <div class="row">
        <div class="column-full text-center padding-1 font-bold text-size-lg">
            FORMULIR PENILAIAN PRESTASI - LEVEL STAFF
        </div>
    </div>
    <div class="row text-center">
        <div class="column-1-2 padding-1 text-size-sm">
            <table style="border: none">
                <thead>
                    <tr style="border: none">
                        <th scope="col" style="text-align: left; border: none">Tanggal</th>
                        <th scope="col" style="text-align: left; border: none">: {{ $tanggal }}</th>
                    </tr>
                    <tr style="border: none">
                        <th scope="col" style="text-align: left; border: none">Periode Penilaian</th>
                        <th scope="col" style="text-align: left; border: none">: {{ $periode }}</th>
                    </tr>
                    <tr style="border: none">
                        <th scope="col" style="text-align: left; border: none">Nama Penilai</th>
                        <th scope="col" style="text-align: left; border: none">: {{ $nama_penilai }}</th>
                    </tr>
                </thead>
            </table>
        </div>
        <div class="column-1-2 padding-1 text-size-sm">
            <table style="border: none">
                <thead>
                    <tr style="border: none">
                        <th scope="col" style="text-align: left; border: none">Nama Karyawan</th>
                        <th scope="col" style="text-align: left; border: none">: {{ $nama_karyawan }}</th>
                    </tr>
                    <tr style="border: none">
                        <th scope="col" style="text-align: left; border: none">NIK</th>
                        <th scope="col" style="text-align: left; border: none">: {{ $nik }}</th>
                    </tr>
                    <tr style="border: none">
                        <th scope="col" style="text-align: left; border: none">Outlet/Div / Gol</th>
                        <th scope="col" style="text-align: left; border: none">: {{ $outlet }}</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
    <div class="row" style="margin-top: 15px; margin-bottom: 15px">
        <div class="column-full text-center padding-1 font-bold text-size-lg bg-black text-white">
            UNSUR PRESTASI YANG DINILAI
        </div>
    </div>
    @foreach($column as $key => $value)
        @if($value->order == 'I')
            <div class="row">
                <div class="column-full padding-1 text-size-md">
                    <b>{{ $value->order }}. {{ $value->categoryAchievement->name }}</b>
                </div>
            </div>
            <div class="row">
                <div class="column-full padding-1 text-size-sm">
                    <table>
                        <thead>
                            <tr>
                                <th rowspan="3" scope="col">Nilai</th>
                                <th rowspan="3" scope="col">Bobot Nilai</th>
                                <th rowspan="3" scope="col">Nilai Akhir</th>
                                <th colspan="4" scope="col">Kategori A</th>
                                <th colspan="4" scope="col">Kategori B</th>
                            </tr>
                            <tr>
                                <th colspan="4" scope="col">Rata-rata jumlah hari terlambat, no punch dan atau early go dalam satu bulan**</th>
                                <th colspan="4" scope="col">Jumlah hari sakit dalam satu tahun</th>
                            </tr>
                            <tr>
                                <th scope="col">100</th>
                                <th scope="col">85</th>
                                <th scope="col">70</th>
                                <th scope="col">55</th>
                                <th scope="col">100</th>
                                <th scope="col">85</th>
                                <th scope="col">70</th>
                                <th scope="col">55</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $result = \App\Models\EvaluationList::where('evaluation_id', $evaluation_id)->where('category_achievement_id', $value->category_achievement_id)->first();
                            @endphp
                            <tr>
                                <td>{{ $result->score }}</td>
                                <td class="text-size-lg font-bold">{{ $value->categoryAchievement->quality }}%</td>
                                <td>{{ $result->final_score }}</td>
                                <td>0 Hari</td>
                                <td>1 Hari</td>
                                <td>2 Hari</td>
                                <td>>2 Hari</td>
                                <td>0 Hari</td>
                                <td>1-2 Hari</td>
                                <td>3-4 Hari</td>
                                <td>>4 Hari</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="column-full padding-1 text-size-md">
                    * Nilai : Rata-rata dari kategori "A" + "B"<br>
                    ** Rata-rata jumlah hari terlambat, no punch dan/atau early go dalam satu bulan adalah jumlah hari terlambat, no punch dan atau early go dalam satu tahun dibagi 12.  <br>
                    Contoh :   A terlambat, no punch dan atau early go dalam 1 tahun = 14 hari, maka rata-rata jumlah hari terlambat, no punch dan atau early go dalam 1 bulan adalah 14/12 = 1.16 hari.  Apabila masa kerja kurang dari satu tahun,  maka jumlah hari terlambat, no punch dan atau early go dibagi dengan jumlah bulan yang sudah dijalani, Jika total nilai akhir = < 0.3 maka dihitung  0, sedangkan   > 0.3 dihitung 1.
                </div>
            </div>
        @else
            <div class="row">
                <div class="column-full padding-1 text-size-md">
                    <b>{{ $value->order }}. {{ $value->categoryAchievement->name }}</b>
                    {{ $value->categoryAchievement->desc }}
                </div>
            </div>
            <div class="row">
                <div class="column-full padding-1 text-size-sm">
                    <table>
                        <thead>
                            <tr>
                                <th scope="col">Nilai</th>
                                <th scope="col">Bobot Nilai</th>
                                <th scope="col">Nilai Akhir</th>
                                <th scope="col">100</th>
                                <th scope="col">95</th>
                                <th scope="col">90</th>
                                <th scope="col">85</th>
                                <th scope="col">80</th>
                                <th scope="col">75</th>
                                <th scope="col">70</th>
                                <th scope="col">65</th>
                                <th scope="col">60</th>
                                <th scope="col">55</th>
                                <th scope="col">50</th>
                                <th scope="col">45</th>
                                <th scope="col">40</th>
                                <th scope="col">35</th>
                                <th scope="col">30</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $result = \App\Models\EvaluationList::where('evaluation_id', $evaluation_id)->where('category_achievement_id', $value->category_achievement_id)->first();
                            @endphp
                            <tr>
                                <td>{{ $result->score }}</td>
                                <td class="text-size-lg font-bold">{{ $value->categoryAchievement->quality }}%</td>
                                <td>{{ $result->final_score }}</td>
                                <td colspan="3">
                                    {{ $value->column_a }}
                                </td>
                                <td colspan="3">
                                    {{ $value->column_b }}
                                </td>
                                <td colspan="3">
                                    {{ $value->column_c }}
                                </td>
                                <td colspan="3">
                                    {{ $value->column_d }}
                                </td>
                                <td colspan="3">
                                    {{ $value->column_e }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="column-full padding-1 text-size-md">
                    Dasar penilaian : {{ $result->description }}
                </div>
            </div>
        @endif

    @endforeach
    <div class="row">
        <div class="column-full padding-1 text-size-sm">
            <table>
                <thead>
                    <tr>
                        <th colspan="6" scope="col" class="font-bold text-size-lg bg-black text-white">HASIL PENILAIAN PRESTASI KESELURUHAN</th>
                    </tr>
                    <tr>
                        <th scope="col">JUMLAH UNSUR YANG DINILAI</th>
                        <th scope="col">SANGAT BAIK</th>
                        <th scope="col">BAIK</th>
                        <th scope="col">CUKUP</th>
                        <th scope="col">KURANG</th>
                        <th scope="col">SANGAT KURANG</th>
                    </tr>
                    <tr>
                        <th scope="col">JUMLAH NILAI PRESTASI</th>
                        <th scope="col">A</th>
                        <th scope="col">B</th>
                        <th scope="col">C</th>
                        <th scope="col">D</th>
                        <th scope="col">E</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="column-full padding-1 text-size-sm">
            <table style="border: none">
                <thead>
                    <tr style="border: none">
                        <th scope="col" style="padding-bottom:50px;border: none; text-align: left; padding-left:50px">Tgl: </th>
                        <th scope="col" style="padding-bottom:50px;border: none; text-align: left; padding-left:50px">Tgl: </th>
                        <th scope="col" style="padding-bottom:50px;border: none; text-align: left; padding-left:50px">Tgl: </th>
                    </tr>
                    <tr style="border: none">
                        <th scope="col" style="border: none">
                            <u>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </u>
                        </th>
                        <th scope="col" style="border: none">
                            <u>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </u>
                        </th>
                        <th scope="col" style="border: none">
                            <u>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </u>
                        </th>
                    </tr>
                    <tr style="border: none">
                        <th scope="col" style="border: none">Atasan dari Atasan Langsung</th>
                        <th scope="col" style="border: none">Atasan Langsung</th>
                        <th scope="col" style="border: none">Karyawan</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="column-full padding-1 text-size-sm">
            <table>
                <thead>
                    <tr>
                        <th scope="col" class="font-bold text-size-lg">KETERANGAN DAN REKOMENDASI TAMBAHAN</th>
                    </tr>
                    <tr>
                        <th scope="col" style="padding-bottom:80px;">&nbsp;</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="column-full padding-1 font-bold text-size-lg">
            KETERANGAN :
        </div>
        <div class="column-full text-size-md" style="padding-left:25px">
            A. Level Staff = Karyawan Group I s/d IV
        </div>
        <div class="column-full text-size-md" style="padding-left:25px">
            B. Jumlah Unsur Yang Dinilai =
            @php
                $nilai = \App\Models\EvaluationList::where('evaluation_id', $evaluation_id)->get();
            @endphp
            <b>
                Total Nilai Akhir (
                    @foreach ($nilai as $n)
                        @if($loop->last)
                            {{ $n->final_score." " }}
                        @else
                            {{ $n->final_score." + " }}
                        @endif

                    @endforeach
                ) = {{ $nilai->sum('final_score') }}
            </b>
        </div>
    </div>
    <div class="row">
        <div class="column-full padding-1 font-bold text-size-lg">
            KLASIFIKASI :
        </div>
        <div class="column-full text-size-md" style="padding-left:25px">
            A. 91 - 100 = Sangat Baik
        </div>
        <div class="column-full text-size-md" style="padding-left:25px">
            B. 79 - 90 = Baik
        </div>
        <div class="column-full text-size-md" style="padding-left:25px">
            C. 66 - 78 = Cukup
        </div>
        <div class="column-full text-size-md" style="padding-left:25px">
            D. 49 - 65 = Kurang
        </div>
        <div class="column-full text-size-md" style="padding-left:25px">
            E. 0 - 48 = Sangat Kurang
        </div>
    </div>
</body>
</html>
