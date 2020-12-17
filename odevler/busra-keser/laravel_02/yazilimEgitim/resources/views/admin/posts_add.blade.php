@extends('layouts.admin')
@section('title')
    Makale Ekleme
@endsection
@section('css')
@endsection
@section('content')

    <div class="l12">
        <div class="row">
            <form id="frmPost" action="{{route('admin.post.add')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="col s12">
                    <div class="card">
                        <div class="card-content">
                            <h5 class="card-title">Makale Başlığı</h5>
                            <div class="row">


                                <div class="input-field col s12">
                                    <i class="material-icons prefix">mode_edit</i>
                                    <textarea name="title" id="icon_prefix2" class="titlePost materialize-textarea"></textarea>
                                    <label for="icon_prefix2">Başlık</label>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s12">
                    <div class="card">
                        <div class="card-content">
                            <h5 class="card-title">Yeni Makale</h5>
                            <div class="row">


                                <div class="input-field col s12">
                                    <i class="material-icons prefix">mode_edit</i>
                                    <textarea name="content" id="icon_prefix2" class="titlePost materialize-textarea"></textarea>
                                    <label for="icon_prefix2">İçerik</label>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>


                <div class="col s12">
                    <div class="card">
                        <div class="card-content">
                            <h5 class="card-title">Kategori</h5>
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">local_offer</i>
                                    <select id="category" name="category_id">

                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col s12">
                    <div class="card">
                        <div class="card-content">
                            <h5 class="card-title">Etiket</h5>
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">local_offer</i>
                                    <select id="tags" name="tags_id">
                                        
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

