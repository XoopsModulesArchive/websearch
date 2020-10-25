<?php

include '../../mainfile.php';
include $xoopsConfig['root_path'] . 'header.php';
include $xoopsConfig['root_path'] . 'modules/' . $xoopsModule->dirname() . '/cache/config.php';
global $xoopsUser, $xoops_ircConfig;
if ($xoopsUser) {
    $thisUser = $xoopsUser->uname();
} else {
    $thisUser = 'Guest';
}
?>
    <body>
    <style type='text/css'>
        a:link, a:visited, a:active {
            text-decoration: underline;
            color: #0000FF
        }

        a:hover {
            COLOR: #0000FF;
        }
    </style>
    <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr>
            <td width="100%"><font size="6"><u><b>Web Search</b></u></font></td>
        </tr>
        <tr>
            <td width="100%">
                <!-- SECTION I - SEARCH BOX-->
                <form name="searchform" method="get" action="#">
                    <input type="text" name="search">
                    <input type="hidden" name="mem_id" value="3406">
                    <input type="hidden" name="type" value="A">
                    <input type="submit" name="Submit" value="Submit">
                </form>
                <!-- END -->
            </td>
        </tr>
        <tr>
            <td width="100%">
                <font color="#000000">
                    <!-- SECTION II - SEARCH RESULTS-->
                    <script language="JavaScript">
                        <
                        !--Begin
                        site = document.URL.indexOf('?');
                        var page_location = document.URL.substring(0, site);
                        var idx = document.URL.indexOf('?');
                        var params = new Array();
                        if (idx != -1) {
                            var pairs = document.URL.substring(idx + 1, document.URL.length).preg_split('&');
                            for (var i = 0; i < pairs.length; i++) {
                                nameVal = pairs[i].preg_split('=');
                                params[nameVal[0]] = nameVal[1];
                            }
                        }
                        mem_id = unescape(params["mem_id"]);
                        type = unescape(params["type"]);
                        search = unescape(params["search"]);
                        pgcount = unescape(params["pgcount"]);
                        document.write("\<SCRIPT LANGUAGE=JavaScript1.2 SRC=http://www.addsearch.com/search/push/?search=" + search + "&pgcount=" + pgcount + "&mem_id=" + mem_id + "&page_location=" + page_location + "&type=" + type + " TYPE=text/javascript\>\</SCRIPT\>");
                            //End -->
                    </script>
                    <!-- END -->
                    <
                    /td>
                    < /tr>
                    < /table>
                    < /font>
                    < /body>
                    < /html>
<?php
include $xoopsConfig['root_path'] . 'footer.php';
?>
