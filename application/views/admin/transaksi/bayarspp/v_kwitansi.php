<html>

<head>
    <title>Print kwitansi {{kwitansiNo}}</title>
    <style type="text/css">
        .lead {
            font-family: "Verdana";
            font-weight: bold;
        }

        .value {
            font-family: "Verdana";
        }

        .value-big {
            font-family: "Verdana";
            font-weight: bold;
            font-size: large;
        }

        .td {
            valign: "top";
        }

        /* @page { size: with x height */
        /*@page { size: 20cm 10cm; margin: 0px; }*/
        @page {
            size: A4;
            margin: 0px;
        }

        /*		@media print {
			  html, body {
			  	width: 210mm;
			  }
			}*/
        /*body { border: 2px solid #000000;  }*/
    </style>
    <script type="text/javascript">
        var beforePrint = function() {};

        var afterPrint = function() {
            document.location.href = '/{{hospitalName}}';
        };

        if (window.matchMedia) {
            var mediaQueryList = window.matchMedia('print');
            mediaQueryList.addListener(function(mql) {
                if (mql.matches) {
                    beforePrint();
                } else {
                    afterPrint();
                }
            });
        }

        window.onbeforeprint = beforePrint;
        window.onafterprint = afterPrint;
    </script>
</head>

<body>
    {% for k in copies %}
    <table border="1px">
        <tr>
            <td width="80px"><img src="/img/{{k.imagePath}}" width="80px" /></td>
            <td>
                <table cellpadding="4">
                    <tr>
                        <td width="200px">
                            <div class="lead">No kwitansi:
                        </td>
                        <td>
                            <div class="value">{{k.kwitansiNo}}</div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="lead">Telah terima dari:</div>
                        </td>
                        <td>
                            <div class="value">{{k.recievedFrom}}</div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="lead">Untuk Pembayaran:</div>
                        </td>
                        <td>
                            <div class="value">{{k.forPayments}}</div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="lead">Tanggal:</div>
                        </td>
                        <td>
                            <div class="value">{{k.kwitansiDate}}</div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="lead">Rupiah:</div>
                        </td>
                        <td>
                            <div class="value-big">Rp. {{k.amount}}</div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="lead">Uang Sejumlah:</div>
                        </td>
                        <td>
                            <div class="value">{{k.amountText}} rupiah</div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="lead">Kasir:</div>
                        </td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>____________________________________________________</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>
                            <div class="value">{{k.cashier}}</div>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <hr>
    {% endfor %}
    <script src="/js/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            window.print();
        });
    </script>
</body>

</html>