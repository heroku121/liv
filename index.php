 <?php
echo '
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" lang="en-US">
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang="en-US" class="tcb">
<!--<![endif]-->

<head>
    <meta charset="UTF-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <style type="text/css" id="tcb-style-base-page-8" onLoad="typeof window.lightspeedOptimizeStylesheet === \'function\' && window.lightspeedOptimizeStylesheet()" class="tcb-lightspeed-style">
        .thrv-page-section {
            position: relative;
            box-sizing: border-box !important;
        }

        .thrv-page-section .tve-page-section-out {
            position: absolute;
            width: 100%;
            height: 100%;
            left: 0px;
            top: 0px;
            box-sizing: border-box;
            transition: box-shadow 0.5s ease 0s;
            overflow: hidden;
        }

        .thrv-page-section .tve-page-section-in {
            box-sizing: border-box;
            margin-right: auto;
            margin-left: auto;
            position: relative;
            z-index: 1;
            min-height: 40px;
        }

        .thrv-page-section .tve-page-section-in.tve-section-full-height {
            min-height: 100vh !important;
        }

        .tve-page-section-in>.thrv_wrapper:first-child {
            margin-top: 0px;
        }

        .tve-page-section-in>.thrv_wrapper:last-child {
            margin-bottom: 0px;
        }

        .thrv-rating {
            display: table;
        }

        .thrv-rating svg {
            width: 1em;
            height: 1em;
            display: inline-block;
        }

        .tcb-icon {
            display: inline-block;
            width: 1em;
            height: 1em;
            line-height: 1em;
            vertical-align: middle;
            stroke-width: 0px;
            stroke: currentcolor;
            fill: currentcolor;
            box-sizing: content-box;
            transform: rotate(var(--tcb-icon-rotation-angle, 0deg));
        }

        svg.tcb-icon path:not([fill="none"]) {
            fill: inherit !important;
            stroke: inherit !important;
            transition: none 0s ease 0s;
        }

        .thrv_icon {
            text-align: center;
        }

        .thrv-button {
            display: table !important;
            max-width: 100%;
            margin-left: auto;
            margin-right: auto;
        }

        .thrv-button.thrv_wrapper {
            padding: 0px;
        }

        .thrv-button .tcb-plain-text {
            cursor: pointer;
        }

        a.tcb-button-link {
            background-color: rgb(26, 188, 156);
            padding: 12px 15px;
            font-size: 18px;
            box-sizing: border-box;
            display: inline-flex;
            align-items: center;
            overflow: hidden;
            width: 100%;
            text-align: center;
            line-height: 1.2em;
        }

        a.tcb-button-link:hover {
            background-color: rgb(21, 162, 136);
        }

        .thrv-button a.tcb-button-link {
            text-decoration: none !important;
            color: rgb(255, 255, 255);
        }

        a.tcb-button-link>span::before {
            position: absolute;
            content: "";
            display: none;
            top: -100px;
            bottom: -100px;
            width: 1px;
            left: 10px;
            background-color: rgb(0, 121, 0);
        }

        span.tcb-button-texts {
            color: inherit;
            display: block;
            flex: 1 1 0%;
            position: relative;
        }

        span.tcb-button-texts>span {
            display: block;
            padding: 0px;
        }

        .thrv-styled_list {
            padding-top: 10px !important;
            padding-bottom: 10px !important;
        }

        .thrv-styled_list ul.tcb-styled-list {
            margin: 0px !important;
            padding: 0px !important;
            list-style: none;
        }

        .thrv-styled_list ul.tcb-styled-list li div.thrv_icon {
            padding: 10px;
            margin: 0px;
            box-sizing: content-box;
        }

        .tcb-styled-list-icon-text {
            display: block;
            z-index: 0;
            line-height: 2.3em;
        }

        .tcb-styled-list-icon {
            position: relative;
            z-index: 1;
        }

        .thrv-styled-list-item {
            display: flex;
            place-content: flex-start;
            align-items: flex-start;
            word-break: break-word;
        }

        .thrv-styled-list-item::before {
            content: none !important;
        }

        .tve_image_caption {
            position: relative;
        }

        .tve_image_caption:not(.tcb-mm-image.tve-tab-image) {
            height: auto !important;
        }

        .tve_image_caption .tve_image {
            max-width: 100%;
            width: 100%;
        }

        .tcb-style-wrap strong {
            font-weight: var(--g-bold-weight, bold);
        }

        .tcb-plain-text {
            cursor: text;
        }

        .thrv_text_element {
            overflow-wrap: break-word;
        }

        body:not(.tve_editor_page) .thrv_wrapper.thrv_footer,
        body:not(.tve_editor_page) .thrv_wrapper.thrv_header {
            padding: 0px;
        }

        .notifications-content-wrapper.tcb-permanently-hidden {
            display: none !important;
        }

        .tcb-permanently-hidden {
            display: none !important;
        }

        .tar-disabled {
            cursor: default;
            opacity: 0.4;
            pointer-events: none;
        }

        .tve_ea_thrive_animation {
            opacity: 0;
        }

        .tve_ea_thrive_animation.tve_anim_start {
            opacity: 1;
            transition: all 0.5s ease-out 0s;
        }

        .tve_ea_thrive_animation.tve_anim_grow {
            transition: transform 0.2s ease-out 0s;
            transform: scale(1);
            visibility: visible !important;
            opacity: 1;
        }

        .tve_ea_thrive_animation.tve_anim_grow.tve_anim_start {
            transform: scale(1.1);
            transition: all 0.2s ease-out 0s;
        }

        .tve_ea_thrive_animation.tve_anim_pulse_grow {
            visibility: visible !important;
            opacity: 1;
        }

        .tve_ea_thrive_animation.tve_anim_pulse_grow.tve_anim_start {
            animation-name: pulse-grow;
            animation-duration: 0.3s;
            animation-timing-function: linear;
            animation-iteration-count: infinite;
            animation-direction: alternate;
        }

        .tcb-flex-row {
            display: flex;
            flex-flow: row nowrap;
            align-items: stretch;
            justify-content: space-between;
            margin-top: 0px;
            margin-left: -15px;
            padding-bottom: 15px;
            padding-top: 15px;
        }

        .tcb-flex-col {
            flex: 1 1 auto;
            padding-top: 0px;
            padding-left: 15px;
        }

        .tcb-flex-row .tcb-flex-col {
            box-sizing: border-box;
        }

        .tcb--cols--2:not(.tcb-resized)>.tcb-flex-col {
            max-width: 50%;
        }

        .tcb-col {
            height: 100%;
            display: flex;
            flex-direction: column;
            position: relative;
        }

        .tcb-flex-row .tcb-col {
            box-sizing: border-box;
        }

        html {
            text-rendering: auto !important;
        }

        html body {
            text-rendering: auto !important;
        }

        body.tve_lp::before {
            content: none;
        }

        #tve_editor ul {
            margin-left: 20px;
        }

        .thrv_wrapper {
            margin-top: 20px;
            margin-bottom: 20px;
            padding: 1px;
        }

        .thrv_wrapper div {
            box-sizing: content-box;
        }

        .thrv_wrapper.thrv_text_element,
        .thrv_wrapper.thrv-page-section,
        .thrv_wrapper.thrv_symbol {
            margin: 0px;
        }

        .thrv_wrapper.thrv-columns {
            margin-top: 10px;
            margin-bottom: 10px;
            padding: 0px;
        }

        .tve_shortcode_editor h1 {
            padding: 0px;
        }

        p {
            font-size: 1em;
        }

        .tve_image {
            border-radius: 0px;
            box-shadow: none;
        }

        div .tve_image_caption {
            padding: 0px;
            max-width: 100% !important;
            box-sizing: border-box !important;
        }

        .tve_image_caption .tve_image_frame {
            display: block;
            max-width: 100%;
            position: relative;
            overflow: hidden;
        }

        .tve_image_caption .tve_image {
            display: block;
            padding: 0px;
            height: auto;
        }

        .thrv_icon {
            line-height: 0;
        }

        .thrv_icon.tcb-icon-display {
            display: table;
            border-collapse: initial;
        }

        .thrv_icon.thrv_wrapper {
            margin-left: auto;
            margin-right: auto;
            padding: 0px;
        }

        .thrv_symbol.thrv_header,
        .thrv_symbol.thrv_footer {
            width: 100%;
            position: relative;
            box-sizing: border-box;
        }

        :not(#_s):not(#_s) .tcb-conditional-display-placeholder {
            min-height: var(--tcb-container-height-d, 100px) !important;
            position: relative;
        }

        :not(#_s):not(#_s) .tcb-conditional-display-placeholder.thrv-page-section {
            box-sizing: border-box;
            margin: 0px;
        }

        :not(#_s):not(#_s) .tcb-conditional-display-placeholder.thrv-content-box {
            box-sizing: border-box;
        }

        :not(#_s):not(#_s) .tcb-conditional-display-placeholder .tve-page-section-out,
        :not(#_s):not(#_s) .tcb-conditional-display-placeholder .tve-content-box-background {
            box-sizing: border-box;
            position: absolute;
            width: 100%;
            height: 100%;
            left: 0px;
            top: 0px;
            overflow: hidden;
        }

        body {
            margin: 0px;
            padding: 0px;
        }

        h1,
        p {
            margin: 0px;
            padding: 0px;
        }

        @media (max-width:1023px) {
            :not(#_s):not(#_s) .tcb-conditional-display-placeholder {
                min-height: var(--tcb-container-height-t) !important;
            }
        }

        @media (max-width:767px) {
            html {
                overflow-x: hidden !important;
            }
            html,
            body {
                max-width: 100vw !important;
            }
            .tcb-flex-row {
                flex-direction: column;
            }
            .tcb-flex-row.v-2 {
                flex-direction: row;
            }
            .tcb-flex-row.v-2:not(.tcb-mobile-no-wrap) {
                flex-wrap: wrap;
            }
            .tcb-flex-row.v-2:not(.tcb-mobile-no-wrap)>.tcb-flex-col {
                width: 100%;
                max-width: 100% !important;
                flex: 1 0 390px;
            }
            :not(#_s):not(#_s) .tcb-conditional-display-placeholder {
                min-height: var(--tcb-container-height-m) !important;
            }
            html {
                width: 100%;
            }
            body {
                width: 100%;
                overflow-x: hidden;
            }
        }

        @media screen and (-ms-high-contrast:active),
        (-ms-high-contrast:none) {
            .tcb-flex-col {
                width: 100%;
            }
            .tcb-col {
                display: block;
            }
        }

        @media screen and (max-device-width:480px) {
            body {
                -moz-text-size-adjust: none;
            }
        }

        @keyframes pulse {
            25% {
                transform: scale(1.1);
            }
            75% {
                transform: scale(0.9);
            }
        }

        @keyframes pulse-grow {
            100% {
                transform: scale(1.1);
            }
        }
    </style>
    <script type="text/javascript">
        window.flatStyles = window.flatStyles || \'\'

        window.lightspeedOptimizeStylesheet = function() {
            const currentStylesheet = document.querySelector(\'.tcb-lightspeed-style:not([data-ls-optimized])\')

            if (currentStylesheet) {
                try {
                    if (currentStylesheet.sheet && currentStylesheet.sheet.cssRules) {
                        if (window.flatStyles) {
                            if (this.optimizing) {
                                setTimeout(window.lightspeedOptimizeStylesheet.bind(this), 24)
                            } else {
                                this.optimizing = true;

                                let rulesIndex = 0;

                                while (rulesIndex < currentStylesheet.sheet.cssRules.length) {
                                    const rule = currentStylesheet.sheet.cssRules[rulesIndex]
                                    /* remove rules that already exist in the page */
                                    if (rule.type === CSSRule.STYLE_RULE && window.flatStyles.includes(`${rule.selectorText}{`)) {
                                        currentStylesheet.sheet.deleteRule(rulesIndex)
                                    } else {
                                        rulesIndex++
                                    }
                                }
                                /* optimize, mark it such, move to the next file, append the styles we have until now */
                                currentStylesheet.setAttribute(\'data-ls-optimized\', \'1\')

                                window.flatStyles += currentStylesheet.innerHTML

                                this.optimizing = false
                            }
                        } else {
                            window.flatStyles = currentStylesheet.innerHTML
                            currentStylesheet.setAttribute(\'data-ls-optimized\', \'1\')
                        }
                    }
                } catch (error) {
                    console.warn(error)
                }

                if (currentStylesheet.parentElement.tagName !== \'HEAD\') {
                    /* always make sure that those styles end up in the head */
                    const stylesheetID = currentStylesheet.id;
                    /**
                     * make sure that there is only one copy of the css
                     * e.g display CSS
                     */
                    if ((!stylesheetID || (stylesheetID && !document.querySelector(`head #${stylesheetID}`)))) {
                        document.head.prepend(currentStylesheet)
                    } else {
                        currentStylesheet.remove();
                    }
                }
            }
        }

        window.lightspeedOptimizeFlat = function(styleSheetElement) {
            if (document.querySelectorAll(\'link[href*="thrive_flat.css"]\').length > 1) {
                /* disable this flat if we already have one */
                styleSheetElement.setAttribute(\'disabled\', true)
            } else {
                /* if this is the first one, make sure he\'s in head */
                if (styleSheetElement.parentElement.tagName !== \'HEAD\') {
                    document.head.append(styleSheetElement)
                }
            }
        }
    </script>
    <title>Livpure</title>
    <meta name=\'robots\' content=\'max-image-preview:large\' />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="alternate" type="application/rss+xml" title="Livpure &raquo; Feed" href="https://livpure.bio/?feed=rss2" />
    <link rel="alternate" type="application/rss+xml" title="Livpure &raquo; Comments Feed" href="https://livpure.bio/?feed=comments-rss2" />
    <script>
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/",
            "svgExt": ".svg",
            "source": {
                "concatemoji": "https:\/\/livpure.bio\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.2.2"
            }
        };
        /*! This file is auto-generated */
        ! function(e, a, t) {
            var n, r, o, i = a.createElement("canvas"),
                p = i.getContext && i.getContext("2d");

            function s(e, t) {
                p.clearRect(0, 0, i.width, i.height), p.fillText(e, 0, 0);
                e = i.toDataURL();
                return p.clearRect(0, 0, i.width, i.height), p.fillText(t, 0, 0), e === i.toDataURL()
            }

            function c(e) {
                var t = a.createElement("script");
                t.src = e, t.defer = t.type = "text/javascript", a.getElementsByTagName("head")[0].appendChild(t)
            }
            for (o = Array("flag", "emoji"), t.supports = {
                    everything: !0,
                    everythingExceptFlag: !0
                }, r = 0; r < o.length; r++) t.supports[o[r]] = function(e) {
                if (p && p.fillText) switch (p.textBaseline = "top", p.font = "600 32px Arial", e) {
                    case "flag":
                        return s("\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !s("\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !s("\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f", "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f");
                    case "emoji":
                        return !s("\ud83e\udef1\ud83c\udffb\u200d\ud83e\udef2\ud83c\udfff", "\ud83e\udef1\ud83c\udffb\u200b\ud83e\udef2\ud83c\udfff")
                }
                return !1
            }(o[r]), t.supports.everything = t.supports.everything && t.supports[o[r]], "flag" !== o[r] && (t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && t.supports[o[r]]);
            t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && !t.supports.flag, t.DOMReady = !1, t.readyCallback = function() {
                t.DOMReady = !0
            }, t.supports.everything || (n = function() {
                t.readyCallback()
            }, a.addEventListener ? (a.addEventListener("DOMContentLoaded", n, !1), e.addEventListener("load", n, !1)) : (e.attachEvent("onload", n), a.attachEvent("onreadystatechange", function() {
                "complete" === a.readyState && t.readyCallback()
            })), (e = t.source || {}).concatemoji ? c(e.concatemoji) : e.wpemoji && e.twemoji && (c(e.twemoji), c(e.wpemoji)))
        }(window, document, window._wpemojiSettings);
    </script>
    <style>
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel=\'stylesheet\' id=\'classic-theme-styles-css\' href=\'https://livpure.bio/wp-includes/css/classic-themes.min.css?ver=6.2.2\' media=\'all\' />

    <script src=\'https://livpure.bio/wp-includes/js/jquery/jquery.min.js?ver=3.6.4\' id=\'jquery-core-js\'></script>
    <script src=\'https://livpure.bio/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.0\' id=\'jquery-migrate-js\'></script>
    <script src=\'https://livpure.bio/wp-includes/js/imagesloaded.min.js?ver=4.1.4\' id=\'imagesloaded-js\'></script>
    <script src=\'https://livpure.bio/wp-includes/js/masonry.min.js?ver=4.2.2\' id=\'masonry-js\'></script>
    <script src=\'https://livpure.bio/wp-includes/js/jquery/jquery.masonry.min.js?ver=3.1.2b\' id=\'jquery-masonry-js\'></script>
    <script id=\'tve_frontend-js-extra\'>
        var tve_frontend_options = {
            "ajaxurl": "https:\/\/livpure.bio\/wp-admin\/admin-ajax.php",
            "is_editor_page": "",
            "page_events": [],
            "is_single": "1",
            "social_fb_app_id": "",
            "dash_url": "https:\/\/livpure.bio\/wp-content\/plugins\/thrive-visual-editor\/thrive-dashboard",
            "queried_object": {
                "ID": 8,
                "post_author": "1"
            },
            "query_vars": [],
            "$_POST": [],
            "translations": {
                "Copy": "Copy",
                "empty_username": "ERROR: The username field is empty.",
                "empty_password": "ERROR: The password field is empty.",
                "empty_login": "ERROR: Enter a username or email address.",
                "min_chars": "At least %s characters are needed",
                "no_headings": "No headings found",
                "registration_err": {
                    "required_field": "<strong>Error<\/strong>: This field is required",
                    "required_email": "<strong>Error<\/strong>: Please type your email address.",
                    "invalid_email": "<strong>Error<\/strong>: The email address isn&#8217;t correct.",
                    "passwordmismatch": "<strong>Error<\/strong>: Password mismatch"
                }
            },
            "routes": {
                "posts": "https:\/\/livpure.bio\/index.php?rest_route=\/tcb\/v1\/posts"
            },
            "nonce": "2cef372836",
            "allow_video_src": "",
            "google_client_id": null,
            "google_api_key": null,
            "facebook_app_id": null,
            "lead_generation_custom_tag_apis": ["activecampaign", "aweber", "convertkit", "drip", "klicktipp", "mailchimp", "sendlane", "zapier"],
            "post_request_data": [],
            "ip": "223.178.211.48",
            "current_user": [],
            "post_id": "8",
            "post_title": "LivPure",
            "post_type": "page",
            "post_url": "https:\/\/livpure.bio\/",
            "is_lp": "tcb2-coming-soon-10",
            "conditional_display": {
                "is_tooltip_dismissed": false
            }
        };
    </script>
    <script src=\'https://livpure.bio/wp-content/plugins/thrive-visual-editor/editor/js/dist/modules/general.min.js?ver=3.19.1\' id=\'tve_frontend-js\'></script>
    <link rel="https://api.w.org/" href="https://livpure.bio/index.php?rest_route=/" />
    <link rel="alternate" type="application/json" href="https://livpure.bio/index.php?rest_route=/wp/v2/pages/8" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://livpure.bio/xmlrpc.php?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://livpure.bio/wp-includes/wlwmanifest.xml" />
    <meta name="generator" content="WordPress 6.2.2" />
    <link rel="canonical" href="https://livpure.bio/" />
    <link rel=\'shortlink\' href=\'https://livpure.bio/\' />
    <link rel="alternate" type="application/json+oembed" href="https://livpure.bio/index.php?rest_route=%2Foembed%2F1.0%2Fembed&#038;url=https%3A%2F%2Flivpure.bio%2F" />
    <link rel="alternate" type="text/xml+oembed" href="https://livpure.bio/index.php?rest_route=%2Foembed%2F1.0%2Fembed&#038;url=https%3A%2F%2Flivpure.bio%2F&#038;format=xml" />
    <style type="text/css" id="tve_global_variables">
        :root {
            --tcb-background-author-image: url(https://secure.gravatar.com/avatar/68687a3275b096b28885d150e229155d?s=256&d=mm&r=g);
            --tcb-background-user-image: url();
            --tcb-background-featured-image-thumbnail: url(https://livpure.bio/wp-content/plugins/thrive-visual-editor/editor/css/images/featured_image.png);
        }
    </style>
    <style class="tve_custom_style">
        @media (min-width:300px) {
            [data-css="tve-u-160bc5348c2"] {
                padding: 0px !important;
            }
            [data-css="tve-u-160bc5370ae"] {
                background-image: none !important;
                --background-image: none !important;
                --tve-applied-background-image: none !important;
            }
            [data-css="tve-u-160bc5348c2"] .tve-page-section-in {
                display: flex;
                flex-direction: column;
            }
            [data-css="tve-u-15e09c94f7d"] {
                background-color: rgb(255, 255, 255);
            }
            [data-css="tve-u-1871345c430"] {
                width: 617px;
                --tve-alignment: center;
                float: none;
                margin-left: auto !important;
                margin-right: auto !important;
            }
            [data-css="tve-u-1871349233a"] {
                --tcb-local-color-icon: rgb(0, 0, 0);
                --tcb-local-color-var: rgb(0, 0, 0);
                --tve-icon-size: 29px;
                font-size: 29px;
                width: 29px;
                height: 29px;
            }
            [data-css="tve-u-1871349e748"] {
                --tcb-local-color-icon: rgb(0, 0, 0);
                --tcb-local-color-var: rgb(0, 0, 0);
                --tve-icon-size: 29px;
                font-size: 29px;
                width: 29px;
                height: 29px;
            }
            [data-css="tve-u-1871349e74a"] {
                --tcb-local-color-icon: rgb(0, 0, 0);
                --tcb-local-color-var: rgb(0, 0, 0);
                --tve-icon-size: 29px;
                font-size: 29px;
                width: 29px;
                height: 29px;
            }
            [data-css="tve-u-1871349e74c"] {
                --tcb-local-color-icon: rgb(0, 0, 0);
                --tcb-local-color-var: rgb(0, 0, 0);
                --tve-icon-size: 29px;
                font-size: 29px;
                width: 29px;
                height: 29px;
            }
            :not(#tve) [data-css="tve-u-1871349e748"]>:first-child {
                color: rgb(0, 0, 0);
                --tve-applied-color: rgb(0, 0, 0);
            }
            :not(#tve) [data-css="tve-u-1871349233a"]>:first-child {
                color: rgb(0, 0, 0);
                --tve-applied-color: rgb(0, 0, 0);
            }
            :not(#tve) [data-css="tve-u-1871349e74a"]>:first-child {
                color: rgb(0, 0, 0);
                --tve-applied-color: rgb(0, 0, 0);
            }
            :not(#tve) [data-css="tve-u-1871349e74c"]>:first-child {
                color: rgb(0, 0, 0);
                --tve-applied-color: rgb(0, 0, 0);
            }
            :not(#tve) [data-css="tve-u-187134a85a7"] li {
                font-size: var(--tve-font-size, 19px) !important;
            }
            [data-css="tve-u-187134a85a7"] {
                --tve-font-size: 19px;
            }
            [data-css="tve-u-187134d5a99"] {
                max-width: 50%;
            }
            [data-css="tve-u-187134e5bb3"] {
                max-width: 50%;
            }
            [data-css="tve-u-187134e7e1a"] .tcb-button-link {
                letter-spacing: 2px;
                background-image: linear-gradient(var(--tcb-local-color-62516, rgb(19, 114, 211)), var(--tcb-local-color-62516, rgb(19, 114, 211)));
                --tve-applied-background-image: linear-gradient(var$(--tcb-local-color-62516, rgb(19, 114, 211)), var$(--tcb-local-color-62516, rgb(19, 114, 211)));
                background-size: auto;
                background-attachment: scroll;
                border-radius: 20px;
                padding: 22px 40px;
                background-position: 50% 50%;
                background-repeat: no-repeat;
                background-color: transparent !important;
                overflow: hidden;
            }
            [data-css="tve-u-187134e7e1a"] .tcb-button-link span {
                color: rgb(255, 255, 255);
                --tcb-applied-color: #fff;
            }
            [data-css="tve-u-187134e7e1a"] {
                float: none;
                z-index: 3;
                position: relative;
                --tve-alignment: center;
                --tcb-local-color-62516: rgb(0, 0, 0) !important;
                margin-left: auto !important;
                margin-right: auto !important;
                --tve-border-radius: 20px;
            }
            :not(#tve) [data-css="tve-u-187134e7e1a"] .tcb-button-link {
                line-height: 1.1em;
                font-size: 38px;
            }
            [data-css="tve-u-187134fb7b0"] {
                font-size: 46px;
                --tve-alignment: center;
                float: none;
                margin-left: auto !important;
                margin-right: auto !important;
                margin-top: 0px !important;
            }
            [data-css="tve-u-18724803bce"] {
                --tcb-local-color-icon: rgb(0, 0, 0);
                --tcb-local-color-var: rgb(0, 0, 0);
                --tve-icon-size: 29px;
                font-size: 29px;
                width: 29px;
                height: 29px;
            }
            :not(#tve) [data-css="tve-u-18724803bce"]>:first-child {
                color: rgb(0, 0, 0);
                --tve-applied-color: rgb(0, 0, 0);
            }
            :not(#tve) [data-css="tve-u-1872480c2b9"] {
                font-size: 31px !important;
            }
            [data-css="tve-u-1878047cc4b"] {
                width: 100%;
                margin-top: -26px !important;
            }
            [data-css="tve-u-1878047e60d"] .tcb-button-link {
                letter-spacing: 2px;
                background-image: linear-gradient(var(--tcb-local-color-62516, rgb(19, 114, 211)), var(--tcb-local-color-62516, rgb(19, 114, 211)));
                --tve-applied-background-image: linear-gradient(var$(--tcb-local-color-62516, rgb(19, 114, 211)), var$(--tcb-local-color-62516, rgb(19, 114, 211)));
                background-size: auto;
                background-attachment: scroll;
                border-radius: 20px;
                padding: 22px 40px;
                background-position: 50% 50%;
                background-repeat: no-repeat;
                background-color: transparent !important;
                overflow: hidden;
            }
            [data-css="tve-u-1878047e60d"] .tcb-button-link span {
                color: rgb(255, 255, 255);
                --tcb-applied-color: #fff;
            }
            [data-css="tve-u-1878047e60d"] {
                float: none;
                z-index: 3;
                position: relative;
                --tve-alignment: center;
                --tcb-local-color-62516: rgb(0, 0, 0) !important;
                margin-left: auto !important;
                margin-right: auto !important;
                --tve-border-radius: 20px;
                margin-top: -1px !important;
            }
            :not(#tve) [data-css="tve-u-1878047e60d"] .tcb-button-link {
                line-height: 1.1em;
                font-size: 38px;
            }
            :not(#tve) [data-css="tve-u-1878047e60f"] {
                font-size: 31px !important;
            }
            [data-css="tve-u-188175b9a52"] {
                --tcb-local-color-icon: rgb(0, 0, 0);
                --tcb-local-color-var: rgb(0, 0, 0);
                --tve-icon-size: 29px;
                font-size: 29px;
                width: 29px;
                height: 29px;
            }
            :not(#tve) [data-css="tve-u-188175b9a52"]>:first-child {
                color: rgb(0, 0, 0);
                --tve-applied-color: rgb(0, 0, 0);
            }
            :not(#tve) [data-css="tve-u-188175ff344"] {
                font-weight: var(--g-bold-weight, bold) !important;
                font-size: 31px !important;
                color: rgb(234, 227, 13) !important;
                --tcb-applied-color: rgb(234, 227, 13) !important;
                --tve-applied-color: rgb(234, 227, 13) !important;
            }
            :not(#tve) [data-css="tve-u-18817605696"] {
                color: rgb(234, 227, 13) !important;
                --tcb-applied-color: rgb(234, 227, 13) !important;
                --tve-applied-color: rgb(234, 227, 13) !important;
            }
            [data-css="tve-u-1881765c796"] {
                width: 100%;
                margin-top: -27px !important;
            }
        }

        @media (max-width:767px) {
            :not(#tve) [data-css="tve-u-187134e7e1a"] .tcb-button-link {
                line-height: 1.2em;
                font-size: 32px;
            }
            [data-css="tve-u-187134e7e1a"] .tcb-button-link {
                padding: 18px 30px;
            }
            [data-css="tve-u-187134e7e1a"] {
                --tve-alignment: center;
                float: none;
                display: block;
                max-width: 83%;
                width: 83%;
                min-width: 0px !important;
                margin-left: auto !important;
                margin-right: auto !important;
                margin-top: -14px !important;
            }
            :not(#tve) [data-css="tve-u-1872480c2b9"] {
                font-size: 31px !important;
            }
            :not(#tve) [data-css="tve-u-1878047e60d"] .tcb-button-link {
                line-height: 1.2em;
                font-size: 32px;
            }
            [data-css="tve-u-1878047e60d"] .tcb-button-link {
                padding: 18px 30px;
            }
            [data-css="tve-u-1878047e60d"] {
                --tve-alignment: center;
                float: none;
                display: block;
                max-width: 83%;
                width: 83%;
                min-width: 0px !important;
                margin-left: auto !important;
                margin-right: auto !important;
                margin-top: 2px !important;
            }
            :not(#tve) [data-css="tve-u-1878047e60f"] {
                font-size: 31px !important;
            }
            :not(#tve) [data-css="tve-u-188175ff344"] {
                font-size: 23px !important;
            }
            [data-css="tve-u-18817632905"] {
                margin-top: -10px !important;
            }
            [data-css="tve-u-1871345c430"] {
                margin-top: 6px !important;
            }
            :not(#tve) [data-css="tve-u-187134a85a7"] li {
                margin-bottom: 1px !important;
                font-size: var(--tve-font-size, 14px) !important;
            }
            [data-css="tve-u-187134a85a7"] {
                --tve-font-size: 14px;
            }
            [data-css="tve-u-1878047cc4b"] {
                margin-top: -34px !important;
            }
        }
    </style>
    <style type="text/css" id="tve_head_custom_css" class="tve_user_custom_style">
        .thrv_text_element p {
            margin: 0;
        }

        .thrv_heading h1,
        h2,
        h3,
        h4,
        h5 {
            margin: 0;
        }
    </style>
    <style>
        html {
            height: auto;
        }

        html.tcb-editor {
            overflow-y: initial;
        }

        body:before,
        body:after {
            height: 0 !important;
        }

        .thrv_page_section .out {
            max-width: none
        }

        .tve_wrap_all {
            position: relative;
        }

        /* Content Width - inherit Content Width directly from LP settings */

        .thrv-page-section[data-inherit-lp-settings="1"] .tve-page-section-in {
            max-width: 1080px !important;
            max-width: var(--page-section-max-width) !important;
        }

        /* set the max-width also for over content settings */

        body.tcb-full-header .thrv_header,
        body.tcb-full-footer .thrv_footer {
            width: 100vw;
            max-width: 100vw;
            left: 50%;
            right: 50%;
            margin-left: -50vw !important;
            margin-right: -50vw !important;
        }
    </style>

</head>

<body class="home page-template-default page page-id-8 wp-embed-responsive tve_lp" style="" data-css="tve-u-15e09c94f7d">
    <div class="wrp cnt bSe" style="display: none">
        <div class="awr"></div>
    </div>
    <div class="tve_wrap_all" id="tcb_landing_page">
        <div class="tve_post_lp tve_lp_tcb2-coming-soon-10 tve_lp_template_wrapper" style="">
            <div id="tve_flt" class="tve_flt tcb-style-wrap">
                <div id="tve_editor" class="tve_shortcode_editor tar-main-content" data-post-id="8">
                    <div id="thrive-header" class="thrv_wrapper thrv_symbol thrive-shortcode thrv_header tve_no_drag thrv_symbol_15  tve-default-state" data-id="15" data-selector=".thrv_symbol_15" data-shortcode="thrive_header" data-tcb-elem-type="header"
                        data-element-name="Header">
                        <div class="thrive-shortcode-html thrive-symbol-shortcode tve-default-state" data-symbol-id="15">
                            <style type="text/css" id="tcb-style-base-tcb_symbol-15" onLoad="typeof window.lightspeedOptimizeStylesheet === \'function\' && window.lightspeedOptimizeStylesheet()" class="tcb-lightspeed-style">
                                .thrive-symbol-shortcode {
                                    position: relative;
                                }

                                body:not(.tve_editor_page) .thrv_wrapper.thrv_footer,
                                body:not(.tve_editor_page) .thrv_wrapper.thrv_header {
                                    padding: 0px;
                                }

                                .tcb-logo {
                                    box-sizing: border-box !important;
                                    display: block;
                                    max-width: 100%;
                                    width: 240px;
                                }

                                .tcb-logo.thrv_wrapper {
                                    padding: 0px;
                                }

                                .tcb-logo img {
                                    display: block;
                                    max-width: 100%;
                                    height: auto;
                                }

                                .notifications-content-wrapper.tcb-permanently-hidden {
                                    display: none !important;
                                }

                                .tcb-permanently-hidden {
                                    display: none !important;
                                }

                                .tar-disabled {
                                    cursor: default;
                                    opacity: 0.4;
                                    pointer-events: none;
                                }

                                .tcb-flex-row {
                                    display: flex;
                                    flex-flow: row nowrap;
                                    align-items: stretch;
                                    justify-content: space-between;
                                    margin-top: 0px;
                                    margin-left: -15px;
                                    padding-bottom: 15px;
                                    padding-top: 15px;
                                }

                                .tcb-flex-col {
                                    flex: 1 1 auto;
                                    padding-top: 0px;
                                    padding-left: 15px;
                                }

                                .tcb-flex-row .tcb-flex-col {
                                    box-sizing: border-box;
                                }

                                .tcb-col {
                                    height: 100%;
                                    display: flex;
                                    flex-direction: column;
                                    position: relative;
                                }

                                .tcb-flex-row .tcb-col {
                                    box-sizing: border-box;
                                }

                                .tcb--cols--1>.tcb-flex-col>.tcb-col {
                                    max-width: 100%;
                                }

                                html {
                                    text-rendering: auto !important;
                                }

                                html body {
                                    text-rendering: auto !important;
                                }

                                body.tve_lp::before {
                                    content: none;
                                }

                                .thrv_wrapper {
                                    margin-top: 20px;
                                    margin-bottom: 20px;
                                    padding: 1px;
                                }

                                .thrv_wrapper div {
                                    box-sizing: content-box;
                                }

                                .thrv_symbol .thrv_wrapper:not(.thrv_icon) {
                                    box-sizing: border-box !important;
                                }

                                .thrv_wrapper.thrv_symbol {
                                    margin: 0px;
                                }

                                .thrv_wrapper.thrv-columns {
                                    margin-top: 10px;
                                    margin-bottom: 10px;
                                    padding: 0px;
                                }

                                #tve_editor.tve_empty_dropzone .thrv_symbol.thrv_header .symbol-section-in {
                                    padding: 1px;
                                }

                                .thrv_symbol.thrv_header {
                                    width: 100%;
                                    position: relative;
                                    box-sizing: border-box;
                                }

                                .thrv_symbol.thrv_header .thrive-symbol-shortcode {
                                    margin: 0px auto;
                                    position: relative;
                                }

                                .symbol-section-in {
                                    margin: 0px auto;
                                    position: relative;
                                    z-index: 1;
                                    box-sizing: border-box;
                                }

                                .symbol-section-in:empty::before {
                                    font-family: sans-serif;
                                    line-height: 40px;
                                }

                                .symbol-section-in::after,
                                .symbol-section-in::before {
                                    content: "";
                                    display: block;
                                    overflow: auto;
                                }

                                .symbol-section-out {
                                    position: absolute;
                                    width: 100%;
                                    height: 100%;
                                    left: 0px;
                                    top: 0px;
                                    box-sizing: border-box !important;
                                    overflow: hidden;
                                }

                                :not(#_s):not(#_s) .tcb-conditional-display-placeholder {
                                    min-height: var(--tcb-container-height-d, 100px) !important;
                                    position: relative;
                                }

                                :not(#_s):not(#_s) .tcb-conditional-display-placeholder.thrv-page-section {
                                    box-sizing: border-box;
                                    margin: 0px;
                                }

                                :not(#_s):not(#_s) .tcb-conditional-display-placeholder.thrv-content-box {
                                    box-sizing: border-box;
                                }

                                :not(#_s):not(#_s) .tcb-conditional-display-placeholder .tve-page-section-out,
                                :not(#_s):not(#_s) .tcb-conditional-display-placeholder .tve-content-box-background {
                                    box-sizing: border-box;
                                    position: absolute;
                                    width: 100%;
                                    height: 100%;
                                    left: 0px;
                                    top: 0px;
                                    overflow: hidden;
                                }

                                body {
                                    margin: 0px;
                                    padding: 0px;
                                }

                                @media (max-width:1023px) {
                                    :not(#_s):not(#_s) .tcb-conditional-display-placeholder {
                                        min-height: var(--tcb-container-height-t) !important;
                                    }
                                }

                                @media (max-width:767px) {
                                    html {
                                        overflow-x: hidden !important;
                                    }
                                    html,
                                    body {
                                        max-width: 100vw !important;
                                    }
                                    .tcb-flex-row {
                                        flex-direction: column;
                                    }
                                    .tcb-flex-row.v-2 {
                                        flex-direction: row;
                                    }
                                    :not(#_s):not(#_s) .tcb-conditional-display-placeholder {
                                        min-height: var(--tcb-container-height-m) !important;
                                    }
                                    html {
                                        width: 100%;
                                    }
                                    body {
                                        width: 100%;
                                        overflow-x: hidden;
                                    }
                                }

                                @media (max-width:1023px) and (min-width:768px) {
                                    .tcb-flex-row:not(.tcb--cols--2):not(.tcb-medium-no-wrap) {
                                        flex-wrap: wrap;
                                    }
                                    .tcb-flex-row:not(.tcb--cols--2):not(.tcb-medium-no-wrap)>.tcb-flex-col {
                                        max-width: 100% !important;
                                        flex: 1 0 250px;
                                    }
                                }

                                @media screen and (-ms-high-contrast:active),
                                (-ms-high-contrast:none) {
                                    .tcb-flex-col {
                                        width: 100%;
                                    }
                                    .tcb-col {
                                        display: block;
                                    }
                                }

                                @media screen and (max-device-width:480px) {
                                    body {
                                        -moz-text-size-adjust: none;
                                    }
                                }
                            </style>
                            <style class=\'tve-symbol-custom-style\'>
                                @media (min-width:300px) {
                                    .thrv_symbol_15 [data-css="tve-u-16ea80bf344"] {
                                        width: 181px !important;
                                        margin: 0px auto !important;
                                        --tve-alignment: center;
                                        float: none;
                                    }
                                    .thrv_symbol_15 .thrive-symbol-shortcode {
                                        padding: 20px !important;
                                    }
                                    .thrv_symbol_15 [data-css="tve-u-16ea80e7302"] {
                                        margin: 0px !important;
                                    }
                                    .thrv_symbol_15 [data-css="tve-u-16ea80e7883"] {
                                        padding: 0px !important;
                                    }
                                    .thrv_symbol_15 [data-css="tve-u-16ea80e7883"]>.tcb-flex-col>.tcb-col {
                                        justify-content: center;
                                    }
                                    .thrv_symbol_15.tve-default-state .symbol-section-out.tve-default-state {
                                        background-color: rgb(242, 242, 242) !important;
                                        min-height: 0px !important;
                                        background-image: linear-gradient(rgba(77, 204, 229, 0.47), rgba(77, 204, 229, 0.47)) !important;
                                        --background-image: linear-gradient(rgba(77, 204, 229, 0.47), rgba(77, 204, 229, 0.47)) !important;
                                        --tve-applied-background-image: linear-gradient(rgba(77, 204, 229, 0.47), rgba(77, 204, 229, 0.47)) !important;
                                        background-size: auto !important;
                                        background-position: 50% 50% !important;
                                        background-attachment: scroll !important;
                                        background-repeat: no-repeat !important;
                                        --background-size: auto auto !important;
                                        --background-position: 50% 50% !important;
                                        --background-attachment: scroll !important;
                                        --background-repeat: no-repeat !important;
                                    }
                                    .thrv_symbol_15 [data-css="tve-u-188175982ab"] {
                                        max-width: 100%;
                                    }
                                }

                                @media (max-width:1023px) {
                                    .thrv_symbol_15 [data-css="tve-u-16ea80bf344"] {
                                        width: 190px;
                                    }
                                }

                                @media (max-width:767px) {
                                    .thrv_symbol_15 [data-css="tve-u-16ea80e7883"] {
                                        flex-wrap: nowrap !important;
                                    }
                                    .thrv_symbol_15 [data-css="tve-u-16ea80bf344"] {
                                        width: 180px;
                                    }
                                }
                            </style>
                            <div class="symbol-section-out tve-default-state" style="" data-selector=".symbol-section-out" data-tcb_hover_state_parent=""></div>
                            <div class="symbol-section-in tve-default-state" style="" data-selector=".symbol-section-in">
                                <div class="thrv_wrapper thrv-columns" style="--tcb-col-el-width: 1559;" data-css="tve-u-16ea80e7302">
                                    <div class="tcb-flex-row v-2 tcb-mobile-no-wrap m-edit tcb--cols--1" style="padding: 0px !important;" data-css="tve-u-16ea80e7883">
                                        <div class="tcb-flex-col" data-css="tve-u-188175982ab" style="">
                                            <div class="tcb-col" style="">
                                                <a class="tcb-logo thrv_wrapper" data-css="tve-u-16ea80bf344" data-img-style="width: 100%;" class="">
                                                    <picture>
                                                        <source srcset="https://livpure.bio/wp-content/uploads/2023/05/Screenshot-2023-05-14-at-04-01-04-Weird-Mediterranean-Ritual-Dissolves-Fat-Overnight-300x59.png 300w, https://livpure.bio/wp-content/uploads/2023/05/Screenshot-2023-05-14-at-04-01-04-Weird-Mediterranean-Ritual-Dissolves-Fat-Overnight.png 600w"
                                                            media="(min-width:1024px)"></source><img src="https://livpure.bio/wp-content/uploads/2023/05/Screenshot-2023-05-14-at-04-01-04-Weird-Mediterranean-Ritual-Dissolves-Fat-Overnight.png" height="118" width="600" alt="" style="width: 100%;"
                                                            class="tve-not-lazy-loaded"></img>
                                                    </picture>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="thrv_wrapper thrv-page-section" data-css="tve-u-160bc5348c2">
                        <div class="tve-page-section-out" data-css="tve-u-160bc5370ae" style=""></div>
                        <div class="tve-page-section-in tve_empty_dropzone tve-section-full-height">
                            <div class="thrv_wrapper thrv-columns" style="--tcb-col-el-width: 1603;">
                                <div class="tcb-flex-row v-2 tcb--cols--2">
                                    <div class="tcb-flex-col" data-css="tve-u-187134d5a99" style="">
                                        <div class="tcb-col">
                                            <div class="thrv_wrapper tve_image_caption" data-css="tve-u-1871345c430" style=""><span class="tve_image_frame"><img decoding="async" class="tve_image tcb-moved-image wp-image-20" alt="" data-id="20" data-init-width="442" data-init-height="289" title="Screenshot 2023-05-14 at 04-00-19 Secure Checkout" loading="lazy" src="https://livpure.bio/wp-content/uploads/2023/05/Screenshot-2023-05-14-at-04-00-19-Secure-Checkout.png" data-width="617" style="" data-css="tve-u-188175a7de1" width="617" height="289"></span></div>
                                        </div>
                                    </div>
                                    <div class="tcb-flex-col" data-css="tve-u-187134e5bb3" style="">
                                        <div class="tcb-col">
                                            <div class="thrv_wrapper thrv_text_element" style="" data-css="tve-u-18817632905">
                                                <h1 class="" style="text-align: center; color: rgb(235, 195, 141) !important; --tcb-applied-color: rgb(235, 195, 141)  !important;" data-css="tve-u-18817605696">Liv-Pure</h1>
                                                <p style="text-align: center; color: rgb(235, 195, 141) !important; --tcb-applied-color: rgb(235, 195, 141)              !important;" data-css="tve-u-188175ff344">Weird Mediterranean Ritual Dissolves Fat Overnight<br></p>
                                            </div>
                                            <div class="thrv_wrapper thrv-styled_list" data-icon-code="icon-weight-kilogram-solid" style="" data-css="tve-u-187134a85a7">
                                                <ul class="tcb-styled-list">
                                                    <li class="thrv-styled-list-item" style="">
                                                        <div class="tcb-styled-list-icon">
                                                            <div class="thrv_wrapper thrv_icon tve_no_drag tcb-no-delete tcb-no-clone tcb-no-save tcb-icon-inherit-style tcb-local-vars-root tcb-icon-display" data-css="tve-u-1871349e748" style=""><svg class="tcb-icon" viewBox="0 0 24 24" data-id="icon-weight-kilogram-solid" data-name=""><path d="M12,3A4,4 0 0,1 16,7C16,7.73 15.81,8.41 15.46,9H18C18.95,9 19.75,9.67 19.95,10.56C21.96,18.57 22,18.78 22,19A2,2 0 0,1 20,21H4A2,2 0 0,1 2,19C2,18.78 2.04,18.57 4.05,10.56C4.25,9.67 5.05,9 6,9H8.54C8.19,8.41 8,7.73 8,7A4,4 0 0,1 12,3M12,5A2,2 0 0,0 10,7A2,2 0 0,0 12,9A2,2 0 0,0 14,7A2,2 0 0,0 12,5M6,11V19H8V16.5L9,17.5V19H11V17L9,15L11,13V11H9V12.5L8,13.5V11H6M15,11C13.89,11 13,11.89 13,13V17C13,18.11 13.89,19 15,19H18V14H16V17H15V13H18V11H15Z"></path></svg></div>
                                                        </div><span class="thrv-advanced-inline-text tve_editable tcb-styled-list-icon-text tcb-no-delete tcb-no-save" data-css="tve-u-1871348f412"><strong>Powered By Nature</strong><br></span></li>
                                                    <li class="thrv-styled-list-item"
                                                        style="">
                                                        <div class="tcb-styled-list-icon">
                                                            <div class="thrv_wrapper thrv_icon tve_no_drag tcb-no-delete tcb-no-clone tcb-no-save tcb-icon-inherit-style tcb-local-vars-root tcb-icon-display" data-css="tve-u-1871349233a" style=""><svg class="tcb-icon" viewBox="0 0 24 24" data-id="icon-weight-kilogram-solid" data-name=""><path d="M12,3A4,4 0 0,1 16,7C16,7.73 15.81,8.41 15.46,9H18C18.95,9 19.75,9.67 19.95,10.56C21.96,18.57 22,18.78 22,19A2,2 0 0,1 20,21H4A2,2 0 0,1 2,19C2,18.78 2.04,18.57 4.05,10.56C4.25,9.67 5.05,9 6,9H8.54C8.19,8.41 8,7.73 8,7A4,4 0 0,1 12,3M12,5A2,2 0 0,0 10,7A2,2 0 0,0 12,9A2,2 0 0,0 14,7A2,2 0 0,0 12,5M6,11V19H8V16.5L9,17.5V19H11V17L9,15L11,13V11H9V12.5L8,13.5V11H6M15,11C13.89,11 13,11.89 13,13V17C13,18.11 13.89,19 15,19H18V14H16V17H15V13H18V11H15Z"></path></svg></div>
                                                        </div><span class="thrv-advanced-inline-text tve_editable tcb-styled-list-icon-text tcb-no-delete tcb-no-save" data-css="tve-u-1871348f412"><strong>Plant Ingredients</strong><br></span></li>
                                                    <li class="thrv-styled-list-item"
                                                        style="">
                                                        <div class="tcb-styled-list-icon">
                                                            <div class="thrv_wrapper thrv_icon tve_no_drag tcb-no-delete tcb-no-clone tcb-no-save tcb-icon-inherit-style tcb-local-vars-root tcb-icon-display" data-css="tve-u-1871349e74a" style=""><svg class="tcb-icon" viewBox="0 0 24 24" data-id="icon-weight-kilogram-solid" data-name=""><path d="M12,3A4,4 0 0,1 16,7C16,7.73 15.81,8.41 15.46,9H18C18.95,9 19.75,9.67 19.95,10.56C21.96,18.57 22,18.78 22,19A2,2 0 0,1 20,21H4A2,2 0 0,1 2,19C2,18.78 2.04,18.57 4.05,10.56C4.25,9.67 5.05,9 6,9H8.54C8.19,8.41 8,7.73 8,7A4,4 0 0,1 12,3M12,5A2,2 0 0,0 10,7A2,2 0 0,0 12,9A2,2 0 0,0 14,7A2,2 0 0,0 12,5M6,11V19H8V16.5L9,17.5V19H11V17L9,15L11,13V11H9V12.5L8,13.5V11H6M15,11C13.89,11 13,11.89 13,13V17C13,18.11 13.89,19 15,19H18V14H16V17H15V13H18V11H15Z"></path></svg></div>
                                                        </div><span class="thrv-advanced-inline-text tve_editable tcb-styled-list-icon-text tcb-no-delete tcb-no-save" data-css="tve-u-1871348f412"><strong>Non-GMO</strong><br></span></li>
                                                    <li class="thrv-styled-list-item"
                                                        style="">
                                                        <div class="tcb-styled-list-icon">
                                                            <div class="thrv_wrapper thrv_icon tve_no_drag tcb-no-delete tcb-no-clone tcb-no-save tcb-icon-inherit-style tcb-local-vars-root tcb-icon-display" data-css="tve-u-1871349e74c" style=""><svg class="tcb-icon" viewBox="0 0 24 24" data-id="icon-weight-kilogram-solid" data-name=""><path d="M12,3A4,4 0 0,1 16,7C16,7.73 15.81,8.41 15.46,9H18C18.95,9 19.75,9.67 19.95,10.56C21.96,18.57 22,18.78 22,19A2,2 0 0,1 20,21H4A2,2 0 0,1 2,19C2,18.78 2.04,18.57 4.05,10.56C4.25,9.67 5.05,9 6,9H8.54C8.19,8.41 8,7.73 8,7A4,4 0 0,1 12,3M12,5A2,2 0 0,0 10,7A2,2 0 0,0 12,9A2,2 0 0,0 14,7A2,2 0 0,0 12,5M6,11V19H8V16.5L9,17.5V19H11V17L9,15L11,13V11H9V12.5L8,13.5V11H6M15,11C13.89,11 13,11.89 13,13V17C13,18.11 13.89,19 15,19H18V14H16V17H15V13H18V11H15Z"></path></svg></div>
                                                        </div><span class="thrv-advanced-inline-text tve_editable tcb-styled-list-icon-text tcb-no-delete tcb-no-save" data-css="tve-u-1871348f412"><strong>Soy and Dairy Free</strong><br></span></li>
                                                    <li class="thrv-styled-list-item"
                                                        data-css="undefined" style="">
                                                        <div class="tcb-styled-list-icon">
                                                            <div class="thrv_wrapper thrv_icon tve_no_drag tcb-no-delete tcb-no-clone tcb-no-save tcb-icon-inherit-style tcb-icon-display" data-css="tve-u-18724803bce" style=""><svg class="tcb-icon" viewBox="0 0 24 24" data-id="icon-weight-kilogram-solid" data-name=""><path d="M12,3A4,4 0 0,1 16,7C16,7.73 15.81,8.41 15.46,9H18C18.95,9 19.75,9.67 19.95,10.56C21.96,18.57 22,18.78 22,19A2,2 0 0,1 20,21H4A2,2 0 0,1 2,19C2,18.78 2.04,18.57 4.05,10.56C4.25,9.67 5.05,9 6,9H8.54C8.19,8.41 8,7.73 8,7A4,4 0 0,1 12,3M12,5A2,2 0 0,0 10,7A2,2 0 0,0 12,9A2,2 0 0,0 14,7A2,2 0 0,0 12,5M6,11V19H8V16.5L9,17.5V19H11V17L9,15L11,13V11H9V12.5L8,13.5V11H6M15,11C13.89,11 13,11.89 13,13V17C13,18.11 13.89,19 15,19H18V14H16V17H15V13H18V11H15Z"></path></svg></div>
                                                        </div><span class="thrv-advanced-inline-text tve_editable tcb-styled-list-icon-text tcb-no-delete tcb-no-save" data-css="tve-u-1871348f412"><strong>Non- Habit Forming<br></strong></span></li>
                                                    <li class="thrv-styled-list-item"
                                                        data-css="undefined" style="">
                                                        <div class="tcb-styled-list-icon">
                                                            <div class="thrv_wrapper thrv_icon tve_no_drag tcb-no-delete tcb-no-clone tcb-no-save tcb-icon-inherit-style tcb-icon-display" data-css="tve-u-188175b9a52"><svg class="tcb-icon" viewBox="0 0 24 24" data-id="icon-weight-kilogram-solid" data-name=""><path d="M12,3A4,4 0 0,1 16,7C16,7.73 15.81,8.41 15.46,9H18C18.95,9 19.75,9.67 19.95,10.56C21.96,18.57 22,18.78 22,19A2,2 0 0,1 20,21H4A2,2 0 0,1 2,19C2,18.78 2.04,18.57 4.05,10.56C4.25,9.67 5.05,9 6,9H8.54C8.19,8.41 8,7.73 8,7A4,4 0 0,1 12,3M12,5A2,2 0 0,0 10,7A2,2 0 0,0 12,9A2,2 0 0,0 14,7A2,2 0 0,0 12,5M6,11V19H8V16.5L9,17.5V19H11V17L9,15L11,13V11H9V12.5L8,13.5V11H6M15,11C13.89,11 13,11.89 13,13V17C13,18.11 13.89,19 15,19H18V14H16V17H15V13H18V11H15Z"></path></svg></div>
                                                        </div><span class="thrv-advanced-inline-text tve_editable tcb-styled-list-icon-text tcb-no-delete tcb-no-save" data-css="tve-u-1871348f412"><strong>Easy To Swallow</strong><strong></strong><br><strong></strong></span></li>
                                                </ul>
                                            </div>
                                            <div class="thrv_wrapper thrv-button thrv-button-v2 tcb-local-vars-root tve_ea_thrive_animation tve_anim_pulse_grow tve_anim_grow" data-css="tve-u-187134e7e1a" style="" data-button-size-d="xl" data-tcb_hover_state_parent=""
                                                data-button-size-m="l">
                                                <div class="thrive-colors-palette-config" style="display: none !important"></div>
                                                <a href="https://bestofferhere.link/livpure" class="tcb-button-link tcb-plain-text tve_evt_manager_listen tve_et_mouseover tve_et_tve-viewport" style="" data-tcb-events="__TCB_EVENT_[{&quot;t&quot;:&quot;mouseover&quot;,&quot;config&quot;:{&quot;anim&quot;:&quot;pulse_grow&quot;,&quot;loop&quot;:1},&quot;a&quot;:&quot;thrive_animation&quot;},{&quot;t&quot;:&quot;tve-viewport&quot;,&quot;config&quot;:{&quot;anim&quot;:&quot;grow&quot;,&quot;loop&quot;:1},&quot;a&quot;:&quot;thrive_animation&quot;}]_TNEVE_BCT__">
		<span class="tcb-button-texts"><span class="tcb-button-text thrv-inline-text" style="" data-css="tve-u-1872480c2b9">Get 80% OFF Now!</span></span>
	</a>
                                            </div>
                                            <div class="thrv_wrapper thrv-rating" data-style="style1" data-max="5" data-value="5" style="" data-css="tve-u-187134fb7b0"><svg viewBox="-6 -6 70 70" class=""><path class="sr-fill" fill="#F0C419" d="M46.976,57.227c-0.422,0-0.834-0.104-1.228-0.312l-13.167-6.921c-0.663-0.349-1.409-0.533-2.158-0.533s-1.495,0.185-2.158,0.533L15.1,56.915c-0.393,0.208-0.807,0.312-1.229,0.312c-0.765,0-1.524-0.358-2.03-0.958c-0.501-0.595-0.703-1.353-0.569-2.134l2.515-14.661c0.258-1.505-0.241-3.039-1.334-4.105L1.8,24.985c-0.736-0.717-0.985-1.728-0.668-2.704c0.318-0.977,1.114-1.649,2.13-1.796l14.72-2.139c1.512-0.22,2.817-1.168,3.493-2.537L28.059,2.47C28.513,1.55,29.396,1,30.423,1c1.027,0,1.911,0.55,2.365,1.471l6.584,13.339c0.676,1.369,1.98,2.317,3.492,2.537l14.721,2.139c1.016,0.147,1.813,0.819,2.129,1.795c0.317,0.977,0.068,1.988-0.668,2.705L48.394,35.369c-1.092,1.065-1.59,2.6-1.334,4.105l2.516,14.661c0.134,0.781-0.068,1.539-0.569,2.134C48.5,56.869,47.743,57.227,46.976,57.227"></path><path class="sr-outline" fill="#FBB040" d="M30.423,2c0.306,0,1.063,0.089,1.469,0.913l6.584,13.339c0.821,1.664,2.407,2.817,4.244,3.084l14.721,2.139c0.91,0.132,1.228,0.824,1.322,1.115c0.096,0.291,0.243,1.038-0.414,1.679L47.697,34.652c-1.329,1.295-1.936,3.161-1.621,4.991l2.515,14.661c0.106,0.623-0.131,1.061-0.349,1.319c-0.318,0.378-0.791,0.604-1.266,0.604c-0.259,0-0.515-0.067-0.763-0.197l-13.166-6.922c-0.806-0.423-1.713-0.647-2.624-0.647c-0.911,0-1.818,0.224-2.624,0.647L14.633,56.03c-0.248,0.13-0.504,0.197-0.763,0.197c-0.474,0-0.948-0.226-1.266-0.604c-0.218-0.258-0.454-0.696-0.348-1.319l2.515-14.661c0.314-1.83-0.292-3.696-1.621-4.991L2.5,24.269c-0.659-0.641-0.51-1.388-0.415-1.679c0.095-0.291,0.413-0.983,1.322-1.115l14.721-2.139c1.837-0.267,3.423-1.42,4.245-3.084l6.583-13.339C29.361,2.089,30.118,2,30.423,2 M30.423,0c-1.297,0-2.595,0.676-3.262,2.027l-6.584,13.339c-0.53,1.074-1.554,1.819-2.739,1.99l-14.72,2.14c-2.984,0.434-4.175,4.101-2.016,6.205l10.652,10.383c0.857,0.836,1.248,2.04,1.045,3.221l-2.514,14.66c-0.403,2.351,1.465,4.262,3.585,4.262c0.559,0,1.136-0.134,1.694-0.426l13.166-6.923c0.53-0.278,1.111-0.417,1.693-0.417s1.163,0.139,1.693,0.417l13.166,6.923c0.558,0.293,1.135,0.426,1.693,0.426c2.121,0,3.988-1.911,3.586-4.262l-2.515-14.66c-0.202-1.181,0.188-2.385,1.045-3.221l10.652-10.383c2.159-2.104,0.968-5.771-2.017-6.205l-14.72-2.14c-1.185-0.171-2.21-0.916-2.739-1.99L33.687,2.027C33.019,0.676,31.72,0,30.423,0"></path></svg>
                                                <svg
                                                    viewBox="-6 -6 70 70" class="">
                                                    <path class="sr-fill" fill="#F0C419" d="M46.976,57.227c-0.422,0-0.834-0.104-1.228-0.312l-13.167-6.921c-0.663-0.349-1.409-0.533-2.158-0.533s-1.495,0.185-2.158,0.533L15.1,56.915c-0.393,0.208-0.807,0.312-1.229,0.312c-0.765,0-1.524-0.358-2.03-0.958c-0.501-0.595-0.703-1.353-0.569-2.134l2.515-14.661c0.258-1.505-0.241-3.039-1.334-4.105L1.8,24.985c-0.736-0.717-0.985-1.728-0.668-2.704c0.318-0.977,1.114-1.649,2.13-1.796l14.72-2.139c1.512-0.22,2.817-1.168,3.493-2.537L28.059,2.47C28.513,1.55,29.396,1,30.423,1c1.027,0,1.911,0.55,2.365,1.471l6.584,13.339c0.676,1.369,1.98,2.317,3.492,2.537l14.721,2.139c1.016,0.147,1.813,0.819,2.129,1.795c0.317,0.977,0.068,1.988-0.668,2.705L48.394,35.369c-1.092,1.065-1.59,2.6-1.334,4.105l2.516,14.661c0.134,0.781-0.068,1.539-0.569,2.134C48.5,56.869,47.743,57.227,46.976,57.227"></path>
                                                    <path class="sr-outline" fill="#FBB040" d="M30.423,2c0.306,0,1.063,0.089,1.469,0.913l6.584,13.339c0.821,1.664,2.407,2.817,4.244,3.084l14.721,2.139c0.91,0.132,1.228,0.824,1.322,1.115c0.096,0.291,0.243,1.038-0.414,1.679L47.697,34.652c-1.329,1.295-1.936,3.161-1.621,4.991l2.515,14.661c0.106,0.623-0.131,1.061-0.349,1.319c-0.318,0.378-0.791,0.604-1.266,0.604c-0.259,0-0.515-0.067-0.763-0.197l-13.166-6.922c-0.806-0.423-1.713-0.647-2.624-0.647c-0.911,0-1.818,0.224-2.624,0.647L14.633,56.03c-0.248,0.13-0.504,0.197-0.763,0.197c-0.474,0-0.948-0.226-1.266-0.604c-0.218-0.258-0.454-0.696-0.348-1.319l2.515-14.661c0.314-1.83-0.292-3.696-1.621-4.991L2.5,24.269c-0.659-0.641-0.51-1.388-0.415-1.679c0.095-0.291,0.413-0.983,1.322-1.115l14.721-2.139c1.837-0.267,3.423-1.42,4.245-3.084l6.583-13.339C29.361,2.089,30.118,2,30.423,2 M30.423,0c-1.297,0-2.595,0.676-3.262,2.027l-6.584,13.339c-0.53,1.074-1.554,1.819-2.739,1.99l-14.72,2.14c-2.984,0.434-4.175,4.101-2.016,6.205l10.652,10.383c0.857,0.836,1.248,2.04,1.045,3.221l-2.514,14.66c-0.403,2.351,1.465,4.262,3.585,4.262c0.559,0,1.136-0.134,1.694-0.426l13.166-6.923c0.53-0.278,1.111-0.417,1.693-0.417s1.163,0.139,1.693,0.417l13.166,6.923c0.558,0.293,1.135,0.426,1.693,0.426c2.121,0,3.988-1.911,3.586-4.262l-2.515-14.66c-0.202-1.181,0.188-2.385,1.045-3.221l10.652-10.383c2.159-2.104,0.968-5.771-2.017-6.205l-14.72-2.14c-1.185-0.171-2.21-0.916-2.739-1.99L33.687,2.027C33.019,0.676,31.72,0,30.423,0"></path>
                                                    </svg><svg viewBox="-6 -6 70 70" class=""><path class="sr-fill" fill="#F0C419" d="M46.976,57.227c-0.422,0-0.834-0.104-1.228-0.312l-13.167-6.921c-0.663-0.349-1.409-0.533-2.158-0.533s-1.495,0.185-2.158,0.533L15.1,56.915c-0.393,0.208-0.807,0.312-1.229,0.312c-0.765,0-1.524-0.358-2.03-0.958c-0.501-0.595-0.703-1.353-0.569-2.134l2.515-14.661c0.258-1.505-0.241-3.039-1.334-4.105L1.8,24.985c-0.736-0.717-0.985-1.728-0.668-2.704c0.318-0.977,1.114-1.649,2.13-1.796l14.72-2.139c1.512-0.22,2.817-1.168,3.493-2.537L28.059,2.47C28.513,1.55,29.396,1,30.423,1c1.027,0,1.911,0.55,2.365,1.471l6.584,13.339c0.676,1.369,1.98,2.317,3.492,2.537l14.721,2.139c1.016,0.147,1.813,0.819,2.129,1.795c0.317,0.977,0.068,1.988-0.668,2.705L48.394,35.369c-1.092,1.065-1.59,2.6-1.334,4.105l2.516,14.661c0.134,0.781-0.068,1.539-0.569,2.134C48.5,56.869,47.743,57.227,46.976,57.227"></path><path class="sr-outline" fill="#FBB040" d="M30.423,2c0.306,0,1.063,0.089,1.469,0.913l6.584,13.339c0.821,1.664,2.407,2.817,4.244,3.084l14.721,2.139c0.91,0.132,1.228,0.824,1.322,1.115c0.096,0.291,0.243,1.038-0.414,1.679L47.697,34.652c-1.329,1.295-1.936,3.161-1.621,4.991l2.515,14.661c0.106,0.623-0.131,1.061-0.349,1.319c-0.318,0.378-0.791,0.604-1.266,0.604c-0.259,0-0.515-0.067-0.763-0.197l-13.166-6.922c-0.806-0.423-1.713-0.647-2.624-0.647c-0.911,0-1.818,0.224-2.624,0.647L14.633,56.03c-0.248,0.13-0.504,0.197-0.763,0.197c-0.474,0-0.948-0.226-1.266-0.604c-0.218-0.258-0.454-0.696-0.348-1.319l2.515-14.661c0.314-1.83-0.292-3.696-1.621-4.991L2.5,24.269c-0.659-0.641-0.51-1.388-0.415-1.679c0.095-0.291,0.413-0.983,1.322-1.115l14.721-2.139c1.837-0.267,3.423-1.42,4.245-3.084l6.583-13.339C29.361,2.089,30.118,2,30.423,2 M30.423,0c-1.297,0-2.595,0.676-3.262,2.027l-6.584,13.339c-0.53,1.074-1.554,1.819-2.739,1.99l-14.72,2.14c-2.984,0.434-4.175,4.101-2.016,6.205l10.652,10.383c0.857,0.836,1.248,2.04,1.045,3.221l-2.514,14.66c-0.403,2.351,1.465,4.262,3.585,4.262c0.559,0,1.136-0.134,1.694-0.426l13.166-6.923c0.53-0.278,1.111-0.417,1.693-0.417s1.163,0.139,1.693,0.417l13.166,6.923c0.558,0.293,1.135,0.426,1.693,0.426c2.121,0,3.988-1.911,3.586-4.262l-2.515-14.66c-0.202-1.181,0.188-2.385,1.045-3.221l10.652-10.383c2.159-2.104,0.968-5.771-2.017-6.205l-14.72-2.14c-1.185-0.171-2.21-0.916-2.739-1.99L33.687,2.027C33.019,0.676,31.72,0,30.423,0"></path></svg>
                                                    <svg
                                                        viewBox="-6 -6 70 70" class="">
                                                        <path class="sr-fill" fill="#F0C419" d="M46.976,57.227c-0.422,0-0.834-0.104-1.228-0.312l-13.167-6.921c-0.663-0.349-1.409-0.533-2.158-0.533s-1.495,0.185-2.158,0.533L15.1,56.915c-0.393,0.208-0.807,0.312-1.229,0.312c-0.765,0-1.524-0.358-2.03-0.958c-0.501-0.595-0.703-1.353-0.569-2.134l2.515-14.661c0.258-1.505-0.241-3.039-1.334-4.105L1.8,24.985c-0.736-0.717-0.985-1.728-0.668-2.704c0.318-0.977,1.114-1.649,2.13-1.796l14.72-2.139c1.512-0.22,2.817-1.168,3.493-2.537L28.059,2.47C28.513,1.55,29.396,1,30.423,1c1.027,0,1.911,0.55,2.365,1.471l6.584,13.339c0.676,1.369,1.98,2.317,3.492,2.537l14.721,2.139c1.016,0.147,1.813,0.819,2.129,1.795c0.317,0.977,0.068,1.988-0.668,2.705L48.394,35.369c-1.092,1.065-1.59,2.6-1.334,4.105l2.516,14.661c0.134,0.781-0.068,1.539-0.569,2.134C48.5,56.869,47.743,57.227,46.976,57.227"></path>
                                                        <path class="sr-outline" fill="#FBB040" d="M30.423,2c0.306,0,1.063,0.089,1.469,0.913l6.584,13.339c0.821,1.664,2.407,2.817,4.244,3.084l14.721,2.139c0.91,0.132,1.228,0.824,1.322,1.115c0.096,0.291,0.243,1.038-0.414,1.679L47.697,34.652c-1.329,1.295-1.936,3.161-1.621,4.991l2.515,14.661c0.106,0.623-0.131,1.061-0.349,1.319c-0.318,0.378-0.791,0.604-1.266,0.604c-0.259,0-0.515-0.067-0.763-0.197l-13.166-6.922c-0.806-0.423-1.713-0.647-2.624-0.647c-0.911,0-1.818,0.224-2.624,0.647L14.633,56.03c-0.248,0.13-0.504,0.197-0.763,0.197c-0.474,0-0.948-0.226-1.266-0.604c-0.218-0.258-0.454-0.696-0.348-1.319l2.515-14.661c0.314-1.83-0.292-3.696-1.621-4.991L2.5,24.269c-0.659-0.641-0.51-1.388-0.415-1.679c0.095-0.291,0.413-0.983,1.322-1.115l14.721-2.139c1.837-0.267,3.423-1.42,4.245-3.084l6.583-13.339C29.361,2.089,30.118,2,30.423,2 M30.423,0c-1.297,0-2.595,0.676-3.262,2.027l-6.584,13.339c-0.53,1.074-1.554,1.819-2.739,1.99l-14.72,2.14c-2.984,0.434-4.175,4.101-2.016,6.205l10.652,10.383c0.857,0.836,1.248,2.04,1.045,3.221l-2.514,14.66c-0.403,2.351,1.465,4.262,3.585,4.262c0.559,0,1.136-0.134,1.694-0.426l13.166-6.923c0.53-0.278,1.111-0.417,1.693-0.417s1.163,0.139,1.693,0.417l13.166,6.923c0.558,0.293,1.135,0.426,1.693,0.426c2.121,0,3.988-1.911,3.586-4.262l-2.515-14.66c-0.202-1.181,0.188-2.385,1.045-3.221l10.652-10.383c2.159-2.104,0.968-5.771-2.017-6.205l-14.72-2.14c-1.185-0.171-2.21-0.916-2.739-1.99L33.687,2.027C33.019,0.676,31.72,0,30.423,0"></path>
                                                        </svg><svg viewBox="-6 -6 70 70" class=""><path class="sr-fill" fill="#F0C419" d="M46.976,57.227c-0.422,0-0.834-0.104-1.228-0.312l-13.167-6.921c-0.663-0.349-1.409-0.533-2.158-0.533s-1.495,0.185-2.158,0.533L15.1,56.915c-0.393,0.208-0.807,0.312-1.229,0.312c-0.765,0-1.524-0.358-2.03-0.958c-0.501-0.595-0.703-1.353-0.569-2.134l2.515-14.661c0.258-1.505-0.241-3.039-1.334-4.105L1.8,24.985c-0.736-0.717-0.985-1.728-0.668-2.704c0.318-0.977,1.114-1.649,2.13-1.796l14.72-2.139c1.512-0.22,2.817-1.168,3.493-2.537L28.059,2.47C28.513,1.55,29.396,1,30.423,1c1.027,0,1.911,0.55,2.365,1.471l6.584,13.339c0.676,1.369,1.98,2.317,3.492,2.537l14.721,2.139c1.016,0.147,1.813,0.819,2.129,1.795c0.317,0.977,0.068,1.988-0.668,2.705L48.394,35.369c-1.092,1.065-1.59,2.6-1.334,4.105l2.516,14.661c0.134,0.781-0.068,1.539-0.569,2.134C48.5,56.869,47.743,57.227,46.976,57.227"></path><path class="sr-outline" fill="#FBB040" d="M30.423,2c0.306,0,1.063,0.089,1.469,0.913l6.584,13.339c0.821,1.664,2.407,2.817,4.244,3.084l14.721,2.139c0.91,0.132,1.228,0.824,1.322,1.115c0.096,0.291,0.243,1.038-0.414,1.679L47.697,34.652c-1.329,1.295-1.936,3.161-1.621,4.991l2.515,14.661c0.106,0.623-0.131,1.061-0.349,1.319c-0.318,0.378-0.791,0.604-1.266,0.604c-0.259,0-0.515-0.067-0.763-0.197l-13.166-6.922c-0.806-0.423-1.713-0.647-2.624-0.647c-0.911,0-1.818,0.224-2.624,0.647L14.633,56.03c-0.248,0.13-0.504,0.197-0.763,0.197c-0.474,0-0.948-0.226-1.266-0.604c-0.218-0.258-0.454-0.696-0.348-1.319l2.515-14.661c0.314-1.83-0.292-3.696-1.621-4.991L2.5,24.269c-0.659-0.641-0.51-1.388-0.415-1.679c0.095-0.291,0.413-0.983,1.322-1.115l14.721-2.139c1.837-0.267,3.423-1.42,4.245-3.084l6.583-13.339C29.361,2.089,30.118,2,30.423,2 M30.423,0c-1.297,0-2.595,0.676-3.262,2.027l-6.584,13.339c-0.53,1.074-1.554,1.819-2.739,1.99l-14.72,2.14c-2.984,0.434-4.175,4.101-2.016,6.205l10.652,10.383c0.857,0.836,1.248,2.04,1.045,3.221l-2.514,14.66c-0.403,2.351,1.465,4.262,3.585,4.262c0.559,0,1.136-0.134,1.694-0.426l13.166-6.923c0.53-0.278,1.111-0.417,1.693-0.417s1.163,0.139,1.693,0.417l13.166,6.923c0.558,0.293,1.135,0.426,1.693,0.426c2.121,0,3.988-1.911,3.586-4.262l-2.515-14.66c-0.202-1.181,0.188-2.385,1.045-3.221l10.652-10.383c2.159-2.104,0.968-5.771-2.017-6.205l-14.72-2.14c-1.185-0.171-2.21-0.916-2.739-1.99L33.687,2.027C33.019,0.676,31.72,0,30.423,0"></path></svg></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="thrv_wrapper tve_image_caption" data-css="tve-u-1878047cc4b" style=""><span class="tve_image_frame"><img decoding="async" class="tve_image wp-image-21" alt="" data-id="21" data-init-width="980" data-init-height="892" title="Screenshot 2023-05-14 at 03-59-35 Weird Mediterranean Ritual Dissolves Fat Overnight" loading="lazy" src="https://livpure.bio/wp-content/uploads/2023/05/Screenshot-2023-05-14-at-03-59-35-Weird-Mediterranean-Ritual-Dissolves-Fat-Overnight.png" data-width="1603" width="1603" height="892"></span></div>
                            <div
                                class="thrv_wrapper tve_image_caption" data-css="tve-u-1881765c796" style=""><span class="tve_image_frame"><img decoding="async" class="tve_image wp-image-26 tcb-moved-image" alt="" data-id="26" data-init-width="1903" data-init-height="672" title="Screenshot 2023-05-14 at 04-14-37 Weird Mediterranean Ritual Dissolves Fat Overnight" loading="lazy" src="https://livpure.bio/wp-content/uploads/2023/05/Screenshot-2023-05-14-at-04-14-37-Weird-Mediterranean-Ritual-Dissolves-Fat-Overnight.png" data-width="1603" style="" data-css="tve-u-1881765d837" width="1603" height="672"></span></div>
                        <div
                            class="thrv_wrapper thrv-button thrv-button-v2 tcb-local-vars-root tve_ea_thrive_animation tve_anim_pulse_grow tve_anim_grow" data-css="tve-u-1878047e60d" style="" data-button-size-d="xl" data-tcb_hover_state_parent="" data-button-size-m="l">
                            <div class="thrive-colors-palette-config" style="display: none !important"></div>
                            <a href="https://bestofferhere.link/livpure" class="tcb-button-link tcb-plain-text tve_evt_manager_listen tve_et_mouseover tve_et_tve-viewport" style="" data-tcb-events="__TCB_EVENT_[{&quot;t&quot;:&quot;mouseover&quot;,&quot;config&quot;:{&quot;anim&quot;:&quot;pulse_grow&quot;,&quot;loop&quot;:1},&quot;a&quot;:&quot;thrive_animation&quot;},{&quot;t&quot;:&quot;tve-viewport&quot;,&quot;config&quot;:{&quot;anim&quot;:&quot;grow&quot;,&quot;loop&quot;:1},&quot;a&quot;:&quot;thrive_animation&quot;}]_TNEVE_BCT__">
		<span class="tcb-button-texts"><span class="tcb-button-text thrv-inline-text" style="" data-css="tve-u-1878047e60f">Get LivPure At 80% OFF!</span></span>
	</a>
                    </div>
                </div>
            </div>
            <div id="thrive-footer" class="thrv_wrapper thrv_symbol thrive-shortcode thrv_footer tve_no_drag thrv_symbol_16" data-id="16" data-selector=".thrv_symbol_16" data-shortcode="thrive_footer" data-tcb-elem-type="footer" data-element-name="Footer">
                <div class="thrive-shortcode-html thrive-symbol-shortcode " data-symbol-id="16">
                    <style type="text/css" id="tcb-style-base-tcb_symbol-16" onLoad="typeof window.lightspeedOptimizeStylesheet === \'function\' && window.lightspeedOptimizeStylesheet()" class="tcb-lightspeed-style">
                        .thrv_text_element {
                            overflow-wrap: break-word;
                        }

                        .thrive-symbol-shortcode {
                            position: relative;
                        }

                        body:not(.tve_editor_page) .thrv_wrapper.thrv_footer,
                        body:not(.tve_editor_page) .thrv_wrapper.thrv_header {
                            padding: 0px;
                        }

                        .thrv_footer .thrive-symbol-shortcode {
                            box-sizing: border-box;
                            margin-right: auto;
                            margin-left: auto;
                            min-height: 40px;
                        }

                        .notifications-content-wrapper.tcb-permanently-hidden {
                            display: none !important;
                        }

                        .tcb-permanently-hidden {
                            display: none !important;
                        }

                        .tar-disabled {
                            cursor: default;
                            opacity: 0.4;
                            pointer-events: none;
                        }

                        html {
                            text-rendering: auto !important;
                        }

                        html body {
                            text-rendering: auto !important;
                        }

                        body.tve_lp::before {
                            content: none;
                        }

                        .thrv_wrapper {
                            margin-top: 20px;
                            margin-bottom: 20px;
                            padding: 1px;
                        }

                        .thrv_wrapper div {
                            box-sizing: content-box;
                        }

                        .thrv_symbol .thrv_wrapper:not(.thrv_icon) {
                            box-sizing: border-box !important;
                        }

                        .thrv_wrapper.thrv_text_element,
                        .thrv_wrapper.thrv_symbol {
                            margin: 0px;
                        }

                        p {
                            font-size: 1em;
                        }

                        #tve_editor.tve_empty_dropzone .thrv_symbol.thrv_footer .symbol-section-in {
                            padding: 1px;
                        }

                        .thrv_symbol.thrv_footer {
                            width: 100%;
                            position: relative;
                            box-sizing: border-box;
                        }

                        .thrv_symbol.thrv_footer .thrive-symbol-shortcode {
                            margin: 0px auto;
                            position: relative;
                        }

                        .symbol-section-in {
                            margin: 0px auto;
                            position: relative;
                            z-index: 1;
                            box-sizing: border-box;
                        }

                        .symbol-section-in:empty::before {
                            font-family: sans-serif;
                            line-height: 40px;
                        }

                        .symbol-section-in::after,
                        .symbol-section-in::before {
                            content: "";
                            display: block;
                            overflow: auto;
                        }

                        .symbol-section-out {
                            position: absolute;
                            width: 100%;
                            height: 100%;
                            left: 0px;
                            top: 0px;
                            box-sizing: border-box !important;
                            overflow: hidden;
                        }

                        :not(#_s):not(#_s) .tcb-conditional-display-placeholder {
                            min-height: var(--tcb-container-height-d, 100px) !important;
                            position: relative;
                        }

                        :not(#_s):not(#_s) .tcb-conditional-display-placeholder.thrv-page-section {
                            box-sizing: border-box;
                            margin: 0px;
                        }

                        :not(#_s):not(#_s) .tcb-conditional-display-placeholder.thrv-content-box {
                            box-sizing: border-box;
                        }

                        :not(#_s):not(#_s) .tcb-conditional-display-placeholder .tve-page-section-out,
                        :not(#_s):not(#_s) .tcb-conditional-display-placeholder .tve-content-box-background {
                            box-sizing: border-box;
                            position: absolute;
                            width: 100%;
                            height: 100%;
                            left: 0px;
                            top: 0px;
                            overflow: hidden;
                        }

                        body {
                            margin: 0px;
                            padding: 0px;
                        }

                        p {
                            margin: 0px;
                            padding: 0px;
                        }

                        @media (max-width:1023px) {
                            :not(#_s):not(#_s) .tcb-conditional-display-placeholder {
                                min-height: var(--tcb-container-height-t) !important;
                            }
                        }

                        @media (max-width:767px) {
                            html {
                                overflow-x: hidden !important;
                            }
                            html,
                            body {
                                max-width: 100vw !important;
                            }
                            :not(#_s):not(#_s) .tcb-conditional-display-placeholder {
                                min-height: var(--tcb-container-height-m) !important;
                            }
                            html {
                                width: 100%;
                            }
                            body {
                                width: 100%;
                                overflow-x: hidden;
                            }
                        }

                        @media screen and (max-device-width:480px) {
                            body {
                                -moz-text-size-adjust: none;
                            }
                        }
                    </style>
                    <style class=\'tve-symbol-custom-style\'>
                        @media (min-width:300px) {
                            .thrv_symbol_16 .thrive-symbol-shortcode {
                                padding: 20px !important;
                            }
                            .thrv_symbol_16 [data-css="tve-u-16eac1c019e"] {
                                background-color: rgb(76, 76, 76) !important;
                            }
                            :not(#tve) .thrv_symbol_16 [data-css="tve-u-16eac1cbe85"] p,
                            :not(#tve) .thrv_symbol_16 [data-css="tve-u-16eac1cbe85"] li,
                            :not(#tve) .thrv_symbol_16 [data-css="tve-u-16eac1cbe85"] blockquote,
                            :not(#tve) .thrv_symbol_16 [data-css="tve-u-16eac1cbe85"] address,
                            :not(#tve) .thrv_symbol_16 [data-css="tve-u-16eac1cbe85"] .tcb-plain-text,
                            :not(#tve) .thrv_symbol_16 [data-css="tve-u-16eac1cbe85"] label,
                            :not(#tve) .thrv_symbol_16 [data-css="tve-u-16eac1cbe85"] h1,
                            :not(#tve) .thrv_symbol_16 [data-css="tve-u-16eac1cbe85"] h2,
                            :not(#tve) .thrv_symbol_16 [data-css="tve-u-16eac1cbe85"] h3,
                            :not(#tve) .thrv_symbol_16 [data-css="tve-u-16eac1cbe85"] h4,
                            :not(#tve) .thrv_symbol_16 [data-css="tve-u-16eac1cbe85"] h5,
                            :not(#tve) .thrv_symbol_16 [data-css="tve-u-16eac1cbe85"] h6 {
                                color: rgb(255, 255, 255);
                                --tcb-applied-color: rgb(255, 255, 255);
                            }
                            .thrv_symbol_16 [data-css="tve-u-16eac1cbe85"] {
                                text-align: center;
                            }
                            :not(#tve) .thrv_symbol_16 [data-css="tve-u-16eac1cbe85"] p,
                            :not(#tve) .thrv_symbol_16 [data-css="tve-u-16eac1cbe85"] li,
                            :not(#tve) .thrv_symbol_16 [data-css="tve-u-16eac1cbe85"] blockquote,
                            :not(#tve) .thrv_symbol_16 [data-css="tve-u-16eac1cbe85"] address,
                            :not(#tve) .thrv_symbol_16 [data-css="tve-u-16eac1cbe85"] .tcb-plain-text,
                            :not(#tve) .thrv_symbol_16 [data-css="tve-u-16eac1cbe85"] label {
                                line-height: 1.75em;
                            }
                            :not(#tve) .thrv_symbol_16 [data-css="tve-u-16eac1f9d0d"] {
                                text-decoration: none !important;
                                font-size: 11px !important;
                            }
                            :not(#tve) .thrv_symbol_16 [data-css="tve-u-1871352dcf5"] {
                                font-size: 11px !important;
                            }
                            .thrv_symbol_16 {
                                margin-top: 10px !important;
                            }
                        }

                        @media (max-width:767px) {
                            .thrv_symbol_16 .thrive-symbol-shortcode {
                                padding: 15px !important;
                            }
                            .thrv_symbol_16 {
                                margin-top: 12px !important;
                            }
                        }
                    </style>
                    <div class="symbol-section-out" style="" data-css="tve-u-16eac1c019e"></div>
                    <div class="symbol-section-in" data-css="tve-u-16eac1cbe85" style="">
                        <div class="thrv_wrapper thrv_text_element">
                            <p data-css="tve-u-16eac1f9d0d" style="padding: 0px !important; margin: 0px !important;">Copyright <span class="thrive-shortcode-content" data-attr-id="Y" data-extra_key="Y" data-option-inline="1" data-shortcode="thrv_dynamic_data_date" data-shortcode-name="Year (2029)" style="" data-css="tve-u-1871352dcf7">2023</span>                                - LivPure</p>
                            <main class="">
                                <section data-element_type="section" data-id="553686f">
                                    <p style="" data-css="tve-u-1871352dcf5">DISCLAIMER: The products and information on this website are not intended to replace professional medical advice or treatment. These statements have not been evaluated by the FDA. These products are not intended to
                                        diagnose, treat, cure, or prevent any disease. Individual results may vary. This is a time-limited, risk-free trial of the product.</p>
                                </section>
                            </main>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="fr-dropdown-holder tcb-style-wrap"></div>
    </div>
    <script type=\'text/javascript\'>
        ($ => {
            /**
             * Displays toast message from storage, it is used when the user is redirected after login
             */
            if (window.sessionStorage) {
                $(window).on(\'tcb_after_dom_ready\', () => {
                    let message = sessionStorage.getItem(\'tcb_toast_message\');

                    if (message) {
                        tcbToast(sessionStorage.getItem(\'tcb_toast_message\'), false);
                        sessionStorage.removeItem(\'tcb_toast_message\');
                    }
                });
            }

            /**
             * Displays toast message
             */
            function tcbToast(message, error, callback) {
                /* Also allow "message" objects */
                if (typeof message !== \'string\') {
                    message = message.message || message.error || message.success;
                }
                if (!error) {
                    error = false;
                }
                TCB_Front.notificationElement.toggle(message, error ? \'error\' : \'success\', callback);
            }
        })(typeof ThriveGlobal === \'undefined\' ? jQuery : ThriveGlobal.$j);
    </script>
    <script id="generate-a11y">
        ! function() {
            "use strict";
            if ("querySelector" in document && "addEventListener" in window) {
                var e = document.body;
                e.addEventListener("mousedown", function() {
                    e.classList.add("using-mouse")
                }), e.addEventListener("keydown", function() {
                    e.classList.remove("using-mouse")
                })
            }
        }();
    </script>
    <style type="text/css" id="tve_notification_styles"></style>
    <div class="tvd-toast tve-fe-message" style="display: none">
        <div class="tve-toast-message tve-success-message">
            <div class="tve-toast-icon-container">
                <span class="tve_tick thrv-svg-icon"></span>
            </div>
            <div class="tve-toast-message-container"></div>
        </div>
    </div>
    <script type="text/javascript">
        window.TVE_Event_Manager_Registered_Callbacks = window.TVE_Event_Manager_Registered_Callbacks || {};
        window.TVE_Event_Manager_Registered_Callbacks.thrive_animation = function(trigger, action, config) {
            var $element = jQuery(this),
                $at = $element.closest(\'.tcb-col, .thrv_wrapper\');
            if ($at.length === 0) {
                $at = $element;
            }
            if (!config.loop && $at.data(\'a-done\')) {
                return;
            }
            $at.data(\'a-done\', 1);
            const hadAnimStart = $at.hasClass(\'tve_anim_start\');
            $at.removeClass(function(i, cls) {
                return cls.split(\' \').filter(function(item) {
                    return item.indexOf(\'tve_anim_\') === 0;
                }).join(\' \');
            }).addClass(\'tve_anim_\' + config.anim).removeClass(\'tve_anim_start\');
            if (config.loop) {
                setTimeout(function() {
                    $at.addClass(\'tve_anim_start\');
                }, hadAnimStart ? 50 : 0);
                if (trigger === \'mouseover\') {
                    $element.one(\'mouseleave\', function() {
                        $at.removeClass(\'tve_anim_start\');
                    });
                }
                if (trigger === \'tve-viewport\') {
                    $element.one(\'tve-viewport-leave\', function() {
                        /**
                         * double check for viewport
                         * animation in animation triggers weird behaviors
                         */
                        if (!TCB_Front.isInViewport($element)) {
                            $at.removeClass(\'tve_anim_start\');
                        }
                    });
                }
            } else {
                setTimeout(function() {
                    $at.addClass(\'tve_anim_start\');
                }, 50);
            }
            return false;
        };
    </script>
    <script type="text/javascript">
        (function($) {
            var $window = $(window),
                trigger_elements = function(elements) {
                    elements.each(function() {
                        var $elem = $(this),
                            lb_content = $elem.parents(\'.tve_p_lb_content\'),
                            ajax_content = $elem.parents(\'.ajax-content\'),
                            inViewport = TCB_Front.isInViewport($elem) || isOutsideBody($elem) || isAtTheBottomOfThePage($elem);

                        if (lb_content.length) {
                            lb_content.on(\'tve.lightbox-open\', function() {
                                if (!$elem.hasClass(\'tve-viewport-triggered\')) {
                                    $elem.trigger(\'tve-viewport\').addClass(\'tve-viewport-triggered\');
                                }
                            });
                            return;
                        }
                        if (ajax_content.length) {
                            ajax_content.on(\'content-inserted.tcb\', function() {
                                if (inViewport && !$elem.hasClass(\'tve-viewport-triggered\')) {
                                    $elem.trigger(\'tve-viewport\').addClass(\'tve-viewport-triggered\');
                                }
                            });
                            return;
                        }

                        if (inViewport) {
                            $elem.trigger(\'tve-viewport\').addClass(\'tve-viewport-triggered\');
                        }
                    });
                },
                trigger_exit = function(elements) {
                    elements.each(function() {
                        var $elem = $(this);

                        if (!(TCB_Front.isInViewport($elem) || isOutsideBody($elem))) {
                            $elem.trigger(\'tve-viewport-leave\').removeClass(\'tve-viewport-triggered\');
                        }
                    });
                },
                /**
                 * Returns true if the element is located at the bottom of the page and the element is in viewport
                 */
                isAtTheBottomOfThePage = function($elem) {
                    return TCB_Front.isInViewport($elem, 0) && $window.scrollTop() >= parseInt($elem.offset().top + $elem.outerHeight() - window.innerHeight);
                },
                /**
                 * Check if element is always outside of the viewport, is above the top scroll
                 * @param element
                 * @returns {boolean}
                 */
                isOutsideBody = function(element) {
                    if (element.jquery) {
                        element = element[0];
                    }

                    var rect = element.getBoundingClientRect();

                    /* we\'ve scrolled maximum to the top, but the element is above */
                    return window.scrollY + rect.bottom < 0;

                    /* leaving this commented, can be added if more bugs appear. it checks for bottom elements
                    var $window = ThriveGlobal.$j( window ),
                    	scrolledToBottom = $window.scrollTop() + $window.height() === ThriveGlobal.$j( document ).height();

                    return ( scrolledToBottom && rect.top > ( window.innerHeight - delta ) );

                     */
                };
            $(document).ready(function() {
                window.tar_trigger_viewport = trigger_elements;
                window.tar_trigger_exit_viewport = trigger_exit;

                let $to_test = $(\'.tve_et_tve-viewport\').removeClass(\'tve-viewport-triggered\');
                $window.scroll(function() {
                    $to_test = $(\'.tve_et_tve-viewport\');
                    trigger_elements($to_test.filter(\':not(.tve-viewport-triggered)\'));
                    trigger_exit($to_test.filter(\'.tve-viewport-triggered\'));

                });
                setTimeout(function() {
                    trigger_elements($to_test.filter(\':not(.tve-viewport-triggered)\'));
                }, 200);
            });
        })
        (jQuery);
    </script>
    <!--[if lte IE 11]>
<script src=\'https://livpure.bio/wp-content/themes/generatepress/assets/js/classList.min.js?ver=3.3.0\' id=\'generate-classlist-js\'></script>
<![endif]-->
    <script id=\'generate-menu-js-extra\'>
        var generatepressMenu = {
            "toggleOpenedSubMenus": "1",
            "openSubMenuLabel": "Open Sub-Menu",
            "closeSubMenuLabel": "Close Sub-Menu"
        };
    </script>
    <script src=\'https://livpure.bio/wp-content/themes/generatepress/assets/js/menu.min.js?ver=3.3.0\' id=\'generate-menu-js\'></script>
    <script id=\'tve-dash-frontend-js-extra\'>
        var tve_dash_front = {
            "ajaxurl": "https:\/\/livpure.bio\/wp-admin\/admin-ajax.php",
            "force_ajax_send": "",
            "is_crawler": "",
            "recaptcha": [],
            "post_id": "8"
        };
    </script>
    <script src=\'https://livpure.bio/wp-content/plugins/thrive-visual-editor/thrive-dashboard/js/dist/frontend.min.js?ver=3.32.1\' id=\'tve-dash-frontend-js\'></script>
    <script type="text/javascript">
        var tcb_current_post_lists = JSON.parse(\'[]\');
        var tcb_post_lists = tcb_post_lists ? [...tcb_post_lists, ...tcb_current_post_lists] : tcb_current_post_lists;
    </script>
</body>

</html>
';
?>