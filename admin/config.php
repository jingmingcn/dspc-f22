<?php

/*
#################################################################################################################
This is an OPTIONAL configuration file.
The role of this file is to make updating of "tinyfilemanager.php" easier.
So you can:
-Feel free to remove completely this file and configure "tinyfilemanager.php" as a single file application.
or
-Put inside this file all the static configuration you want and forgot to configure "tinyfilemanager.php".
#################################################################################################################
*/

// Auth with login/password
// set true/false to enable/disable it
// Is independent from IP white- and blacklisting
$use_auth = true;

// Login user name and password
// Users: array('Username' => 'Password', 'Username2' => 'Password2', ...)
// Generate secure password hash - https://tinyfilemanager.github.io/docs/pwd.html
$auth_users = array(
    'admin' => '$2y$10$4dt6fpbNUxUvixu11sHbzu07tqD/gyN2nrf2z6KYU3wIcdzlkkE62',
    '202001020008' => '$2y$10$pW/JwsYtv9zDHd87TstTc.Km.Ne8HXfsmQPrpDyfhPO35Hk2tyBDq', 
    '202002020099' => '$2y$10$Cazi43R7RtinUj8HR1rq5./4fTKbIUn4qOhUKj.YN5NpGhWI7MCIe', 
    '202004350190' => '$2y$10$uU0g9VWmiLeVogVFrHa2c.VnnbVCIlfzbY4nAyDIZmhomYIWsgw02', 
    '202004350358' => '$2y$10$brWNVbIwG2SEA8AoxsCfxe0QDqtIxf39ZEOCna8JtmtYz5HhHSg/2', 
    '202007090042' => '$2y$10$CFGFlIfSLTiyVrwQlCzR2OeLqZ7XPPWRNR4fSx5S7llI.AkB2jeVi', 
    '202007090079' => '$2y$10$X.6RTy5YzXxEWxsjBP/vC.wm.xWyvKZ7BCeO48NAhH3j97i9pKzWe', 
    '202007090089' => '$2y$10$BBdep5/0D4m7XqNIMNvIauutdt1daCj90rTH.Ab/H0jF1YxyownsO', 
    '202007090120' => '$2y$10$rbFz84F6/joiF/YK4zC8ied1Lr66W7kG5p0gz3tXb5RE1BhFlb4vO', 
    '202007090122' => '$2y$10$w6bpBVRxecQCdsPTbuPEl.SMShjdyBClUGilhPpIgpnc3u.Gwvn9G', 
    '202007090129' => '$2y$10$KJNksrIo.d1mlQ9S/4RGPOQ330aQ5P87AcG4Z4deIz9ztMPy40eTW', 
    '202007090137' => '$2y$10$Lp0/olU5PoHqSxqcIq7lHOcuibPGVp8KnSrJRGrIRXLK71fnJRpI.', 
    '202007090229' => '$2y$10$PETQyV7H2L0VvPC4VaTBsuIJVgz5uFYiJajDoq4Dgy454R8I62LA2', 
    '202007090280' => '$2y$10$Dn8c9oFsPCqVRXdMcwam4.FV/O39ofM4LbK3puMO5kfnMUSKIaqoK', 
    '202011010001' => '$2y$10$FSE2y8vNZHXTu2YtyoQmaOOuWuXFvtwoDnynyX0iCeCci01Y36rYy', 
    '202011010002' => '$2y$10$ioBUA9PPjvuqp6K.iJHoiOIvRImbGZlVj9qE0jWPB38ylicBlDjv2', 
    '202011010003' => '$2y$10$1XhFww76fSXYkkBLxABGoewoGI7Cam8XegIbclKyBdOdroT4p7fPu', 
    '202011010004' => '$2y$10$WPBxc5Wty/Pxz3q7XJgqP.DkrgnHzHKkSnsjZfbeMV3zXYq/Z5/qK', 
    '202011010005' => '$2y$10$WMuS2AufXr982R6rkz8aUu4BhALlzsMkrYrjJrGHnWpHu0p3AByxq', 
    '202011010008' => '$2y$10$rxCrOkSFJNqHMO4Wg7tLReaOYhQfrY02W0fM2Cx.QKD4gwXlQSi1.', 
    '202011010009' => '$2y$10$aP0H7Lyvu1Pq6SvDNpio6OmC6jX/F4Li764JohdrvCjOfCzKehK3u', 
    '202011010010' => '$2y$10$Q6RJzcTsBjM33SfgK7yrEeUs3X2vkTZ70.RekYj1Yiwxk9PPQ7JXy', 
    '202011010013' => '$2y$10$i3t/50G3MhIjzLwr9Ayi9eE24DTiN6Ip/uaXj4m8mq837.vSpD92S', 
    '202011010014' => '$2y$10$1j.0oYYAFgbCIDYFRxmomO5.khusr5JjucqYfrH0f7evK5vyEaEgW', 
    '202011010015' => '$2y$10$hxys2VtgD2QwWtzNEH7uBejSJewZnzCtEpYIamJg38PBDQoAAvt6S', 
    '202011010016' => '$2y$10$gC7Nh/El5JJ30mP1Bu1EvusDbNdSH5fn2KRGtdNQjag82jtr4WS36', 
    '202011010017' => '$2y$10$0CLc5.5QlGalfuRN6zOgQ.KSGsuNE4SkZj5q5EGikza4foDel/N1m', 
    '202011010018' => '$2y$10$eqnijRZMij2QWBidGlMHLOy73YXxXGpA2ZiO5NIM/hhhABczWJdeG', 
    '202011010019' => '$2y$10$ixY1EaAk/lnpYyB8M5/TF.um7nfBpUuTkJOj5LtciFVf5NwGNtxp6', 
    '202011010020' => '$2y$10$6V7et3AVX5h4mPj2Mu6wvehRsjUP7xaD3.jawk3OOrStNBrF.7Bfa', 
    '202011010021' => '$2y$10$Izf5vdu2Es5Bqn/n7tGtTewqRG7Qfsu/QPUPZ5kV7XghnnpizLbXy', 
    '202011010022' => '$2y$10$qm3nR6LrFEGfb0QOCViY7e8X96pxUi5SxO1lYxfqg1PY0wE4LltV.', 
    '202011010023' => '$2y$10$0.XQmvMQb25kWla2k6DmTerr1KWd8AvCyc8CjIQgLANXU.nQAkPPu', 
    '202011010025' => '$2y$10$3S5pjvHns6GDQtHldS/vm.JHzgZHM0v8MvLubQ2YQwxLPc7VVmhX2', 
    '202011010027' => '$2y$10$0N6zsx3liAm9HspygvRSjOFzjAhBArqskkJqpVYlMhgxBlljvErta', 
    '202011010028' => '$2y$10$Pb/6ssQ54Q9H3AJJnSsl0OSN6IONBlnNTHxo5hemvuqxqVeXq68SW', 
    '202011010029' => '$2y$10$i9gh7S85YKf6.5Gk6.EYQ.vyGIvfDk/Z64XL09LNuBljl/.rbhvX.', 
    '202011010030' => '$2y$10$p0MKCmaEhaPUMSefM5q72eyQlKwENUrf3EztUkcf2GOgD0QdXaEUq', 
    '202011010031' => '$2y$10$UnjylGEaMr2QRxu/tV1DJO315Q9B5xhSBo3rdnq.uBisOpmN5pikW', 
    '202011010033' => '$2y$10$mjXXsVPomtvz0jNWq9KDs.6VU5SW7H/PwhPREIBk76wgSzFN0UvVG', 
    '202011010035' => '$2y$10$TzV7NdXNfbs6qDMe8thWHeqX5f7FfqqL76z2BiEyOYhWyfS7Pqlf.', 
    '202011010036' => '$2y$10$9kAtwhGEpisH9EmblU020OborNwiCLyC0OdtYOLMa1Ivo8YlnL8Au', 
    '202011010038' => '$2y$10$LHuq3yahx3pQi4Lh9fAyO.PnMx6go5q7V7AVi6wc1KGeLBip6XO5C', 
    '202011010039' => '$2y$10$O.PDXSZiuyNptdQbPHJ3SOK6OEpIvoKu.fb/pKLNoVD.xKon50Aq.', 
    '202011010040' => '$2y$10$VHJKi/yMKFDWT3xgN0j/rerSn3ddWQLoSanT.KYtj5u.h64pzHybC', 
    '202011010041' => '$2y$10$rCWpRkSuN3luUKvTK/2JHu.G47gOcXx.nGY8m9mbJbZFahFJTeaZq', 
    '202011010042' => '$2y$10$n6c539CtWOw0alelIHNPpOfv9bnDghbKX8xB0ONlywE1WqvmrXLE2', 
    '202011010043' => '$2y$10$tubAqaxEJGARiHxqFCpSZup5DAne/NZ2PVw41vBiKrXqMTlXK6ZHK', 
    '202011010044' => '$2y$10$.Zxdry1GcLjpUhtB3oJ6A.F0JAg46h4/dOsXS5F1sdrMUCNzWhV5.', 
    '202011010046' => '$2y$10$qNkXbz3SecxFsOKySpsQA.bU.egUQEiASly.SthG6SgEhCi6Nqm6q', 
    '202011010050' => '$2y$10$InnsVhEr54klYj/8GFfljO0NxKWGWx5uY1DYpb6gQFTBKXCVBUb/W', 
    '202011010053' => '$2y$10$W1i.DUf3WQvcvt.h8qHtKulZuMlAtSQdaPD7oPDSQpAFeup8plKP6', 
    '202011010054' => '$2y$10$EDTNp4btkvkVNfPfsIUoW.vg0oOWmKsXplB4/oUj1NQEZqDC6yWIy', 
    '202011010055' => '$2y$10$oDTfce7FCdzU382VdE6KfOAJkFfSdQEmrkRWhbY2RLoHvZIQHfA/y', 
    '202011010056' => '$2y$10$voaReqom3IYFjtKfprqUyO/zXrLsXwmtMRxNOBnnxYezat69YwlKW', 
    '202011010057' => '$2y$10$OHFX4Xbkrzc8OE3o3/Q.VeMig2YbUMw53JNHIOiDo1uNRpWH2IzDW', 
    '202011010058' => '$2y$10$VrVWQKd86Y97uGOtBkQ4L.YGyZ1RI1VxZKaZzQtanRbOZ/Zod7fqG', 
    '202011010059' => '$2y$10$Shxb98iiH5joMTrAWPL8POkZttOvj1Z.gjgmezWhNQjoVb8Gou2DW', 
    '202011010060' => '$2y$10$HRFmzyIHmqPPHGN21lWRl.nIcwYPgU00WElXfunNiPbnwIoHHOp5O', 
    '202011010061' => '$2y$10$UTEmMDaXPxDR3nH9MSKFp.qhipokEfYgCzHHti.vjekfLIOMChJ.C', 
    '202011010063' => '$2y$10$ftNMgPwPNuU2WXp1F.usNunmPaxW5pX0Uabt1JbVcEXrEI9XQXfn2', 
    '202011010064' => '$2y$10$evHZZDuA3A07br3/rdLBr.3g3W6yVDl2hKnQ9CoJ4Gfe3LzyB4to.', 
    '202011010065' => '$2y$10$U4CHPe15AeJCFGP0Q4OvgunvTOHaiwmAGKUeMcIDNHLNLvH/D49CK', 
    '202011010066' => '$2y$10$0n7ZhDXH95obt.aY/inR2uft/fl836JaW66UU1o/2CxlkEtRNiaca', 
    '202011010067' => '$2y$10$i1k/vD5pchj5d/qbCdmOD.wtObFKSVY82X61Hm5fkpOVmGdGMOupW', 
    '202011010068' => '$2y$10$x3Q99OhpohnS5O/wHOCQu.kr1XaU5MAqepc4TkqBnMAoHnU1Es1qe', 
    '202011010069' => '$2y$10$vSLVQK2GssWP1P3ruTV2DOYlaDwylu6sObmMlCwE46w0egyZMBqly', 
    '202011010072' => '$2y$10$uUPMBJbTnddnb8i98OM.JeG9Fd6a.IFDmtrngZlN/J.H1s5ngVLcq', 
    '202011010073' => '$2y$10$5N.iGTzkXKALOq/BRTVw4.RykcMWwU1IE/bxAbdkrbMDikJTBNZIS', 
    '202011010074' => '$2y$10$HT0V9k6eRrQqfVz/f/p6peufj5y9/.l6Qp.0i4lCeHBpQMXpKWAPS', 
    '202011010075' => '$2y$10$.hvpFIvvr3a.6FVlUYbK4uZ921IhNVO68oTRyxzGJc9b3fBe2sj42', 
    '202011010077' => '$2y$10$uXvt0twnL1mcCrVmN4SqsOKnlpN4QI.ddIFGHo8mUmPB0z9Hp59jy', 
    '202011010078' => '$2y$10$OWS6xeSHPXAZ1CIwXo55EOE2.8PzXR4G1Zp9WZCQ1VtNnAMdOx5VS', 
    '202011010079' => '$2y$10$YfYEqXFuya0ZxM.RaQ/fJ.V13o.MDoYJgYanQYM4BXirKcbbOD3ja', 
    '202011010080' => '$2y$10$OPsdjH3EZP3rTCrFLtJ2lO29IfVogGp/tk8..0ygeIWB00R1s95qa', 
    '202086010031' => '$2y$10$bNi2k.bcR50lyZqmHqt/y.hnWAkdqtl1WFMn6m7806TPXyfnqaKbm', 
    '202091030050' => '$2y$10$Vmksujqeq6uk5hjPz8fmGOZr5Y2wkZM.Zev955Pqowae5VFcxfBJu', 
    '202091030094' => '$2y$10$GyQDQjKnnTZ.CUenB5TT5.OukmJCW68grKNJFIYPdisho6Q8wa0zu', 
    '202091040006' => '$2y$10$gbVmmz5Zzia6dsMirurh4eZ6aaZMUTwm2razU4F5zzNYPOb9uw8NS', 
    '202091040016' => '$2y$10$GquSMLNrCv6OTDjsApQER.XVPgE4avyTfUC06wPeE8NVeXhYuUXN2', 
    '202091040024' => '$2y$10$w.MlWJ41QUGR3CvkSexxF.pf1.GLiPZfF5610.JlO2cd7sGL1uvdm', 
    '202093060158' => '$2y$10$4u0H.rqFB8UUmEfyUhUjIelA/rIqQo7U5e0a2lQ3kSQyKtfCkSrU.', 
    '202093060162' => '$2y$10$BxC90.hpDf8sd1AKPLgZneXwrGhdK/da7Ju5tfjuRm2ssUwFZlaEq', 
    '202096010020' => '$2y$10$ywVrwrWCtJdAsyxye6G.5ugvesA/NGITkmKQSdQk.yp5Hh8brbSNS', 
    


);

