# === Dtearsd Package ===

## Contributors: Abu Bakar

Tags: custom-menu, full-width-template, theme-options, translation-ready
Requires at least: 5.8
Tested up to: 5.8
Stable tag: 1.0.0

A Dtearsd Package WordPress theme

## Description

This is a Dtearsd Package WordPress theme

## Instruction

-   **html_entity_decode()** Function is used to decode the escaped html
-   **html_entity_remove()** Function is used to remove the escaped html
-   You Donot need to use isset check condition<br>
    **$dtearsd_page_pagetitle = (isset($fields['dtearsd_pagetitle'])) ? $fields['dtearsd_pagetitle'] : null;**
-   Not needed Use<br>
    **$dtearsd_page_pagetitle = $fields['dtearsd_pagetitle'];**
-   CTA is moved in footer
-   page-section section now close in the file it starts.
-   use the condition bellow to get page title it will take the acf field name as input if field is null it will return page title<br>
    **$dtearsd_pagetitle=dawat_page_title('dtearsd_pagetitle');**
-   Move sw.js from pwa folder to parent public folder when doing setup
