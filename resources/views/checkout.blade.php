<!DOCTYPE html>
<html>
<head>
    <title>Checkout</title>
</head>
<body>
    <h2>Pembayaran Kelas</h2>
    <button id="pay-button">Bayar Sekarang</button>

    <script type="text/javascript"
        src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="{{ config('midtrans.client_key') }}"></script>

    <script type="text/javascript">
        document.getElementById('pay-button').onclick = function () {
            window.snap.pay("{{ $snapToken }}", {
                onSuccess: function(result){ console.log(result); },
                onPending: function(result){ console.log(result); },
                onError: function(result){ console.log(result); },
                onClose: function(){ alert('Kamu menutup popup sebelum bayar.'); }
            });
        };
    </script>
</body>
</html>
