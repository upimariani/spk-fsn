<footer class="footer">
    <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0">
        <div class="flex items-center justify-start space-x-3">
            <div>
                MEBEUL SINAR INDAH
            </div>

        </div>

    </div>
</footer>



</div>

<!-- Scripts below are for demo only -->
<script type="text/javascript" src="<?= base_url('asset/admin-one/dist/') ?>js/main.min.js?v=1628755089081"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
<script>
    $(function() {
        $("#datepicker").datepicker({
            dateFormat: "yy-mm-dd"
        });
    });
</script>
<script>
    console.log = function() {}
    $("#produk-masuk").on('change', function() {

        $(".tgl").html($(this).find(':selected').attr('data-tgl'));
        $(".tgl").val($(this).find(':selected').attr('data-tgl'));


        $(".qty").html($(this).find(':selected').attr('data-stok'));
        $(".qty").val($(this).find(':selected').attr('data-stok'));

        $(".produk").html($(this).find(':selected').attr('data-produk'));
        $(".produk").val($(this).find(':selected').attr('data-produk'));
    });
</script>
<script>
    console.log = function() {}
    $("#fsn").on('change', function() {

        $(".pengeluaran").html($(this).find(':selected').attr('data-pengeluaran'));
        $(".pengeluaran").val($(this).find(':selected').attr('data-pengeluaran'));


        $(".penerimaan").html($(this).find(':selected').attr('data-penerimaan'));
        $(".penerimaan").val($(this).find(':selected').attr('data-penerimaan'));

        $(".produk").html($(this).find(':selected').attr('data-produk'));
        $(".produk").val($(this).find(':selected').attr('data-produk'));
        $(".periode").html($(this).find(':selected').attr('data-periode'));
        $(".periode").val($(this).find(':selected').attr('data-periode'));
    });
</script>
<script>
    ! function(f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function() {
            n.callMethod ?
                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
        'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '658339141622648');
    fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=658339141622648&ev=PageView&noscript=1" /></noscript>

<!-- Icons below are for demo only. Feel free to use any icon pack. Docs: https://bulma.io/documentation/elements/icon/ -->
<link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.9.95/css/materialdesignicons.min.css">

</body>

</html>