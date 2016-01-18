<?php
/**
 * Created by PhpStorm.
 * User: sanek
 * Date: 07.01.16
 * Time: 15:41
 */
?>
<div id="SinoptikInformer" style="width:716px;" class="SinoptikInformer type1c1 htic1">
    <div class="siHeader">
        <div class="siLh">
            <div class="siMh"><a onmousedown="siClickCount();" href="https://sinoptik.ua/" target="_blank">Погода</a><a
                    onmousedown="siClickCount();" class="siLogo" href="https://sinoptik.ua/" target="_blank"> </a> <span
                    id="siHeader"></span></div>
        </div>
    </div>
    <div class="siBody">
        <table>
            <tbody>
            <tr>
                <!--<td class="siCityV" style="width:33.333333333333336%;">
                    <div class="siCityName"><a onmousedown="siClickCount();" href="https://sinoptik.ua/погода-киев"
                                               target="_blank">Погода в <span>Киеве</span></a>-->
                        <td class="siCityV" style="width:33.333333333333336%;">
                            <div class="siCityName"><a onmousedown="siClickCount();"
                                                       href="https://sinoptik.ua/погода-харьков" target="_blank">Погода
                                    в <span>Харькове</span></a>
                                <!--<td class="siCityV" style="width:33.333333333333336%;">
                                    <div class="siCityName"><a onmousedown="siClickCount();"
                                                               href="https://sinoptik.ua/погода-лисичанск"
                                                               target="_blank">Погода в <span>Лисичанске</span></a>
                                    </div>-->
            </tr>
            <tr>
                <td style="width:33.333333333333336%;">
                    <div class="siCityV2">
                        <div id="siCont0" class="siBodyContent">
                            <div class="siLeft">
                                <div class="siTerm"></div>
                                <div class="siT" id="siT0"></div>
                                <div id="weatherIco0"></div>
                            </div>
                            <div class="siInf"><p>влажность: <span id="vl0"></span></p>

                                <p>давление: <span id="dav0"></span></p>

                                <p>ветер: <span id="wind0"></span></p></div>
                        </div>
                    </div>
                </td>
                <!--<td style="width:33.333333333333336%;">
                    <div class="siCityV2">
                        <div id="siCont1" class="siBodyContent">
                            <div class="siLeft">
                                <div class="siTerm"></div>
                                <div class="siT" id="siT1"></div>
                                <div id="weatherIco1"></div>
                            </div>
                            <div class="siInf"><p>влажность: <span id="vl1"></span></p>

                                <p>давление: <span id="dav1"></span></p>

                                <p>ветер: <span id="wind1"></span></p></div>
                        </div>
                    </div>
                </td>
                <td style="width:33.333333333333336%;">
                    <div class="siCityV2">
                        <div id="siCont2" class="siBodyContent">
                            <div class="siLeft">
                                <div class="siTerm"></div>
                                <div class="siT" id="siT2"></div>
                                <div id="weatherIco2"></div>
                            </div>
                            <div class="siInf"><p>влажность: <span id="vl2"></span></p>

                                <p>давление: <span id="dav2"></span></p>

                                <p>ветер: <span id="wind2"></span></p></div>
                        </div>
                    </div>
                </td>-->
            </tr>
            </tbody>
        </table>
        <!--<div class="siLinks"><span><a onmousedown="siClickCount();" href="https://sinoptik.ua/погода-кременчуг"
                                      target="_blank">Погода в Кременчуге</a>&nbsp;</span><span><a
                    onmousedown="siClickCount();" href="https://sinoptik.ua/погода-мелитополь" target="_blank">Погода в
                    Мелитополе</a>&nbsp;</span></div>
    </div>-->
    <div class="siFooter">
        <div class="siLf">
            <div class="siMf"></div>
        </div>
    </div>
</div>
<script type="text/javascript" charset="UTF-8"
        src="//sinoptik.ua/informers_js.php?title=1&amp;wind=3&amp;cities=303010783,303027839,303013956&amp;lang=ru"></script>