{{--                <div class="col s12">--}}
{{--                    <div class="form-group">--}}
{{--                        <textarea name="content" id="ckeditor" cols="50" rows="15" class="ckeditor contentpost">--}}
{{--                        </textarea>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <div class="col s12 m-t-10">
                    <input class="btn btn-block blue" type="button" id="btnSave" name="btnSave" value="Kaydet">
                </div>
            </form>
        </div>
    </div>

{{--    <div class="row">--}}
{{--        <div class="col s12">--}}
{{--            <div class="card">--}}
{{--                <div class="card-content">--}}
{{--                    <h4 class="card-title">Defaulr Ck Editor</h4>--}}
{{--                    <div id="editor" style="visibility: hidden; display: none;">--}}
{{--                        <h6>Hello...This is Test Text......!</h6>--}}
{{--                    </div><div id="cke_editor" class="cke_1 cke cke_reset cke_chrome cke_editor_editor cke_ltr cke_browser_webkit" dir="ltr" lang="tr" role="application" aria-labelledby="cke_editor_arialbl" style="width: auto;">--}}
{{--                        <span id="cke_editor_arialbl" class="cke_voice_label">--}}
{{--                            Zengin Metin Editörü, editor--}}
{{--                        </span>--}}
{{--                        <div class="cke_inner cke_reset" role="presentation">--}}
{{--                            <span id="cke_1_top" class="cke_top cke_reset_all" role="presentation" style="height: auto; user-select: none;">--}}
{{--                                <span id="cke_20" class="cke_voice_label">Araç çubukları Editörü</span>--}}
{{--                                <span id="cke_1_toolbox" class="cke_toolbox" role="group" aria-labelledby="cke_20" onmousedown="return false;">--}}
{{--                                    <span id="cke_23" class="cke_toolbar" aria-labelledby="cke_23_label" role="toolbar">--}}
{{--                                        <span id="cke_23_label" class="cke_voice_label">Pano/Geri al</span>--}}
{{--                                        <span class="cke_toolbar_start"></span>--}}
{{--                                        <span class="cke_toolgroup" role="presentation">--}}
{{--                                            <a id="cke_24" class="cke_button cke_button__cut cke_button_disabled " href="javascript:void('Kes')" title="Kes (Kontrol Tuşu+X)" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_24_label" aria-describedby="cke_24_description" aria-haspopup="false" aria-disabled="true" onkeydown="return CKEDITOR.tools.callFunction(2,event);" onfocus="return CKEDITOR.tools.callFunction(3,event);" onclick="CKEDITOR.tools.callFunction(4,this);return false;">--}}
{{--                                                <span class="cke_button_icon cke_button__cut_icon" style="background-image:url({{asset('assets/backEnd/libs/ckeditor/plugins/icons.png')}});background-position:0 -312px;background-size:auto;">&nbsp;</span>--}}
{{--                                                <span id="cke_24_label" class="cke_button_label cke_button__cut_label" aria-hidden="false">Kes</span>--}}
{{--                                                <span id="cke_24_description" class="cke_button_label" aria-hidden="false">Klavye Kısayolu Kontrol Tuşu+X</span>--}}
{{--                                            </a>--}}
{{--                                            <a id="cke_25" class="cke_button cke_button__copy cke_button_disabled " href="javascript:void('Kopyala')" title="Kopyala (Kontrol Tuşu+C)" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_25_label" aria-describedby="cke_25_description" aria-haspopup="false" aria-disabled="true" onkeydown="return CKEDITOR.tools.callFunction(5,event);" onfocus="return CKEDITOR.tools.callFunction(6,event);" onclick="CKEDITOR.tools.callFunction(7,this);return false;">--}}
{{--                                                <span class="cke_button_icon cke_button__copy_icon" style="background-image:url({{ asset('assets/backEnd/libs/ckeditor/plugins/icons.png') }});background-position:0 -264px;background-size:auto;">&nbsp;</span>--}}
{{--                                                <span id="cke_25_label" class="cke_button_label cke_button__copy_label" aria-hidden="false">Kopyala</span>--}}
{{--                                                <span id="cke_25_description" class="cke_button_label" aria-hidden="false">Klavye Kısayolu Kontrol Tuşu+C</span>--}}
{{--                                            </a>--}}
{{--                                            <a id="cke_26" class="cke_button cke_button__paste cke_button_off" href="javascript:void('Yapıştır')" title="Yapıştır (Kontrol Tuşu+V)" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_26_label" aria-describedby="cke_26_description" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(8,event);" onfocus="return CKEDITOR.tools.callFunction(9,event);" onclick="CKEDITOR.tools.callFunction(10,this);return false;">--}}
{{--                                                <span class="cke_button_icon cke_button__paste_icon" style="background-image:url({{ asset('assets/backEnd/libs/ckeditor/plugins/icons.png') }});background-position:0 -360px;background-size:auto;">&nbsp;</span>--}}
{{--                                                <span id="cke_26_label" class="cke_button_label cke_button__paste_label" aria-hidden="false">Yapıştır</span>--}}
{{--                                                <span id="cke_26_description" class="cke_button_label" aria-hidden="false">Klavye Kısayolu Kontrol Tuşu+V</span>--}}
{{--                                            </a>--}}
{{--                                            <a id="cke_27" class="cke_button cke_button__pastetext cke_button_off" href="javascript:void('Düz Metin Olarak Yapıştır')" title="Düz Metin Olarak Yapıştır (Kontrol Tuşu+Üst Karater Tuşu+V)" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_27_label" aria-describedby="cke_27_description" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(11,event);" onfocus="return CKEDITOR.tools.callFunction(12,event);" onclick="CKEDITOR.tools.callFunction(13,this);return false;">--}}
{{--                                                <span class="cke_button_icon cke_button__pastetext_icon" style="background-image:url({{ asset('assets/backEnd/libs/ckeditor/plugins/icons.png') }});background-position:0 -1848px;background-size:auto;">&nbsp;</span>--}}
{{--                                                <span id="cke_27_label" class="cke_button_label cke_button__pastetext_label" aria-hidden="false">Düz Metin Olarak Yapıştır</span>--}}
{{--                                                <span id="cke_27_description" class="cke_button_label" aria-hidden="false">Klavye Kısayolu Kontrol Tuşu+Üst Karater Tuşu+V</span>--}}
{{--                                            </a>--}}
{{--                                            <a id="cke_28" class="cke_button cke_button__pastefromword cke_button_off" href="javascript:void('Wordden Yapıştır')" title="Word'den Yapıştır" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_28_label" aria-describedby="cke_28_description" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(14,event);" onfocus="return CKEDITOR.tools.callFunction(15,event);" onclick="CKEDITOR.tools.callFunction(16,this);return false;">--}}
{{--                                                <span class="cke_button_icon cke_button__pastefromword_icon" style="background-image:url({{ asset('assets/backEnd/libs/ckeditor/plugins/icons.png') }});background-position:0 -1800px;background-size:auto;">&nbsp;</span>--}}
{{--                                                <span id="cke_28_label" class="cke_button_label cke_button__pastefromword_label" aria-hidden="false">Word'den Yapıştır</span>--}}
{{--                                                <span id="cke_28_description" class="cke_button_label" aria-hidden="false"></span>--}}
{{--                                            </a><span class="cke_toolbar_separator" role="separator"></span><a id="cke_29" class="cke_button cke_button__undo cke_button_disabled " href="javascript:void('Geri Al')" title="Geri Al (Kontrol Tuşu+Z)" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_29_label" aria-describedby="cke_29_description" aria-haspopup="false" aria-disabled="true" onkeydown="return CKEDITOR.tools.callFunction(17,event);" onfocus="return CKEDITOR.tools.callFunction(18,event);" onclick="CKEDITOR.tools.callFunction(19,this);return false;">--}}
{{--                                                <span class="cke_button_icon cke_button__undo_icon" style="background-image:url({{ asset('assets/backEnd/libs/ckeditor/plugins/icons.png') }});background-position:0 -2424px;background-size:auto;">&nbsp;</span>--}}
{{--                                                <span id="cke_29_label" class="cke_button_label cke_button__undo_label" aria-hidden="false">Geri Al</span>--}}
{{--                                                <span id="cke_29_description" class="cke_button_label" aria-hidden="false">Klavye Kısayolu Kontrol Tuşu+Z</span>--}}
{{--                                            </a>--}}
{{--                                            <a id="cke_30" class="cke_button cke_button__redo cke_button_disabled " href="javascript:void('Tekrarla')" title="Tekrarla (Kontrol Tuşu+Y)" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_30_label" aria-describedby="cke_30_description" aria-haspopup="false" aria-disabled="true" onkeydown="return CKEDITOR.tools.callFunction(20,event);" onfocus="return CKEDITOR.tools.callFunction(21,event);" onclick="CKEDITOR.tools.callFunction(22,this);return false;"><span class="cke_button_icon cke_button__redo_icon" style="background-image:url({{ asset('assets/backEnd/libs/ckeditor/plugins/icons.png') }});background-position:0 -2376px;background-size:auto;">&nbsp;</span>--}}
{{--                                                <span id="cke_30_label" class="cke_button_label cke_button__redo_label" aria-hidden="false">Tekrarla</span>--}}
{{--                                                <span id="cke_30_description" class="cke_button_label" aria-hidden="false">Klavye Kısayolu Kontrol Tuşu+Y</span>--}}
{{--                                            </a>--}}
{{--                                        </span>--}}
{{--                                        <span class="cke_toolbar_end"></span>--}}
{{--                                    </span>--}}
{{--                                    <span id="cke_31" class="cke_toolbar" aria-labelledby="cke_31_label" role="toolbar"><span id="cke_31_label" class="cke_voice_label">Düzenleme</span>--}}
{{--                                        <span class="cke_toolbar_start"></span>--}}
{{--                                        <span class="cke_toolgroup" role="presentation"><a id="cke_32" class="cke_button cke_button__scayt cke_button_off" href="javascript:void('Yazımı Denetle')" title="Yazımı Denetle" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_32_label" aria-describedby="cke_32_description" aria-haspopup="true" onkeydown="return CKEDITOR.tools.callFunction(23,event);" onfocus="return CKEDITOR.tools.callFunction(24,event);" onclick="CKEDITOR.tools.callFunction(25,this);return false;">--}}
{{--                                                <span class="cke_button_icon cke_button__scayt_icon" style="background-image:url({{ asset('assets/backEnd/libs/ckeditor/plugins/icons.png') }});background-position:0 -2016px;background-size:auto;">&nbsp;</span>--}}
{{--                                                <span id="cke_32_label" class="cke_button_label cke_button__scayt_label" aria-hidden="false">Girmiş olduğunuz kelime denetimi</span>--}}
{{--                                                <span id="cke_32_description" class="cke_button_label" aria-hidden="false"></span>--}}
{{--                                                <span class="cke_button_arrow"></span>--}}
{{--                                            </a>--}}
{{--                                        </span>--}}
{{--                                        <span class="cke_toolbar_end"></span>--}}
{{--                                    </span>--}}
{{--                                    <span id="cke_33" class="cke_toolbar" aria-labelledby="cke_33_label" role="toolbar">--}}
{{--                                        <span id="cke_33_label" class="cke_voice_label">Bağlantılar</span>--}}
{{--                                        <span class="cke_toolbar_start"></span>--}}
{{--                                        <span class="cke_toolgroup" role="presentation"><a id="cke_34" class="cke_button cke_button__link cke_button_off" href="javascript:void('Link Ekle/Düzenle')" title="Link Ekle/Düzenle (Kontrol Tuşu+L)" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_34_label" aria-describedby="cke_34_description" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(26,event);" onfocus="return CKEDITOR.tools.callFunction(27,event);" onclick="CKEDITOR.tools.callFunction(28,this);return false;">--}}
{{--                                                <span class="cke_button_icon cke_button__link_icon" style="background-image:url({{ asset('assets/backEnd/libs/ckeditor/plugins/icons.png') }});background-position:0 -1488px;background-size:auto;">&nbsp;</span>--}}
{{--                                                <span id="cke_34_label" class="cke_button_label cke_button__link_label" aria-hidden="false">Link Ekle/Düzenle</span>--}}
{{--                                                <span id="cke_34_description" class="cke_button_label" aria-hidden="false">Klavye Kısayolu Kontrol Tuşu+L</span>--}}
{{--                                            </a>--}}
{{--                                            <a id="cke_35" class="cke_button cke_button__unlink cke_button_disabled " href="javascript:void('Köprü Kaldır')" title="Köprü Kaldır" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_35_label" aria-describedby="cke_35_description" aria-haspopup="false" aria-disabled="true" onkeydown="return CKEDITOR.tools.callFunction(29,event);" onfocus="return CKEDITOR.tools.callFunction(30,event);" onclick="CKEDITOR.tools.callFunction(31,this);return false;">--}}
{{--                                                <span class="cke_button_icon cke_button__unlink_icon" style="background-image:url({{ asset('assets/backEnd/libs/ckeditor/plugins/icons.png') }});background-position:0 -1512px;background-size:auto;">&nbsp;</span>--}}
{{--                                                <span id="cke_35_label" class="cke_button_label cke_button__unlink_label" aria-hidden="false">Köprü Kaldır</span>--}}
{{--                                                <span id="cke_35_description" class="cke_button_label" aria-hidden="false"></span>--}}
{{--                                            </a>--}}
{{--                                            <a id="cke_36" class="cke_button cke_button__anchor cke_button_off" href="javascript:void('Bağlantı Ekle/Düzenle')" title="Bağlantı Ekle/Düzenle" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_36_label" aria-describedby="cke_36_description" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(32,event);" onfocus="return CKEDITOR.tools.callFunction(33,event);" onclick="CKEDITOR.tools.callFunction(34,this);return false;">--}}
{{--                                                <span class="cke_button_icon cke_button__anchor_icon" style="background-image:url({{ asset('assets/backEnd/libs/ckeditor/plugins/icons.png') }});background-position:0 -1464px;background-size:auto;">&nbsp;</span>--}}
{{--                                                <span id="cke_36_label" class="cke_button_label cke_button__anchor_label" aria-hidden="false">Bağlantı Ekle/Düzenle</span>--}}
{{--                                                <span id="cke_36_description" class="cke_button_label" aria-hidden="false"></span>--}}
{{--                                            </a>--}}
{{--                                        </span>--}}
{{--                                        <span class="cke_toolbar_end"></span>--}}
{{--                                    </span>--}}
{{--                                    <span id="cke_37" class="cke_toolbar" aria-labelledby="cke_37_label" role="toolbar">--}}
{{--                                        <span id="cke_37_label" class="cke_voice_label">Ekle</span>--}}
{{--                                        <span class="cke_toolbar_start"></span>--}}
{{--                                        <span class="cke_toolgroup" role="presentation">--}}
{{--                                            <a id="cke_38" class="cke_button cke_button__image cke_button_off" href="javascript:void('Resim')" title="Resim" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_38_label" aria-describedby="cke_38_description" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(35,event);" onfocus="return CKEDITOR.tools.callFunction(36,event);" onclick="CKEDITOR.tools.callFunction(37,this);return false;">--}}
{{--                                                <span class="cke_button_icon cke_button__image_icon" style="background-image:url({{ asset('assets/backEnd/libs/ckeditor/plugins/icons.png') }});background-position:0 -1200px;background-size:auto;">&nbsp;</span><span id="cke_38_label" class="cke_button_label cke_button__image_label" aria-hidden="false">Resim</span><span id="cke_38_description" class="cke_button_label" aria-hidden="false"></span>--}}
{{--                                            </a>--}}
{{--                                            <a id="cke_39" class="cke_button cke_button__table cke_button_off" href="javascript:void('Tablo')" title="Tablo" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_39_label" aria-describedby="cke_39_description" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(38,event);" onfocus="return CKEDITOR.tools.callFunction(39,event);" onclick="CKEDITOR.tools.callFunction(40,this);return false;">--}}
{{--                                                <span class="cke_button_icon cke_button__table_icon" style="background-image:url({{ asset('assets/backEnd/libs/ckeditor/plugins/icons.png') }});background-position:0 -2256px;background-size:auto;">&nbsp;</span>--}}
{{--                                                <span id="cke_39_label" class="cke_button_label cke_button__table_label" aria-hidden="false">Tablo</span>--}}
{{--                                                <span id="cke_39_description" class="cke_button_label" aria-hidden="false"></span>--}}
{{--                                            </a>--}}
{{--                                            <a id="cke_40" class="cke_button cke_button__horizontalrule cke_button_off" href="javascript:void('Yatay Satır Ekle')" title="Yatay Satır Ekle" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_40_label" aria-describedby="cke_40_description" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(41,event);" onfocus="return CKEDITOR.tools.callFunction(42,event);" onclick="CKEDITOR.tools.callFunction(43,this);return false;">--}}
{{--                                                <span class="cke_button_icon cke_button__horizontalrule_icon" style="background-image:url({{ asset('assets/backEnd/libs/ckeditor/plugins/icons.png') }});background-position:0 -1152px;background-size:auto;">&nbsp;</span>--}}
{{--                                                <span id="cke_40_label" class="cke_button_label cke_button__horizontalrule_label" aria-hidden="false">Yatay Satır Ekle</span>--}}
{{--                                                <span id="cke_40_description" class="cke_button_label" aria-hidden="false"></span>--}}
{{--                                            </a>--}}
{{--                                            <a id="cke_41" class="cke_button cke_button__specialchar cke_button_off" href="javascript:void('Özel Karakter Ekle')" title="Özel Karakter Ekle" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_41_label" aria-describedby="cke_41_description" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(44,event);" onfocus="return CKEDITOR.tools.callFunction(45,event);" onclick="CKEDITOR.tools.callFunction(46,this);return false;">--}}
{{--                                                <span class="cke_button_icon cke_button__specialchar_icon" style="background-image:url({{ asset('assets/backEnd/libs/ckeditor/plugins/icons.png') }});background-position:0 -2232px;background-size:auto;">&nbsp;</span>--}}
{{--                                                <span id="cke_41_label" class="cke_button_label cke_button__specialchar_label" aria-hidden="false">Özel Karakter Ekle</span>--}}
{{--                                                <span id="cke_41_description" class="cke_button_label" aria-hidden="false"></span>--}}
{{--                                            </a>--}}
{{--                                        </span>--}}
{{--                                        <span class="cke_toolbar_end"></span>--}}
{{--                                    </span>--}}
{{--                                    <span id="cke_42" class="cke_toolbar" aria-labelledby="cke_42_label" role="toolbar">--}}
{{--                                        <span id="cke_42_label" class="cke_voice_label">Araçlar</span>--}}
{{--                                        <span class="cke_toolbar_start"></span>--}}
{{--                                        <span class="cke_toolgroup" role="presentation"><a id="cke_43" class="cke_button cke_button__maximize cke_button_off" href="javascript:void('Büyült')" title="Büyült" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_43_label" aria-describedby="cke_43_description" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(47,event);" onfocus="return CKEDITOR.tools.callFunction(48,event);" onclick="CKEDITOR.tools.callFunction(49,this);return false;">--}}
{{--                                                <span class="cke_button_icon cke_button__maximize_icon" style="background-image:url({{ asset('assets/backEnd/libs/ckeditor/plugins/icons.png') }});background-position:0 -1656px;background-size:auto;">&nbsp;</span>--}}
{{--                                                <span id="cke_43_label" class="cke_button_label cke_button__maximize_label" aria-hidden="false">Büyült</span>--}}
{{--                                                <span id="cke_43_description" class="cke_button_label" aria-hidden="false"></span>--}}
{{--                                            </a>--}}
{{--                                        </span>--}}
{{--                                        <span class="cke_toolbar_end"></span>--}}
{{--                                    </span>--}}
{{--                                    <span id="cke_44" class="cke_toolbar" aria-labelledby="cke_44_label" role="toolbar"><span id="cke_44_label" class="cke_voice_label">Belge</span>--}}
{{--                                        <span class="cke_toolbar_start"></span>--}}
{{--                                        <span class="cke_toolgroup" role="presentation">--}}
{{--                                            <a id="cke_45" class="cke_button cke_button__source cke_button_off" href="javascript:void('Kaynak')" title="Kaynak" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_45_label" aria-describedby="cke_45_description" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(50,event);" onfocus="return CKEDITOR.tools.callFunction(51,event);" onclick="CKEDITOR.tools.callFunction(52,this);return false;">--}}
{{--                                                <span class="cke_button_icon cke_button__source_icon" style="background-image:url({{ asset('assets/backEnd/libs/ckeditor/plugins/icons.png') }});background-position:0 -2160px;background-size:auto;">&nbsp;</span>--}}
{{--                                                <span id="cke_45_label" class="cke_button_label cke_button__source_label" aria-hidden="false">Kaynak</span>--}}
{{--                                                <span id="cke_45_description" class="cke_button_label" aria-hidden="false"></span>--}}
{{--                                            </a>--}}
{{--                                        </span>--}}
{{--                                        <span class="cke_toolbar_end"></span>--}}
{{--                                    </span>--}}
{{--                                    <span class="cke_toolbar_break"></span>--}}
{{--                                    <span id="cke_46" class="cke_toolbar" aria-labelledby="cke_46_label" role="toolbar"><span id="cke_46_label" class="cke_voice_label">Temel Stiller</span>--}}
{{--                                        <span class="cke_toolbar_start"></span>--}}
{{--                                        <span class="cke_toolgroup" role="presentation">--}}
{{--                                            <a id="cke_47" class="cke_button cke_button__bold cke_button_off" href="javascript:void('Kalın')" title="Kalın (Kontrol Tuşu+B)" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_47_label" aria-describedby="cke_47_description" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(53,event);" onfocus="return CKEDITOR.tools.callFunction(54,event);" onclick="CKEDITOR.tools.callFunction(55,this);return false;">--}}
{{--                                                <span class="cke_button_icon cke_button__bold_icon" style="background-image:url({{ asset('assets/backEnd/libs/ckeditor/plugins/icons.png') }});background-position:0 -24px;background-size:auto;">&nbsp;</span>--}}
{{--                                                <span id="cke_47_label" class="cke_button_label cke_button__bold_label" aria-hidden="false">Kalın</span>--}}
{{--                                                <span id="cke_47_description" class="cke_button_label" aria-hidden="false">Klavye Kısayolu Kontrol Tuşu+B</span>--}}
{{--                                            </a>--}}
{{--                                            <a id="cke_48" class="cke_button cke_button__italic cke_button_off" href="javascript:void('İtalik')" title="İtalik (Kontrol Tuşu+I)" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_48_label" aria-describedby="cke_48_description" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(56,event);" onfocus="return CKEDITOR.tools.callFunction(57,event);" onclick="CKEDITOR.tools.callFunction(58,this);return false;">--}}
{{--                                                <span class="cke_button_icon cke_button__italic_icon" style="background-image:url({{ asset('assets/backEnd/libs/ckeditor/plugins/icons.png') }});background-position:0 -48px;background-size:auto;">&nbsp;</span>--}}
{{--                                                <span id="cke_48_label" class="cke_button_label cke_button__italic_label" aria-hidden="false">İtalik</span>--}}
{{--                                                <span id="cke_48_description" class="cke_button_label" aria-hidden="false">Klavye Kısayolu Kontrol Tuşu+I</span>--}}
{{--                                            </a>--}}
{{--                                            <a id="cke_49" class="cke_button cke_button__strike cke_button_off" href="javascript:void('Üstü Çizgili')" title="Üstü Çizgili" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_49_label" aria-describedby="cke_49_description" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(59,event);" onfocus="return CKEDITOR.tools.callFunction(60,event);" onclick="CKEDITOR.tools.callFunction(61,this);return false;">--}}
{{--                                                <span class="cke_button_icon cke_button__strike_icon" style="background-image:url({{ asset('assets/backEnd/libs/ckeditor/plugins/icons.png') }});background-position:0 -72px;background-size:auto;">&nbsp;</span>--}}
{{--                                                <span id="cke_49_label" class="cke_button_label cke_button__strike_label" aria-hidden="false">Üstü Çizgili</span>--}}
{{--                                                <span id="cke_49_description" class="cke_button_label" aria-hidden="false"></span>--}}
{{--                                            </a>--}}
{{--                                            <span class="cke_toolbar_separator" role="separator"></span>--}}
{{--                                            <a id="cke_50" class="cke_button cke_button__removeformat cke_button_off" href="javascript:void('Biçimi Kaldır')" title="Biçimi Kaldır" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_50_label" aria-describedby="cke_50_description" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(62,event);" onfocus="return CKEDITOR.tools.callFunction(63,event);" onclick="CKEDITOR.tools.callFunction(64,this);return false;">--}}
{{--                                                <span class="cke_button_icon cke_button__removeformat_icon" style="background-image:url({{ asset('assets/backEnd/libs/ckeditor/plugins/icons.png') }});background-position:0 -1968px;background-size:auto;">&nbsp;</span>--}}
{{--                                                <span id="cke_50_label" class="cke_button_label cke_button__removeformat_label" aria-hidden="false">Biçimi Kaldır</span>--}}
{{--                                                <span id="cke_50_description" class="cke_button_label" aria-hidden="false"></span>--}}
{{--                                            </a>--}}
{{--                                        </span>--}}
{{--                                        <span class="cke_toolbar_end"></span>--}}
{{--                                    </span>--}}
{{--                                    <span id="cke_51" class="cke_toolbar" aria-labelledby="cke_51_label" role="toolbar">--}}
{{--                                        <span id="cke_51_label" class="cke_voice_label">Paragraf</span>--}}
{{--                                        <span class="cke_toolbar_start"></span>--}}
{{--                                        <span class="cke_toolgroup" role="presentation"><a id="cke_52" class="cke_button cke_button__numberedlist cke_button_off" href="javascript:void('Numaralı Liste')" title="Numaralı Liste" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_52_label" aria-describedby="cke_52_description" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(65,event);" onfocus="return CKEDITOR.tools.callFunction(66,event);" onclick="CKEDITOR.tools.callFunction(67,this);return false;">--}}
{{--                                                <span class="cke_button_icon cke_button__numberedlist_icon" style="background-image:url({{ asset('assets/backEnd/libs/ckeditor/plugins/icons.png') }});background-position:0 -1608px;background-size:auto;">&nbsp;</span>--}}
{{--                                                <span id="cke_52_label" class="cke_button_label cke_button__numberedlist_label" aria-hidden="false">Numaralı Liste</span>--}}
{{--                                                <span id="cke_52_description" class="cke_button_label" aria-hidden="false"></span>--}}
{{--                                            </a>--}}
{{--                                            <a id="cke_53" class="cke_button cke_button__bulletedlist cke_button_off" href="javascript:void('Simgeli Liste')" title="Simgeli Liste" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_53_label" aria-describedby="cke_53_description" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(68,event);" onfocus="return CKEDITOR.tools.callFunction(69,event);" onclick="CKEDITOR.tools.callFunction(70,this);return false;">--}}
{{--                                                <span class="cke_button_icon cke_button__bulletedlist_icon" style="background-image:url({{ asset('assets/backEnd/libs/ckeditor/plugins/icons.png') }});background-position:0 -1560px;background-size:auto;">&nbsp;</span>--}}
{{--                                                <span id="cke_53_label" class="cke_button_label cke_button__bulletedlist_label" aria-hidden="false">Simgeli Liste</span>--}}
{{--                                                <span id="cke_53_description" class="cke_button_label" aria-hidden="false"></span>--}}
{{--                                            </a>--}}
{{--                                            <span class="cke_toolbar_separator" role="separator"></span>--}}
{{--                                            <a id="cke_54" class="cke_button cke_button__outdent cke_button_disabled " href="javascript:void('Sekme Azalt')" title="Sekme Azalt" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_54_label" aria-describedby="cke_54_description" aria-haspopup="false" aria-disabled="true" onkeydown="return CKEDITOR.tools.callFunction(71,event);" onfocus="return CKEDITOR.tools.callFunction(72,event);" onclick="CKEDITOR.tools.callFunction(73,this);return false;">--}}
{{--                                                <span class="cke_button_icon cke_button__outdent_icon" style="background-image:url({{ asset('assets/backEnd/libs/ckeditor/plugins/icons.png') }});background-position:0 -1296px;background-size:auto;">&nbsp;</span>--}}
{{--                                                <span id="cke_54_label" class="cke_button_label cke_button__outdent_label" aria-hidden="false">Sekme Azalt</span>--}}
{{--                                                <span id="cke_54_description" class="cke_button_label" aria-hidden="false"></span>--}}
{{--                                            </a>--}}
{{--                                            <a id="cke_55" class="cke_button cke_button__indent cke_button_off" href="javascript:void('Sekme Arttır')" title="Sekme Arttır" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_55_label" aria-describedby="cke_55_description" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(74,event);" onfocus="return CKEDITOR.tools.callFunction(75,event);" onclick="CKEDITOR.tools.callFunction(76,this);return false;">--}}
{{--                                                <span class="cke_button_icon cke_button__indent_icon" style="background-image:url({{ asset('assets/backEnd/libs/ckeditor/plugins/icons.png') }});background-position:0 -1248px;background-size:auto;">&nbsp;</span>--}}
{{--                                                <span id="cke_55_label" class="cke_button_label cke_button__indent_label" aria-hidden="false">Sekme Arttır</span>--}}
{{--                                                <span id="cke_55_description" class="cke_button_label" aria-hidden="false"></span>--}}
{{--                                            </a>--}}
{{--                                            <span class="cke_toolbar_separator" role="separator"></span>--}}
{{--                                            <a id="cke_56" class="cke_button cke_button__blockquote cke_button_off" href="javascript:void('Blok Oluştur')" title="Blok Oluştur" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_56_label" aria-describedby="cke_56_description" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(77,event);" onfocus="return CKEDITOR.tools.callFunction(78,event);" onclick="CKEDITOR.tools.callFunction(79,this);return false;">--}}
{{--                                                <span class="cke_button_icon cke_button__blockquote_icon" style="background-image:url({{ asset('assets/backEnd/libs/ckeditor/plugins/icons.png') }});background-position:0 -216px;background-size:auto;">&nbsp;</span>--}}
{{--                                                <span id="cke_56_label" class="cke_button_label cke_button__blockquote_label" aria-hidden="false">Blok Oluştur</span>--}}
{{--                                                <span id="cke_56_description" class="cke_button_label" aria-hidden="false"></span>--}}
{{--                                            </a>--}}
{{--                                        </span>--}}
{{--                                        <span class="cke_toolbar_end"></span>--}}
{{--                                    </span>--}}
{{--                                    <span id="cke_57" class="cke_toolbar" aria-labelledby="cke_57_label" role="toolbar">--}}
{{--                                        <span id="cke_57_label" class="cke_voice_label">Stiller</span>--}}
{{--                                        <span class="cke_toolbar_start"></span>--}}
{{--                                        <span id="cke_21" class="cke_combo cke_combo__styles cke_combo_off" role="presentation">--}}
{{--                                            <span id="cke_21_label" class="cke_combo_label">Biçem</span>--}}
{{--                                            <a class="cke_combo_button" title="Stilleri Düzenliyor" tabindex="-1" href="javascript:void('Stilleri Düzenliyor')" hidefocus="true" role="button" aria-labelledby="cke_21_label" aria-haspopup="true" onkeydown="return CKEDITOR.tools.callFunction(81,event,this);" onfocus="return CKEDITOR.tools.callFunction(82,event);" onclick="CKEDITOR.tools.callFunction(80,this);return false;">--}}
{{--                                                <span id="cke_21_text" class="cke_combo_text cke_combo_inlinelabel">Biçem</span>--}}
{{--                                                <span class="cke_combo_open"><span class="cke_combo_arrow"></span>--}}
{{--                                                </span>--}}
{{--                                            </a>--}}
{{--                                        </span>--}}
{{--                                        <span id="cke_22" class="cke_combo cke_combo__format cke_combo_off" role="presentation">--}}
{{--                                            <span id="cke_22_label" class="cke_combo_label">Biçim</span>--}}
{{--                                            <a class="cke_combo_button" title="Biçim" tabindex="-1" href="javascript:void('Biçim')" hidefocus="true" role="button" aria-labelledby="cke_22_label" aria-haspopup="true" onkeydown="return CKEDITOR.tools.callFunction(84,event,this);" onfocus="return CKEDITOR.tools.callFunction(85,event);" onclick="CKEDITOR.tools.callFunction(83,this);return false;">--}}
{{--                                                <span id="cke_22_text" class="cke_combo_text cke_combo_inlinelabel">Biçim</span>--}}
{{--                                                <span class="cke_combo_open"><span class="cke_combo_arrow"></span>--}}
{{--                                                </span>--}}
{{--                                            </a>--}}
{{--                                        </span>--}}
{{--                                        <span class="cke_toolbar_end"></span>--}}
{{--                                    </span>--}}
{{--                                    <span id="cke_58" class="cke_toolbar cke_toolbar_last" aria-labelledby="cke_58_label" role="toolbar">--}}
{{--                                        <span id="cke_58_label" class="cke_voice_label">about</span>--}}
{{--                                        <span class="cke_toolbar_start"></span>--}}
{{--                                        <span class="cke_toolgroup" role="presentation"><a id="cke_59" class="cke_button cke_button__about cke_button_off" href="javascript:void('CKEditor Hakkında')" title="CKEditor Hakkında" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_59_label" aria-describedby="cke_59_description" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(86,event);" onfocus="return CKEDITOR.tools.callFunction(87,event);" onclick="CKEDITOR.tools.callFunction(88,this);return false;">--}}
{{--                                                <span class="cke_button_icon cke_button__about_icon" style="background-image:url({{ asset('assets/backEnd/libs/ckeditor/plugins/icons.png') }});background-position:0 0px;background-size:auto;">&nbsp;</span>--}}
{{--                                                <span id="cke_59_label" class="cke_button_label cke_button__about_label" aria-hidden="false">CKEditor Hakkında</span>--}}
{{--                                                <span id="cke_59_description" class="cke_button_label" aria-hidden="false"></span>--}}
{{--                                            </a>--}}
{{--                                        </span>--}}
{{--                                        <span class="cke_toolbar_end"></span>--}}
{{--                                    </span>--}}
{{--                                </span>--}}
{{--                            </span>--}}
{{--                            <div id="cke_1_contents" class="cke_contents cke_reset" role="presentation" style="height: 150px;">--}}
{{--                                <span id="cke_63" class="cke_voice_label">Yardım için ALT 0 tuşlarına basın</span>--}}
{{--                                <iframe src="" frameborder="0" class="cke_wysiwyg_frame cke_reset" style="width: 100%; height: 100%;" title="Zengin Metin Editörü, editor" aria-describedby="cke_63" tabindex="0" allowtransparency="true"></iframe>--}}
{{--                            </div>--}}
{{--                            <span id="cke_1_bottom" class="cke_bottom cke_reset_all" role="presentation" style="user-select: none;">--}}
{{--                                <span id="cke_1_resizer" class="cke_resizer cke_resizer_vertical cke_resizer_ltr" title="Yeniden Boyutlandır" onmousedown="CKEDITOR.tools.callFunction(1, event)">◢</span>--}}
{{--                                <span id="cke_1_path_label" class="cke_voice_label">Elementlerin yolu</span>--}}
{{--                                <span id="cke_1_path" class="cke_path" role="group" aria-labelledby="cke_1_path_label">--}}
{{--                                    <span class="cke_path_empty">&nbsp;</span>--}}
{{--                                </span>--}}
{{--                            </span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
@endsection
@section('js')

@endsection

