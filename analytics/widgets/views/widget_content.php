<?php
/**
 * Created by PhpStorm.
 * User: sasha
 * Date: 07.12.16
 * Time: 14:36
 */


if($counter == 1) { ?>

<?= $this->render('init'); ?>

<?php } ?>
<?= $this->render('sections',[
    'counter' => $counter
]);?>

<script>
    gapi.analytics.ready(function() {

        // Step 3: Authorize the user.

        var CLIENT_ID = '<?= $userId ?>';

        gapi.analytics.auth.authorize({
            container: 'auth-button',
            clientid: CLIENT_ID
        });


        // Step 4: Create the view selector.


        var viewSelector1 = new gapi.analytics.ViewSelector({
            container: 'view-selector-<?= $counter ?>-container'
        });


        viewSelector1.execute();

        // Step 5: Create the timeline chart.

        var timeline = new gapi.analytics.googleCharts.DataChart({
            reportType: 'ga',
            query: {
                'dimensions': 'ga:date',
                'metrics': 'ga:sessions',
                'start-date': '30daysAgo',
                'end-date': 'yesterday',
            },
            chart: {
                type: 'LINE',
                container: 'timeline'
            }
        });

        var dataChart1 = new gapi.analytics.googleCharts.DataChart({
            query: {
                metrics: 'ga:sessions, ga:newUsers, ga:goalAbandonRateAll, ga:pageviewsPerSession, ga:avgSessionDuration, ga:transactionsPerSession, ga:transactions',
                dimensions: '<?= $dimension ?>',
                'start-date': '30daysAgo',
                'end-date': 'yesterday',
                <?php if($maxResults>0){ ?>
                    'max-results': <?=$maxResults ?>,
                <?php } ?>
                sort: '-ga:sessions'
            },
            chart: {
                container: 'chart-<?=$counter ?>-container',
                type: 'TABLE',
                options: {
                    width: '100%',
                    pieHole: 4/9
                }
            }
        });


        // Step 6: Hook up the components to work together.

        /**
         * Update the first dataChart when the first view selecter is changed.
         */
        viewSelector1.on('change', function(ids) {
            dataChart1.set({query: {ids: ids}}).execute();
        });


    });
</script>
