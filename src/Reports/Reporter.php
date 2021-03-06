<?php

declare(strict_types=1);

namespace Rusty\Reports;

interface Reporter
{
    function report(Report $report);
}