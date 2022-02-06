<?php

use k_tith\BackupViewer\Contracts;


if ( ! function_exists('log_styler')) {
    /**
     * Get the LogStyler instance.
     *
     * @return Arcanedev\LogViewer\Contracts\Utilities\LogStyler
     */
    function log_styler()
    {
        return app(Contracts\Utilities\LogStyler::class);
    }
}
