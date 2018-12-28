<div class="alert-sucsess js-alert-sucsess">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 alert_content">
                <div class="alert_content">
                    <div class="title">
                        Спасибо! Данные успешно отправлены.
                    </div>
                    <div class="pop-up_subtitle">Менеджер перезвонит Вам через 20 секунд.</div>

                </div>

                <button class="alert_close js-alert-close">×</button>
            </div>
            <!-- col -->
        </div>
        <!-- row -->
    </div>
    <!-- container-fluid -->
</div>
<!-- alert -->

<div class="alert-error js-alert-error">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 alert_content">
                <div class="alert_content">
                    <div class="title">
                        Спасибо! Данные успешно отправлены.
                    </div>
                    <div class="pop-up_subtitle">Менеджер перезвонит Вам через 20 секунд.</div>

                </div>
                <button class="alert_close js-alert-close">×</button>
            </div>
            <!-- col -->
        </div>
        <!-- row -->
    </div>
    <!-- container-fluid -->
</div>
<script type="text/javascript">
    function amitad() {
        var date = new Date();
        var timestamp = date.getTime();

        ADMITAD = window.ADMITAD || {};
        ADMITAD.Invoice = ADMITAD.Invoice || {};
        ADMITAD.Invoice.broker = "adm";     // параметр дедупликации (по умолчанию для admitad)
        ADMITAD.Invoice.category = "1";     // код целевого действия (определяется при интеграции)

        var orderedItem = [];               // временный массив для товарных позиций

        // повторить для каждой товарной позиции в корзине

        orderedItem.push({
            Product: {
                category: '1',               // код тарифа (определяется при интеграции)
            },
            orderQuantity: '1',   // количество товара
            additionalType: "sale"           // всегда sale
        });

        ADMITAD.Invoice.referencesOrder = ADMITAD.Invoice.referencesOrder || [];
        // добавление товарных позиций к заказу
        ADMITAD.Invoice.referencesOrder.push({
            orderNumber: timestamp.toString(), // внутренний номер заказа (не более 100 символов)
            orderedItem: orderedItem
        });

        // Важно! Если данные по заказу admitad подгружаются через AJAX раскомментируйте следующую строку.

        ADMITAD.Tracking.processPositions();
    }

</script>