@extends('admin.admin-layout.style')
@section('title')
    logistics
@endsection
@section('contentt')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="content-wrapper">

        <!-- Content -->

          <div class="container-xxl flex-grow-1 container-p-y">


<div class="row g-6">
  <!-- Card Border Shadow -->
  <div class="col-lg-3 col-sm-6">
    <div class="card card-border-shadow-primary h-100">
      <div class="card-body">
        <div class="d-flex align-items-center mb-2">
          <div class="avatar me-4">
            <span class="avatar-initial rounded bg-label-primary"><i class="bx bxs-truck bx-lg"></i></span>
          </div>
          <h4 class="mb-0">42</h4>
        </div>
        <p class="mb-2">On route vehicles</p>
        <p class="mb-0">
          <span class="text-heading fw-medium me-2">+18.2%</span>
          <span class="text-muted">than last week</span>
        </p>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-sm-6">
    <div class="card card-border-shadow-warning h-100">
      <div class="card-body">
        <div class="d-flex align-items-center mb-2">
          <div class="avatar me-4">
            <span class="avatar-initial rounded bg-label-warning"><i class="bx bx-error bx-lg"></i></span>
          </div>
          <h4 class="mb-0">8</h4>
        </div>
        <p class="mb-2">Vehicles with errors</p>
        <p class="mb-0">
          <span class="text-heading fw-medium me-2">-8.7%</span>
          <span class="text-muted">than last week</span>
        </p>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-sm-6">
    <div class="card card-border-shadow-danger h-100">
      <div class="card-body">
        <div class="d-flex align-items-center mb-2">
          <div class="avatar me-4">
            <span class="avatar-initial rounded bg-label-danger"><i class="bx bx-git-repo-forked bx-lg"></i></span>
          </div>
          <h4 class="mb-0">27</h4>
        </div>
        <p class="mb-2">Deviated from route</p>
        <p class="mb-0">
          <span class="text-heading fw-medium me-2">+4.3%</span>
          <span class="text-muted">than last week</span>
        </p>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-sm-6">
    <div class="card card-border-shadow-info h-100">
      <div class="card-body">
        <div class="d-flex align-items-center mb-2">
          <div class="avatar me-4">
            <span class="avatar-initial rounded bg-label-info"><i class="bx bx-time-five bx-lg"></i></span>
          </div>
          <h4 class="mb-0">13</h4>
        </div>
        <p class="mb-2">Late vehicles</p>
        <p class="mb-0">
          <span class="text-heading fw-medium me-2">-2.5%</span>
          <span class="text-muted">than last week</span>
        </p>
      </div>
    </div>
  </div>
  <!--/ Card Border Shadow -->

  <!-- Vehicles overview -->
  <div class="col-xxl-6">
    <div class="card h-100">
      <div class="card-header d-flex align-items-center justify-content-between">
        <div class="card-title mb-0">
          <h5 class="m-0 me-2">Vehicles Overview</h5>
        </div>
        <div class="dropdown">
          <button class="btn p-0" type="button" id="vehiclesOverview" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="bx bx-dots-vertical-rounded bx-lg text-muted"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="vehiclesOverview">
            <a class="dropdown-item" href="javascript:void(0);">Select All</a>
            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
            <a class="dropdown-item" href="javascript:void(0);">Share</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="d-none d-lg-flex vehicles-progress-labels mb-6">
          <div class="vehicles-progress-label on-the-way-text" style="width: 39.7%;">On the way</div>
          <div class="vehicles-progress-label unloading-text" style="width: 28.3%;">Unloading</div>
          <div class="vehicles-progress-label loading-text" style="width: 17.4%;">Loading</div>
          <div class="vehicles-progress-label waiting-text text-nowrap" style="width: 14.6%;">Waiting</div>
        </div>
        <div class="vehicles-overview-progress progress rounded-3 mb-6 bg-transparent overflow-hidden" style="height: 46px;">
          <div class="progress-bar fw-medium text-start shadow-none bg-lighter text-heading px-4 rounded-0" role="progressbar" style="width: 39.7%" aria-valuenow="39.7" aria-valuemin="0" aria-valuemax="100">39.7%</div>
          <div class="progress-bar fw-medium text-start shadow-none bg-primary px-4" role="progressbar" style="width: 28.3%" aria-valuenow="28.3" aria-valuemin="0" aria-valuemax="100">28.3%</div>
          <div class="progress-bar fw-medium text-start shadow-none text-bg-info px-2 px-sm-4" role="progressbar" style="width: 17.4%" aria-valuenow="17.4" aria-valuemin="0" aria-valuemax="100">17.4%</div>
          <div class="progress-bar fw-medium text-start shadow-none snackbar text-paper px-1 px-sm-3 rounded-0 px-lg-4" role="progressbar" style="width: 14.6%" aria-valuenow="14.6" aria-valuemin="0" aria-valuemax="100">14.6%</div>
        </div>
        <div class="table-responsive">
          <table class="table card-table table-border-top-0">
            <tbody class="table-border-bottom-0">
              <tr>
                <td class="w-50 ps-0">
                  <div class="d-flex justify-content-start align-items-center">
                    <div class="me-2">
                      <i class="bx bx-car bx-lg text-heading"></i>
                    </div>
                    <h6 class="mb-0 fw-normal">On the way</h6>
                  </div>
                </td>
                <td class="text-end pe-0 text-nowrap">
                  <h6 class="mb-0">2hr 10min</h6>
                </td>
                <td class="text-end pe-0">
                  <span>39.7%</span>
                </td>
              </tr>
              <tr>
                <td class="w-50 ps-0">
                  <div class="d-flex justify-content-start align-items-center">
                    <div class="me-2">
                      <i class="bx bx-down-arrow-circle bx-lg text-heading"></i>
                    </div>
                    <h6 class="mb-0 fw-normal">Unloading</h6>
                  </div>
                </td>
                <td class="text-end pe-0 text-nowrap">
                  <h6 class="mb-0">3hr 15min</h6>
                </td>
                <td class="text-end pe-0">
                  <span>28.3%</span>
                </td>
              </tr>
              <tr>
                <td class="w-50 ps-0">
                  <div class="d-flex justify-content-start align-items-center">
                    <div class="me-2">
                      <i class="bx bx-up-arrow-circle bx-lg text-heading"></i>
                    </div>
                    <h6 class="mb-0 fw-normal">Loading</h6>
                  </div>
                </td>
                <td class="text-end pe-0 text-nowrap">
                  <h6 class="mb-0">1hr 24min</h6>
                </td>
                <td class="text-end pe-0">
                  <span>17.4%</span>
                </td>
              </tr>
              <tr>
                <td class="w-50 ps-0">
                  <div class="d-flex justify-content-start align-items-center">
                    <div class="me-2">
                      <i class="bx bx-time-five bx-lg text-heading"></i>
                    </div>
                    <h6 class="mb-0 fw-normal">Waiting</h6>
                  </div>
                </td>
                <td class="text-end pe-0 text-nowrap">
                  <h6 class="mb-0">5hr 19min</h6>
                </td>
                <td class="text-end pe-0">
                  <span>14.6%</span>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!--/ Vehicles overview -->

  <!-- Shipment statistics-->
  {{-- <div class="col-xxl-6 col-lg-7">
    <div class="card h-100">
      <div class="card-header d-flex align-items-center justify-content-between">
        <div class="card-title mb-0">
          <h5 class="mb-1">Shipment statistics</h5>
          <p class="card-subtitle">Total number of deliveries 23.8k</p>
        </div>
        <div class="btn-group">
          <button type="button" class="btn btn-label-primary">January</button>
          <button type="button" class="btn btn-label-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
            <span class="visually-hidden">Toggle Dropdown</span>
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="javascript:void(0);">January</a></li>
            <li><a class="dropdown-item" href="javascript:void(0);">February</a></li>
            <li><a class="dropdown-item" href="javascript:void(0);">March</a></li>
            <li><a class="dropdown-item" href="javascript:void(0);">April</a></li>
            <li><a class="dropdown-item" href="javascript:void(0);">May</a></li>
            <li><a class="dropdown-item" href="javascript:void(0);">June</a></li>
            <li><a class="dropdown-item" href="javascript:void(0);">July</a></li>
            <li><a class="dropdown-item" href="javascript:void(0);">August</a></li>
            <li><a class="dropdown-item" href="javascript:void(0);">September</a></li>
            <li><a class="dropdown-item" href="javascript:void(0);">October</a></li>
            <li><a class="dropdown-item" href="javascript:void(0);">November</a></li>
            <li><a class="dropdown-item" href="javascript:void(0);">December</a></li>
          </ul>
        </div>
      </div>
      <div class="card-body" style="position: relative;">
        <div id="shipmentStatisticsChart" style="min-height: 415px;"><div id="apexchartsmqx9yzpy" class="apexcharts-canvas apexchartsmqx9yzpy apexcharts-theme-light" style="width: 753px; height: 415px;"><svg id="SvgjsSvg3037" width="753" height="415" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="753" height="415"><div class="apexcharts-legend apexcharts-align-center apx-legend-position-bottom" xmlns="http://www.w3.org/1999/xhtml" style="height: 40px; inset: auto 0px -7px; position: absolute;"><div class="apexcharts-legend-series" rel="1" seriesname="Shipment" data:collapsed="false" style="margin: 0px 10px;"><span class="apexcharts-legend-marker" rel="1" data:collapsed="false" style="background: rgb(255, 171, 0) !important; color: rgb(255, 171, 0); height: 8px; width: 8px; left: -3px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="1" i="0" data:default-text="Shipment" data:collapsed="false" style="color: rgb(56, 69, 81); font-size: 13px; font-weight: 400; font-family: &quot;Public Sans&quot;;">Shipment</span></div><div class="apexcharts-legend-series" rel="2" seriesname="Delivery" data:collapsed="false" style="margin: 0px 10px;"><span class="apexcharts-legend-marker" rel="2" data:collapsed="false" style="background: rgb(105, 108, 255) !important; color: rgb(105, 108, 255); height: 8px; width: 8px; left: -3px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="2" i="1" data:default-text="Delivery" data:collapsed="false" style="color: rgb(56, 69, 81); font-size: 13px; font-weight: 400; font-family: &quot;Public Sans&quot;;">Delivery</span></div></div><style type="text/css">

      .apexcharts-legend {
        display: flex;
        overflow: auto;
        padding: 0 10px;
      }
      .apexcharts-legend.apx-legend-position-bottom, .apexcharts-legend.apx-legend-position-top {
        flex-wrap: wrap
      }
      .apexcharts-legend.apx-legend-position-right, .apexcharts-legend.apx-legend-position-left {
        flex-direction: column;
        bottom: 0;
      }
      .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left, .apexcharts-legend.apx-legend-position-top.apexcharts-align-left, .apexcharts-legend.apx-legend-position-right, .apexcharts-legend.apx-legend-position-left {
        justify-content: flex-start;
      }
      .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center, .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
        justify-content: center;
      }
      .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right, .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
        justify-content: flex-end;
      }
      .apexcharts-legend-series {
        cursor: pointer;
        line-height: normal;
      }
      .apexcharts-legend.apx-legend-position-bottom .apexcharts-legend-series, .apexcharts-legend.apx-legend-position-top .apexcharts-legend-series{
        display: flex;
        align-items: center;
      }
      .apexcharts-legend-text {
        position: relative;
        font-size: 14px;
      }
      .apexcharts-legend-text *, .apexcharts-legend-marker * {
        pointer-events: none;
      }
      .apexcharts-legend-marker {
        position: relative;
        display: inline-block;
        cursor: pointer;
        margin-right: 3px;
        border-style: solid;
      }

      .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series, .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series{
        display: inline-block;
      }
      .apexcharts-legend-series.apexcharts-no-click {
        cursor: auto;
      }
      .apexcharts-legend .apexcharts-hidden-zero-series, .apexcharts-legend .apexcharts-hidden-null-series {
        display: none !important;
      }
      .apexcharts-inactive-legend {
        opacity: 0.45;
      }</style></foreignObject><g id="SvgjsG3039" class="apexcharts-inner apexcharts-graphical" transform="translate(79.20884117550321, 30)"><defs id="SvgjsDefs3038"><clipPath id="gridRectMaskmqx9yzpy"><rect id="SvgjsRect3045" width="678.6860704421996" height="314.878400308609" x="-23.426357120937773" y="-1.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskmqx9yzpy"></clipPath><clipPath id="nonForecastMaskmqx9yzpy"></clipPath><clipPath id="gridRectMarkerMaskmqx9yzpy"><rect id="SvgjsRect3046" width="655.8333562003241" height="335.878400308609" x="-12" y="-12" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><line id="SvgjsLine3044" x1="0" y1="0" x2="0" y2="311.878400308609" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="311.878400308609" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG3095" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG3096" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText3098" font-family="Public Sans" x="0" y="340.878400308609" text-anchor="middle" dominant-baseline="auto" font-size="10px" font-weight="400" fill="#a7acb2" class="apexcharts-text apexcharts-xaxis-label " style="font-family: &quot;Public Sans&quot;;"><tspan id="SvgjsTspan3099">1 Jan</tspan><title>1 Jan</title></text><text id="SvgjsText3101" font-family="Public Sans" x="70.20370624448046" y="340.878400308609" text-anchor="middle" dominant-baseline="auto" font-size="10px" font-weight="400" fill="#a7acb2" class="apexcharts-text apexcharts-xaxis-label " style="font-family: &quot;Public Sans&quot;;"><tspan id="SvgjsTspan3102">2 Jan</tspan><title>2 Jan</title></text><text id="SvgjsText3104" font-family="Public Sans" x="140.40741248896092" y="340.878400308609" text-anchor="middle" dominant-baseline="auto" font-size="10px" font-weight="400" fill="#a7acb2" class="apexcharts-text apexcharts-xaxis-label " style="font-family: &quot;Public Sans&quot;;"><tspan id="SvgjsTspan3105">3 Jan</tspan><title>3 Jan</title></text><text id="SvgjsText3107" font-family="Public Sans" x="210.6111187334414" y="340.878400308609" text-anchor="middle" dominant-baseline="auto" font-size="10px" font-weight="400" fill="#a7acb2" class="apexcharts-text apexcharts-xaxis-label " style="font-family: &quot;Public Sans&quot;;"><tspan id="SvgjsTspan3108">4 Jan</tspan><title>4 Jan</title></text><text id="SvgjsText3110" font-family="Public Sans" x="280.81482497792183" y="340.878400308609" text-anchor="middle" dominant-baseline="auto" font-size="10px" font-weight="400" fill="#a7acb2" class="apexcharts-text apexcharts-xaxis-label " style="font-family: &quot;Public Sans&quot;;"><tspan id="SvgjsTspan3111">5 Jan</tspan><title>5 Jan</title></text><text id="SvgjsText3113" font-family="Public Sans" x="351.01853122240226" y="340.878400308609" text-anchor="middle" dominant-baseline="auto" font-size="10px" font-weight="400" fill="#a7acb2" class="apexcharts-text apexcharts-xaxis-label " style="font-family: &quot;Public Sans&quot;;"><tspan id="SvgjsTspan3114">6 Jan</tspan><title>6 Jan</title></text><text id="SvgjsText3116" font-family="Public Sans" x="421.22223746688275" y="340.878400308609" text-anchor="middle" dominant-baseline="auto" font-size="10px" font-weight="400" fill="#a7acb2" class="apexcharts-text apexcharts-xaxis-label " style="font-family: &quot;Public Sans&quot;;"><tspan id="SvgjsTspan3117">7 Jan</tspan><title>7 Jan</title></text><text id="SvgjsText3119" font-family="Public Sans" x="491.42594371136323" y="340.878400308609" text-anchor="middle" dominant-baseline="auto" font-size="10px" font-weight="400" fill="#a7acb2" class="apexcharts-text apexcharts-xaxis-label " style="font-family: &quot;Public Sans&quot;;"><tspan id="SvgjsTspan3120">8 Jan</tspan><title>8 Jan</title></text><text id="SvgjsText3122" font-family="Public Sans" x="561.6296499558438" y="340.878400308609" text-anchor="middle" dominant-baseline="auto" font-size="10px" font-weight="400" fill="#a7acb2" class="apexcharts-text apexcharts-xaxis-label " style="font-family: &quot;Public Sans&quot;;"><tspan id="SvgjsTspan3123">9 Jan</tspan><title>9 Jan</title></text><text id="SvgjsText3125" font-family="Public Sans" x="631.8333562003243" y="340.878400308609" text-anchor="middle" dominant-baseline="auto" font-size="10px" font-weight="400" fill="#a7acb2" class="apexcharts-text apexcharts-xaxis-label " style="font-family: &quot;Public Sans&quot;;"><tspan id="SvgjsTspan3126">10 Jan</tspan><title>10 Jan</title></text></g></g><g id="SvgjsG3139" class="apexcharts-grid"><g id="SvgjsG3140" class="apexcharts-gridlines-horizontal"><line id="SvgjsLine3142" x1="-19.926357120937773" y1="0" x2="651.7597133212619" y2="0" stroke="#e4e6e8" stroke-dasharray="8" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3143" x1="-19.926357120937773" y1="77.96960007715225" x2="651.7597133212619" y2="77.96960007715225" stroke="#e4e6e8" stroke-dasharray="8" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3144" x1="-19.926357120937773" y1="155.9392001543045" x2="651.7597133212619" y2="155.9392001543045" stroke="#e4e6e8" stroke-dasharray="8" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3145" x1="-19.926357120937773" y1="233.90880023145675" x2="651.7597133212619" y2="233.90880023145675" stroke="#e4e6e8" stroke-dasharray="8" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3146" x1="-19.926357120937773" y1="311.878400308609" x2="651.7597133212619" y2="311.878400308609" stroke="#e4e6e8" stroke-dasharray="8" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG3141" class="apexcharts-gridlines-vertical"></g><line id="SvgjsLine3148" x1="0" y1="311.878400308609" x2="631.8333562003241" y2="311.878400308609" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine3147" x1="0" y1="1" x2="0" y2="311.878400308609" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG3047" class="apexcharts-bar-series apexcharts-plot-series"><g id="SvgjsG3048" class="apexcharts-series" rel="1" seriesName="Shipment" data:realIndex="0"><path id="SvgjsPath3052" d="M -10.53055593667207 307.878400308609L -10.53055593667207 78.85081607406616Q -10.53055593667207 74.85081607406616 -6.530555936672069 74.85081607406616L 6.530555936672069 74.85081607406616Q 10.53055593667207 74.85081607406616 10.53055593667207 78.85081607406616L 10.53055593667207 78.85081607406616L 10.53055593667207 307.878400308609Q 10.53055593667207 311.878400308609 6.530555936672069 311.878400308609L -6.530555936672069 311.878400308609Q -10.53055593667207 311.878400308609 -10.53055593667207 307.878400308609z" fill="rgba(255,171,0,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskmqx9yzpy)" pathTo="M -10.53055593667207 307.878400308609L -10.53055593667207 78.85081607406616Q -10.53055593667207 74.85081607406616 -6.530555936672069 74.85081607406616L 6.530555936672069 74.85081607406616Q 10.53055593667207 74.85081607406616 10.53055593667207 78.85081607406616L 10.53055593667207 78.85081607406616L 10.53055593667207 307.878400308609Q 10.53055593667207 311.878400308609 6.530555936672069 311.878400308609L -6.530555936672069 311.878400308609Q -10.53055593667207 311.878400308609 -10.53055593667207 307.878400308609z" pathFrom="M -10.53055593667207 307.878400308609L -10.53055593667207 307.878400308609L 10.53055593667207 307.878400308609L 10.53055593667207 307.878400308609L 10.53055593667207 307.878400308609L 10.53055593667207 307.878400308609L 10.53055593667207 307.878400308609L -10.53055593667207 307.878400308609" cy="74.85081607406616" cx="10.53055593667207" j="0" val="38" barHeight="237.02758423454284" barWidth="21.06111187334414"></path><path id="SvgjsPath3054" d="M 59.673150307808385 307.878400308609L 59.673150307808385 35.18784003086091Q 59.673150307808385 31.18784003086091 63.673150307808385 31.18784003086091L 76.73426218115253 31.18784003086091Q 80.73426218115253 31.18784003086091 80.73426218115253 35.18784003086091L 80.73426218115253 35.18784003086091L 80.73426218115253 307.878400308609Q 80.73426218115253 311.878400308609 76.73426218115253 311.878400308609L 63.673150307808385 311.878400308609Q 59.673150307808385 311.878400308609 59.673150307808385 307.878400308609z" fill="rgba(255,171,0,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskmqx9yzpy)" pathTo="M 59.673150307808385 307.878400308609L 59.673150307808385 35.18784003086091Q 59.673150307808385 31.18784003086091 63.673150307808385 31.18784003086091L 76.73426218115253 31.18784003086091Q 80.73426218115253 31.18784003086091 80.73426218115253 35.18784003086091L 80.73426218115253 35.18784003086091L 80.73426218115253 307.878400308609Q 80.73426218115253 311.878400308609 76.73426218115253 311.878400308609L 63.673150307808385 311.878400308609Q 59.673150307808385 311.878400308609 59.673150307808385 307.878400308609z" pathFrom="M 59.673150307808385 307.878400308609L 59.673150307808385 307.878400308609L 80.73426218115253 307.878400308609L 80.73426218115253 307.878400308609L 80.73426218115253 307.878400308609L 80.73426218115253 307.878400308609L 80.73426218115253 307.878400308609L 59.673150307808385 307.878400308609" cy="31.18784003086091" cx="80.73426218115253" j="1" val="45" barHeight="280.6905602777481" barWidth="21.06111187334414"></path><path id="SvgjsPath3056" d="M 129.87685655228884 307.878400308609L 129.87685655228884 110.03865610492707Q 129.87685655228884 106.03865610492707 133.87685655228884 106.03865610492707L 146.937968425633 106.03865610492707Q 150.937968425633 106.03865610492707 150.937968425633 110.03865610492707L 150.937968425633 110.03865610492707L 150.937968425633 307.878400308609Q 150.937968425633 311.878400308609 146.937968425633 311.878400308609L 133.87685655228884 311.878400308609Q 129.87685655228884 311.878400308609 129.87685655228884 307.878400308609z" fill="rgba(255,171,0,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskmqx9yzpy)" pathTo="M 129.87685655228884 307.878400308609L 129.87685655228884 110.03865610492707Q 129.87685655228884 106.03865610492707 133.87685655228884 106.03865610492707L 146.937968425633 106.03865610492707Q 150.937968425633 106.03865610492707 150.937968425633 110.03865610492707L 150.937968425633 110.03865610492707L 150.937968425633 307.878400308609Q 150.937968425633 311.878400308609 146.937968425633 311.878400308609L 133.87685655228884 311.878400308609Q 129.87685655228884 311.878400308609 129.87685655228884 307.878400308609z" pathFrom="M 129.87685655228884 307.878400308609L 129.87685655228884 307.878400308609L 150.937968425633 307.878400308609L 150.937968425633 307.878400308609L 150.937968425633 307.878400308609L 150.937968425633 307.878400308609L 150.937968425633 307.878400308609L 129.87685655228884 307.878400308609" cy="106.03865610492707" cx="150.937968425633" j="2" val="33" barHeight="205.83974420368193" barWidth="21.06111187334414"></path><path id="SvgjsPath3058" d="M 200.08056279676933 307.878400308609L 200.08056279676933 78.85081607406616Q 200.08056279676933 74.85081607406616 204.08056279676933 74.85081607406616L 217.14167467011347 74.85081607406616Q 221.14167467011347 74.85081607406616 221.14167467011347 78.85081607406616L 221.14167467011347 78.85081607406616L 221.14167467011347 307.878400308609Q 221.14167467011347 311.878400308609 217.14167467011347 311.878400308609L 204.08056279676933 311.878400308609Q 200.08056279676933 311.878400308609 200.08056279676933 307.878400308609z" fill="rgba(255,171,0,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskmqx9yzpy)" pathTo="M 200.08056279676933 307.878400308609L 200.08056279676933 78.85081607406616Q 200.08056279676933 74.85081607406616 204.08056279676933 74.85081607406616L 217.14167467011347 74.85081607406616Q 221.14167467011347 74.85081607406616 221.14167467011347 78.85081607406616L 221.14167467011347 78.85081607406616L 221.14167467011347 307.878400308609Q 221.14167467011347 311.878400308609 217.14167467011347 311.878400308609L 204.08056279676933 311.878400308609Q 200.08056279676933 311.878400308609 200.08056279676933 307.878400308609z" pathFrom="M 200.08056279676933 307.878400308609L 200.08056279676933 307.878400308609L 221.14167467011347 307.878400308609L 221.14167467011347 307.878400308609L 221.14167467011347 307.878400308609L 221.14167467011347 307.878400308609L 221.14167467011347 307.878400308609L 200.08056279676933 307.878400308609" cy="74.85081607406616" cx="221.14167467011347" j="3" val="38" barHeight="237.02758423454284" barWidth="21.06111187334414"></path><path id="SvgjsPath3060" d="M 270.2842690412498 307.878400308609L 270.2842690412498 116.27622411109925Q 270.2842690412498 112.27622411109925 274.2842690412498 112.27622411109925L 287.34538091459393 112.27622411109925Q 291.34538091459393 112.27622411109925 291.34538091459393 116.27622411109925L 291.34538091459393 116.27622411109925L 291.34538091459393 307.878400308609Q 291.34538091459393 311.878400308609 287.34538091459393 311.878400308609L 274.2842690412498 311.878400308609Q 270.2842690412498 311.878400308609 270.2842690412498 307.878400308609z" fill="rgba(255,171,0,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskmqx9yzpy)" pathTo="M 270.2842690412498 307.878400308609L 270.2842690412498 116.27622411109925Q 270.2842690412498 112.27622411109925 274.2842690412498 112.27622411109925L 287.34538091459393 112.27622411109925Q 291.34538091459393 112.27622411109925 291.34538091459393 116.27622411109925L 291.34538091459393 116.27622411109925L 291.34538091459393 307.878400308609Q 291.34538091459393 311.878400308609 287.34538091459393 311.878400308609L 274.2842690412498 311.878400308609Q 270.2842690412498 311.878400308609 270.2842690412498 307.878400308609z" pathFrom="M 270.2842690412498 307.878400308609L 270.2842690412498 307.878400308609L 291.34538091459393 307.878400308609L 291.34538091459393 307.878400308609L 291.34538091459393 307.878400308609L 291.34538091459393 307.878400308609L 291.34538091459393 307.878400308609L 270.2842690412498 307.878400308609" cy="112.27622411109925" cx="291.34538091459393" j="4" val="32" barHeight="199.60217619750975" barWidth="21.06111187334414"></path><path id="SvgjsPath3062" d="M 340.4879752857303 307.878400308609L 340.4879752857303 4Q 340.4879752857303 0 344.4879752857303 0L 357.5490871590744 0Q 361.5490871590744 0 361.5490871590744 4L 361.5490871590744 4L 361.5490871590744 307.878400308609Q 361.5490871590744 311.878400308609 357.5490871590744 311.878400308609L 344.4879752857303 311.878400308609Q 340.4879752857303 311.878400308609 340.4879752857303 307.878400308609z" fill="rgba(255,171,0,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskmqx9yzpy)" pathTo="M 340.4879752857303 307.878400308609L 340.4879752857303 4Q 340.4879752857303 0 344.4879752857303 0L 357.5490871590744 0Q 361.5490871590744 0 361.5490871590744 4L 361.5490871590744 4L 361.5490871590744 307.878400308609Q 361.5490871590744 311.878400308609 357.5490871590744 311.878400308609L 344.4879752857303 311.878400308609Q 340.4879752857303 311.878400308609 340.4879752857303 307.878400308609z" pathFrom="M 340.4879752857303 307.878400308609L 340.4879752857303 307.878400308609L 361.5490871590744 307.878400308609L 361.5490871590744 307.878400308609L 361.5490871590744 307.878400308609L 361.5490871590744 307.878400308609L 361.5490871590744 307.878400308609L 340.4879752857303 307.878400308609" cy="0" cx="361.5490871590744" j="5" val="50" barHeight="311.878400308609" barWidth="21.06111187334414"></path><path id="SvgjsPath3064" d="M 410.69168153021076 307.878400308609L 410.69168153021076 16.475136012344365Q 410.69168153021076 12.475136012344365 414.69168153021076 12.475136012344365L 427.7527934035549 12.475136012344365Q 431.7527934035549 12.475136012344365 431.7527934035549 16.475136012344365L 431.7527934035549 16.475136012344365L 431.7527934035549 307.878400308609Q 431.7527934035549 311.878400308609 427.7527934035549 311.878400308609L 414.69168153021076 311.878400308609Q 410.69168153021076 311.878400308609 410.69168153021076 307.878400308609z" fill="rgba(255,171,0,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskmqx9yzpy)" pathTo="M 410.69168153021076 307.878400308609L 410.69168153021076 16.475136012344365Q 410.69168153021076 12.475136012344365 414.69168153021076 12.475136012344365L 427.7527934035549 12.475136012344365Q 431.7527934035549 12.475136012344365 431.7527934035549 16.475136012344365L 431.7527934035549 16.475136012344365L 431.7527934035549 307.878400308609Q 431.7527934035549 311.878400308609 427.7527934035549 311.878400308609L 414.69168153021076 311.878400308609Q 410.69168153021076 311.878400308609 410.69168153021076 307.878400308609z" pathFrom="M 410.69168153021076 307.878400308609L 410.69168153021076 307.878400308609L 431.7527934035549 307.878400308609L 431.7527934035549 307.878400308609L 431.7527934035549 307.878400308609L 431.7527934035549 307.878400308609L 431.7527934035549 307.878400308609L 410.69168153021076 307.878400308609" cy="12.475136012344365" cx="431.7527934035549" j="6" val="48" barHeight="299.40326429626464" barWidth="21.06111187334414"></path><path id="SvgjsPath3066" d="M 480.8953877746912 307.878400308609L 480.8953877746912 66.37568006172182Q 480.8953877746912 62.37568006172182 484.8953877746912 62.37568006172182L 497.95649964803533 62.37568006172182Q 501.95649964803533 62.37568006172182 501.95649964803533 66.37568006172182L 501.95649964803533 66.37568006172182L 501.95649964803533 307.878400308609Q 501.95649964803533 311.878400308609 497.95649964803533 311.878400308609L 484.8953877746912 311.878400308609Q 480.8953877746912 311.878400308609 480.8953877746912 307.878400308609z" fill="rgba(255,171,0,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskmqx9yzpy)" pathTo="M 480.8953877746912 307.878400308609L 480.8953877746912 66.37568006172182Q 480.8953877746912 62.37568006172182 484.8953877746912 62.37568006172182L 497.95649964803533 62.37568006172182Q 501.95649964803533 62.37568006172182 501.95649964803533 66.37568006172182L 501.95649964803533 66.37568006172182L 501.95649964803533 307.878400308609Q 501.95649964803533 311.878400308609 497.95649964803533 311.878400308609L 484.8953877746912 311.878400308609Q 480.8953877746912 311.878400308609 480.8953877746912 307.878400308609z" pathFrom="M 480.8953877746912 307.878400308609L 480.8953877746912 307.878400308609L 501.95649964803533 307.878400308609L 501.95649964803533 307.878400308609L 501.95649964803533 307.878400308609L 501.95649964803533 307.878400308609L 501.95649964803533 307.878400308609L 480.8953877746912 307.878400308609" cy="62.37568006172182" cx="501.95649964803533" j="7" val="40" barHeight="249.50272024688718" barWidth="21.06111187334414"></path><path id="SvgjsPath3068" d="M 551.0990940191716 307.878400308609L 551.0990940191716 53.90054404937746Q 551.0990940191716 49.90054404937746 555.0990940191716 49.90054404937746L 568.1602058925157 49.90054404937746Q 572.1602058925157 49.90054404937746 572.1602058925157 53.90054404937746L 572.1602058925157 53.90054404937746L 572.1602058925157 307.878400308609Q 572.1602058925157 311.878400308609 568.1602058925157 311.878400308609L 555.0990940191716 311.878400308609Q 551.0990940191716 311.878400308609 551.0990940191716 307.878400308609z" fill="rgba(255,171,0,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskmqx9yzpy)" pathTo="M 551.0990940191716 307.878400308609L 551.0990940191716 53.90054404937746Q 551.0990940191716 49.90054404937746 555.0990940191716 49.90054404937746L 568.1602058925157 49.90054404937746Q 572.1602058925157 49.90054404937746 572.1602058925157 53.90054404937746L 572.1602058925157 53.90054404937746L 572.1602058925157 307.878400308609Q 572.1602058925157 311.878400308609 568.1602058925157 311.878400308609L 555.0990940191716 311.878400308609Q 551.0990940191716 311.878400308609 551.0990940191716 307.878400308609z" pathFrom="M 551.0990940191716 307.878400308609L 551.0990940191716 307.878400308609L 572.1602058925157 307.878400308609L 572.1602058925157 307.878400308609L 572.1602058925157 307.878400308609L 572.1602058925157 307.878400308609L 572.1602058925157 307.878400308609L 551.0990940191716 307.878400308609" cy="49.90054404937746" cx="572.1602058925157" j="8" val="42" barHeight="261.97785625923154" barWidth="21.06111187334414"></path><path id="SvgjsPath3070" d="M 621.3028002636521 307.878400308609L 621.3028002636521 85.08838408023834Q 621.3028002636521 81.08838408023834 625.3028002636521 81.08838408023834L 638.3639121369962 81.08838408023834Q 642.3639121369962 81.08838408023834 642.3639121369962 85.08838408023834L 642.3639121369962 85.08838408023834L 642.3639121369962 307.878400308609Q 642.3639121369962 311.878400308609 638.3639121369962 311.878400308609L 625.3028002636521 311.878400308609Q 621.3028002636521 311.878400308609 621.3028002636521 307.878400308609z" fill="rgba(255,171,0,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskmqx9yzpy)" pathTo="M 621.3028002636521 307.878400308609L 621.3028002636521 85.08838408023834Q 621.3028002636521 81.08838408023834 625.3028002636521 81.08838408023834L 638.3639121369962 81.08838408023834Q 642.3639121369962 81.08838408023834 642.3639121369962 85.08838408023834L 642.3639121369962 85.08838408023834L 642.3639121369962 307.878400308609Q 642.3639121369962 311.878400308609 638.3639121369962 311.878400308609L 625.3028002636521 311.878400308609Q 621.3028002636521 311.878400308609 621.3028002636521 307.878400308609z" pathFrom="M 621.3028002636521 307.878400308609L 621.3028002636521 307.878400308609L 642.3639121369962 307.878400308609L 642.3639121369962 307.878400308609L 642.3639121369962 307.878400308609L 642.3639121369962 307.878400308609L 642.3639121369962 307.878400308609L 621.3028002636521 307.878400308609" cy="81.08838408023834" cx="642.3639121369962" j="9" val="37" barHeight="230.79001622837066" barWidth="21.06111187334414"></path><g id="SvgjsG3050" class="apexcharts-bar-goals-markers" style="pointer-events: none"><g id="SvgjsG3051" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG3053" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG3055" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG3057" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG3059" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG3061" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG3063" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG3065" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG3067" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG3069" className="apexcharts-bar-goals-groups"></g></g></g></g><g id="SvgjsG3071" class="apexcharts-line-series apexcharts-plot-series"><g id="SvgjsG3072" class="apexcharts-series" seriesName="Delivery" data:longestSeries="true" rel="1" data:realIndex="1"><path id="SvgjsPath3094" d="M 0 168.41433616664887C 24.57129718556816 168.41433616664887 45.6324090589123 137.22649613578798 70.20370624448046 137.22649613578798C 94.77500343004861 137.22649613578798 115.83611530339276 168.41433616664887 140.40741248896092 168.41433616664887C 164.97870967452909 168.41433616664887 186.03982154787323 112.27622411109925 210.6111187334414 112.27622411109925C 235.18241591900954 112.27622411109925 256.2435277923537 137.22649613578798 280.81482497792183 137.22649613578798C 305.38612216349 137.22649613578798 326.4472340368342 37.425408037033094 351.0185312224023 37.425408037033094C 375.58982840797046 37.425408037033094 396.65094028131466 112.27622411109925 421.2222374668828 112.27622411109925C 445.79353465245094 112.27622411109925 466.8546465257951 74.85081607406616 491.42594371136323 74.85081607406616C 515.9972408969314 74.85081607406616 537.0583527702755 149.70163214813232 561.6296499558437 149.70163214813232C 586.2009471414118 149.70163214813232 607.262059014756 99.80108809875489 631.8333562003241 99.80108809875489" fill="none" fill-opacity="1" stroke="rgba(105,108,255,1)" stroke-opacity="1" stroke-linecap="round" stroke-width="3" stroke-dasharray="0" class="apexcharts-line" index="1" clip-path="url(#gridRectMaskmqx9yzpy)" pathTo="M 0 168.41433616664887C 24.57129718556816 168.41433616664887 45.6324090589123 137.22649613578798 70.20370624448046 137.22649613578798C 94.77500343004861 137.22649613578798 115.83611530339276 168.41433616664887 140.40741248896092 168.41433616664887C 164.97870967452909 168.41433616664887 186.03982154787323 112.27622411109925 210.6111187334414 112.27622411109925C 235.18241591900954 112.27622411109925 256.2435277923537 137.22649613578798 280.81482497792183 137.22649613578798C 305.38612216349 137.22649613578798 326.4472340368342 37.425408037033094 351.0185312224023 37.425408037033094C 375.58982840797046 37.425408037033094 396.65094028131466 112.27622411109925 421.2222374668828 112.27622411109925C 445.79353465245094 112.27622411109925 466.8546465257951 74.85081607406616 491.42594371136323 74.85081607406616C 515.9972408969314 74.85081607406616 537.0583527702755 149.70163214813232 561.6296499558437 149.70163214813232C 586.2009471414118 149.70163214813232 607.262059014756 99.80108809875489 631.8333562003241 99.80108809875489" pathFrom="M -1 311.878400308609L -1 311.878400308609L 70.20370624448046 311.878400308609L 140.40741248896092 311.878400308609L 210.6111187334414 311.878400308609L 280.81482497792183 311.878400308609L 351.0185312224023 311.878400308609L 421.2222374668828 311.878400308609L 491.42594371136323 311.878400308609L 561.6296499558437 311.878400308609L 631.8333562003241 311.878400308609"></path><g id="SvgjsG3073" class="apexcharts-series-markers-wrap" data:realIndex="1"><g id="SvgjsG3075" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskmqx9yzpy)"><circle id="SvgjsCircle3076" r="5" cx="0" cy="168.41433616664887" class="apexcharts-marker wzsx8kbu1" stroke="#696cff" fill="#ffffff" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="0" j="0" index="1" default-marker-size="5"></circle><circle id="SvgjsCircle3077" r="5" cx="70.20370624448046" cy="137.22649613578798" class="apexcharts-marker wr593o7nz" stroke="#696cff" fill="#ffffff" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="1" j="1" index="1" default-marker-size="5"></circle></g><g id="SvgjsG3078" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskmqx9yzpy)"><circle id="SvgjsCircle3079" r="5" cx="140.40741248896092" cy="168.41433616664887" class="apexcharts-marker w6k4d73d1" stroke="#696cff" fill="#ffffff" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="2" j="2" index="1" default-marker-size="5"></circle></g><g id="SvgjsG3080" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskmqx9yzpy)"><circle id="SvgjsCircle3081" r="5" cx="210.6111187334414" cy="112.27622411109925" class="apexcharts-marker wr3qlpsh" stroke="#696cff" fill="#ffffff" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="3" j="3" index="1" default-marker-size="5"></circle></g><g id="SvgjsG3082" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskmqx9yzpy)"><circle id="SvgjsCircle3083" r="5" cx="280.81482497792183" cy="137.22649613578798" class="apexcharts-marker wbpgw70xql" stroke="#696cff" fill="#ffffff" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="4" j="4" index="1" default-marker-size="5"></circle></g><g id="SvgjsG3084" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskmqx9yzpy)"><circle id="SvgjsCircle3085" r="5" cx="351.0185312224023" cy="37.425408037033094" class="apexcharts-marker w07kpzpz4" stroke="#696cff" fill="#ffffff" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="5" j="5" index="1" default-marker-size="5"></circle></g><g id="SvgjsG3086" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskmqx9yzpy)"><circle id="SvgjsCircle3087" r="5" cx="421.2222374668828" cy="112.27622411109925" class="apexcharts-marker w67pq15nqf" stroke="#696cff" fill="#ffffff" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="6" j="6" index="1" default-marker-size="5"></circle></g><g id="SvgjsG3088" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskmqx9yzpy)"><circle id="SvgjsCircle3089" r="5" cx="491.42594371136323" cy="74.85081607406616" class="apexcharts-marker we35ewt34l" stroke="#696cff" fill="#ffffff" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="7" j="7" index="1" default-marker-size="5"></circle></g><g id="SvgjsG3090" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskmqx9yzpy)"><circle id="SvgjsCircle3091" r="5" cx="561.6296499558437" cy="149.70163214813232" class="apexcharts-marker wpota6v1e" stroke="#696cff" fill="#ffffff" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="8" j="8" index="1" default-marker-size="5"></circle></g><g id="SvgjsG3092" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskmqx9yzpy)"><circle id="SvgjsCircle3093" r="5" cx="631.8333562003241" cy="99.80108809875489" class="apexcharts-marker wc54yzsdc" stroke="#696cff" fill="#ffffff" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="9" j="9" index="1" default-marker-size="5"></circle></g></g></g><g id="SvgjsG3049" class="apexcharts-datalabels" data:realIndex="0"></g><g id="SvgjsG3074" class="apexcharts-datalabels" data:realIndex="1"></g></g><line id="SvgjsLine3149" x1="-19.926357120937773" y1="0" x2="651.7597133212619" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine3150" x1="-19.926357120937773" y1="0" x2="651.7597133212619" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG3151" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG3152" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG3153" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect3043" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG3127" class="apexcharts-yaxis" rel="0" transform="translate(25.28248405456543, 0)"><g id="SvgjsG3128" class="apexcharts-yaxis-texts-g"><text id="SvgjsText3129" font-family="Public Sans" x="20" y="31.4" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a7acb2" class="apexcharts-text apexcharts-yaxis-label " style="font-family: &quot;Public Sans&quot;;"><tspan id="SvgjsTspan3130">50%</tspan><title>50%</title></text><text id="SvgjsText3131" font-family="Public Sans" x="20" y="109.36960007715226" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a7acb2" class="apexcharts-text apexcharts-yaxis-label " style="font-family: &quot;Public Sans&quot;;"><tspan id="SvgjsTspan3132">37.5%</tspan><title>37.5%</title></text><text id="SvgjsText3133" font-family="Public Sans" x="20" y="187.3392001543045" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a7acb2" class="apexcharts-text apexcharts-yaxis-label " style="font-family: &quot;Public Sans&quot;;"><tspan id="SvgjsTspan3134">25%</tspan><title>25%</title></text><text id="SvgjsText3135" font-family="Public Sans" x="20" y="265.30880023145676" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a7acb2" class="apexcharts-text apexcharts-yaxis-label " style="font-family: &quot;Public Sans&quot;;"><tspan id="SvgjsTspan3136">12.5%</tspan><title>12.5%</title></text><text id="SvgjsText3137" font-family="Public Sans" x="20" y="343.278400308609" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a7acb2" class="apexcharts-text apexcharts-yaxis-label " style="font-family: &quot;Public Sans&quot;;"><tspan id="SvgjsTspan3138">0%</tspan><title>0%</title></text></g></g><g id="SvgjsG3040" class="apexcharts-annotations"></g></svg><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(255, 171, 0);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 2;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(105, 108, 255);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"><div class="apexcharts-xaxistooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
      <div class="resize-triggers"><div class="expand-trigger"><div style="width: 802px; height: 440px;"></div></div><div class="contract-trigger"></div></div></div>
    </div>
  </div> --}}
  <!--/ Shipment statistics -->

  <!-- Delivery Performance -->
  <div class="col-xxl-4 col-lg-5">
    <div class="card h-100">
      <div class="card-header d-flex justify-content-between">
        <div class="card-title mb-0">
          <h5 class="mb-1 me-2">Delivery Performance</h5>
          <p class="card-subtitle">12% increase in this month</p>
        </div>
        <div class="dropdown">
          <button class="btn text-muted p-0" type="button" id="deliveryPerformance" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="bx bx-dots-vertical-rounded bx-lg"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="deliveryPerformance">
            <a class="dropdown-item" href="javascript:void(0);">Select All</a>
            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
            <a class="dropdown-item" href="javascript:void(0);">Share</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <ul class="p-0 m-0">
          <li class="d-flex mb-6 align-items-center">
            <div class="avatar flex-shrink-0 me-4">
              <span class="avatar-initial rounded bg-label-primary"><i class="bx bx-cube bx-lg"></i></span>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-1 fw-normal">Packages in transit</h6>
                <p class="text-success mb-0">
                  <i class="bx bx-chevron-up bx-lg me-1"></i>
                  25.8%
                </p>
              </div>
              <div class="user-progress">
                <h6 class="mb-0">10k</h6>
              </div>
            </div>
          </li>
          <li class="d-flex mb-6 align-items-center">
            <div class="avatar flex-shrink-0 me-4">
              <span class="avatar-initial rounded bg-label-info"><i class="bx bxs-truck bx-lg"></i></span>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-1 fw-normal">Packages out for delivery</h6>
                <p class="text-success mb-0">
                  <i class="bx bx-chevron-up bx-lg me-1"></i>
                  4.3%
                </p>
              </div>
              <div class="user-progress">
                <h6 class="mb-0">5k</h6>
              </div>
            </div>
          </li>
          <li class="d-flex mb-6 align-items-center">
            <div class="avatar flex-shrink-0 me-4">
              <span class="avatar-initial rounded bg-label-success"><i class="bx bx-check-circle bx-lg"></i></span>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-1 fw-normal">Packages delivered</h6>
                <p class="text-danger mb-0">
                  <i class="bx bx-chevron-down bx-lg me-1"></i>
                  12.5
                </p>
              </div>
              <div class="user-progress">
                <h6 class="mb-0">15k</h6>
              </div>
            </div>
          </li>
          <li class="d-flex mb-6 align-items-center">
            <div class="avatar flex-shrink-0 me-4">
              <span class="avatar-initial rounded bg-label-warning"><i class="bx bxs-offer bx-lg"></i></span>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-1 fw-normal">Delivery success rate</h6>
                <p class="text-success mb-0">
                  <i class="bx bx-chevron-up bx-lg me-1"></i>
                  35.6%
                </p>
              </div>
              <div class="user-progress">
                <h6 class="mb-0">95%</h6>
              </div>
            </div>
          </li>
          <li class="d-flex mb-6 align-items-center">
            <div class="avatar flex-shrink-0 me-4">
              <span class="avatar-initial rounded bg-label-secondary"><i class="bx bx-time-five bx-lg"></i></span>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-1 fw-normal">Average delivery time</h6>
                <p class="text-danger mb-0">
                  <i class="bx bx-chevron-down bx-lg me-1"></i>
                  2.15
                </p>
              </div>
              <div class="user-progress">
                <h6 class="mb-0">2.5 Days</h6>
              </div>
            </div>
          </li>
          <li class="d-flex align-items-center">
            <div class="avatar flex-shrink-0 me-4">
              <span class="avatar-initial rounded bg-label-danger"><i class="bx bx-group bx-lg"></i></span>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-1 fw-normal">Customer satisfaction</h6>
                <p class="text-success mb-0">
                  <i class="bx bx-chevron-up bx-lg me-1"></i>
                  5.7%
                </p>
              </div>
              <div class="user-progress">
                <h6 class="mb-0">4.5/5</h6>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!--/ Delivery Performance -->

  <!-- Reasons for delivery exceptions -->
  {{-- <div class="col-xxl-4 col-lg-6">
    <div class="card h-100">
      <div class="card-header d-flex align-items-center justify-content-between">
        <div class="card-title mb-0">
          <h5 class="m-0 me-2">Reasons for delivery exceptions</h5>
        </div>
        <div class="dropdown">
          <button class="btn p-0" type="button" id="deliveryExceptions" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="bx bx-dots-vertical-rounded bx-lg text-muted"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="deliveryExceptions">
            <a class="dropdown-item" href="javascript:void(0);">Select All</a>
            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
            <a class="dropdown-item" href="javascript:void(0);">Share</a>
          </div>
        </div>
      </div>
      <div class="card-body" style="position: relative;">
        <div id="deliveryExceptionsChart" style="min-height: 402px;"><div id="apexchartsa3b3hecr" class="apexcharts-canvas apexchartsa3b3hecr apexcharts-theme-light" style="width: 753px; height: 402px;"><svg id="SvgjsSvg3154" width="753" height="402.00000076293946" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="753" height="402.00000076293946"><div class="apexcharts-legend apexcharts-align-center apx-legend-position-bottom" xmlns="http://www.w3.org/1999/xhtml" style="inset: auto 0px -10px; position: absolute; max-height: 215px;"><div class="apexcharts-legend-series" rel="1" seriesname="Incorrectxaddress" data:collapsed="false" style="margin: 8px 15px;"><span class="apexcharts-legend-marker" rel="1" data:collapsed="false" style="background: rgb(90, 177, 44) !important; color: rgb(90, 177, 44); height: 8px; width: 8px; left: -3px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="1" i="0" data:default-text="Incorrect%20address" data:collapsed="false" style="color: rgb(56, 69, 81); font-size: 13px; font-weight: 400; font-family: &quot;Public Sans&quot;;">Incorrect address</span></div><div class="apexcharts-legend-series" rel="2" seriesname="Weatherxconditions" data:collapsed="false" style="margin: 8px 15px;"><span class="apexcharts-legend-marker" rel="2" data:collapsed="false" style="background: rgb(102, 199, 50) !important; color: rgb(102, 199, 50); height: 8px; width: 8px; left: -3px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="2" i="1" data:default-text="Weather%20conditions" data:collapsed="false" style="color: rgb(56, 69, 81); font-size: 13px; font-weight: 400; font-family: &quot;Public Sans&quot;;">Weather conditions</span></div><div class="apexcharts-legend-series" rel="3" seriesname="FederalxHolidays" data:collapsed="false" style="margin: 8px 15px;"><span class="apexcharts-legend-marker" rel="3" data:collapsed="false" style="background: rgb(141, 228, 95) !important; color: rgb(141, 228, 95); height: 8px; width: 8px; left: -3px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="3" i="2" data:default-text="Federal%20Holidays" data:collapsed="false" style="color: rgb(56, 69, 81); font-size: 13px; font-weight: 400; font-family: &quot;Public Sans&quot;;">Federal Holidays</span></div><div class="apexcharts-legend-series" rel="4" seriesname="Damagexduringxtransit" data:collapsed="false" style="margin: 8px 15px;"><span class="apexcharts-legend-marker" rel="4" data:collapsed="false" style="background: rgb(198, 241, 175) !important; color: rgb(198, 241, 175); height: 8px; width: 8px; left: -3px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="4" i="3" data:default-text="Damage%20during%20transit" data:collapsed="false" style="color: rgb(56, 69, 81); font-size: 13px; font-weight: 400; font-family: &quot;Public Sans&quot;;">Damage during transit</span></div></div><style type="text/css">

      .apexcharts-legend {
        display: flex;
        overflow: auto;
        padding: 0 10px;
      }
      .apexcharts-legend.apx-legend-position-bottom, .apexcharts-legend.apx-legend-position-top {
        flex-wrap: wrap
      }
      .apexcharts-legend.apx-legend-position-right, .apexcharts-legend.apx-legend-position-left {
        flex-direction: column;
        bottom: 0;
      }
      .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left, .apexcharts-legend.apx-legend-position-top.apexcharts-align-left, .apexcharts-legend.apx-legend-position-right, .apexcharts-legend.apx-legend-position-left {
        justify-content: flex-start;
      }
      .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center, .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
        justify-content: center;
      }
      .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right, .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
        justify-content: flex-end;
      }
      .apexcharts-legend-series {
        cursor: pointer;
        line-height: normal;
      }
      .apexcharts-legend.apx-legend-position-bottom .apexcharts-legend-series, .apexcharts-legend.apx-legend-position-top .apexcharts-legend-series{
        display: flex;
        align-items: center;
      }
      .apexcharts-legend-text {
        position: relative;
        font-size: 14px;
      }
      .apexcharts-legend-text *, .apexcharts-legend-marker * {
        pointer-events: none;
      }
      .apexcharts-legend-marker {
        position: relative;
        display: inline-block;
        cursor: pointer;
        margin-right: 3px;
        border-style: solid;
      }

      .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series, .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series{
        display: inline-block;
      }
      .apexcharts-legend-series.apexcharts-no-click {
        cursor: auto;
      }
      .apexcharts-legend .apexcharts-hidden-zero-series, .apexcharts-legend .apexcharts-hidden-null-series {
        display: none !important;
      }
      .apexcharts-inactive-legend {
        opacity: 0.45;
      }</style></foreignObject><g id="SvgjsG3156" class="apexcharts-inner apexcharts-graphical" transform="translate(12, 15)"><defs id="SvgjsDefs3155"><clipPath id="gridRectMaska3b3hecr"><rect id="SvgjsRect3158" width="735" height="339" x="-2" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaska3b3hecr"></clipPath><clipPath id="nonForecastMaska3b3hecr"></clipPath><clipPath id="gridRectMarkerMaska3b3hecr"><rect id="SvgjsRect3159" width="735" height="343" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG3160" class="apexcharts-pie"><g id="SvgjsG3161" transform="translate(0, 0) scale(1)"><circle id="SvgjsCircle3162" r="124.25170731707318" cx="365.5" cy="169.5" fill="transparent"></circle><g id="SvgjsG3163" class="apexcharts-slices"><g id="SvgjsG3164" class="apexcharts-series apexcharts-pie-series" seriesName="Incorrectxaddress" rel="1" data:realIndex="0"><path id="SvgjsPath3165" d="M 365.5 8.134146341463406 A 161.3658536585366 161.3658536585366 0 0 1 483.1306448541478 59.03747188233649 L 456.0755965376938 84.44385334939909 A 124.25170731707318 124.25170731707318 0 0 0 365.5 45.24829268292682 L 365.5 8.134146341463406 z" fill="rgba(90,177,44,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-0" index="0" j="0" data:angle="46.8" data:startAngle="0" data:strokeWidth="0" data:value="13" data:pathOrig="M 365.5 8.134146341463406 A 161.3658536585366 161.3658536585366 0 0 1 483.1306448541478 59.03747188233649 L 456.0755965376938 84.44385334939909 A 124.25170731707318 124.25170731707318 0 0 0 365.5 45.24829268292682 L 365.5 8.134146341463406 z"></path></g><g id="SvgjsG3166" class="apexcharts-series apexcharts-pie-series" seriesName="Weatherxconditions" rel="2" data:realIndex="1"><path id="SvgjsPath3167" d="M 483.1306448541478 59.03747188233649 A 161.3658536585366 161.3658536585366 0 0 1 475.9625281176635 287.1306448541478 L 450.5561466506009 260.0755965376938 A 124.25170731707318 124.25170731707318 0 0 0 456.0755965376938 84.44385334939909 L 483.1306448541478 59.03747188233649 z" fill="rgba(102,199,50,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-1" index="0" j="1" data:angle="90.00000000000001" data:startAngle="46.8" data:strokeWidth="0" data:value="25" data:pathOrig="M 483.1306448541478 59.03747188233649 A 161.3658536585366 161.3658536585366 0 0 1 475.9625281176635 287.1306448541478 L 450.5561466506009 260.0755965376938 A 124.25170731707318 124.25170731707318 0 0 0 456.0755965376938 84.44385334939909 L 483.1306448541478 59.03747188233649 z"></path></g><g id="SvgjsG3168" class="apexcharts-series apexcharts-pie-series" seriesName="FederalxHolidays" rel="3" data:realIndex="2"><path id="SvgjsPath3169" d="M 475.9625281176635 287.1306448541478 A 161.3658536585366 161.3658536585366 0 0 1 270.6515309959268 300.0477179215769 L 292.4666788668636 270.02174279961423 A 124.25170731707318 124.25170731707318 0 0 0 450.5561466506009 260.0755965376938 L 475.9625281176635 287.1306448541478 z" fill="rgba(141,228,95,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-2" index="0" j="2" data:angle="79.19999999999999" data:startAngle="136.8" data:strokeWidth="0" data:value="22" data:pathOrig="M 475.9625281176635 287.1306448541478 A 161.3658536585366 161.3658536585366 0 0 1 270.6515309959268 300.0477179215769 L 292.4666788668636 270.02174279961423 A 124.25170731707318 124.25170731707318 0 0 0 450.5561466506009 260.0755965376938 L 475.9625281176635 287.1306448541478 z"></path></g><g id="SvgjsG3170" class="apexcharts-series apexcharts-pie-series" seriesName="Damagexduringxtransit" rel="4" data:realIndex="3"><path id="SvgjsPath3171" d="M 270.6515309959268 300.0477179215769 A 161.3658536585366 161.3658536585366 0 0 1 365.47183634567665 8.134148799205889 L 365.47831398617103 45.24829457538853 A 124.25170731707318 124.25170731707318 0 0 0 292.4666788668636 270.02174279961423 L 270.6515309959268 300.0477179215769 z" fill="rgba(198,241,175,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-3" index="0" j="3" data:angle="144" data:startAngle="216" data:strokeWidth="0" data:value="40" data:pathOrig="M 270.6515309959268 300.0477179215769 A 161.3658536585366 161.3658536585366 0 0 1 365.47183634567665 8.134148799205889 L 365.47831398617103 45.24829457538853 A 124.25170731707318 124.25170731707318 0 0 0 292.4666788668636 270.02174279961423 L 270.6515309959268 300.0477179215769 z"></path></g></g></g><g id="SvgjsG3172" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)"><text id="SvgjsText3173" font-family="Public Sans" x="365.5" y="199.5" text-anchor="middle" dominant-baseline="auto" font-size="15px" font-weight="400" fill="#646e78" class="apexcharts-text apexcharts-datalabel-label" style="font-family: &quot;Public Sans&quot;;">AVG. Exceptions</text><text id="SvgjsText3174" font-family="Public Sans" x="365.5" y="165.5" text-anchor="middle" dominant-baseline="auto" font-size="24px" font-weight="500" fill="#384551" class="apexcharts-text apexcharts-datalabel-value" style="font-family: &quot;Public Sans&quot;;">30%</text></g></g><line id="SvgjsLine3175" x1="0" y1="0" x2="731" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine3176" x1="0" y1="0" x2="731" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG3157" class="apexcharts-annotations"></g></svg><div class="apexcharts-tooltip apexcharts-theme-false"><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(90, 177, 44);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 2;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(102, 199, 50);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 3;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(141, 228, 95);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 4;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(198, 241, 175);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
      <div class="resize-triggers"><div class="expand-trigger"><div style="width: 802px; height: 427px;"></div></div><div class="contract-trigger"></div></div></div>
    </div>
  </div> --}}
  <!--/ Reasons for delivery exceptions -->

  <!-- Orders by Countries -->
  {{-- <div class="col-xxl-4 col-lg-6">
    <div class="card h-100">
      <div class="card-header d-flex justify-content-between">
        <div class="card-title mb-0">
          <h5 class="mb-1">Orders by Countries</h5>
          <p class="card-subtitle">62 deliveries in progress</p>
        </div>
        <div class="dropdown">
          <button class="btn text-muted p-0" type="button" id="ordersCountries" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="bx bx-dots-vertical-rounded bx-lg"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="ordersCountries">
            <a class="dropdown-item" href="javascript:void(0);">Select All</a>
            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
            <a class="dropdown-item" href="javascript:void(0);">Share</a>
          </div>
        </div>
      </div>
      <div class="card-body p-0">
        <div class="nav-align-top">
          <ul class="nav nav-tabs nav-fill rounded-0 timeline-indicator-advanced" role="tablist">
            <li class="nav-item" role="presentation">
              <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-new" aria-controls="navs-justified-new" aria-selected="true">New</button>
            </li>
            <li class="nav-item" role="presentation">
              <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-link-preparing" aria-controls="navs-justified-link-preparing" aria-selected="false" tabindex="-1">Preparing</button>
            </li>
            <li class="nav-item" role="presentation">
              <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-link-shipping" aria-controls="navs-justified-link-shipping" aria-selected="false" tabindex="-1">Shipping</button>
            </li>
          </ul>
          <div class="tab-content border-0  mx-1">
            <div class="tab-pane fade show active" id="navs-justified-new" role="tabpanel">
              <ul class="timeline mb-0">
                <li class="timeline-item ps-6 border-left-dashed">
                  <span class="timeline-indicator-advanced timeline-indicator-success border-0 shadow-none">
                    <i class="bx bx-check-circle"></i>
                  </span>
                  <div class="timeline-event ps-1">
                    <div class="timeline-header">
                      <small class="text-success text-uppercase">sender</small>
                    </div>
                    <h6 class="my-50">Myrtle Ullrich</h6>
                    <p class="text-body mb-0">101 Boulder, California(CA), 95959</p>
                  </div>
                </li>
                <li class="timeline-item ps-6 border-transparent">
                  <span class="timeline-indicator-advanced timeline-indicator-primary border-0 shadow-none">
                    <i class="bx bx-map"></i>
                  </span>
                  <div class="timeline-event ps-1">
                    <div class="timeline-header">
                      <small class="text-primary text-uppercase">Receiver</small>
                    </div>
                    <h6 class="my-50">Barry Schowalter</h6>
                    <p class="text-body mb-0">939 Orange, California(CA), 92118</p>
                  </div>
                </li>
              </ul>
              <div class="border-1 border-light border-top border-dashed my-4"></div>
              <ul class="timeline mb-0">
                <li class="timeline-item ps-6 border-left-dashed">
                  <span class="timeline-indicator-advanced timeline-indicator-success border-0 shadow-none">
                    <i class="bx bx-check-circle"></i>
                  </span>
                  <div class="timeline-event ps-1">
                    <div class="timeline-header">
                      <small class="text-success text-uppercase">sender</small>
                    </div>
                    <h6 class="my-50">Veronica Herman</h6>
                    <p class="text-body mb-0">162 Windsor, California(CA), 95492</p>
                  </div>
                </li>
                <li class="timeline-item ps-6 border-transparent">
                  <span class="timeline-indicator-advanced timeline-indicator-primary border-0 shadow-none">
                    <i class="bx bx-map"></i>
                  </span>
                  <div class="timeline-event ps-1">
                    <div class="timeline-header">
                      <small class="text-primary text-uppercase">Receiver</small>
                    </div>
                    <h6 class="my-50">Helen Jacobs</h6>
                    <p class="text-body mb-0">487 Sunset, California(CA), 94043</p>
                  </div>
                </li>
              </ul>
            </div>
            <div class="tab-pane fade" id="navs-justified-link-preparing" role="tabpanel">
              <ul class="timeline mb-0">
                <li class="timeline-item ps-6 border-left-dashed">
                  <span class="timeline-indicator-advanced timeline-indicator-success border-0 shadow-none">
                    <i class="bx bx-check-circle"></i>
                  </span>
                  <div class="timeline-event ps-1">
                    <div class="timeline-header">
                      <small class="text-success text-uppercase">sender</small>
                    </div>
                    <h6 class="my-50">Barry Schowalter</h6>
                    <p class="text-body mb-0">939 Orange, California(CA), 92118</p>
                  </div>
                </li>
                <li class="timeline-item ps-6 border-transparent border-left-dashed">
                  <span class="timeline-indicator-advanced timeline-indicator-primary border-0 shadow-none">
                    <i class="bx bx-map"></i>
                  </span>
                  <div class="timeline-event ps-1">
                    <div class="timeline-header">
                      <small class="text-primary text-uppercase">Receiver</small>
                    </div>
                    <h6 class="my-50">Myrtle Ullrich</h6>
                    <p class="text-body mb-0">101 Boulder, California(CA), 95959 </p>
                  </div>
                </li>
              </ul>
              <div class="border-1 border-light border-top border-dashed my-4"></div>
              <ul class="timeline mb-0">
                <li class="timeline-item ps-6 border-left-dashed">
                  <span class="timeline-indicator-advanced timeline-indicator-success border-0 shadow-none">
                    <i class="bx bx-check-circle"></i>
                  </span>
                  <div class="timeline-event ps-1">
                    <div class="timeline-header">
                      <small class="text-success text-uppercase">sender</small>
                    </div>
                    <h6 class="my-50">Veronica Herman</h6>
                    <p class="text-body mb-0">162 Windsor, California(CA), 95492</p>
                  </div>
                </li>
                <li class="timeline-item ps-6 border-transparent">
                  <span class="timeline-indicator-advanced timeline-indicator-primary border-0 shadow-none">
                    <i class="bx bx-map"></i>
                  </span>
                  <div class="timeline-event ps-1">
                    <div class="timeline-header">
                      <small class="text-primary text-uppercase">Receiver</small>
                    </div>
                    <h6 class="my-50">Helen Jacobs</h6>
                    <p class="text-body mb-0">487 Sunset, California(CA), 94043</p>
                  </div>
                </li>
              </ul>
            </div>
            <div class="tab-pane fade" id="navs-justified-link-shipping" role="tabpanel">
              <ul class="timeline mb-0">
                <li class="timeline-item ps-6 border-left-dashed">
                  <span class="timeline-indicator-advanced timeline-indicator-success border-0 shadow-none">
                    <i class="bx bx-check-circle"></i>
                  </span>
                  <div class="timeline-event ps-1">
                    <div class="timeline-header">
                      <small class="text-success text-uppercase">sender</small>
                    </div>
                    <h6 class="my-50">Veronica Herman</h6>
                    <p class="text-body mb-0">101 Boulder, California(CA), 95959</p>
                  </div>
                </li>
                <li class="timeline-item ps-6 border-transparent">
                  <span class="timeline-indicator-advanced timeline-indicator-primary border-0 shadow-none">
                    <i class="bx bx-map"></i>
                  </span>
                  <div class="timeline-event ps-1">
                    <div class="timeline-header">
                      <small class="text-primary text-uppercase">Receiver</small>
                    </div>
                    <h6 class="my-50">Barry Schowalter</h6>
                    <p class="text-body mb-0">939 Orange, California(CA), 92118</p>
                  </div>
                </li>
              </ul>
              <div class="border-1 border-light border-top border-dashed my-4"></div>
              <ul class="timeline mb-0">
                <li class="timeline-item ps-6 border-left-dashed">
                  <span class="timeline-indicator-advanced timeline-indicator-success border-0 shadow-none">
                    <i class="bx bx-check-circle"></i>
                  </span>
                  <div class="timeline-event ps-1">
                    <div class="timeline-header">
                      <small class="text-success text-uppercase">sender</small>
                    </div>
                    <h6 class="my-50">Myrtle Ullrich</h6>
                    <p class="text-body mb-0">162 Windsor, California(CA), 95492 </p>
                  </div>
                </li>
                <li class="timeline-item ps-6 border-transparent">
                  <span class="timeline-indicator-advanced timeline-indicator-primary border-0 shadow-none">
                    <i class="bx bx-map"></i>
                  </span>
                  <div class="timeline-event ps-1">
                    <div class="timeline-header">
                      <small class="text-primary text-uppercase">Receiver</small>
                    </div>
                    <h6 class="my-50">Helen Jacobs</h6>
                    <p class="text-body mb-0">487 Sunset, California(CA), 94043</p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> --}}
  <!--/ Orders by Countries -->

  <!-- On route vehicles Table -->
  <div class="col-12 order-5">
    <div class="card">
      <div class="card-header d-flex align-items-center justify-content-between">
        <div class="card-title mb-0">
          <h5 class="m-0 me-2">On route vehicles</h5>
        </div>
        <div class="dropdown">
          <button class="btn text-muted p-0" type="button" id="routeVehicles" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="bx bx-dots-vertical-rounded bx-lg"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="routeVehicles">
            <a class="dropdown-item" href="javascript:void(0);">Select All</a>
            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
            <a class="dropdown-item" href="javascript:void(0);">Share</a>
          </div>
        </div>
      </div>
      <div class="card-datatable table-responsive">
        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer"><div class="table-responsive"><table class="dt-route-vehicles table table-sm dataTable no-footer dtr-column" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info" style="width: 1210px;">
          <thead>
            <tr><th class="control sorting_disabled dtr-hidden" rowspan="1" colspan="1" style="width: 0px; display: none;" aria-label=""></th><th class="sorting_disabled dt-checkboxes-cell dt-checkboxes-select-all" rowspan="1" colspan="1" style="width: 18px;" data-col="1" aria-label=""><input type="checkbox" class="form-check-input"></th><th class="sorting sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 143px;" aria-label="location: activate to sort column descending" aria-sort="ascending">location</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 217px;" aria-label="starting route: activate to sort column ascending">starting route</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 215px;" aria-label="ending route: activate to sort column ascending">ending route</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 175px;" aria-label="warnings: activate to sort column ascending">warnings</th><th class="w-20 sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 206px;" aria-label="progress: activate to sort column ascending">progress</th></tr>
          </thead><tbody><tr class="odd"><td class="  control" tabindex="0" style="display: none;"></td><td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td><td class="sorting_1"><div class="d-flex justify-content-start align-items-center user-name"><div class="avatar-wrapper"><div class="avatar me-4"><span class="avatar-initial rounded-circle bg-label-secondary"><i class="bx bxs-truck bx-lg"></i></span></div></div><div class="d-flex flex-column"><a class="text-heading fw-medium" href="app-logistics-fleet.html">VOL-159145</a></div></div></td><td><div class="text-body">Paris 19, France</div></td><td><div class="text-body">Dresden, Germany</div></td><td><span class="badge rounded bg-label-success">No Warnings</span></td><td><div class="d-flex align-items-center"><div div="" class="progress w-100" style="height: 8px;"><div class="progress-bar" role="progressbar" style="width:60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div></div><div class="text-body ms-3">60%</div></div></td></tr><tr class="even"><td class="  control" tabindex="0" style="display: none;"></td><td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td><td class="sorting_1"><div class="d-flex justify-content-start align-items-center user-name"><div class="avatar-wrapper"><div class="avatar me-4"><span class="avatar-initial rounded-circle bg-label-secondary"><i class="bx bxs-truck bx-lg"></i></span></div></div><div class="d-flex flex-column"><a class="text-heading fw-medium" href="app-logistics-fleet.html">VOL-182964</a></div></div></td><td><div class="text-body">Saintes, France</div></td><td><div class="text-body">Roma, Italy</div></td><td><span class="badge rounded bg-label-primary">fuel problems</span></td><td><div class="d-flex align-items-center"><div div="" class="progress w-100" style="height: 8px;"><div class="progress-bar" role="progressbar" style="width:82%;" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100"></div></div><div class="text-body ms-3">82%</div></div></td></tr><tr class="odd"><td class="  control" tabindex="0" style="display: none;"></td><td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td><td class="sorting_1"><div class="d-flex justify-content-start align-items-center user-name"><div class="avatar-wrapper"><div class="avatar me-4"><span class="avatar-initial rounded-circle bg-label-secondary"><i class="bx bxs-truck bx-lg"></i></span></div></div><div class="d-flex flex-column"><a class="text-heading fw-medium" href="app-logistics-fleet.html">VOL-276904</a></div></div></td><td><div class="text-body">Aulnay-sous-Bois, France</div></td><td><div class="text-body">Torino, Italy</div></td><td><span class="badge rounded bg-label-warning">Temperature Not Optimal</span></td><td><div class="d-flex align-items-center"><div div="" class="progress w-100" style="height: 8px;"><div class="progress-bar" role="progressbar" style="width:30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div></div><div class="text-body ms-3">30%</div></div></td></tr><tr class="even"><td class="  control" tabindex="0" style="display: none;"></td><td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td><td class="sorting_1"><div class="d-flex justify-content-start align-items-center user-name"><div class="avatar-wrapper"><div class="avatar me-4"><span class="avatar-initial rounded-circle bg-label-secondary"><i class="bx bxs-truck bx-lg"></i></span></div></div><div class="d-flex flex-column"><a class="text-heading fw-medium" href="app-logistics-fleet.html">VOL-300198</a></div></div></td><td><div class="text-body">West Palm Beach, USA</div></td><td><div class="text-body">Dresden, Germany</div></td><td><span class="badge rounded bg-label-danger">Ecu Not Responding</span></td><td><div class="d-flex align-items-center"><div div="" class="progress w-100" style="height: 8px;"><div class="progress-bar" role="progressbar" style="width:90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div></div><div class="text-body ms-3">90%</div></div></td></tr><tr class="odd"><td class="  control" tabindex="0" style="display: none;"></td><td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td><td class="sorting_1"><div class="d-flex justify-content-start align-items-center user-name"><div class="avatar-wrapper"><div class="avatar me-4"><span class="avatar-initial rounded-circle bg-label-secondary"><i class="bx bxs-truck bx-lg"></i></span></div></div><div class="d-flex flex-column"><a class="text-heading fw-medium" href="app-logistics-fleet.html">VOL-302781</a></div></div></td><td><div class="text-body">Köln, Germany</div></td><td><div class="text-body">Laspezia, Italy</div></td><td><span class="badge rounded bg-label-info">Oil Leakage</span></td><td><div class="d-flex align-items-center"><div div="" class="progress w-100" style="height: 8px;"><div class="progress-bar" role="progressbar" style="width:24%;" aria-valuenow="24" aria-valuemin="0" aria-valuemax="100"></div></div><div class="text-body ms-3">24%</div></div></td></tr></tbody>
        </table><div style="width: 1%;"></div></div><div class="row d-flex align-items-center"><div class="col-sm-12 col-md-6"><div class="dataTables_info pt-0" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 5 of 25 entries</div></div><div class="col-sm-12 col-md-6"><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a aria-controls="DataTables_Table_0" aria-disabled="true" role="link" data-dt-idx="previous" tabindex="-1" class="page-link"><i class="bx bx-chevron-left bx-18px"></i></a></li><li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_0" role="link" aria-current="page" data-dt-idx="0" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" role="link" data-dt-idx="1" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" role="link" data-dt-idx="2" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" role="link" data-dt-idx="3" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" role="link" data-dt-idx="4" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item next" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" role="link" data-dt-idx="next" tabindex="0" class="page-link"><i class="bx bx-chevron-right bx-18px"></i></a></li></ul></div></div></div></div>
      </div>
    </div>
  </div>
  <!--/ On route vehicles Table -->
</div>



          </div>
          <!-- / Content -->


          <div class="content-backdrop fade"></div>
        </div>
</div>
@endsection