// Readonly users
// e.g. array('users', 'guest', ...)
$readonly_users = array(
    
);

//set application theme
//options - 'light' and 'dark'
$theme = 'light';

// Enable highlight.js (https://highlightjs.org/) on view's page
$use_highlightjs = true;

// highlight.js style
// for dark theme use 'ir-black'
$highlightjs_style = 'vs';

// Enable ace.js (https://ace.c9.io/) on view's page
$edit_files = true;

// Default timezone for date() and time()
// Doc - http://php.net/manual/en/timezones.php
//$default_timezone = 'Etc/UTC'; // UTC
$default_timezone = 'Asia/Shanghai';

// Root path for file manager
// use absolute path of directory i.e: '/var/www/folder' or $_SERVER['DOCUMENT_ROOT'].'/folder'
$root_path = $_SERVER['DOCUMENT_ROOT'];

// Root url for links in file manager.Relative to $http_host. Variants: '', 'path/to/subfolder'
// Will not working if $root_path will be outside of server document root
$root_url = '';

// Server hostname. Can set manually if wrong
$http_host = $_SERVER['HTTP_HOST'];

// user specific directories
// array('Username' => 'Directory path', 'Username2' => 'Directory path', ...)
//$directories_users = array();
$directories_users = array(
    'admin' => '../分布式存储与并行计算/',
    '202001020008' => '../分布式存储与并行计算/李文浩',
    '202002020099' => '../分布式存储与并行计算/王彤彤',
    '202004350190' => '../分布式存储与并行计算/苏志颖',
    '202004350358' => '../分布式存储与并行计算/李倩',
    '202007090042' => '../分布式存储与并行计算/司家豪',
    '202007090079' => '../分布式存储与并行计算/尹慧',
    '202007090089' => '../分布式存储与并行计算/马锦慧',
    '202007090120' => '../分布式存储与并行计算/田继胜',
    '202007090122' => '../分布式存储与并行计算/杨金明',
    '202007090129' => '../分布式存储与并行计算/宋德志',
    '202007090137' => '../分布式存储与并行计算/靳傲凡',
    '202007090229' => '../分布式存储与并行计算/朱智博',
    '202007090280' => '../分布式存储与并行计算/李燕',
    '202011010001' => '../分布式存储与并行计算/周长江',
    '202011010002' => '../分布式存储与并行计算/谢霖辉',
    '202011010003' => '../分布式存储与并行计算/李英豪',
    '202011010004' => '../分布式存储与并行计算/林有',
    '202011010005' => '../分布式存储与并行计算/刘晓雨',
    '202011010008' => '../分布式存储与并行计算/薛瑞',
    '202011010009' => '../分布式存储与并行计算/葛月',
    '202011010010' => '../分布式存储与并行计算/王玥萌',
    '202011010013' => '../分布式存储与并行计算/方飞',
    '202011010014' => '../分布式存储与并行计算/刘树莉',
    '202011010015' => '../分布式存储与并行计算/崔雪',
    '202011010016' => '../分布式存储与并行计算/詹承霖',
    '202011010017' => '../分布式存储与并行计算/徐文霖',
    '202011010018' => '../分布式存储与并行计算/申伟恩',
    '202011010019' => '../分布式存储与并行计算/杜霞斌',
    '202011010020' => '../分布式存储与并行计算/于硕',
    '202011010021' => '../分布式存储与并行计算/孙文迪',
    '202011010022' => '../分布式存储与并行计算/杜伟',
    '202011010023' => '../分布式存储与并行计算/王磊',
    '202011010025' => '../分布式存储与并行计算/李若涵',
    '202011010027' => '../分布式存储与并行计算/于航',
    '202011010028' => '../分布式存储与并行计算/程梦鑫',
    '202011010029' => '../分布式存储与并行计算/王圣浩',
    '202011010030' => '../分布式存储与并行计算/霍寿勋',
    '202011010031' => '../分布式存储与并行计算/邓鹏程',
    '202011010033' => '../分布式存储与并行计算/路晨',
    '202011010035' => '../分布式存储与并行计算/孙宇阳',
    '202011010036' => '../分布式存储与并行计算/仲欣怡',
    '202011010038' => '../分布式存储与并行计算/温凯航',
    '202011010039' => '../分布式存储与并行计算/阮菁菁',
    '202011010040' => '../分布式存储与并行计算/刘上',
    '202011010041' => '../分布式存储与并行计算/杨翼',
    '202011010042' => '../分布式存储与并行计算/罗逍遥',
    '202011010043' => '../分布式存储与并行计算/孙丰晨',
    '202011010044' => '../分布式存储与并行计算/刘洋洋',
    '202011010046' => '../分布式存储与并行计算/韩国海',
    '202011010050' => '../分布式存储与并行计算/杨家豪',
    '202011010053' => '../分布式存储与并行计算/徐永秩',
    '202011010054' => '../分布式存储与并行计算/贺佳乐',
    '202011010055' => '../分布式存储与并行计算/刘沛铎',
    '202011010056' => '../分布式存储与并行计算/路彧',
    '202011010057' => '../分布式存储与并行计算/张祺朕',
    '202011010058' => '../分布式存储与并行计算/王成刚',
    '202011010059' => '../分布式存储与并行计算/朱元翔',
    '202011010060' => '../分布式存储与并行计算/宋立业',
    '202011010061' => '../分布式存储与并行计算/贾成灏',
    '202011010063' => '../分布式存储与并行计算/付安琪',
    '202011010064' => '../分布式存储与并行计算/谌龙康',
    '202011010065' => '../分布式存储与并行计算/林倩',
    '202011010066' => '../分布式存储与并行计算/张涛',
    '202011010067' => '../分布式存储与并行计算/张子琦',
    '202011010068' => '../分布式存储与并行计算/程丞',
    '202011010069' => '../分布式存储与并行计算/于双姣',
    '202011010072' => '../分布式存储与并行计算/王洋帆',
    '202011010073' => '../分布式存储与并行计算/张雨欣',
    '202011010074' => '../分布式存储与并行计算/赵露露',
    '202011010075' => '../分布式存储与并行计算/贾文孝',
    '202011010077' => '../分布式存储与并行计算/郭媛媛',
    '202011010078' => '../分布式存储与并行计算/张聪逸',
    '202011010079' => '../分布式存储与并行计算/张子怡',
    '202011010080' => '../分布式存储与并行计算/童子诚',
    '202086010031' => '../分布式存储与并行计算/赵旭',
    '202091030050' => '../分布式存储与并行计算/吕荣嘉',
    '202091030094' => '../分布式存储与并行计算/魏克凡',
    '202091040006' => '../分布式存储与并行计算/张子豪',
    '202091040016' => '../分布式存储与并行计算/张志威',
    '202091040024' => '../分布式存储与并行计算/王佳奇',
    '202093060158' => '../分布式存储与并行计算/王栋',
    '202093060162' => '../分布式存储与并行计算/王宇博',
    '202096010020' => '../分布式存储与并行计算/吴昶',
);

