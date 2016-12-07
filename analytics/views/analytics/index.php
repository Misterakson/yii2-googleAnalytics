<?php
$this->title = 'Analytics';
?>


<div class="analytics-default-index">
    <h1><?= $this->context->action->uniqueId ?></h1>
    <p>
        This is the view content for action "<?= $this->context->action->id ?>".
        The action belongs to the controller "<?= get_class($this->context) ?>"
        in the "<?= $this->context->module->id ?>" module.
    </p>
    <p>
        You may customize this page by editing the following file:<br>
        <code><?= __FILE__ ?></code>
    </p>
</div>

<!-- Step 1: Create the containing elements.-->
<!--<div>-->
<!--    <section id="auth-button"></section>-->
<!--    <section id="view-selector"></section>-->
<!--    <section id="timeline"></section>-->
<!--</div>-->
<!-- Step 2: Load the library.-->
<!--<div>-->
<!--    <div id="view-selector-1-container"></div>-->
<!--    <div id="view-selector-2-container"></div>-->
<!--    <div id="embed-api-auth-container"></div>-->
<!--    <div id="chart-1-container"></div>-->
<!--    <div id="chart-2-container"></div>-->
<!---->
<!--</div>-->
<!--<script>-->
<!--    (function(w,d,s,g,js,fjs){-->
<!--        g=w.gapi||(w.gapi={});g.analytics={q:[],ready:function(cb){this.q.push(cb)}};-->
<!--        js=d.createElement(s);fjs=d.getElementsByTagName(s)[0];-->
<!--        js.src='https://apis.google.com/js/platform.js';-->
<!--        fjs.parentNode.insertBefore(js,fjs);js.onload=function(){g.load('analytics')};-->
<!--    }(window,document,'script'));-->
<!--</script>-->
<!---->
<!--<script>-->
<!--    gapi.analytics.ready(function() {-->
<!---->
<!--        // Step 3: Authorize the user.-->
<!---->
<!--        var CLIENT_ID = '59083089507-jr0cfvprhahinmrcgau1cegcm856b4h2.apps.googleusercontent.com';-->
<!---->
<!--        gapi.analytics.auth.authorize({-->
<!--            container: 'auth-button',-->
<!--            clientid: CLIENT_ID-->
<!--        });-->
<!---->
<!---->
<!--        // Step 4: Create the view selector.-->
<!---->
<!--        var viewSelector = new gapi.analytics.ViewSelector({-->
<!--            container: 'view-selector'-->
<!--        });-->
<!---->
<!--        var viewSelector1 = new gapi.analytics.ViewSelector({-->
<!--            container: 'view-selector-1-container'-->
<!--        });-->
<!--        var viewSelector2 = new gapi.analytics.ViewSelector({-->
<!--            container: 'view-selector-2-container'-->
<!--        });-->
<!---->
<!--        viewSelector1.execute();-->
<!--        viewSelector2.execute();-->
<!--        // Step 5: Create the timeline chart.-->
<!---->
<!--        var timeline = new gapi.analytics.googleCharts.DataChart({-->
<!--            reportType: 'ga',-->
<!--            query: {-->
<!--                'dimensions': 'ga:date',-->
<!--                'metrics': 'ga:sessions',-->
<!--                'start-date': '30daysAgo',-->
<!--                'end-date': 'yesterday',-->
<!--            },-->
<!--            chart: {-->
<!--                type: 'LINE',-->
<!--                container: 'timeline'-->
<!--            }-->
<!--        });-->
<!---->
<!--        var dataChart1 = new gapi.analytics.googleCharts.DataChart({-->
<!--            query: {-->
<!--                metrics: 'ga:sessions',-->
<!--                dimensions: 'ga:country',-->
<!--                'start-date': '30daysAgo',-->
<!--                'end-date': 'yesterday',-->
<!--                'max-results': 6,-->
<!--                sort: '-ga:sessions'-->
<!--            },-->
<!--            chart: {-->
<!--                container: 'chart-1-container',-->
<!--                type: 'PIE',-->
<!--                options: {-->
<!--                    width: '100%',-->
<!--                    pieHole: 4/9-->
<!--                }-->
<!--            }-->
<!--        });-->
<!---->
<!--        var dataChart2 = new gapi.analytics.googleCharts.DataChart({-->
<!--            query: {-->
<!--                metrics: 'ga:sessions',-->
<!--                dimensions: 'ga:country',-->
<!--                'start-date': '30daysAgo',-->
<!--                'end-date': 'yesterday',-->
<!--                'max-results': 6,-->
<!--                sort: '-ga:sessions'-->
<!--            },-->
<!--            chart: {-->
<!--                container: 'chart-2-container',-->
<!--                type: 'PIE',-->
<!--                options: {-->
<!--                    width: '100%',-->
<!--                    pieHole: 4/9-->
<!--                }-->
<!--            }-->
<!--        });-->
<!---->
<!--        // Step 6: Hook up the components to work together.-->
<!---->
<!--        gapi.analytics.auth.on('success', function(response) {-->
<!--            viewSelector.execute();-->
<!--        });-->
<!---->
<!--        viewSelector.on('change', function(ids) {-->
<!--            var newIds = {-->
<!--                query: {-->
<!--                    ids: ids-->
<!--                }-->
<!--            }-->
<!--            timeline.set(newIds).execute();-->
<!--        });-->
<!---->
<!--        /**-->
<!--         * Update the first dataChart when the first view selecter is changed.-->
<!--         */-->
<!--        viewSelector1.on('change', function(ids) {-->
<!--            dataChart1.set({query: {ids: ids}}).execute();-->
<!--        });-->
<!---->
<!--        /**-->
<!--         * Update the second dataChart when the second view selecter is changed.-->
<!--         */-->
<!--        viewSelector2.on('change', function(ids) {-->
<!--            dataChart2.set({query: {ids: ids}}).execute();-->
<!--        });-->
<!--    });-->
<!--</script>-->
<?= \backend\modules\analytics\widgets\AnalyticsWidget::widget(
    ['source' => 'geography', 'userId' => '59083089507-jr0cfvprhahinmrcgau1cegcm856b4h2.apps.googleusercontent.com']
); ?>

<?= \backend\modules\analytics\widgets\AnalyticsWidget::widget(
    ['source' => 'demography', 'userId' => '59083089507-jr0cfvprhahinmrcgau1cegcm856b4h2.apps.googleusercontent.com', 'maxResults' => 10]
); ?>

<?//= \backend\modules\analytics\widgets\AnalyticsWidget::widget(['currentView' => 'source_view', 'userId' => '59083089507-jr0cfvprhahinmrcgau1cegcm856b4h2.apps.googleusercontent.com', 'maxResults' => 10]); ?>
<!---->
<?//= \backend\modules\analytics\widgets\AnalyticsWidget::widget(['currentView' => 'demography_view', 'userId' => '59083089507-jr0cfvprhahinmrcgau1cegcm856b4h2.apps.googleusercontent.com', 'maxResults' => 2]); ?>


