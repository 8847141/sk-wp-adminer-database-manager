<div class="wrap">
    <h1 style="text-align: center;font-weight: bold">SK WP Adminer Database Manager</h1>

    <div style=" background-color: #fff;width: auto;">
        <h2 style="border-bottom: 1px solid #e8e8e8;margin: 4px 0;padding: 10px 0 8px 16px;">Please Read Me !!!</h2>
        <div style="padding-bottom: 4px;padding-left: 28px;">
            <ul style="list-style: disc;padding-left: 10px">
                <li>Please make sure you know what you are doing :).</li>
                <li>Always take the database backup before doing any change.</li>
                <li><b>How to take database backup:</b> Click on "Open Database" button at bottom. In left panel click on export link and then on the export database page select output type "save" and format "sql". At the end click on export button.Thats it. <a target="_blank" href="<?php echo SK_WPADM_URL; ?>/assets/images/how-to-backup-database.png"><b>Click here to view a screenshot demo</b></a></li>
            </ul>
        </div>
    </div>
    <br/>
    <hr/>
    <div class="wpadm-con" style="padding:10px;width: 80%;margin: 0 auto;">
        <form target="_blank" action="<?php echo SK_WPADM_URL_ADMINER ?>" method="post">
            <div style="display: none;height: 1px;overflow: hidden;">
                <select name="auth[driver]"><option value="server" selected="mysql">MySQL</option></select>
                <input name="auth[server]" value="<?php echo DB_HOST ?>" title="hostname[:port]" placeholder="localhost" autocapitalize="off">
                <input name="auth[username]" id="username" value="<?php echo DB_USER ?>" autocapitalize="off">
                <input name="auth[password]" type="password" value="<?php echo DB_PASSWORD ?>">
                <input name="auth[db]" value="<?php echo DB_NAME ?>" autocapitalize="off">

            </div>
            <p style="text-align: center;">
                <input class="button button-primary button-large" value="Open Database" type="submit">
                <label style="display: none;display: none;height: 1px"><input name="auth[permanent]" value="1" type="checkbox">Permanent login</label>
            </p>
        </form>
    </div>
</div>