// input encoding for iconv
$iconv_input_encoding = 'UTF-8';

// date() format for file modification date
// Doc - https://www.php.net/manual/en/datetime.format.php
$datetime_format = 'd.m.y H:i:s';

// Allowed file extensions for create and rename files
// e.g. 'txt,html,css,js'
$allowed_file_extensions = 'pdf,zip,';

// Allowed file extensions for upload files
// e.g. 'gif,png,jpg,html,txt'
$allowed_upload_extensions = 'pdf,zip,';

// Favicon path. This can be either a full url to an .PNG image, or a path based on the document root.
// full path, e.g http://example.com/favicon.png
// local path, e.g images/icons/favicon.png
$favicon_path = '';

// Files and folders to excluded from listing
// e.g. array('myfile.html', 'personal-folder', '*.php', ...)
$exclude_items = array(
    
);

// Online office Docs Viewer
// Availabe rules are 'google', 'microsoft' or false
// google => View documents using Google Docs Viewer
// microsoft => View documents using Microsoft Web Apps Viewer
// false => disable online doc viewer
$online_viewer = 'microsoft';

// Sticky Nav bar
// true => enable sticky header
// false => disable sticky header
$sticky_navbar = true;


// max upload file size
$max_upload_size_bytes = 5000;

// Possible rules are 'OFF', 'AND' or 'OR'
// OFF => Don't check connection IP, defaults to OFF
// AND => Connection must be on the whitelist, and not on the blacklist
// OR => Connection must be on the whitelist, or not on the blacklist
$ip_ruleset = 'OFF';

// Should users be notified of their block?
$ip_silent = true;

// IP-addresses, both ipv4 and ipv6
$ip_whitelist = array(
    '127.0.0.1',    // local ipv4
    '::1'           // local ipv6
);

// IP-addresses, both ipv4 and ipv6
$ip_blacklist = array(
    '0.0.0.0',      // non-routable meta ipv4
    '::'            // non-routable meta ipv6
);

?>
