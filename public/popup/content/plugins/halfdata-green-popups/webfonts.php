<?php
if (!defined('UAP_CORE') && !defined('ABSPATH')) exit;
$fonts = '
{
  "kind": "webfonts#webfontList",
  "items": [
    {
      "family": "ABeeZee",
      "variants": [
        "regular",
        "italic"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v14",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/abeezee/v14/esDR31xSG-6AGleN6tKukbcHCpE.ttf",
        "italic": "http://fonts.gstatic.com/s/abeezee/v14/esDT31xSG-6AGleN2tCklZUCGpG-GQ.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Abel",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v12",
      "lastModified": "2020-09-10",
      "files": {
        "regular": "http://fonts.gstatic.com/s/abel/v12/MwQ5bhbm2POE6VhLPJp6qGI.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Abhaya Libre",
      "variants": [
        "regular",
        "500",
        "600",
        "700",
        "800"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "sinhala"
      ],
      "version": "v6",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/abhayalibre/v6/e3tmeuGtX-Co5MNzeAOqinEge0PWovdU4w.ttf",
        "500": "http://fonts.gstatic.com/s/abhayalibre/v6/e3t5euGtX-Co5MNzeAOqinEYj2ryqtxI6oYtBA.ttf",
        "600": "http://fonts.gstatic.com/s/abhayalibre/v6/e3t5euGtX-Co5MNzeAOqinEYo23yqtxI6oYtBA.ttf",
        "700": "http://fonts.gstatic.com/s/abhayalibre/v6/e3t5euGtX-Co5MNzeAOqinEYx2zyqtxI6oYtBA.ttf",
        "800": "http://fonts.gstatic.com/s/abhayalibre/v6/e3t5euGtX-Co5MNzeAOqinEY22_yqtxI6oYtBA.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Abril Fatface",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v12",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/abrilfatface/v12/zOL64pLDlL1D99S8g8PtiKchm-BsjOLhZBY.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Aclonica",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v11",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/aclonica/v11/K2FyfZJVlfNNSEBXGb7TCI6oBjLz.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Acme",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v11",
      "lastModified": "2020-10-22",
      "files": {
        "regular": "http://fonts.gstatic.com/s/acme/v11/RrQfboBx-C5_bx3Lb23lzLk.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Actor",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v10",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/actor/v10/wEOzEBbCkc5cO3ekXygtUMIO.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Adamina",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v14",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/adamina/v14/j8_r6-DH1bjoc-dwu-reETl4Bno.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Advent Pro",
      "variants": [
        "100",
        "200",
        "300",
        "regular",
        "500",
        "600",
        "700"
      ],
      "subsets": [
        "greek",
        "latin",
        "latin-ext"
      ],
      "version": "v11",
      "lastModified": "2020-09-02",
      "files": {
        "100": "http://fonts.gstatic.com/s/adventpro/v11/V8mCoQfxVT4Dvddr_yOwjVmtLZxcBtItFw.ttf",
        "200": "http://fonts.gstatic.com/s/adventpro/v11/V8mDoQfxVT4Dvddr_yOwjfWMDbZyCts0DqQ.ttf",
        "300": "http://fonts.gstatic.com/s/adventpro/v11/V8mDoQfxVT4Dvddr_yOwjZGPDbZyCts0DqQ.ttf",
        "regular": "http://fonts.gstatic.com/s/adventpro/v11/V8mAoQfxVT4Dvddr_yOwtT2nKb5ZFtI.ttf",
        "500": "http://fonts.gstatic.com/s/adventpro/v11/V8mDoQfxVT4Dvddr_yOwjcmODbZyCts0DqQ.ttf",
        "600": "http://fonts.gstatic.com/s/adventpro/v11/V8mDoQfxVT4Dvddr_yOwjeWJDbZyCts0DqQ.ttf",
        "700": "http://fonts.gstatic.com/s/adventpro/v11/V8mDoQfxVT4Dvddr_yOwjYGIDbZyCts0DqQ.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Aguafina Script",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v9",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/aguafinascript/v9/If2QXTv_ZzSxGIO30LemWEOmt1bHqs4pgicOrg.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Akronim",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v10",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/akronim/v10/fdN-9sqWtWZZlHRp-gBxkFYN-a8.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Aladin",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v9",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/aladin/v9/ZgNSjPJFPrvJV5f16Sf4pGT2Ng.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Alata",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v2",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/alata/v2/PbytFmztEwbIofe6xKcRQEOX.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Alatsi",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v2",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/alatsi/v2/TK3iWkUJAxQ2nLNGHjUHte5fKg.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Aldrich",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v11",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/aldrich/v11/MCoTzAn-1s3IGyJMZaAS3pP5H_E.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Alef",
      "variants": [
        "regular",
        "700"
      ],
      "subsets": [
        "hebrew",
        "latin"
      ],
      "version": "v12",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/alef/v12/FeVfS0NQpLYgrjJbC5FxxbU.ttf",
        "700": "http://fonts.gstatic.com/s/alef/v12/FeVQS0NQpLYglo50L5la2bxii28.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Alegreya",
      "variants": [
        "regular",
        "italic",
        "500",
        "500italic",
        "700",
        "700italic",
        "800",
        "800italic",
        "900",
        "900italic"
      ],
      "subsets": [
        "cyrillic",
        "cyrillic-ext",
        "greek",
        "greek-ext",
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v16",
      "lastModified": "2020-10-22",
      "files": {
        "regular": "http://fonts.gstatic.com/s/alegreya/v16/4UaBrEBBsBhlBjvfkRLmzanB44N1.ttf",
        "italic": "http://fonts.gstatic.com/s/alegreya/v16/4UaHrEBBsBhlBjvfkSLkx63j5pN1MwI.ttf",
        "500": "http://fonts.gstatic.com/s/alegreya/v16/4UaGrEBBsBhlBjvfkSoS5I3JyJ98KhtH.ttf",
        "500italic": "http://fonts.gstatic.com/s/alegreya/v16/4UaErEBBsBhlBjvfkSLk_1nKwpteLwtHJlc.ttf",
        "700": "http://fonts.gstatic.com/s/alegreya/v16/4UaGrEBBsBhlBjvfkSpa4o3JyJ98KhtH.ttf",
        "700italic": "http://fonts.gstatic.com/s/alegreya/v16/4UaErEBBsBhlBjvfkSLk_xHMwpteLwtHJlc.ttf",
        "800": "http://fonts.gstatic.com/s/alegreya/v16/4UaGrEBBsBhlBjvfkSpG4Y3JyJ98KhtH.ttf",
        "800italic": "http://fonts.gstatic.com/s/alegreya/v16/4UaErEBBsBhlBjvfkSLk_w3PwpteLwtHJlc.ttf",
        "900": "http://fonts.gstatic.com/s/alegreya/v16/4UaGrEBBsBhlBjvfkSpi4I3JyJ98KhtH.ttf",
        "900italic": "http://fonts.gstatic.com/s/alegreya/v16/4UaErEBBsBhlBjvfkSLk_ynOwpteLwtHJlc.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Alegreya SC",
      "variants": [
        "regular",
        "italic",
        "500",
        "500italic",
        "700",
        "700italic",
        "800",
        "800italic",
        "900",
        "900italic"
      ],
      "subsets": [
        "cyrillic",
        "cyrillic-ext",
        "greek",
        "greek-ext",
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v14",
      "lastModified": "2020-10-22",
      "files": {
        "regular": "http://fonts.gstatic.com/s/alegreyasc/v14/taiOGmRtCJ62-O0HhNEa-a6o05E5abe_.ttf",
        "italic": "http://fonts.gstatic.com/s/alegreyasc/v14/taiMGmRtCJ62-O0HhNEa-Z6q2ZUbbKe_DGs.ttf",
        "500": "http://fonts.gstatic.com/s/alegreyasc/v14/taiTGmRtCJ62-O0HhNEa-ZZc-rUxQqu2FXKD.ttf",
        "500italic": "http://fonts.gstatic.com/s/alegreyasc/v14/taiRGmRtCJ62-O0HhNEa-Z6q4WEySK-UEGKDBz4.ttf",
        "700": "http://fonts.gstatic.com/s/alegreyasc/v14/taiTGmRtCJ62-O0HhNEa-ZYU_LUxQqu2FXKD.ttf",
        "700italic": "http://fonts.gstatic.com/s/alegreyasc/v14/taiRGmRtCJ62-O0HhNEa-Z6q4Sk0SK-UEGKDBz4.ttf",
        "800": "http://fonts.gstatic.com/s/alegreyasc/v14/taiTGmRtCJ62-O0HhNEa-ZYI_7UxQqu2FXKD.ttf",
        "800italic": "http://fonts.gstatic.com/s/alegreyasc/v14/taiRGmRtCJ62-O0HhNEa-Z6q4TU3SK-UEGKDBz4.ttf",
        "900": "http://fonts.gstatic.com/s/alegreyasc/v14/taiTGmRtCJ62-O0HhNEa-ZYs_rUxQqu2FXKD.ttf",
        "900italic": "http://fonts.gstatic.com/s/alegreyasc/v14/taiRGmRtCJ62-O0HhNEa-Z6q4RE2SK-UEGKDBz4.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Alegreya Sans",
      "variants": [
        "100",
        "100italic",
        "300",
        "300italic",
        "regular",
        "italic",
        "500",
        "500italic",
        "700",
        "700italic",
        "800",
        "800italic",
        "900",
        "900italic"
      ],
      "subsets": [
        "cyrillic",
        "cyrillic-ext",
        "greek",
        "greek-ext",
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v13",
      "lastModified": "2020-10-22",
      "files": {
        "100": "http://fonts.gstatic.com/s/alegreyasans/v13/5aUt9_-1phKLFgshYDvh6Vwt5TltuGdShm5bsg.ttf",
        "100italic": "http://fonts.gstatic.com/s/alegreyasans/v13/5aUv9_-1phKLFgshYDvh6Vwt7V9V3G1WpGtLsgu7.ttf",
        "300": "http://fonts.gstatic.com/s/alegreyasans/v13/5aUu9_-1phKLFgshYDvh6Vwt5fFPmE18imdCqxI.ttf",
        "300italic": "http://fonts.gstatic.com/s/alegreyasans/v13/5aUo9_-1phKLFgshYDvh6Vwt7V9VFE92jkVHuxKiBA.ttf",
        "regular": "http://fonts.gstatic.com/s/alegreyasans/v13/5aUz9_-1phKLFgshYDvh6Vwt3V1nvEVXlm4.ttf",
        "italic": "http://fonts.gstatic.com/s/alegreyasans/v13/5aUt9_-1phKLFgshYDvh6Vwt7V9tuGdShm5bsg.ttf",
        "500": "http://fonts.gstatic.com/s/alegreyasans/v13/5aUu9_-1phKLFgshYDvh6Vwt5alOmE18imdCqxI.ttf",
        "500italic": "http://fonts.gstatic.com/s/alegreyasans/v13/5aUo9_-1phKLFgshYDvh6Vwt7V9VTE52jkVHuxKiBA.ttf",
        "700": "http://fonts.gstatic.com/s/alegreyasans/v13/5aUu9_-1phKLFgshYDvh6Vwt5eFImE18imdCqxI.ttf",
        "700italic": "http://fonts.gstatic.com/s/alegreyasans/v13/5aUo9_-1phKLFgshYDvh6Vwt7V9VBEh2jkVHuxKiBA.ttf",
        "800": "http://fonts.gstatic.com/s/alegreyasans/v13/5aUu9_-1phKLFgshYDvh6Vwt5f1LmE18imdCqxI.ttf",
        "800italic": "http://fonts.gstatic.com/s/alegreyasans/v13/5aUo9_-1phKLFgshYDvh6Vwt7V9VGEt2jkVHuxKiBA.ttf",
        "900": "http://fonts.gstatic.com/s/alegreyasans/v13/5aUu9_-1phKLFgshYDvh6Vwt5dlKmE18imdCqxI.ttf",
        "900italic": "http://fonts.gstatic.com/s/alegreyasans/v13/5aUo9_-1phKLFgshYDvh6Vwt7V9VPEp2jkVHuxKiBA.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Alegreya Sans SC",
      "variants": [
        "100",
        "100italic",
        "300",
        "300italic",
        "regular",
        "italic",
        "500",
        "500italic",
        "700",
        "700italic",
        "800",
        "800italic",
        "900",
        "900italic"
      ],
      "subsets": [
        "cyrillic",
        "cyrillic-ext",
        "greek",
        "greek-ext",
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v12",
      "lastModified": "2020-10-22",
      "files": {
        "100": "http://fonts.gstatic.com/s/alegreyasanssc/v12/mtGn4-RGJqfMvt7P8FUr0Q1j-Hf1Dipl8g5FPYtmMg.ttf",
        "100italic": "http://fonts.gstatic.com/s/alegreyasanssc/v12/mtGl4-RGJqfMvt7P8FUr0Q1j-Hf1BkxdlgRBH452Mvds.ttf",
        "300": "http://fonts.gstatic.com/s/alegreyasanssc/v12/mtGm4-RGJqfMvt7P8FUr0Q1j-Hf1DuJH0iRrMYJ_K-4.ttf",
        "300italic": "http://fonts.gstatic.com/s/alegreyasanssc/v12/mtGk4-RGJqfMvt7P8FUr0Q1j-Hf1BkxdXiZhNaB6O-51OA.ttf",
        "regular": "http://fonts.gstatic.com/s/alegreyasanssc/v12/mtGh4-RGJqfMvt7P8FUr0Q1j-Hf1Nk5v9ixALYs.ttf",
        "italic": "http://fonts.gstatic.com/s/alegreyasanssc/v12/mtGn4-RGJqfMvt7P8FUr0Q1j-Hf1Bkxl8g5FPYtmMg.ttf",
        "500": "http://fonts.gstatic.com/s/alegreyasanssc/v12/mtGm4-RGJqfMvt7P8FUr0Q1j-Hf1DrpG0iRrMYJ_K-4.ttf",
        "500italic": "http://fonts.gstatic.com/s/alegreyasanssc/v12/mtGk4-RGJqfMvt7P8FUr0Q1j-Hf1BkxdBidhNaB6O-51OA.ttf",
        "700": "http://fonts.gstatic.com/s/alegreyasanssc/v12/mtGm4-RGJqfMvt7P8FUr0Q1j-Hf1DvJA0iRrMYJ_K-4.ttf",
        "700italic": "http://fonts.gstatic.com/s/alegreyasanssc/v12/mtGk4-RGJqfMvt7P8FUr0Q1j-Hf1BkxdTiFhNaB6O-51OA.ttf",
        "800": "http://fonts.gstatic.com/s/alegreyasanssc/v12/mtGm4-RGJqfMvt7P8FUr0Q1j-Hf1Du5D0iRrMYJ_K-4.ttf",
        "800italic": "http://fonts.gstatic.com/s/alegreyasanssc/v12/mtGk4-RGJqfMvt7P8FUr0Q1j-Hf1BkxdUiJhNaB6O-51OA.ttf",
        "900": "http://fonts.gstatic.com/s/alegreyasanssc/v12/mtGm4-RGJqfMvt7P8FUr0Q1j-Hf1DspC0iRrMYJ_K-4.ttf",
        "900italic": "http://fonts.gstatic.com/s/alegreyasanssc/v12/mtGk4-RGJqfMvt7P8FUr0Q1j-Hf1BkxddiNhNaB6O-51OA.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Aleo",
      "variants": [
        "300",
        "300italic",
        "regular",
        "italic",
        "700",
        "700italic"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v4",
      "lastModified": "2020-09-02",
      "files": {
        "300": "http://fonts.gstatic.com/s/aleo/v4/c4mg1nF8G8_syKbr9DVDno985KM.ttf",
        "300italic": "http://fonts.gstatic.com/s/aleo/v4/c4mi1nF8G8_swAjxeDdJmq159KOnWA.ttf",
        "regular": "http://fonts.gstatic.com/s/aleo/v4/c4mv1nF8G8_s8ArD0D1ogoY.ttf",
        "italic": "http://fonts.gstatic.com/s/aleo/v4/c4mh1nF8G8_swAjJ1B9tkoZl_Q.ttf",
        "700": "http://fonts.gstatic.com/s/aleo/v4/c4mg1nF8G8_syLbs9DVDno985KM.ttf",
        "700italic": "http://fonts.gstatic.com/s/aleo/v4/c4mi1nF8G8_swAjxaDBJmq159KOnWA.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Alex Brush",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v12",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/alexbrush/v12/SZc83FzrJKuqFbwMKk6EtUL57DtOmCc.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Alfa Slab One",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v10",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/alfaslabone/v10/6NUQ8FmMKwSEKjnm5-4v-4Jh6dVretWvYmE.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Alice",
      "variants": [
        "regular"
      ],
      "subsets": [
        "cyrillic",
        "cyrillic-ext",
        "latin"
      ],
      "version": "v12",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/alice/v12/OpNCnoEEmtHa6FcJpA_chzJ0.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Alike",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v13",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/alike/v13/HI_EiYEYI6BIoEjBSZXAQ4-d.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Alike Angular",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v11",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/alikeangular/v11/3qTrojWunjGQtEBlIcwMbSoI3kM6bB7FKjE.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Allan",
      "variants": [
        "regular",
        "700"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v13",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/allan/v13/ea8XadU7WuTxEtb2P9SF8nZE.ttf",
        "700": "http://fonts.gstatic.com/s/allan/v13/ea8aadU7WuTxEu5KEPCN2WpNgEKU.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Allerta",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v11",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/allerta/v11/TwMO-IAHRlkbx940UnEdSQqO5uY.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Allerta Stencil",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v11",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/allertastencil/v11/HTx0L209KT-LmIE9N7OR6eiycOeF-zz313DuvQ.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Allura",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v9",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/allura/v9/9oRPNYsQpS4zjuAPjAIXPtrrGA.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Almarai",
      "variants": [
        "300",
        "regular",
        "700",
        "800"
      ],
      "subsets": [
        "arabic"
      ],
      "version": "v4",
      "lastModified": "2020-09-25",
      "files": {
        "300": "http://fonts.gstatic.com/s/almarai/v4/tssoApxBaigK_hnnS_anhnicoq72sXg.ttf",
        "regular": "http://fonts.gstatic.com/s/almarai/v4/tsstApxBaigK_hnnc1qPonC3vqc.ttf",
        "700": "http://fonts.gstatic.com/s/almarai/v4/tssoApxBaigK_hnnS-aghnicoq72sXg.ttf",
        "800": "http://fonts.gstatic.com/s/almarai/v4/tssoApxBaigK_hnnS_qjhnicoq72sXg.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Almendra",
      "variants": [
        "regular",
        "italic",
        "700",
        "700italic"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v13",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/almendra/v13/H4ckBXKAlMnTn0CskyY6wr-wg763.ttf",
        "italic": "http://fonts.gstatic.com/s/almendra/v13/H4ciBXKAlMnTn0CskxY4yLuShq63czE.ttf",
        "700": "http://fonts.gstatic.com/s/almendra/v13/H4cjBXKAlMnTn0Cskx6G7Zu4qKK-aihq.ttf",
        "700italic": "http://fonts.gstatic.com/s/almendra/v13/H4chBXKAlMnTn0CskxY48Ae9oqacbzhqDtg.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Almendra Display",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v11",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/almendradisplay/v11/0FlPVOGWl1Sb4O3tETtADHRRlZhzXS_eTyer338.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Almendra SC",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v11",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/almendrasc/v11/Iure6Yx284eebowr7hbyTZZJprVA4XQ0.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Amarante",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v8",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/amarante/v8/xMQXuF1KTa6EvGx9bq-3C3rAmD-b.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Amaranth",
      "variants": [
        "regular",
        "italic",
        "700",
        "700italic"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v11",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/amaranth/v11/KtkuALODe433f0j1zPnCF9GqwnzW.ttf",
        "italic": "http://fonts.gstatic.com/s/amaranth/v11/KtkoALODe433f0j1zMnAHdWIx2zWD4I.ttf",
        "700": "http://fonts.gstatic.com/s/amaranth/v11/KtkpALODe433f0j1zMF-OPWi6WDfFpuc.ttf",
        "700italic": "http://fonts.gstatic.com/s/amaranth/v11/KtkrALODe433f0j1zMnAJWmn42T9E4ucRY8.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Amatic SC",
      "variants": [
        "regular",
        "700"
      ],
      "subsets": [
        "cyrillic",
        "hebrew",
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v15",
      "lastModified": "2020-09-25",
      "files": {
        "regular": "http://fonts.gstatic.com/s/amaticsc/v15/TUZyzwprpvBS1izr_vO0De6ecZQf1A.ttf",
        "700": "http://fonts.gstatic.com/s/amaticsc/v15/TUZ3zwprpvBS1izr_vOMscG6eb8D3WTy-A.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Amethysta",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v9",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/amethysta/v9/rP2Fp2K15kgb_F3ibfWIGDWCBl0O8Q.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Amiko",
      "variants": [
        "regular",
        "600",
        "700"
      ],
      "subsets": [
        "devanagari",
        "latin",
        "latin-ext"
      ],
      "version": "v5",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/amiko/v5/WwkQxPq1DFK04tqlc17MMZgJ.ttf",
        "600": "http://fonts.gstatic.com/s/amiko/v5/WwkdxPq1DFK04uJ9XXrEGoQAUco5.ttf",
        "700": "http://fonts.gstatic.com/s/amiko/v5/WwkdxPq1DFK04uIZXHrEGoQAUco5.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Amiri",
      "variants": [
        "regular",
        "italic",
        "700",
        "700italic"
      ],
      "subsets": [
        "arabic",
        "latin",
        "latin-ext"
      ],
      "version": "v16",
      "lastModified": "2020-09-25",
      "files": {
        "regular": "http://fonts.gstatic.com/s/amiri/v16/J7aRnpd8CGxBHqUpvrIw74NL.ttf",
        "italic": "http://fonts.gstatic.com/s/amiri/v16/J7afnpd8CGxBHpUrtLYS6pNLAjk.ttf",
        "700": "http://fonts.gstatic.com/s/amiri/v16/J7acnpd8CGxBHp2VkZY4xJ9CGyAa.ttf",
        "700italic": "http://fonts.gstatic.com/s/amiri/v16/J7aanpd8CGxBHpUrjAo9zptgHjAavCA.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Amita",
      "variants": [
        "regular",
        "700"
      ],
      "subsets": [
        "devanagari",
        "latin",
        "latin-ext"
      ],
      "version": "v7",
      "lastModified": "2020-09-25",
      "files": {
        "regular": "http://fonts.gstatic.com/s/amita/v7/HhyaU5si9Om7PQlvAfSKEZZL.ttf",
        "700": "http://fonts.gstatic.com/s/amita/v7/HhyXU5si9Om7PTHTLtCCOopCTKkI.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Anaheim",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v8",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/anaheim/v8/8vII7w042Wp87g4G0UTUEE5eK_w.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Andada",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v12",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/andada/v12/uK_y4riWaego3w9RCh0TMv6EXw.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Andika",
      "variants": [
        "regular"
      ],
      "subsets": [
        "cyrillic",
        "cyrillic-ext",
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v12",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/andika/v12/mem_Ya6iyW-LwqgAbbwRWrwGVA.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Andika New Basic",
      "variants": [
        "regular",
        "italic",
        "700",
        "700italic"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v2",
      "lastModified": "2021-02-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/andikanewbasic/v2/taiRGn9tCp-44eleq5Q-mszJivxSSK-UEGKDBz4.ttf",
        "italic": "http://fonts.gstatic.com/s/andikanewbasic/v2/taiXGn9tCp-44eleq5Q-mszJivxSeK2eFECGFz5VCg.ttf",
        "700": "http://fonts.gstatic.com/s/andikanewbasic/v2/taiWGn9tCp-44eleq5Q-mszJivxScBO7NGqoGzdME84.ttf",
        "700italic": "http://fonts.gstatic.com/s/andikanewbasic/v2/taiUGn9tCp-44eleq5Q-mszJivxSeK2mqG-iHxVJA85Okw.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Angkor",
      "variants": [
        "regular"
      ],
      "subsets": [
        "khmer"
      ],
      "version": "v13",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/angkor/v13/H4cmBXyAlsPdnlb-8iw-4Lqggw.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Annie Use Your Telescope",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v11",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/annieuseyourtelescope/v11/daaLSS4tI2qYYl3Jq9s_Hu74xwktnlKxH6osGVGjlDfB3UUVZA.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Anonymous Pro",
      "variants": [
        "regular",
        "italic",
        "700",
        "700italic"
      ],
      "subsets": [
        "cyrillic",
        "greek",
        "latin",
        "latin-ext"
      ],
      "version": "v14",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/anonymouspro/v14/rP2Bp2a15UIB7Un-bOeISG3pLlw89CH98Ko.ttf",
        "italic": "http://fonts.gstatic.com/s/anonymouspro/v14/rP2fp2a15UIB7Un-bOeISG3pHl428AP44Kqr2Q.ttf",
        "700": "http://fonts.gstatic.com/s/anonymouspro/v14/rP2cp2a15UIB7Un-bOeISG3pFuAT0CnW7KOywKo.ttf",
        "700italic": "http://fonts.gstatic.com/s/anonymouspro/v14/rP2ap2a15UIB7Un-bOeISG3pHl4OTCzc6IG30KqB9Q.ttf"
      },
      "category": "monospace",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Antic",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v12",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/antic/v12/TuGfUVB8XY5DRaZLodgzydtk.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Antic Didone",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v9",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/anticdidone/v9/RWmPoKKX6u8sp8fIWdnDKqDiqYsGBGBzCw.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Antic Slab",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v9",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/anticslab/v9/bWt97fPFfRzkCa9Jlp6IWcJWXW5p5Qo.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Anton",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v12",
      "lastModified": "2020-09-10",
      "files": {
        "regular": "http://fonts.gstatic.com/s/anton/v12/1Ptgg87LROyAm0K08i4gS7lu.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Arapey",
      "variants": [
        "regular",
        "italic"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v9",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/arapey/v9/-W__XJn-UDDA2RC6Z9AcZkIzeg.ttf",
        "italic": "http://fonts.gstatic.com/s/arapey/v9/-W_9XJn-UDDA2RCKZdoYREcjeo0k.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Arbutus",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v10",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/arbutus/v10/NaPYcZ7dG_5J3poob9JtryO8fMU.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Arbutus Slab",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v9",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/arbutusslab/v9/oY1Z8e7OuLXkJGbXtr5ba7ZVa68dJlaFAQ.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Architects Daughter",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v11",
      "lastModified": "2020-09-10",
      "files": {
        "regular": "http://fonts.gstatic.com/s/architectsdaughter/v11/KtkxAKiDZI_td1Lkx62xHZHDtgO_Y-bvfY5q4szgE-Q.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Archivo",
      "variants": [
        "regular",
        "italic",
        "500",
        "500italic",
        "600",
        "600italic",
        "700",
        "700italic"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v7",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/archivo/v7/k3kQo8UDI-1M0wlSTd7iL0nAMaM.ttf",
        "italic": "http://fonts.gstatic.com/s/archivo/v7/k3kSo8UDI-1M0wlSfdzoK2vFIaOV8A.ttf",
        "500": "http://fonts.gstatic.com/s/archivo/v7/k3kVo8UDI-1M0wlSdSrLC0HrLaqM6Q4.ttf",
        "500italic": "http://fonts.gstatic.com/s/archivo/v7/k3kXo8UDI-1M0wlSfdzQ30LhKYiJ-Q7m8w.ttf",
        "600": "http://fonts.gstatic.com/s/archivo/v7/k3kVo8UDI-1M0wlSdQbMC0HrLaqM6Q4.ttf",
        "600italic": "http://fonts.gstatic.com/s/archivo/v7/k3kXo8UDI-1M0wlSfdzQ80XhKYiJ-Q7m8w.ttf",
        "700": "http://fonts.gstatic.com/s/archivo/v7/k3kVo8UDI-1M0wlSdWLNC0HrLaqM6Q4.ttf",
        "700italic": "http://fonts.gstatic.com/s/archivo/v7/k3kXo8UDI-1M0wlSfdzQl0ThKYiJ-Q7m8w.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Archivo Black",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v10",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/archivoblack/v10/HTxqL289NzCGg4MzN6KJ7eW6OYuP_x7yx3A.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Archivo Narrow",
      "variants": [
        "regular",
        "italic",
        "500",
        "500italic",
        "600",
        "600italic",
        "700",
        "700italic"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v12",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/archivonarrow/v12/tss0ApVBdCYD5Q7hcxTE1ArZ0Yb3g31S2s8p.ttf",
        "italic": "http://fonts.gstatic.com/s/archivonarrow/v12/tss2ApVBdCYD5Q7hcxTE1ArZ0bb1iXlw398pJxk.ttf",
        "500": "http://fonts.gstatic.com/s/archivonarrow/v12/tss3ApVBdCYD5Q7hcxTE1ArZ0b4Dqlla8dMgPgBu.ttf",
        "500italic": "http://fonts.gstatic.com/s/archivonarrow/v12/tssxApVBdCYD5Q7hcxTE1ArZ0bb1sY1Z-9cCOxBu_BM.ttf",
        "600": "http://fonts.gstatic.com/s/archivonarrow/v12/tss3ApVBdCYD5Q7hcxTE1ArZ0b4vrVla8dMgPgBu.ttf",
        "600italic": "http://fonts.gstatic.com/s/archivonarrow/v12/tssxApVBdCYD5Q7hcxTE1ArZ0bb1saFe-9cCOxBu_BM.ttf",
        "700": "http://fonts.gstatic.com/s/archivonarrow/v12/tss3ApVBdCYD5Q7hcxTE1ArZ0b5LrFla8dMgPgBu.ttf",
        "700italic": "http://fonts.gstatic.com/s/archivonarrow/v12/tssxApVBdCYD5Q7hcxTE1ArZ0bb1scVf-9cCOxBu_BM.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Aref Ruqaa",
      "variants": [
        "regular",
        "700"
      ],
      "subsets": [
        "arabic",
        "latin",
        "latin-ext"
      ],
      "version": "v12",
      "lastModified": "2020-11-06",
      "files": {
        "regular": "http://fonts.gstatic.com/s/arefruqaa/v12/WwkbxPW1E165rajQKDulEIAiVNo5xNY.ttf",
        "700": "http://fonts.gstatic.com/s/arefruqaa/v12/WwkYxPW1E165rajQKDulKDwNcNIS2N_7Bdk.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Arima Madurai",
      "variants": [
        "100",
        "200",
        "300",
        "regular",
        "500",
        "700",
        "800",
        "900"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "tamil",
        "vietnamese"
      ],
      "version": "v6",
      "lastModified": "2020-09-02",
      "files": {
        "100": "http://fonts.gstatic.com/s/arimamadurai/v6/t5t4IRoeKYORG0WNMgnC3seB1V3PqrGCch4Drg.ttf",
        "200": "http://fonts.gstatic.com/s/arimamadurai/v6/t5t7IRoeKYORG0WNMgnC3seB1fHuipusfhcat2c.ttf",
        "300": "http://fonts.gstatic.com/s/arimamadurai/v6/t5t7IRoeKYORG0WNMgnC3seB1ZXtipusfhcat2c.ttf",
        "regular": "http://fonts.gstatic.com/s/arimamadurai/v6/t5tmIRoeKYORG0WNMgnC3seB7TnFrpOHYh4.ttf",
        "500": "http://fonts.gstatic.com/s/arimamadurai/v6/t5t7IRoeKYORG0WNMgnC3seB1c3sipusfhcat2c.ttf",
        "700": "http://fonts.gstatic.com/s/arimamadurai/v6/t5t7IRoeKYORG0WNMgnC3seB1YXqipusfhcat2c.ttf",
        "800": "http://fonts.gstatic.com/s/arimamadurai/v6/t5t7IRoeKYORG0WNMgnC3seB1Znpipusfhcat2c.ttf",
        "900": "http://fonts.gstatic.com/s/arimamadurai/v6/t5t7IRoeKYORG0WNMgnC3seB1b3oipusfhcat2c.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Arimo",
      "variants": [
        "regular",
        "500",
        "600",
        "700",
        "italic",
        "500italic",
        "600italic",
        "700italic"
      ],
      "subsets": [
        "cyrillic",
        "cyrillic-ext",
        "greek",
        "greek-ext",
        "hebrew",
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v17",
      "lastModified": "2021-01-30",
      "files": {
        "regular": "http://fonts.gstatic.com/s/arimo/v17/P5sfzZCDf9_T_3cV7NCUECyoxNk37cxsBxDAVQI4aA.ttf",
        "500": "http://fonts.gstatic.com/s/arimo/v17/P5sfzZCDf9_T_3cV7NCUECyoxNk338xsBxDAVQI4aA.ttf",
        "600": "http://fonts.gstatic.com/s/arimo/v17/P5sfzZCDf9_T_3cV7NCUECyoxNk3M8tsBxDAVQI4aA.ttf",
        "700": "http://fonts.gstatic.com/s/arimo/v17/P5sfzZCDf9_T_3cV7NCUECyoxNk3CstsBxDAVQI4aA.ttf",
        "italic": "http://fonts.gstatic.com/s/arimo/v17/P5sdzZCDf9_T_10c3i9MeUcyat4iJY-ERBrEdwcoaKww.ttf",
        "500italic": "http://fonts.gstatic.com/s/arimo/v17/P5sdzZCDf9_T_10c3i9MeUcyat4iJY-2RBrEdwcoaKww.ttf",
        "600italic": "http://fonts.gstatic.com/s/arimo/v17/P5sdzZCDf9_T_10c3i9MeUcyat4iJY9aQxrEdwcoaKww.ttf",
        "700italic": "http://fonts.gstatic.com/s/arimo/v17/P5sdzZCDf9_T_10c3i9MeUcyat4iJY9jQxrEdwcoaKww.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Arizonia",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v11",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/arizonia/v11/neIIzCemt4A5qa7mv6WGHK06UY30.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Armata",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v12",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/armata/v12/gokvH63_HV5jQ-E9lD53Q2u_mQ.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Arsenal",
      "variants": [
        "regular",
        "italic",
        "700",
        "700italic"
      ],
      "subsets": [
        "cyrillic",
        "cyrillic-ext",
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v5",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/arsenal/v5/wXKrE3kQtZQ4pF3D11_WAewrhXY.ttf",
        "italic": "http://fonts.gstatic.com/s/arsenal/v5/wXKpE3kQtZQ4pF3D513cBc4ulXYrtA.ttf",
        "700": "http://fonts.gstatic.com/s/arsenal/v5/wXKuE3kQtZQ4pF3D7-P5JeQAmX8yrdk.ttf",
        "700italic": "http://fonts.gstatic.com/s/arsenal/v5/wXKsE3kQtZQ4pF3D513kueEKnV03vdnKjw.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Artifika",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v11",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/artifika/v11/VEMyRoxzronptCuxu6Wt5jDtreOL.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Arvo",
      "variants": [
        "regular",
        "italic",
        "700",
        "700italic"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v14",
      "lastModified": "2020-09-10",
      "files": {
        "regular": "http://fonts.gstatic.com/s/arvo/v14/tDbD2oWUg0MKmSAa7Lzr7vs.ttf",
        "italic": "http://fonts.gstatic.com/s/arvo/v14/tDbN2oWUg0MKqSIQ6J7u_vvijQ.ttf",
        "700": "http://fonts.gstatic.com/s/arvo/v14/tDbM2oWUg0MKoZw1yLTA8vL7lAE.ttf",
        "700italic": "http://fonts.gstatic.com/s/arvo/v14/tDbO2oWUg0MKqSIoVLHK9tD-hAHkGg.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Arya",
      "variants": [
        "regular",
        "700"
      ],
      "subsets": [
        "devanagari",
        "latin",
        "latin-ext"
      ],
      "version": "v6",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/arya/v6/ga6CawNG-HJd9Ub1-beqdFE.ttf",
        "700": "http://fonts.gstatic.com/s/arya/v6/ga6NawNG-HJdzfra3b-BaFg3dRE.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Asap",
      "variants": [
        "regular",
        "italic",
        "500",
        "500italic",
        "600",
        "600italic",
        "700",
        "700italic"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v13",
      "lastModified": "2020-09-25",
      "files": {
        "regular": "http://fonts.gstatic.com/s/asap/v13/KFOoCniXp96a-zwU4UROGzY.ttf",
        "italic": "http://fonts.gstatic.com/s/asap/v13/KFOmCniXp96ayz4e5WZLCzYlKw.ttf",
        "500": "http://fonts.gstatic.com/s/asap/v13/KFOnCniXp96aw8g9xUxlBz88MsA.ttf",
        "500italic": "http://fonts.gstatic.com/s/asap/v13/KFOlCniXp96ayz4mEU9vAx05IsDqlA.ttf",
        "600": "http://fonts.gstatic.com/s/asap/v13/KFOnCniXp96aw-Q6xUxlBz88MsA.ttf",
        "600italic": "http://fonts.gstatic.com/s/asap/v13/KFOlCniXp96ayz4mPUhvAx05IsDqlA.ttf",
        "700": "http://fonts.gstatic.com/s/asap/v13/KFOnCniXp96aw4A7xUxlBz88MsA.ttf",
        "700italic": "http://fonts.gstatic.com/s/asap/v13/KFOlCniXp96ayz4mWUlvAx05IsDqlA.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Asap Condensed",
      "variants": [
        "regular",
        "italic",
        "500",
        "500italic",
        "600",
        "600italic",
        "700",
        "700italic"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v7",
      "lastModified": "2020-09-25",
      "files": {
        "regular": "http://fonts.gstatic.com/s/asapcondensed/v7/pxidypY1o9NHyXh3WvSbGSggdNeLYk1Mq3ap.ttf",
        "italic": "http://fonts.gstatic.com/s/asapcondensed/v7/pxifypY1o9NHyXh3WvSbGSggdOeJaElurmapvvM.ttf",
        "500": "http://fonts.gstatic.com/s/asapcondensed/v7/pxieypY1o9NHyXh3WvSbGSggdO9_S2lEgGqgp-pO.ttf",
        "500italic": "http://fonts.gstatic.com/s/asapcondensed/v7/pxiYypY1o9NHyXh3WvSbGSggdOeJUL1Him6CovpOkXA.ttf",
        "600": "http://fonts.gstatic.com/s/asapcondensed/v7/pxieypY1o9NHyXh3WvSbGSggdO9TTGlEgGqgp-pO.ttf",
        "600italic": "http://fonts.gstatic.com/s/asapcondensed/v7/pxiYypY1o9NHyXh3WvSbGSggdOeJUJFAim6CovpOkXA.ttf",
        "700": "http://fonts.gstatic.com/s/asapcondensed/v7/pxieypY1o9NHyXh3WvSbGSggdO83TWlEgGqgp-pO.ttf",
        "700italic": "http://fonts.gstatic.com/s/asapcondensed/v7/pxiYypY1o9NHyXh3WvSbGSggdOeJUPVBim6CovpOkXA.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Asar",
      "variants": [
        "regular"
      ],
      "subsets": [
        "devanagari",
        "latin",
        "latin-ext"
      ],
      "version": "v8",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/asar/v8/sZlLdRyI6TBIXkYQDLlTW6E.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Asset",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v10",
      "lastModified": "2020-07-15",
      "files": {
        "regular": "http://fonts.gstatic.com/s/asset/v10/SLXGc1na-mM4cWImRJqExst1.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Assistant",
      "variants": [
        "200",
        "300",
        "regular",
        "500",
        "600",
        "700",
        "800"
      ],
      "subsets": [
        "hebrew",
        "latin",
        "latin-ext"
      ],
      "version": "v7",
      "lastModified": "2021-01-30",
      "files": {
        "200": "http://fonts.gstatic.com/s/assistant/v7/2sDPZGJYnIjSi6H75xkZZE1I0yCmYzzQtmZnEGGf3qGuvM4.ttf",
        "300": "http://fonts.gstatic.com/s/assistant/v7/2sDPZGJYnIjSi6H75xkZZE1I0yCmYzzQtrhnEGGf3qGuvM4.ttf",
        "regular": "http://fonts.gstatic.com/s/assistant/v7/2sDPZGJYnIjSi6H75xkZZE1I0yCmYzzQtuZnEGGf3qGuvM4.ttf",
        "500": "http://fonts.gstatic.com/s/assistant/v7/2sDPZGJYnIjSi6H75xkZZE1I0yCmYzzQttRnEGGf3qGuvM4.ttf",
        "600": "http://fonts.gstatic.com/s/assistant/v7/2sDPZGJYnIjSi6H75xkZZE1I0yCmYzzQtjhgEGGf3qGuvM4.ttf",
        "700": "http://fonts.gstatic.com/s/assistant/v7/2sDPZGJYnIjSi6H75xkZZE1I0yCmYzzQtgFgEGGf3qGuvM4.ttf",
        "800": "http://fonts.gstatic.com/s/assistant/v7/2sDPZGJYnIjSi6H75xkZZE1I0yCmYzzQtmZgEGGf3qGuvM4.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Astloch",
      "variants": [
        "regular",
        "700"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v12",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/astloch/v12/TuGRUVJ8QI5GSeUjq9wRzMtkH1Q.ttf",
        "700": "http://fonts.gstatic.com/s/astloch/v12/TuGUUVJ8QI5GSeUjk2A-6MNPA10xLMQ.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Asul",
      "variants": [
        "regular",
        "700"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v10",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/asul/v10/VuJ-dNjKxYr46fMFXK78JIg.ttf",
        "700": "http://fonts.gstatic.com/s/asul/v10/VuJxdNjKxYr40U8qeKbXOIFneRo.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Athiti",
      "variants": [
        "200",
        "300",
        "regular",
        "500",
        "600",
        "700"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "thai",
        "vietnamese"
      ],
      "version": "v5",
      "lastModified": "2020-07-23",
      "files": {
        "200": "http://fonts.gstatic.com/s/athiti/v5/pe0sMISdLIZIv1wAxDNyAv2-C99ycg.ttf",
        "300": "http://fonts.gstatic.com/s/athiti/v5/pe0sMISdLIZIv1wAoDByAv2-C99ycg.ttf",
        "regular": "http://fonts.gstatic.com/s/athiti/v5/pe0vMISdLIZIv1w4DBhWCtaiAg.ttf",
        "500": "http://fonts.gstatic.com/s/athiti/v5/pe0sMISdLIZIv1wA-DFyAv2-C99ycg.ttf",
        "600": "http://fonts.gstatic.com/s/athiti/v5/pe0sMISdLIZIv1wA1DZyAv2-C99ycg.ttf",
        "700": "http://fonts.gstatic.com/s/athiti/v5/pe0sMISdLIZIv1wAsDdyAv2-C99ycg.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Atma",
      "variants": [
        "300",
        "regular",
        "500",
        "600",
        "700"
      ],
      "subsets": [
        "bengali",
        "latin",
        "latin-ext"
      ],
      "version": "v6",
      "lastModified": "2020-07-23",
      "files": {
        "300": "http://fonts.gstatic.com/s/atma/v6/uK_z4rqWc-Eoo8JzKjc9PvedRkM.ttf",
        "regular": "http://fonts.gstatic.com/s/atma/v6/uK_84rqWc-Eom25bDj8WIv4.ttf",
        "500": "http://fonts.gstatic.com/s/atma/v6/uK_z4rqWc-Eoo5pyKjc9PvedRkM.ttf",
        "600": "http://fonts.gstatic.com/s/atma/v6/uK_z4rqWc-Eoo7Z1Kjc9PvedRkM.ttf",
        "700": "http://fonts.gstatic.com/s/atma/v6/uK_z4rqWc-Eoo9J0Kjc9PvedRkM.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Atomic Age",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v13",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/atomicage/v13/f0Xz0eug6sdmRFkYZZGL58Ht9a8GYeA.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Aubrey",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v13",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/aubrey/v13/q5uGsou7NPBw-p7vugNsCxVEgA.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Audiowide",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v9",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/audiowide/v9/l7gdbjpo0cum0ckerWCtkQXPExpQBw.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Autour One",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v10",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/autourone/v10/UqyVK80cP25l3fJgbdfbk5lWVscxdKE.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Average",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v9",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/average/v9/fC1hPYBHe23MxA7rIeJwVWytTyk.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Average Sans",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v9",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/averagesans/v9/1Ptpg8fLXP2dlAXR-HlJJNJPBdqazVoK4A.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Averia Gruesa Libre",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v9",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/averiagruesalibre/v9/NGSov4nEGEktOaDRKsY-1dhh8eEtIx3ZUmmJw0SLRA8.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Averia Libre",
      "variants": [
        "300",
        "300italic",
        "regular",
        "italic",
        "700",
        "700italic"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v9",
      "lastModified": "2020-07-23",
      "files": {
        "300": "http://fonts.gstatic.com/s/averialibre/v9/2V0FKIcMGZEnV6xygz7eNjEarovtb07t-pQgTw.ttf",
        "300italic": "http://fonts.gstatic.com/s/averialibre/v9/2V0HKIcMGZEnV6xygz7eNjESAJFhbUTp2JEwT4Sk.ttf",
        "regular": "http://fonts.gstatic.com/s/averialibre/v9/2V0aKIcMGZEnV6xygz7eNjEiAqPJZ2Xx8w.ttf",
        "italic": "http://fonts.gstatic.com/s/averialibre/v9/2V0EKIcMGZEnV6xygz7eNjESAKnNRWDh8405.ttf",
        "700": "http://fonts.gstatic.com/s/averialibre/v9/2V0FKIcMGZEnV6xygz7eNjEavoztb07t-pQgTw.ttf",
        "700italic": "http://fonts.gstatic.com/s/averialibre/v9/2V0HKIcMGZEnV6xygz7eNjESAJFxakTp2JEwT4Sk.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Averia Sans Libre",
      "variants": [
        "300",
        "300italic",
        "regular",
        "italic",
        "700",
        "700italic"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v9",
      "lastModified": "2020-07-23",
      "files": {
        "300": "http://fonts.gstatic.com/s/averiasanslibre/v9/ga6SaxZG_G5OvCf_rt7FH3B6BHLMEd3lMKcQJZP1LmD9.ttf",
        "300italic": "http://fonts.gstatic.com/s/averiasanslibre/v9/ga6caxZG_G5OvCf_rt7FH3B6BHLMEdVLKisSL5fXK3D9qtg.ttf",
        "regular": "http://fonts.gstatic.com/s/averiasanslibre/v9/ga6XaxZG_G5OvCf_rt7FH3B6BHLMEeVJGIMYDo_8.ttf",
        "italic": "http://fonts.gstatic.com/s/averiasanslibre/v9/ga6RaxZG_G5OvCf_rt7FH3B6BHLMEdVLEoc6C5_8N3k.ttf",
        "700": "http://fonts.gstatic.com/s/averiasanslibre/v9/ga6SaxZG_G5OvCf_rt7FH3B6BHLMEd31N6cQJZP1LmD9.ttf",
        "700italic": "http://fonts.gstatic.com/s/averiasanslibre/v9/ga6caxZG_G5OvCf_rt7FH3B6BHLMEdVLKjsVL5fXK3D9qtg.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Averia Serif Libre",
      "variants": [
        "300",
        "300italic",
        "regular",
        "italic",
        "700",
        "700italic"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v10",
      "lastModified": "2020-07-23",
      "files": {
        "300": "http://fonts.gstatic.com/s/averiaseriflibre/v10/neIVzD2ms4wxr6GvjeD0X88SHPyX2xYGCSmqwacqdrKvbQ.ttf",
        "300italic": "http://fonts.gstatic.com/s/averiaseriflibre/v10/neIbzD2ms4wxr6GvjeD0X88SHPyX2xYOpzMmw60uVLe_bXHq.ttf",
        "regular": "http://fonts.gstatic.com/s/averiaseriflibre/v10/neIWzD2ms4wxr6GvjeD0X88SHPyX2xY-pQGOyYw2fw.ttf",
        "italic": "http://fonts.gstatic.com/s/averiaseriflibre/v10/neIUzD2ms4wxr6GvjeD0X88SHPyX2xYOpwuK64kmf6u2.ttf",
        "700": "http://fonts.gstatic.com/s/averiaseriflibre/v10/neIVzD2ms4wxr6GvjeD0X88SHPyX2xYGGS6qwacqdrKvbQ.ttf",
        "700italic": "http://fonts.gstatic.com/s/averiaseriflibre/v10/neIbzD2ms4wxr6GvjeD0X88SHPyX2xYOpzM2xK0uVLe_bXHq.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "B612",
      "variants": [
        "regular",
        "italic",
        "700",
        "700italic"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v5",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/b612/v5/3JnySDDxiSz32jm4GDigUXw.ttf",
        "italic": "http://fonts.gstatic.com/s/b612/v5/3Jn8SDDxiSz36juyHBqlQXwdVw.ttf",
        "700": "http://fonts.gstatic.com/s/b612/v5/3Jn9SDDxiSz34oWXPDCLTXUETuE.ttf",
        "700italic": "http://fonts.gstatic.com/s/b612/v5/3Jn_SDDxiSz36juKoDWBSVcBXuFb0Q.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "B612 Mono",
      "variants": [
        "regular",
        "italic",
        "700",
        "700italic"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v5",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/b612mono/v5/kmK_Zq85QVWbN1eW6lJl1wTcquRTtg.ttf",
        "italic": "http://fonts.gstatic.com/s/b612mono/v5/kmK5Zq85QVWbN1eW6lJV1Q7YiOFDtqtf.ttf",
        "700": "http://fonts.gstatic.com/s/b612mono/v5/kmK6Zq85QVWbN1eW6lJdayv4os9Pv7JGSg.ttf",
        "700italic": "http://fonts.gstatic.com/s/b612mono/v5/kmKkZq85QVWbN1eW6lJV1TZkp8VLnbdWSg4x.ttf"
      },
      "category": "monospace",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Bad Script",
      "variants": [
        "regular"
      ],
      "subsets": [
        "cyrillic",
        "latin"
      ],
      "version": "v9",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/badscript/v9/6NUT8F6PJgbFWQn47_x7lOwuzd1AZtw.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Bahiana",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v5",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/bahiana/v5/uU9PCBUV4YenPWJU7xPb3vyHmlI.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Bahianita",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v3",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/bahianita/v3/yYLr0hTb3vuqqsBUgxWtxTvV2NJPcA.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Bai Jamjuree",
      "variants": [
        "200",
        "200italic",
        "300",
        "300italic",
        "regular",
        "italic",
        "500",
        "500italic",
        "600",
        "600italic",
        "700",
        "700italic"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "thai",
        "vietnamese"
      ],
      "version": "v4",
      "lastModified": "2020-09-02",
      "files": {
        "200": "http://fonts.gstatic.com/s/baijamjuree/v4/LDIqapSCOBt_aeQQ7ftydoa0kePuk5A1-yiSgA.ttf",
        "200italic": "http://fonts.gstatic.com/s/baijamjuree/v4/LDIoapSCOBt_aeQQ7ftydoa8W_oGkpox2S2CgOva.ttf",
        "300": "http://fonts.gstatic.com/s/baijamjuree/v4/LDIqapSCOBt_aeQQ7ftydoa09eDuk5A1-yiSgA.ttf",
        "300italic": "http://fonts.gstatic.com/s/baijamjuree/v4/LDIoapSCOBt_aeQQ7ftydoa8W_pikZox2S2CgOva.ttf",
        "regular": "http://fonts.gstatic.com/s/baijamjuree/v4/LDI1apSCOBt_aeQQ7ftydoaMWcjKm7sp8g.ttf",
        "italic": "http://fonts.gstatic.com/s/baijamjuree/v4/LDIrapSCOBt_aeQQ7ftydoa8W8LOub458jGL.ttf",
        "500": "http://fonts.gstatic.com/s/baijamjuree/v4/LDIqapSCOBt_aeQQ7ftydoa0reHuk5A1-yiSgA.ttf",
        "500italic": "http://fonts.gstatic.com/s/baijamjuree/v4/LDIoapSCOBt_aeQQ7ftydoa8W_o6kJox2S2CgOva.ttf",
        "600": "http://fonts.gstatic.com/s/baijamjuree/v4/LDIqapSCOBt_aeQQ7ftydoa0gebuk5A1-yiSgA.ttf",
        "600italic": "http://fonts.gstatic.com/s/baijamjuree/v4/LDIoapSCOBt_aeQQ7ftydoa8W_oWl5ox2S2CgOva.ttf",
        "700": "http://fonts.gstatic.com/s/baijamjuree/v4/LDIqapSCOBt_aeQQ7ftydoa05efuk5A1-yiSgA.ttf",
        "700italic": "http://fonts.gstatic.com/s/baijamjuree/v4/LDIoapSCOBt_aeQQ7ftydoa8W_pylpox2S2CgOva.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Baloo 2",
      "variants": [
        "regular",
        "500",
        "600",
        "700",
        "800"
      ],
      "subsets": [
        "devanagari",
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v1",
      "lastModified": "2020-03-06",
      "files": {
        "regular": "http://fonts.gstatic.com/s/baloo2/v1/wXKrE3kTposypRyd11_WAewrhXY.ttf",
        "500": "http://fonts.gstatic.com/s/baloo2/v1/wXKuE3kTposypRyd76v_JeQAmX8yrdk.ttf",
        "600": "http://fonts.gstatic.com/s/baloo2/v1/wXKuE3kTposypRyd74f4JeQAmX8yrdk.ttf",
        "700": "http://fonts.gstatic.com/s/baloo2/v1/wXKuE3kTposypRyd7-P5JeQAmX8yrdk.ttf",
        "800": "http://fonts.gstatic.com/s/baloo2/v1/wXKuE3kTposypRyd7__6JeQAmX8yrdk.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Baloo Bhai 2",
      "variants": [
        "regular",
        "500",
        "600",
        "700",
        "800"
      ],
      "subsets": [
        "gujarati",
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v1",
      "lastModified": "2020-03-06",
      "files": {
        "regular": "http://fonts.gstatic.com/s/baloobhai2/v1/sZlDdRSL-z1VEWZ4YNA7Y5I3cdTmiH1gFQ.ttf",
        "500": "http://fonts.gstatic.com/s/baloobhai2/v1/sZlcdRSL-z1VEWZ4YNA7Y5IPhf3CgFZ8HNV3Nw.ttf",
        "600": "http://fonts.gstatic.com/s/baloobhai2/v1/sZlcdRSL-z1VEWZ4YNA7Y5IPqfrCgFZ8HNV3Nw.ttf",
        "700": "http://fonts.gstatic.com/s/baloobhai2/v1/sZlcdRSL-z1VEWZ4YNA7Y5IPzfvCgFZ8HNV3Nw.ttf",
        "800": "http://fonts.gstatic.com/s/baloobhai2/v1/sZlcdRSL-z1VEWZ4YNA7Y5IP0fjCgFZ8HNV3Nw.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Baloo Bhaina 2",
      "variants": [
        "regular",
        "500",
        "600",
        "700",
        "800"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "oriya",
        "vietnamese"
      ],
      "version": "v1",
      "lastModified": "2020-03-06",
      "files": {
        "regular": "http://fonts.gstatic.com/s/baloobhaina2/v1/qWczB6yyq4P9Adr3RtoX1q6yShz7mDUoupoI.ttf",
        "500": "http://fonts.gstatic.com/s/baloobhaina2/v1/qWcwB6yyq4P9Adr3RtoX1q6ySiQPsREgkYYBX_3F.ttf",
        "600": "http://fonts.gstatic.com/s/baloobhaina2/v1/qWcwB6yyq4P9Adr3RtoX1q6ySiQjthEgkYYBX_3F.ttf",
        "700": "http://fonts.gstatic.com/s/baloobhaina2/v1/qWcwB6yyq4P9Adr3RtoX1q6ySiRHtxEgkYYBX_3F.ttf",
        "800": "http://fonts.gstatic.com/s/baloobhaina2/v1/qWcwB6yyq4P9Adr3RtoX1q6ySiRbtBEgkYYBX_3F.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Baloo Chettan 2",
      "variants": [
        "regular",
        "500",
        "600",
        "700",
        "800"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "malayalam",
        "vietnamese"
      ],
      "version": "v1",
      "lastModified": "2020-03-06",
      "files": {
        "regular": "http://fonts.gstatic.com/s/baloochettan2/v1/vm8udRbmXEva26PK-NtuX4ynWEzf4P17OpYDlg.ttf",
        "500": "http://fonts.gstatic.com/s/baloochettan2/v1/vm8rdRbmXEva26PK-NtuX4ynWEznFNRfMr0fn5bhCA.ttf",
        "600": "http://fonts.gstatic.com/s/baloochettan2/v1/vm8rdRbmXEva26PK-NtuX4ynWEznONNfMr0fn5bhCA.ttf",
        "700": "http://fonts.gstatic.com/s/baloochettan2/v1/vm8rdRbmXEva26PK-NtuX4ynWEznXNJfMr0fn5bhCA.ttf",
        "800": "http://fonts.gstatic.com/s/baloochettan2/v1/vm8rdRbmXEva26PK-NtuX4ynWEznQNFfMr0fn5bhCA.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Baloo Da 2",
      "variants": [
        "regular",
        "500",
        "600",
        "700",
        "800"
      ],
      "subsets": [
        "bengali",
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v1",
      "lastModified": "2020-03-06",
      "files": {
        "regular": "http://fonts.gstatic.com/s/balooda2/v1/2-ci9J9j0IaUMQZwAJyJcu7XoZFDf2Q.ttf",
        "500": "http://fonts.gstatic.com/s/balooda2/v1/2-ch9J9j0IaUMQZwAJyJShr-hZloY23zejE.ttf",
        "600": "http://fonts.gstatic.com/s/balooda2/v1/2-ch9J9j0IaUMQZwAJyJSjb5hZloY23zejE.ttf",
        "700": "http://fonts.gstatic.com/s/balooda2/v1/2-ch9J9j0IaUMQZwAJyJSlL4hZloY23zejE.ttf",
        "800": "http://fonts.gstatic.com/s/balooda2/v1/2-ch9J9j0IaUMQZwAJyJSk77hZloY23zejE.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Baloo Paaji 2",
      "variants": [
        "regular",
        "500",
        "600",
        "700",
        "800"
      ],
      "subsets": [
        "gurmukhi",
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v1",
      "lastModified": "2020-03-06",
      "files": {
        "regular": "http://fonts.gstatic.com/s/baloopaaji2/v1/i7dMIFFzbz-QHZUdV9_UGWZuYFKQHwyVd3U.ttf",
        "500": "http://fonts.gstatic.com/s/baloopaaji2/v1/i7dRIFFzbz-QHZUdV9_UGWZuWKa5OwS-a3yGe9E.ttf",
        "600": "http://fonts.gstatic.com/s/baloopaaji2/v1/i7dRIFFzbz-QHZUdV9_UGWZuWIq-OwS-a3yGe9E.ttf",
        "700": "http://fonts.gstatic.com/s/baloopaaji2/v1/i7dRIFFzbz-QHZUdV9_UGWZuWO6_OwS-a3yGe9E.ttf",
        "800": "http://fonts.gstatic.com/s/baloopaaji2/v1/i7dRIFFzbz-QHZUdV9_UGWZuWPK8OwS-a3yGe9E.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Baloo Tamma 2",
      "variants": [
        "regular",
        "500",
        "600",
        "700",
        "800"
      ],
      "subsets": [
        "kannada",
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v1",
      "lastModified": "2020-03-06",
      "files": {
        "regular": "http://fonts.gstatic.com/s/balootamma2/v1/vEFX2_hCAgcR46PaajtrYlBbT0g21tqeR7c.ttf",
        "500": "http://fonts.gstatic.com/s/balootamma2/v1/vEFK2_hCAgcR46PaajtrYlBbd7wf8tK1W77HtMo.ttf",
        "600": "http://fonts.gstatic.com/s/balootamma2/v1/vEFK2_hCAgcR46PaajtrYlBbd5AY8tK1W77HtMo.ttf",
        "700": "http://fonts.gstatic.com/s/balootamma2/v1/vEFK2_hCAgcR46PaajtrYlBbd_QZ8tK1W77HtMo.ttf",
        "800": "http://fonts.gstatic.com/s/balootamma2/v1/vEFK2_hCAgcR46PaajtrYlBbd-ga8tK1W77HtMo.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Baloo Tammudu 2",
      "variants": [
        "regular",
        "500",
        "600",
        "700",
        "800"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "telugu",
        "vietnamese"
      ],
      "version": "v1",
      "lastModified": "2020-03-06",
      "files": {
        "regular": "http://fonts.gstatic.com/s/balootammudu2/v1/1Pt2g8TIS_SAmkLguUdFP8UaJcK-xXEW6aGXHw.ttf",
        "500": "http://fonts.gstatic.com/s/balootammudu2/v1/1Ptzg8TIS_SAmkLguUdFP8UaJcKGMVgy4YqLFrUnJA.ttf",
        "600": "http://fonts.gstatic.com/s/balootammudu2/v1/1Ptzg8TIS_SAmkLguUdFP8UaJcKGHV8y4YqLFrUnJA.ttf",
        "700": "http://fonts.gstatic.com/s/balootammudu2/v1/1Ptzg8TIS_SAmkLguUdFP8UaJcKGeV4y4YqLFrUnJA.ttf",
        "800": "http://fonts.gstatic.com/s/balootammudu2/v1/1Ptzg8TIS_SAmkLguUdFP8UaJcKGZV0y4YqLFrUnJA.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Baloo Thambi 2",
      "variants": [
        "regular",
        "500",
        "600",
        "700",
        "800"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "tamil",
        "vietnamese"
      ],
      "version": "v1",
      "lastModified": "2020-03-06",
      "files": {
        "regular": "http://fonts.gstatic.com/s/baloothambi2/v1/cY9cfjeOW0NHpmOQXranrbDyu4hHBJOxZQPp.ttf",
        "500": "http://fonts.gstatic.com/s/baloothambi2/v1/cY9ffjeOW0NHpmOQXranrbDyu7CzLbe5Th_gRA7L.ttf",
        "600": "http://fonts.gstatic.com/s/baloothambi2/v1/cY9ffjeOW0NHpmOQXranrbDyu7CfKre5Th_gRA7L.ttf",
        "700": "http://fonts.gstatic.com/s/baloothambi2/v1/cY9ffjeOW0NHpmOQXranrbDyu7D7K7e5Th_gRA7L.ttf",
        "800": "http://fonts.gstatic.com/s/baloothambi2/v1/cY9ffjeOW0NHpmOQXranrbDyu7DnKLe5Th_gRA7L.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Balsamiq Sans",
      "variants": [
        "regular",
        "italic",
        "700",
        "700italic"
      ],
      "subsets": [
        "cyrillic",
        "cyrillic-ext",
        "latin",
        "latin-ext"
      ],
      "version": "v3",
      "lastModified": "2021-01-21",
      "files": {
        "regular": "http://fonts.gstatic.com/s/balsamiqsans/v3/P5sEzZiAbNrN8SB3lQQX7Pnc8dkdIYdNHzs.ttf",
        "italic": "http://fonts.gstatic.com/s/balsamiqsans/v3/P5sazZiAbNrN8SB3lQQX7PncwdsXJaVIDzvcXA.ttf",
        "700": "http://fonts.gstatic.com/s/balsamiqsans/v3/P5sZzZiAbNrN8SB3lQQX7PncyWUyBY9mAzLFRQI.ttf",
        "700italic": "http://fonts.gstatic.com/s/balsamiqsans/v3/P5sfzZiAbNrN8SB3lQQX7PncwdsvmYpsBxDAVQI4aA.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Balthazar",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v10",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/balthazar/v10/d6lKkaajS8Gm4CVQjFEvyRTo39l8hw.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Bangers",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v13",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/bangers/v13/FeVQS0BTqb0h60ACL5la2bxii28.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Barlow",
      "variants": [
        "100",
        "100italic",
        "200",
        "200italic",
        "300",
        "300italic",
        "regular",
        "italic",
        "500",
        "500italic",
        "600",
        "600italic",
        "700",
        "700italic",
        "800",
        "800italic",
        "900",
        "900italic"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v5",
      "lastModified": "2020-09-10",
      "files": {
        "100": "http://fonts.gstatic.com/s/barlow/v5/7cHrv4kjgoGqM7E3b8s8yn4hnCci.ttf",
        "100italic": "http://fonts.gstatic.com/s/barlow/v5/7cHtv4kjgoGqM7E_CfNYwHoDmTcibrA.ttf",
        "200": "http://fonts.gstatic.com/s/barlow/v5/7cHqv4kjgoGqM7E3w-oc4FAtlT47dw.ttf",
        "200italic": "http://fonts.gstatic.com/s/barlow/v5/7cHsv4kjgoGqM7E_CfP04Voptzsrd6m9.ttf",
        "300": "http://fonts.gstatic.com/s/barlow/v5/7cHqv4kjgoGqM7E3p-kc4FAtlT47dw.ttf",
        "300italic": "http://fonts.gstatic.com/s/barlow/v5/7cHsv4kjgoGqM7E_CfOQ4loptzsrd6m9.ttf",
        "regular": "http://fonts.gstatic.com/s/barlow/v5/7cHpv4kjgoGqM7EPC8E46HsxnA.ttf",
        "italic": "http://fonts.gstatic.com/s/barlow/v5/7cHrv4kjgoGqM7E_Ccs8yn4hnCci.ttf",
        "500": "http://fonts.gstatic.com/s/barlow/v5/7cHqv4kjgoGqM7E3_-gc4FAtlT47dw.ttf",
        "500italic": "http://fonts.gstatic.com/s/barlow/v5/7cHsv4kjgoGqM7E_CfPI41optzsrd6m9.ttf",
        "600": "http://fonts.gstatic.com/s/barlow/v5/7cHqv4kjgoGqM7E30-8c4FAtlT47dw.ttf",
        "600italic": "http://fonts.gstatic.com/s/barlow/v5/7cHsv4kjgoGqM7E_CfPk5Foptzsrd6m9.ttf",
        "700": "http://fonts.gstatic.com/s/barlow/v5/7cHqv4kjgoGqM7E3t-4c4FAtlT47dw.ttf",
        "700italic": "http://fonts.gstatic.com/s/barlow/v5/7cHsv4kjgoGqM7E_CfOA5Voptzsrd6m9.ttf",
        "800": "http://fonts.gstatic.com/s/barlow/v5/7cHqv4kjgoGqM7E3q-0c4FAtlT47dw.ttf",
        "800italic": "http://fonts.gstatic.com/s/barlow/v5/7cHsv4kjgoGqM7E_CfOc5loptzsrd6m9.ttf",
        "900": "http://fonts.gstatic.com/s/barlow/v5/7cHqv4kjgoGqM7E3j-wc4FAtlT47dw.ttf",
        "900italic": "http://fonts.gstatic.com/s/barlow/v5/7cHsv4kjgoGqM7E_CfO451optzsrd6m9.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Barlow Condensed",
      "variants": [
        "100",
        "100italic",
        "200",
        "200italic",
        "300",
        "300italic",
        "regular",
        "italic",
        "500",
        "500italic",
        "600",
        "600italic",
        "700",
        "700italic",
        "800",
        "800italic",
        "900",
        "900italic"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v5",
      "lastModified": "2020-09-10",
      "files": {
        "100": "http://fonts.gstatic.com/s/barlowcondensed/v5/HTxxL3I-JCGChYJ8VI-L6OO_au7B43LT31vytKgbaw.ttf",
        "100italic": "http://fonts.gstatic.com/s/barlowcondensed/v5/HTxzL3I-JCGChYJ8VI-L6OO_au7B6xTru1H2lq0La6JN.ttf",
        "200": "http://fonts.gstatic.com/s/barlowcondensed/v5/HTxwL3I-JCGChYJ8VI-L6OO_au7B497y_3HcuKECcrs.ttf",
        "200italic": "http://fonts.gstatic.com/s/barlowcondensed/v5/HTxyL3I-JCGChYJ8VI-L6OO_au7B6xTrF3DWvIMHYrtUxg.ttf",
        "300": "http://fonts.gstatic.com/s/barlowcondensed/v5/HTxwL3I-JCGChYJ8VI-L6OO_au7B47rx_3HcuKECcrs.ttf",
        "300italic": "http://fonts.gstatic.com/s/barlowcondensed/v5/HTxyL3I-JCGChYJ8VI-L6OO_au7B6xTrc3PWvIMHYrtUxg.ttf",
        "regular": "http://fonts.gstatic.com/s/barlowcondensed/v5/HTx3L3I-JCGChYJ8VI-L6OO_au7B2xbZ23n3pKg.ttf",
        "italic": "http://fonts.gstatic.com/s/barlowcondensed/v5/HTxxL3I-JCGChYJ8VI-L6OO_au7B6xTT31vytKgbaw.ttf",
        "500": "http://fonts.gstatic.com/s/barlowcondensed/v5/HTxwL3I-JCGChYJ8VI-L6OO_au7B4-Lw_3HcuKECcrs.ttf",
        "500italic": "http://fonts.gstatic.com/s/barlowcondensed/v5/HTxyL3I-JCGChYJ8VI-L6OO_au7B6xTrK3LWvIMHYrtUxg.ttf",
        "600": "http://fonts.gstatic.com/s/barlowcondensed/v5/HTxwL3I-JCGChYJ8VI-L6OO_au7B4873_3HcuKECcrs.ttf",
        "600italic": "http://fonts.gstatic.com/s/barlowcondensed/v5/HTxyL3I-JCGChYJ8VI-L6OO_au7B6xTrB3XWvIMHYrtUxg.ttf",
        "700": "http://fonts.gstatic.com/s/barlowcondensed/v5/HTxwL3I-JCGChYJ8VI-L6OO_au7B46r2_3HcuKECcrs.ttf",
        "700italic": "http://fonts.gstatic.com/s/barlowcondensed/v5/HTxyL3I-JCGChYJ8VI-L6OO_au7B6xTrY3TWvIMHYrtUxg.ttf",
        "800": "http://fonts.gstatic.com/s/barlowcondensed/v5/HTxwL3I-JCGChYJ8VI-L6OO_au7B47b1_3HcuKECcrs.ttf",
        "800italic": "http://fonts.gstatic.com/s/barlowcondensed/v5/HTxyL3I-JCGChYJ8VI-L6OO_au7B6xTrf3fWvIMHYrtUxg.ttf",
        "900": "http://fonts.gstatic.com/s/barlowcondensed/v5/HTxwL3I-JCGChYJ8VI-L6OO_au7B45L0_3HcuKECcrs.ttf",
        "900italic": "http://fonts.gstatic.com/s/barlowcondensed/v5/HTxyL3I-JCGChYJ8VI-L6OO_au7B6xTrW3bWvIMHYrtUxg.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Barlow Semi Condensed",
      "variants": [
        "100",
        "100italic",
        "200",
        "200italic",
        "300",
        "300italic",
        "regular",
        "italic",
        "500",
        "500italic",
        "600",
        "600italic",
        "700",
        "700italic",
        "800",
        "800italic",
        "900",
        "900italic"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v6",
      "lastModified": "2020-09-02",
      "files": {
        "100": "http://fonts.gstatic.com/s/barlowsemicondensed/v6/wlphgxjLBV1hqnzfr-F8sEYMB0Yybp0mudRfG4qvKk8ogoSP.ttf",
        "100italic": "http://fonts.gstatic.com/s/barlowsemicondensed/v6/wlpjgxjLBV1hqnzfr-F8sEYMB0Yybp0mudRXfbLLIEsKh5SPZWs.ttf",
        "200": "http://fonts.gstatic.com/s/barlowsemicondensed/v6/wlpigxjLBV1hqnzfr-F8sEYMB0Yybp0mudRft6uPAGEki52WfA.ttf",
        "200italic": "http://fonts.gstatic.com/s/barlowsemicondensed/v6/wlpkgxjLBV1hqnzfr-F8sEYMB0Yybp0mudRXfbJnAWsgqZiGfHK5.ttf",
        "300": "http://fonts.gstatic.com/s/barlowsemicondensed/v6/wlpigxjLBV1hqnzfr-F8sEYMB0Yybp0mudRf06iPAGEki52WfA.ttf",
        "300italic": "http://fonts.gstatic.com/s/barlowsemicondensed/v6/wlpkgxjLBV1hqnzfr-F8sEYMB0Yybp0mudRXfbIDAmsgqZiGfHK5.ttf",
        "regular": "http://fonts.gstatic.com/s/barlowsemicondensed/v6/wlpvgxjLBV1hqnzfr-F8sEYMB0Yybp0mudRnf4CrCEo4gg.ttf",
        "italic": "http://fonts.gstatic.com/s/barlowsemicondensed/v6/wlphgxjLBV1hqnzfr-F8sEYMB0Yybp0mudRXfYqvKk8ogoSP.ttf",
        "500": "http://fonts.gstatic.com/s/barlowsemicondensed/v6/wlpigxjLBV1hqnzfr-F8sEYMB0Yybp0mudRfi6mPAGEki52WfA.ttf",
        "500italic": "http://fonts.gstatic.com/s/barlowsemicondensed/v6/wlpkgxjLBV1hqnzfr-F8sEYMB0Yybp0mudRXfbJbA2sgqZiGfHK5.ttf",
        "600": "http://fonts.gstatic.com/s/barlowsemicondensed/v6/wlpigxjLBV1hqnzfr-F8sEYMB0Yybp0mudRfp66PAGEki52WfA.ttf",
        "600italic": "http://fonts.gstatic.com/s/barlowsemicondensed/v6/wlpkgxjLBV1hqnzfr-F8sEYMB0Yybp0mudRXfbJ3BGsgqZiGfHK5.ttf",
        "700": "http://fonts.gstatic.com/s/barlowsemicondensed/v6/wlpigxjLBV1hqnzfr-F8sEYMB0Yybp0mudRfw6-PAGEki52WfA.ttf",
        "700italic": "http://fonts.gstatic.com/s/barlowsemicondensed/v6/wlpkgxjLBV1hqnzfr-F8sEYMB0Yybp0mudRXfbITBWsgqZiGfHK5.ttf",
        "800": "http://fonts.gstatic.com/s/barlowsemicondensed/v6/wlpigxjLBV1hqnzfr-F8sEYMB0Yybp0mudRf36yPAGEki52WfA.ttf",
        "800italic": "http://fonts.gstatic.com/s/barlowsemicondensed/v6/wlpkgxjLBV1hqnzfr-F8sEYMB0Yybp0mudRXfbIPBmsgqZiGfHK5.ttf",
        "900": "http://fonts.gstatic.com/s/barlowsemicondensed/v6/wlpigxjLBV1hqnzfr-F8sEYMB0Yybp0mudRf-62PAGEki52WfA.ttf",
        "900italic": "http://fonts.gstatic.com/s/barlowsemicondensed/v6/wlpkgxjLBV1hqnzfr-F8sEYMB0Yybp0mudRXfbIrB2sgqZiGfHK5.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Barriecito",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v3",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/barriecito/v3/WWXXlj-CbBOSLY2QTuY_KdUiYwTO0MU.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Barrio",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v5",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/barrio/v5/wEO8EBXBk8hBIDiEdQYhWdsX1Q.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Basic",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v10",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/basic/v10/xfu_0WLxV2_XKQN34lDVyR7D.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Baskervville",
      "variants": [
        "regular",
        "italic"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v4",
      "lastModified": "2020-09-25",
      "files": {
        "regular": "http://fonts.gstatic.com/s/baskervville/v4/YA9Ur0yU4l_XOrogbkun3kQgt5OohvbJ9A.ttf",
        "italic": "http://fonts.gstatic.com/s/baskervville/v4/YA9Kr0yU4l_XOrogbkun3kQQtZmspPPZ9Mlt.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Battambang",
      "variants": [
        "regular",
        "700"
      ],
      "subsets": [
        "khmer"
      ],
      "version": "v14",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/battambang/v14/uk-mEGe7raEw-HjkzZabDnWj4yxx7o8.ttf",
        "700": "http://fonts.gstatic.com/s/battambang/v14/uk-lEGe7raEw-HjkzZabNsmMxyRa8oZK9I0.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Baumans",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v10",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/baumans/v10/-W_-XJj9QyTd3QfpR_oyaksqY5Q.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Bayon",
      "variants": [
        "regular"
      ],
      "subsets": [
        "khmer"
      ],
      "version": "v14",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/bayon/v14/9XUrlJNmn0LPFl-pOhYEd2NJ.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Be Vietnam",
      "variants": [
        "100",
        "100italic",
        "300",
        "300italic",
        "regular",
        "italic",
        "500",
        "500italic",
        "600",
        "600italic",
        "700",
        "700italic",
        "800",
        "800italic"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v2",
      "lastModified": "2020-07-23",
      "files": {
        "100": "http://fonts.gstatic.com/s/bevietnam/v2/FBVxdDflz-iPfoPuIC2iKsUn7W1hK2czPg.ttf",
        "100italic": "http://fonts.gstatic.com/s/bevietnam/v2/FBVvdDflz-iPfoPuIC2iIqMfiWdlCWIjPi5p.ttf",
        "300": "http://fonts.gstatic.com/s/bevietnam/v2/FBVwdDflz-iPfoPuIC2iKg0FzUdPJ24qJzc.ttf",
        "300italic": "http://fonts.gstatic.com/s/bevietnam/v2/FBVudDflz-iPfoPuIC2iIqMfQUVFI0wvNzdwXQ.ttf",
        "regular": "http://fonts.gstatic.com/s/bevietnam/v2/FBVzdDflz-iPfoPuIC2iEqEt6U9kO2c.ttf",
        "italic": "http://fonts.gstatic.com/s/bevietnam/v2/FBVxdDflz-iPfoPuIC2iIqMn7W1hK2czPg.ttf",
        "500": "http://fonts.gstatic.com/s/bevietnam/v2/FBVwdDflz-iPfoPuIC2iKlUEzUdPJ24qJzc.ttf",
        "500italic": "http://fonts.gstatic.com/s/bevietnam/v2/FBVudDflz-iPfoPuIC2iIqMfGURFI0wvNzdwXQ.ttf",
        "600": "http://fonts.gstatic.com/s/bevietnam/v2/FBVwdDflz-iPfoPuIC2iKnkDzUdPJ24qJzc.ttf",
        "600italic": "http://fonts.gstatic.com/s/bevietnam/v2/FBVudDflz-iPfoPuIC2iIqMfNUNFI0wvNzdwXQ.ttf",
        "700": "http://fonts.gstatic.com/s/bevietnam/v2/FBVwdDflz-iPfoPuIC2iKh0CzUdPJ24qJzc.ttf",
        "700italic": "http://fonts.gstatic.com/s/bevietnam/v2/FBVudDflz-iPfoPuIC2iIqMfUUJFI0wvNzdwXQ.ttf",
        "800": "http://fonts.gstatic.com/s/bevietnam/v2/FBVwdDflz-iPfoPuIC2iKgEBzUdPJ24qJzc.ttf",
        "800italic": "http://fonts.gstatic.com/s/bevietnam/v2/FBVudDflz-iPfoPuIC2iIqMfTUFFI0wvNzdwXQ.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Bebas Neue",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v2",
      "lastModified": "2020-09-10",
      "files": {
        "regular": "http://fonts.gstatic.com/s/bebasneue/v2/JTUSjIg69CK48gW7PXooxW5rygbi49c.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Belgrano",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v11",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/belgrano/v11/55xvey5tM9rwKWrJZcMFirl08KDJ.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Bellefair",
      "variants": [
        "regular"
      ],
      "subsets": [
        "hebrew",
        "latin",
        "latin-ext"
      ],
      "version": "v6",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/bellefair/v6/kJExBuYY6AAuhiXUxG19__A2pOdvDA.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Belleza",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v9",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/belleza/v9/0nkoC9_pNeMfhX4BtcbyawzruP8.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Bellota",
      "variants": [
        "300",
        "300italic",
        "regular",
        "italic",
        "700",
        "700italic"
      ],
      "subsets": [
        "cyrillic",
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v2",
      "lastModified": "2020-07-23",
      "files": {
        "300": "http://fonts.gstatic.com/s/bellota/v2/MwQzbhXl3_qEpiwAID55kGMViblPtXs.ttf",
        "300italic": "http://fonts.gstatic.com/s/bellota/v2/MwQxbhXl3_qEpiwAKJBjHGEfjZtKpXulTQ.ttf",
        "regular": "http://fonts.gstatic.com/s/bellota/v2/MwQ2bhXl3_qEpiwAGJJRtGs-lbA.ttf",
        "italic": "http://fonts.gstatic.com/s/bellota/v2/MwQ0bhXl3_qEpiwAKJBbsEk7hbBWrA.ttf",
        "700": "http://fonts.gstatic.com/s/bellota/v2/MwQzbhXl3_qEpiwAIC5-kGMViblPtXs.ttf",
        "700italic": "http://fonts.gstatic.com/s/bellota/v2/MwQxbhXl3_qEpiwAKJBjDGYfjZtKpXulTQ.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Bellota Text",
      "variants": [
        "300",
        "300italic",
        "regular",
        "italic",
        "700",
        "700italic"
      ],
      "subsets": [
        "cyrillic",
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v2",
      "lastModified": "2020-07-23",
      "files": {
        "300": "http://fonts.gstatic.com/s/bellotatext/v2/0FlMVP2VnlWS4f3-UE9hHXM5VfsqfQXwQy6yxg.ttf",
        "300italic": "http://fonts.gstatic.com/s/bellotatext/v2/0FlOVP2VnlWS4f3-UE9hHXMx--Gmfw_0YSuixmYK.ttf",
        "regular": "http://fonts.gstatic.com/s/bellotatext/v2/0FlTVP2VnlWS4f3-UE9hHXMB-dMOdS7sSg.ttf",
        "italic": "http://fonts.gstatic.com/s/bellotatext/v2/0FlNVP2VnlWS4f3-UE9hHXMx-9kKVyv8Sjer.ttf",
        "700": "http://fonts.gstatic.com/s/bellotatext/v2/0FlMVP2VnlWS4f3-UE9hHXM5RfwqfQXwQy6yxg.ttf",
        "700italic": "http://fonts.gstatic.com/s/bellotatext/v2/0FlOVP2VnlWS4f3-UE9hHXMx--G2eA_0YSuixmYK.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "BenchNine",
      "variants": [
        "300",
        "regular",
        "700"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v9",
      "lastModified": "2020-09-02",
      "files": {
        "300": "http://fonts.gstatic.com/s/benchnine/v9/ahcev8612zF4jxrwMosT--tRhWa8q0v8ag.ttf",
        "regular": "http://fonts.gstatic.com/s/benchnine/v9/ahcbv8612zF4jxrwMosrV8N1jU2gog.ttf",
        "700": "http://fonts.gstatic.com/s/benchnine/v9/ahcev8612zF4jxrwMosT6-xRhWa8q0v8ag.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Bentham",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v11",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/bentham/v11/VdGeAZQPEpYfmHglKWw7CJaK_y4.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Berkshire Swash",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v9",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/berkshireswash/v9/ptRRTi-cavZOGqCvnNJDl5m5XmNPrcQybX4pQA.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Beth Ellen",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v3",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/bethellen/v3/WwkbxPW2BE-3rb_JNT-qEIAiVNo5xNY.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Bevan",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v12",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/bevan/v12/4iCj6KZ0a9NXjF8aUir7tlSJ.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Big Shoulders Display",
      "variants": [
        "100",
        "300",
        "regular",
        "500",
        "600",
        "700",
        "800",
        "900"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v4",
      "lastModified": "2020-11-06",
      "files": {
        "100": "http://fonts.gstatic.com/s/bigshouldersdisplay/v4/fC1xPZJEZG-e9gHhdI4-NBbfd2ys3SjJCx1Ur9DrDJYM2lAZ.ttf",
        "300": "http://fonts.gstatic.com/s/bigshouldersdisplay/v4/fC1yPZJEZG-e9gHhdI4-NBbfd2ys3SjJCx1UZ_LLJrgA00kAdA.ttf",
        "regular": "http://fonts.gstatic.com/s/bigshouldersdisplay/v4/fC1_PZJEZG-e9gHhdI4-NBbfd2ys3SjJCx1sy9rvLpMc2g.ttf",
        "500": "http://fonts.gstatic.com/s/bigshouldersdisplay/v4/fC1yPZJEZG-e9gHhdI4-NBbfd2ys3SjJCx1UP_PLJrgA00kAdA.ttf",
        "600": "http://fonts.gstatic.com/s/bigshouldersdisplay/v4/fC1yPZJEZG-e9gHhdI4-NBbfd2ys3SjJCx1UE_TLJrgA00kAdA.ttf",
        "700": "http://fonts.gstatic.com/s/bigshouldersdisplay/v4/fC1yPZJEZG-e9gHhdI4-NBbfd2ys3SjJCx1Ud_XLJrgA00kAdA.ttf",
        "800": "http://fonts.gstatic.com/s/bigshouldersdisplay/v4/fC1yPZJEZG-e9gHhdI4-NBbfd2ys3SjJCx1Ua_bLJrgA00kAdA.ttf",
        "900": "http://fonts.gstatic.com/s/bigshouldersdisplay/v4/fC1yPZJEZG-e9gHhdI4-NBbfd2ys3SjJCx1UT_fLJrgA00kAdA.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Big Shoulders Inline Display",
      "variants": [
        "100",
        "300",
        "regular",
        "500",
        "600",
        "700",
        "800",
        "900"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v2",
      "lastModified": "2021-01-21",
      "files": {
        "100": "http://fonts.gstatic.com/s/bigshouldersinlinedisplay/v2/_LOlmyfF4eSU_SCrJc9OI24U7siGvBGcZqmqV9-ZZ85COrytjChoEoUCJg.ttf",
        "300": "http://fonts.gstatic.com/s/bigshouldersinlinedisplay/v2/_LOkmyfF4eSU_SCrJc9OI24U7siGvBGcZqmqV9-ZZ85COnSPrAJGHowbP0g.ttf",
        "regular": "http://fonts.gstatic.com/s/bigshouldersinlinedisplay/v2/_LObmyfF4eSU_SCrJc9OI24U7siGvBGcZqmqV9-ZZ85CAtiniAptAoU.ttf",
        "500": "http://fonts.gstatic.com/s/bigshouldersinlinedisplay/v2/_LOkmyfF4eSU_SCrJc9OI24U7siGvBGcZqmqV9-ZZ85COiyOrAJGHowbP0g.ttf",
        "600": "http://fonts.gstatic.com/s/bigshouldersinlinedisplay/v2/_LOkmyfF4eSU_SCrJc9OI24U7siGvBGcZqmqV9-ZZ85COgCJrAJGHowbP0g.ttf",
        "700": "http://fonts.gstatic.com/s/bigshouldersinlinedisplay/v2/_LOkmyfF4eSU_SCrJc9OI24U7siGvBGcZqmqV9-ZZ85COmSIrAJGHowbP0g.ttf",
        "800": "http://fonts.gstatic.com/s/bigshouldersinlinedisplay/v2/_LOkmyfF4eSU_SCrJc9OI24U7siGvBGcZqmqV9-ZZ85COniLrAJGHowbP0g.ttf",
        "900": "http://fonts.gstatic.com/s/bigshouldersinlinedisplay/v2/_LOkmyfF4eSU_SCrJc9OI24U7siGvBGcZqmqV9-ZZ85COlyKrAJGHowbP0g.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Big Shoulders Inline Text",
      "variants": [
        "100",
        "300",
        "regular",
        "500",
        "600",
        "700",
        "800",
        "900"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v2",
      "lastModified": "2021-01-21",
      "files": {
        "100": "http://fonts.gstatic.com/s/bigshouldersinlinetext/v2/vm8idQDmVECV5-vm5dJ-Tp-6WDeRjL4RV7dP8u-NEU7wG3AwE9VRww.ttf",
        "300": "http://fonts.gstatic.com/s/bigshouldersinlinetext/v2/vm8hdQDmVECV5-vm5dJ-Tp-6WDeRjL4RV7dP8u-NEYbSO1oeH9xI2gc.ttf",
        "regular": "http://fonts.gstatic.com/s/bigshouldersinlinetext/v2/vm8kdQDmVECV5-vm5dJ-Tp-6WDeRjL4RV7dP8u-NKSr6H1I1A9U.ttf",
        "500": "http://fonts.gstatic.com/s/bigshouldersinlinetext/v2/vm8hdQDmVECV5-vm5dJ-Tp-6WDeRjL4RV7dP8u-NEd7TO1oeH9xI2gc.ttf",
        "600": "http://fonts.gstatic.com/s/bigshouldersinlinetext/v2/vm8hdQDmVECV5-vm5dJ-Tp-6WDeRjL4RV7dP8u-NEfLUO1oeH9xI2gc.ttf",
        "700": "http://fonts.gstatic.com/s/bigshouldersinlinetext/v2/vm8hdQDmVECV5-vm5dJ-Tp-6WDeRjL4RV7dP8u-NEZbVO1oeH9xI2gc.ttf",
        "800": "http://fonts.gstatic.com/s/bigshouldersinlinetext/v2/vm8hdQDmVECV5-vm5dJ-Tp-6WDeRjL4RV7dP8u-NEYrWO1oeH9xI2gc.ttf",
        "900": "http://fonts.gstatic.com/s/bigshouldersinlinetext/v2/vm8hdQDmVECV5-vm5dJ-Tp-6WDeRjL4RV7dP8u-NEa7XO1oeH9xI2gc.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Big Shoulders Stencil Display",
      "variants": [
        "100",
        "300",
        "regular",
        "500",
        "600",
        "700",
        "800",
        "900"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v2",
      "lastModified": "2021-01-21",
      "files": {
        "100": "http://fonts.gstatic.com/s/bigshouldersstencildisplay/v2/6aeU4LS6U6pR_bp5b_t2ugOhHWFcxSGP9ttD96KCb8xPyvD00ncryljitbg.ttf",
        "300": "http://fonts.gstatic.com/s/bigshouldersstencildisplay/v2/6aeX4LS6U6pR_bp5b_t2ugOhHWFcxSGP9ttD96KCb8xPyvA88FcB5FTrrKG-.ttf",
        "regular": "http://fonts.gstatic.com/s/bigshouldersstencildisplay/v2/6aeq4LS6U6pR_bp5b_t2ugOhHWFcxSGP9ttD96KCb8xPysiQ2HMJz0ji.ttf",
        "500": "http://fonts.gstatic.com/s/bigshouldersstencildisplay/v2/6aeX4LS6U6pR_bp5b_t2ugOhHWFcxSGP9ttD96KCb8xPyvBk8VcB5FTrrKG-.ttf",
        "600": "http://fonts.gstatic.com/s/bigshouldersstencildisplay/v2/6aeX4LS6U6pR_bp5b_t2ugOhHWFcxSGP9ttD96KCb8xPyvBI9lcB5FTrrKG-.ttf",
        "700": "http://fonts.gstatic.com/s/bigshouldersstencildisplay/v2/6aeX4LS6U6pR_bp5b_t2ugOhHWFcxSGP9ttD96KCb8xPyvAs91cB5FTrrKG-.ttf",
        "800": "http://fonts.gstatic.com/s/bigshouldersstencildisplay/v2/6aeX4LS6U6pR_bp5b_t2ugOhHWFcxSGP9ttD96KCb8xPyvAw9FcB5FTrrKG-.ttf",
        "900": "http://fonts.gstatic.com/s/bigshouldersstencildisplay/v2/6aeX4LS6U6pR_bp5b_t2ugOhHWFcxSGP9ttD96KCb8xPyvAU9VcB5FTrrKG-.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Big Shoulders Stencil Text",
      "variants": [
        "100",
        "300",
        "regular",
        "500",
        "600",
        "700",
        "800",
        "900"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v2",
      "lastModified": "2021-01-21",
      "files": {
        "100": "http://fonts.gstatic.com/s/bigshouldersstenciltext/v2/5aUi9-i2oxDMNwY3dHfW7UAt3Q453SM15wNj53bCcYSZYGLxtPhi2eA.ttf",
        "300": "http://fonts.gstatic.com/s/bigshouldersstenciltext/v2/5aUj9-i2oxDMNwY3dHfW7UAt3Q453SM15wNj53bCcYRRQkLbmvRrwPmQ.ttf",
        "regular": "http://fonts.gstatic.com/s/bigshouldersstenciltext/v2/5aUg9-i2oxDMNwY3dHfW7UAt3Q453SM15wNj53bCcbz9ambTsehi.ttf",
        "500": "http://fonts.gstatic.com/s/bigshouldersstenciltext/v2/5aUj9-i2oxDMNwY3dHfW7UAt3Q453SM15wNj53bCcYQJQ0LbmvRrwPmQ.ttf",
        "600": "http://fonts.gstatic.com/s/bigshouldersstenciltext/v2/5aUj9-i2oxDMNwY3dHfW7UAt3Q453SM15wNj53bCcYQlRELbmvRrwPmQ.ttf",
        "700": "http://fonts.gstatic.com/s/bigshouldersstenciltext/v2/5aUj9-i2oxDMNwY3dHfW7UAt3Q453SM15wNj53bCcYRBRULbmvRrwPmQ.ttf",
        "800": "http://fonts.gstatic.com/s/bigshouldersstenciltext/v2/5aUj9-i2oxDMNwY3dHfW7UAt3Q453SM15wNj53bCcYRdRkLbmvRrwPmQ.ttf",
        "900": "http://fonts.gstatic.com/s/bigshouldersstenciltext/v2/5aUj9-i2oxDMNwY3dHfW7UAt3Q453SM15wNj53bCcYR5R0LbmvRrwPmQ.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Big Shoulders Text",
      "variants": [
        "100",
        "300",
        "regular",
        "500",
        "600",
        "700",
        "800",
        "900"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v4",
      "lastModified": "2020-11-06",
      "files": {
        "100": "http://fonts.gstatic.com/s/bigshoulderstext/v4/55xzezRtP9G3CGPIf49hxc8P0eytUxBU-IZ_YscCdXQB.ttf",
        "300": "http://fonts.gstatic.com/s/bigshoulderstext/v4/55xyezRtP9G3CGPIf49hxc8P0eytUxBUMKRfSOkOfG0Y3A.ttf",
        "regular": "http://fonts.gstatic.com/s/bigshoulderstext/v4/55xxezRtP9G3CGPIf49hxc8P0eytUxBsnIx7QMISdQ.ttf",
        "500": "http://fonts.gstatic.com/s/bigshoulderstext/v4/55xyezRtP9G3CGPIf49hxc8P0eytUxBUaKVfSOkOfG0Y3A.ttf",
        "600": "http://fonts.gstatic.com/s/bigshoulderstext/v4/55xyezRtP9G3CGPIf49hxc8P0eytUxBURKJfSOkOfG0Y3A.ttf",
        "700": "http://fonts.gstatic.com/s/bigshoulderstext/v4/55xyezRtP9G3CGPIf49hxc8P0eytUxBUIKNfSOkOfG0Y3A.ttf",
        "800": "http://fonts.gstatic.com/s/bigshoulderstext/v4/55xyezRtP9G3CGPIf49hxc8P0eytUxBUPKBfSOkOfG0Y3A.ttf",
        "900": "http://fonts.gstatic.com/s/bigshoulderstext/v4/55xyezRtP9G3CGPIf49hxc8P0eytUxBUGKFfSOkOfG0Y3A.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Bigelow Rules",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v9",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/bigelowrules/v9/RrQWboly8iR_I3KWSzeRuN0zT4cCH8WAJVk.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Bigshot One",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v11",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/bigshotone/v11/u-470qukhRkkO6BD_7cM_gxuUQJBXv_-.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Bilbo",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v10",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/bilbo/v10/o-0EIpgpwWwZ210hpIRz4wxE.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Bilbo Swash Caps",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v13",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/bilboswashcaps/v13/zrf-0GXbz-H3Wb4XBsGrTgq2PVmdqAPopiRfKp8.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "BioRhyme",
      "variants": [
        "200",
        "300",
        "regular",
        "700",
        "800"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v5",
      "lastModified": "2020-07-23",
      "files": {
        "200": "http://fonts.gstatic.com/s/biorhyme/v5/1cX3aULHBpDMsHYW_ESOjnGAq8Sk1PoH.ttf",
        "300": "http://fonts.gstatic.com/s/biorhyme/v5/1cX3aULHBpDMsHYW_ETqjXGAq8Sk1PoH.ttf",
        "regular": "http://fonts.gstatic.com/s/biorhyme/v5/1cXwaULHBpDMsHYW_HxGpVWIgNit.ttf",
        "700": "http://fonts.gstatic.com/s/biorhyme/v5/1cX3aULHBpDMsHYW_ET6inGAq8Sk1PoH.ttf",
        "800": "http://fonts.gstatic.com/s/biorhyme/v5/1cX3aULHBpDMsHYW_ETmiXGAq8Sk1PoH.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "BioRhyme Expanded",
      "variants": [
        "200",
        "300",
        "regular",
        "700",
        "800"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v6",
      "lastModified": "2020-07-23",
      "files": {
        "200": "http://fonts.gstatic.com/s/biorhymeexpanded/v6/i7dVIE1zZzytGswgU577CDY9LjbffxxcblSHSdTXrb_z.ttf",
        "300": "http://fonts.gstatic.com/s/biorhymeexpanded/v6/i7dVIE1zZzytGswgU577CDY9Ljbffxw4bVSHSdTXrb_z.ttf",
        "regular": "http://fonts.gstatic.com/s/biorhymeexpanded/v6/i7dQIE1zZzytGswgU577CDY9LjbffySURXCPYsje.ttf",
        "700": "http://fonts.gstatic.com/s/biorhymeexpanded/v6/i7dVIE1zZzytGswgU577CDY9LjbffxwoalSHSdTXrb_z.ttf",
        "800": "http://fonts.gstatic.com/s/biorhymeexpanded/v6/i7dVIE1zZzytGswgU577CDY9Ljbffxw0aVSHSdTXrb_z.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Biryani",
      "variants": [
        "200",
        "300",
        "regular",
        "600",
        "700",
        "800",
        "900"
      ],
      "subsets": [
        "devanagari",
        "latin",
        "latin-ext"
      ],
      "version": "v6",
      "lastModified": "2020-09-02",
      "files": {
        "200": "http://fonts.gstatic.com/s/biryani/v6/hv-TlzNxIFoO84YddYQyGTBSU-J-RxQ.ttf",
        "300": "http://fonts.gstatic.com/s/biryani/v6/hv-TlzNxIFoO84YddeAxGTBSU-J-RxQ.ttf",
        "regular": "http://fonts.gstatic.com/s/biryani/v6/hv-WlzNxIFoO84YdTUwZPTh5T-s.ttf",
        "600": "http://fonts.gstatic.com/s/biryani/v6/hv-TlzNxIFoO84YddZQ3GTBSU-J-RxQ.ttf",
        "700": "http://fonts.gstatic.com/s/biryani/v6/hv-TlzNxIFoO84YddfA2GTBSU-J-RxQ.ttf",
        "800": "http://fonts.gstatic.com/s/biryani/v6/hv-TlzNxIFoO84Yddew1GTBSU-J-RxQ.ttf",
        "900": "http://fonts.gstatic.com/s/biryani/v6/hv-TlzNxIFoO84Yddcg0GTBSU-J-RxQ.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Bitter",
      "variants": [
        "100",
        "200",
        "300",
        "regular",
        "500",
        "600",
        "700",
        "800",
        "900",
        "100italic",
        "200italic",
        "300italic",
        "italic",
        "500italic",
        "600italic",
        "700italic",
        "800italic",
        "900italic"
      ],
      "subsets": [
        "cyrillic",
        "cyrillic-ext",
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v17",
      "lastModified": "2021-01-30",
      "files": {
        "100": "http://fonts.gstatic.com/s/bitter/v17/raxhHiqOu8IVPmnRc6SY1KXhnF_Y8fbeCL_EXFh2reU.ttf",
        "200": "http://fonts.gstatic.com/s/bitter/v17/raxhHiqOu8IVPmnRc6SY1KXhnF_Y8XbfCL_EXFh2reU.ttf",
        "300": "http://fonts.gstatic.com/s/bitter/v17/raxhHiqOu8IVPmnRc6SY1KXhnF_Y8ajfCL_EXFh2reU.ttf",
        "regular": "http://fonts.gstatic.com/s/bitter/v17/raxhHiqOu8IVPmnRc6SY1KXhnF_Y8fbfCL_EXFh2reU.ttf",
        "500": "http://fonts.gstatic.com/s/bitter/v17/raxhHiqOu8IVPmnRc6SY1KXhnF_Y8cTfCL_EXFh2reU.ttf",
        "600": "http://fonts.gstatic.com/s/bitter/v17/raxhHiqOu8IVPmnRc6SY1KXhnF_Y8SjYCL_EXFh2reU.ttf",
        "700": "http://fonts.gstatic.com/s/bitter/v17/raxhHiqOu8IVPmnRc6SY1KXhnF_Y8RHYCL_EXFh2reU.ttf",
        "800": "http://fonts.gstatic.com/s/bitter/v17/raxhHiqOu8IVPmnRc6SY1KXhnF_Y8XbYCL_EXFh2reU.ttf",
        "900": "http://fonts.gstatic.com/s/bitter/v17/raxhHiqOu8IVPmnRc6SY1KXhnF_Y8V_YCL_EXFh2reU.ttf",
        "100italic": "http://fonts.gstatic.com/s/bitter/v17/raxjHiqOu8IVPmn7epZnDMyKBvHf5D6c4P3OWHpzveWxBw.ttf",
        "200italic": "http://fonts.gstatic.com/s/bitter/v17/raxjHiqOu8IVPmn7epZnDMyKBvHf5D6cYPzOWHpzveWxBw.ttf",
        "300italic": "http://fonts.gstatic.com/s/bitter/v17/raxjHiqOu8IVPmn7epZnDMyKBvHf5D6cvvzOWHpzveWxBw.ttf",
        "italic": "http://fonts.gstatic.com/s/bitter/v17/raxjHiqOu8IVPmn7epZnDMyKBvHf5D6c4PzOWHpzveWxBw.ttf",
        "500italic": "http://fonts.gstatic.com/s/bitter/v17/raxjHiqOu8IVPmn7epZnDMyKBvHf5D6c0vzOWHpzveWxBw.ttf",
        "600italic": "http://fonts.gstatic.com/s/bitter/v17/raxjHiqOu8IVPmn7epZnDMyKBvHf5D6cPvvOWHpzveWxBw.ttf",
        "700italic": "http://fonts.gstatic.com/s/bitter/v17/raxjHiqOu8IVPmn7epZnDMyKBvHf5D6cB_vOWHpzveWxBw.ttf",
        "800italic": "http://fonts.gstatic.com/s/bitter/v17/raxjHiqOu8IVPmn7epZnDMyKBvHf5D6cYPvOWHpzveWxBw.ttf",
        "900italic": "http://fonts.gstatic.com/s/bitter/v17/raxjHiqOu8IVPmn7epZnDMyKBvHf5D6cSfvOWHpzveWxBw.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Black And White Picture",
      "variants": [
        "regular"
      ],
      "subsets": [
        "korean",
        "latin"
      ],
      "version": "v8",
      "lastModified": "2019-07-16",
      "files": {
        "regular": "http://fonts.gstatic.com/s/blackandwhitepicture/v8/TwMe-JAERlQd3ooUHBUXGmrmioKjjnRSFO-NqI5HbcMi-yWY.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Black Han Sans",
      "variants": [
        "regular"
      ],
      "subsets": [
        "korean",
        "latin"
      ],
      "version": "v8",
      "lastModified": "2019-07-16",
      "files": {
        "regular": "http://fonts.gstatic.com/s/blackhansans/v8/ea8Aad44WunzF9a-dL6toA8r8nqVIXSkH-Hc.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Black Ops One",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v12",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/blackopsone/v12/qWcsB6-ypo7xBdr6Xshe96H3WDzRtjkho4M.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Blinker",
      "variants": [
        "100",
        "200",
        "300",
        "regular",
        "600",
        "700",
        "800",
        "900"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v4",
      "lastModified": "2020-07-23",
      "files": {
        "100": "http://fonts.gstatic.com/s/blinker/v4/cIf_MaFatEE-VTaP_E2hZEsCkIt9QQ.ttf",
        "200": "http://fonts.gstatic.com/s/blinker/v4/cIf4MaFatEE-VTaP_OGARGEsnIJkWL4.ttf",
        "300": "http://fonts.gstatic.com/s/blinker/v4/cIf4MaFatEE-VTaP_IWDRGEsnIJkWL4.ttf",
        "regular": "http://fonts.gstatic.com/s/blinker/v4/cIf9MaFatEE-VTaPxCmrYGkHgIs.ttf",
        "600": "http://fonts.gstatic.com/s/blinker/v4/cIf4MaFatEE-VTaP_PGFRGEsnIJkWL4.ttf",
        "700": "http://fonts.gstatic.com/s/blinker/v4/cIf4MaFatEE-VTaP_JWERGEsnIJkWL4.ttf",
        "800": "http://fonts.gstatic.com/s/blinker/v4/cIf4MaFatEE-VTaP_ImHRGEsnIJkWL4.ttf",
        "900": "http://fonts.gstatic.com/s/blinker/v4/cIf4MaFatEE-VTaP_K2GRGEsnIJkWL4.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Bodoni Moda",
      "variants": [
        "regular",
        "500",
        "600",
        "700",
        "800",
        "900",
        "italic",
        "500italic",
        "600italic",
        "700italic",
        "800italic",
        "900italic"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v2",
      "lastModified": "2021-01-30",
      "files": {
        "regular": "http://fonts.gstatic.com/s/bodonimoda/v2/aFT67PxzY382XsXX63LUYL6GYFcan6NJrKp-VPjfJMShrpsGFUt8oU7awIBytVjMYwE.ttf",
        "500": "http://fonts.gstatic.com/s/bodonimoda/v2/aFT67PxzY382XsXX63LUYL6GYFcan6NJrKp-VPjfJMShrpsGFUt8oXzawIBytVjMYwE.ttf",
        "600": "http://fonts.gstatic.com/s/bodonimoda/v2/aFT67PxzY382XsXX63LUYL6GYFcan6NJrKp-VPjfJMShrpsGFUt8oZDdwIBytVjMYwE.ttf",
        "700": "http://fonts.gstatic.com/s/bodonimoda/v2/aFT67PxzY382XsXX63LUYL6GYFcan6NJrKp-VPjfJMShrpsGFUt8oandwIBytVjMYwE.ttf",
        "800": "http://fonts.gstatic.com/s/bodonimoda/v2/aFT67PxzY382XsXX63LUYL6GYFcan6NJrKp-VPjfJMShrpsGFUt8oc7dwIBytVjMYwE.ttf",
        "900": "http://fonts.gstatic.com/s/bodonimoda/v2/aFT67PxzY382XsXX63LUYL6GYFcan6NJrKp-VPjfJMShrpsGFUt8oefdwIBytVjMYwE.ttf",
        "italic": "http://fonts.gstatic.com/s/bodonimoda/v2/aFT07PxzY382XsXX63LUYJSPUqb0pL6OQqxrZLnVbvZedvJtj-V7tIaZKMN4sXrJcwHqoQ.ttf",
        "500italic": "http://fonts.gstatic.com/s/bodonimoda/v2/aFT07PxzY382XsXX63LUYJSPUqb0pL6OQqxrZLnVbvZedvJtj-V7tIaZGsN4sXrJcwHqoQ.ttf",
        "600italic": "http://fonts.gstatic.com/s/bodonimoda/v2/aFT07PxzY382XsXX63LUYJSPUqb0pL6OQqxrZLnVbvZedvJtj-V7tIaZ9sR4sXrJcwHqoQ.ttf",
        "700italic": "http://fonts.gstatic.com/s/bodonimoda/v2/aFT07PxzY382XsXX63LUYJSPUqb0pL6OQqxrZLnVbvZedvJtj-V7tIaZz8R4sXrJcwHqoQ.ttf",
        "800italic": "http://fonts.gstatic.com/s/bodonimoda/v2/aFT07PxzY382XsXX63LUYJSPUqb0pL6OQqxrZLnVbvZedvJtj-V7tIaZqMR4sXrJcwHqoQ.ttf",
        "900italic": "http://fonts.gstatic.com/s/bodonimoda/v2/aFT07PxzY382XsXX63LUYJSPUqb0pL6OQqxrZLnVbvZedvJtj-V7tIaZgcR4sXrJcwHqoQ.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Bokor",
      "variants": [
        "regular"
      ],
      "subsets": [
        "khmer"
      ],
      "version": "v13",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/bokor/v13/m8JcjfpeeaqTiR2WdInbcaxE.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Bonbon",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v12",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/bonbon/v12/0FlVVPeVlFec4ee_cDEAbQY5-A.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Boogaloo",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v12",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/boogaloo/v12/kmK-Zq45GAvOdnaW6x1F_SrQo_1K.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Bowlby One",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v12",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/bowlbyone/v12/taiPGmVuC4y96PFeqp8smo6C_Z0wcK4.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Bowlby One SC",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v12",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/bowlbyonesc/v12/DtVlJxerQqQm37tzN3wMug9Pzgj8owhNjuE.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Brawler",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v11",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/brawler/v11/xn7gYHE3xXewAscGsgC7S9XdZN8.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Bree Serif",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v10",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/breeserif/v10/4UaHrEJCrhhnVA3DgluAx63j5pN1MwI.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Bubblegum Sans",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v9",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/bubblegumsans/v9/AYCSpXb_Z9EORv1M5QTjEzMEtdaHzoPPb7R4.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Bubbler One",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v9",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/bubblerone/v9/f0Xy0eqj68ppQV9KBLmAouHH26MPePkt.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Buda",
      "variants": [
        "300"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v11",
      "lastModified": "2020-07-23",
      "files": {
        "300": "http://fonts.gstatic.com/s/buda/v11/GFDqWAN8mnyIJSSrG7UBr7pZKA0.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Buenard",
      "variants": [
        "regular",
        "700"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v12",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/buenard/v12/OD5DuM6Cyma8FnnsPzf9qGi9HL4.ttf",
        "700": "http://fonts.gstatic.com/s/buenard/v12/OD5GuM6Cyma8FnnsB4vSjGCWALepwss.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Bungee",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v6",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/bungee/v6/N0bU2SZBIuF2PU_ECn50Kd_PmA.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Bungee Hairline",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v6",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/bungeehairline/v6/snfys0G548t04270a_ljTLUVrv-7YB2dQ5ZPqQ.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Bungee Inline",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v6",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/bungeeinline/v6/Gg8zN58UcgnlCweMrih332VuDGJ1-FEglsc.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Bungee Outline",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v6",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/bungeeoutline/v6/_6_mEDvmVP24UvU2MyiGDslL3Qg3YhJqPXxo.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Bungee Shade",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v6",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/bungeeshade/v6/DtVkJxarWL0t2KdzK3oI_jks7iLSrwFUlw.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Butcherman",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v12",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/butcherman/v12/2EbiL-thF0loflXUBOdb1zWzq_5uT84.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Butterfly Kids",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v9",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/butterflykids/v9/ll8lK2CWTjuqAsXDqlnIbMNs5S4arxFrAX1D.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Cabin",
      "variants": [
        "regular",
        "500",
        "600",
        "700",
        "italic",
        "500italic",
        "600italic",
        "700italic"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v18",
      "lastModified": "2021-01-30",
      "files": {
        "regular": "http://fonts.gstatic.com/s/cabin/v18/u-4X0qWljRw-PfU81xCKCpdpbgZJl6XFpfEd7eA9BIxxkV2EL7Gvxm7rE_s.ttf",
        "500": "http://fonts.gstatic.com/s/cabin/v18/u-4X0qWljRw-PfU81xCKCpdpbgZJl6XFpfEd7eA9BIxxkW-EL7Gvxm7rE_s.ttf",
        "600": "http://fonts.gstatic.com/s/cabin/v18/u-4X0qWljRw-PfU81xCKCpdpbgZJl6XFpfEd7eA9BIxxkYODL7Gvxm7rE_s.ttf",
        "700": "http://fonts.gstatic.com/s/cabin/v18/u-4X0qWljRw-PfU81xCKCpdpbgZJl6XFpfEd7eA9BIxxkbqDL7Gvxm7rE_s.ttf",
        "italic": "http://fonts.gstatic.com/s/cabin/v18/u-4V0qWljRw-Pd815fNqc8T_wAFcX-c37MPiNYlWniJ2hJXHx_KlwkzuA_u1Bg.ttf",
        "500italic": "http://fonts.gstatic.com/s/cabin/v18/u-4V0qWljRw-Pd815fNqc8T_wAFcX-c37MPiNYlWniJ2hJXH9fKlwkzuA_u1Bg.ttf",
        "600italic": "http://fonts.gstatic.com/s/cabin/v18/u-4V0qWljRw-Pd815fNqc8T_wAFcX-c37MPiNYlWniJ2hJXHGfWlwkzuA_u1Bg.ttf",
        "700italic": "http://fonts.gstatic.com/s/cabin/v18/u-4V0qWljRw-Pd815fNqc8T_wAFcX-c37MPiNYlWniJ2hJXHIPWlwkzuA_u1Bg.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Cabin Condensed",
      "variants": [
        "regular",
        "500",
        "600",
        "700"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v14",
      "lastModified": "2020-09-29",
      "files": {
        "regular": "http://fonts.gstatic.com/s/cabincondensed/v14/nwpMtK6mNhBK2err_hqkYhHRqmwaYOjZ5HZl8Q.ttf",
        "500": "http://fonts.gstatic.com/s/cabincondensed/v14/nwpJtK6mNhBK2err_hqkYhHRqmwilMH97F15-K1oqQ.ttf",
        "600": "http://fonts.gstatic.com/s/cabincondensed/v14/nwpJtK6mNhBK2err_hqkYhHRqmwiuMb97F15-K1oqQ.ttf",
        "700": "http://fonts.gstatic.com/s/cabincondensed/v14/nwpJtK6mNhBK2err_hqkYhHRqmwi3Mf97F15-K1oqQ.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Cabin Sketch",
      "variants": [
        "regular",
        "700"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v14",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/cabinsketch/v14/QGYpz_kZZAGCONcK2A4bGOjMn9JM6fnuKg.ttf",
        "700": "http://fonts.gstatic.com/s/cabinsketch/v14/QGY2z_kZZAGCONcK2A4bGOj0I_1o4dLyI4CMFw.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Caesar Dressing",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v9",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/caesardressing/v9/yYLx0hLa3vawqtwdswbotmK4vrR3cbb6LZttyg.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Cagliostro",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v9",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/cagliostro/v9/ZgNWjP5HM73BV5amnX-TjGXEM4COoE4.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Cairo",
      "variants": [
        "200",
        "300",
        "regular",
        "600",
        "700",
        "900"
      ],
      "subsets": [
        "arabic",
        "latin",
        "latin-ext"
      ],
      "version": "v9",
      "lastModified": "2020-09-25",
      "files": {
        "200": "http://fonts.gstatic.com/s/cairo/v9/SLXLc1nY6Hkvalrub76M7dd8aGZk.ttf",
        "300": "http://fonts.gstatic.com/s/cairo/v9/SLXLc1nY6HkvalqKbL6M7dd8aGZk.ttf",
        "regular": "http://fonts.gstatic.com/s/cairo/v9/SLXGc1nY6HkvamImRJqExst1.ttf",
        "600": "http://fonts.gstatic.com/s/cairo/v9/SLXLc1nY6Hkvalr-ar6M7dd8aGZk.ttf",
        "700": "http://fonts.gstatic.com/s/cairo/v9/SLXLc1nY6Hkvalqaa76M7dd8aGZk.ttf",
        "900": "http://fonts.gstatic.com/s/cairo/v9/SLXLc1nY6Hkvalqiab6M7dd8aGZk.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Caladea",
      "variants": [
        "regular",
        "italic",
        "700",
        "700italic"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v2",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/caladea/v2/kJEzBugZ7AAjhybUjR93-9IztOc.ttf",
        "italic": "http://fonts.gstatic.com/s/caladea/v2/kJExBugZ7AAjhybUvR19__A2pOdvDA.ttf",
        "700": "http://fonts.gstatic.com/s/caladea/v2/kJE2BugZ7AAjhybUtaNY39oYqO52FZ0.ttf",
        "700italic": "http://fonts.gstatic.com/s/caladea/v2/kJE0BugZ7AAjhybUvR1FQ98SrMxzBZ2lDA.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Calistoga",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v3",
      "lastModified": "2020-12-08",
      "files": {
        "regular": "http://fonts.gstatic.com/s/calistoga/v3/6NUU8F2OJg6MeR7l4e0vtMYAwdRZfw.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Calligraffitti",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v12",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/calligraffitti/v12/46k2lbT3XjDVqJw3DCmCFjE0vnFZM5ZBpYN-.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Cambay",
      "variants": [
        "regular",
        "italic",
        "700",
        "700italic"
      ],
      "subsets": [
        "devanagari",
        "latin",
        "latin-ext"
      ],
      "version": "v7",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/cambay/v7/SLXJc1rY6H0_ZDsGbrSIz9JsaA.ttf",
        "italic": "http://fonts.gstatic.com/s/cambay/v7/SLXLc1rY6H0_ZDs2bL6M7dd8aGZk.ttf",
        "700": "http://fonts.gstatic.com/s/cambay/v7/SLXKc1rY6H0_ZDs-0pusx_lwYX99kA.ttf",
        "700italic": "http://fonts.gstatic.com/s/cambay/v7/SLXMc1rY6H0_ZDs2bIYwwvN0Q3ptkDMN.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Cambo",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v9",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/cambo/v9/IFSqHeNEk8FJk416ok7xkPm8.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Candal",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v10",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/candal/v10/XoHn2YH6T7-t_8cNAR4Jt9Yxlw.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Cantarell",
      "variants": [
        "regular",
        "italic",
        "700",
        "700italic"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v10",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/cantarell/v10/B50NF7ZDq37KMUvlO01Ji6hqHK-CLA.ttf",
        "italic": "http://fonts.gstatic.com/s/cantarell/v10/B50LF7ZDq37KMUvlO015iaJuPqqSLJYf.ttf",
        "700": "http://fonts.gstatic.com/s/cantarell/v10/B50IF7ZDq37KMUvlO01xN4dOFISeJY8GgQ.ttf",
        "700italic": "http://fonts.gstatic.com/s/cantarell/v10/B50WF7ZDq37KMUvlO015iZrSEY6aB4oWgWHB.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Cantata One",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v10",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/cantataone/v10/PlI5Fl60Nb5obNzNe2jslVxEt8CwfGaD.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Cantora One",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v10",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/cantoraone/v10/gyB4hws1JdgnKy56GB_JX6zdZ4vZVbgZ.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Capriola",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v8",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/capriola/v8/wXKoE3YSppcvo1PDln_8L-AinG8y.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Cardo",
      "variants": [
        "regular",
        "italic",
        "700"
      ],
      "subsets": [
        "greek",
        "greek-ext",
        "latin",
        "latin-ext"
      ],
      "version": "v13",
      "lastModified": "2020-09-25",
      "files": {
        "regular": "http://fonts.gstatic.com/s/cardo/v13/wlp_gwjKBV1pqiv_1oAZ2H5O.ttf",
        "italic": "http://fonts.gstatic.com/s/cardo/v13/wlpxgwjKBV1pqhv93IQ73W5OcCk.ttf",
        "700": "http://fonts.gstatic.com/s/cardo/v13/wlpygwjKBV1pqhND-aQR82JHaTBX.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Carme",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v11",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/carme/v11/ptRHTiWdbvZIDOjGxLNrxfbZ.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Carrois Gothic",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v11",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/carroisgothic/v11/Z9XPDmFATg-N1PLtLOOxvIHl9ZmD3i7ajcJ-.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Carrois Gothic SC",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v10",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/carroisgothicsc/v10/ZgNJjOVHM6jfUZCmyUqT2A2HVKjc-28nNHabY4dN.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Carter One",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v12",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/carterone/v12/q5uCsoe5IOB2-pXv9UcNIxR2hYxREMs.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Castoro",
      "variants": [
        "regular",
        "italic"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v2",
      "lastModified": "2021-01-21",
      "files": {
        "regular": "http://fonts.gstatic.com/s/castoro/v2/1q2GY5yMCld3-O4cHYhEzOYenEU.ttf",
        "italic": "http://fonts.gstatic.com/s/castoro/v2/1q2EY5yMCld3-O4cLYpOyMQbjEX5fw.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Catamaran",
      "variants": [
        "100",
        "200",
        "300",
        "regular",
        "500",
        "600",
        "700",
        "800",
        "900"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "tamil"
      ],
      "version": "v8",
      "lastModified": "2021-01-30",
      "files": {
        "100": "http://fonts.gstatic.com/s/catamaran/v8/o-0bIpQoyXQa2RxT7-5B6Ryxs2E_6n1iPHjc1anXuluiLyw.ttf",
        "200": "http://fonts.gstatic.com/s/catamaran/v8/o-0bIpQoyXQa2RxT7-5B6Ryxs2E_6n1iPPjd1anXuluiLyw.ttf",
        "300": "http://fonts.gstatic.com/s/catamaran/v8/o-0bIpQoyXQa2RxT7-5B6Ryxs2E_6n1iPCbd1anXuluiLyw.ttf",
        "regular": "http://fonts.gstatic.com/s/catamaran/v8/o-0bIpQoyXQa2RxT7-5B6Ryxs2E_6n1iPHjd1anXuluiLyw.ttf",
        "500": "http://fonts.gstatic.com/s/catamaran/v8/o-0bIpQoyXQa2RxT7-5B6Ryxs2E_6n1iPErd1anXuluiLyw.ttf",
        "600": "http://fonts.gstatic.com/s/catamaran/v8/o-0bIpQoyXQa2RxT7-5B6Ryxs2E_6n1iPKba1anXuluiLyw.ttf",
        "700": "http://fonts.gstatic.com/s/catamaran/v8/o-0bIpQoyXQa2RxT7-5B6Ryxs2E_6n1iPJ_a1anXuluiLyw.ttf",
        "800": "http://fonts.gstatic.com/s/catamaran/v8/o-0bIpQoyXQa2RxT7-5B6Ryxs2E_6n1iPPja1anXuluiLyw.ttf",
        "900": "http://fonts.gstatic.com/s/catamaran/v8/o-0bIpQoyXQa2RxT7-5B6Ryxs2E_6n1iPNHa1anXuluiLyw.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Caudex",
      "variants": [
        "regular",
        "italic",
        "700",
        "700italic"
      ],
      "subsets": [
        "greek",
        "greek-ext",
        "latin",
        "latin-ext"
      ],
      "version": "v10",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/caudex/v10/esDQ311QOP6BJUrIyviAnb4eEw.ttf",
        "italic": "http://fonts.gstatic.com/s/caudex/v10/esDS311QOP6BJUr4yPKEv7sOE4in.ttf",
        "700": "http://fonts.gstatic.com/s/caudex/v10/esDT311QOP6BJUrwdteklZUCGpG-GQ.ttf",
        "700italic": "http://fonts.gstatic.com/s/caudex/v10/esDV311QOP6BJUr4yMo4kJ8GOJSuGdLB.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Caveat",
      "variants": [
        "regular",
        "500",
        "600",
        "700"
      ],
      "subsets": [
        "cyrillic",
        "cyrillic-ext",
        "latin",
        "latin-ext"
      ],
      "version": "v10",
      "lastModified": "2021-01-30",
      "files": {
        "regular": "http://fonts.gstatic.com/s/caveat/v10/WnznHAc5bAfYB2QRah7pcpNvOx-pjfJ9SIKjYBxPigs.ttf",
        "500": "http://fonts.gstatic.com/s/caveat/v10/WnznHAc5bAfYB2QRah7pcpNvOx-pjcB9SIKjYBxPigs.ttf",
        "600": "http://fonts.gstatic.com/s/caveat/v10/WnznHAc5bAfYB2QRah7pcpNvOx-pjSx6SIKjYBxPigs.ttf",
        "700": "http://fonts.gstatic.com/s/caveat/v10/WnznHAc5bAfYB2QRah7pcpNvOx-pjRV6SIKjYBxPigs.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Caveat Brush",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v6",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/caveatbrush/v6/EYq0maZfwr9S9-ETZc3fKXtMW7mT03pdQw.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Cedarville Cursive",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v12",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/cedarvillecursive/v12/yYL00g_a2veiudhUmxjo5VKkoqA-B_neJbBxw8BeTg.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Ceviche One",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v11",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/cevicheone/v11/gyB4hws1IcA6JzR-GB_JX6zdZ4vZVbgZ.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Chakra Petch",
      "variants": [
        "300",
        "300italic",
        "regular",
        "italic",
        "500",
        "500italic",
        "600",
        "600italic",
        "700",
        "700italic"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "thai",
        "vietnamese"
      ],
      "version": "v4",
      "lastModified": "2020-09-02",
      "files": {
        "300": "http://fonts.gstatic.com/s/chakrapetch/v4/cIflMapbsEk7TDLdtEz1BwkeNIhFQJXE3AY00g.ttf",
        "300italic": "http://fonts.gstatic.com/s/chakrapetch/v4/cIfnMapbsEk7TDLdtEz1BwkWmpLJQp_A_gMk0izH.ttf",
        "regular": "http://fonts.gstatic.com/s/chakrapetch/v4/cIf6MapbsEk7TDLdtEz1BwkmmKBhSL7Y1Q.ttf",
        "italic": "http://fonts.gstatic.com/s/chakrapetch/v4/cIfkMapbsEk7TDLdtEz1BwkWmqplarvI1R8t.ttf",
        "500": "http://fonts.gstatic.com/s/chakrapetch/v4/cIflMapbsEk7TDLdtEz1BwkebIlFQJXE3AY00g.ttf",
        "500italic": "http://fonts.gstatic.com/s/chakrapetch/v4/cIfnMapbsEk7TDLdtEz1BwkWmpKRQ5_A_gMk0izH.ttf",
        "600": "http://fonts.gstatic.com/s/chakrapetch/v4/cIflMapbsEk7TDLdtEz1BwkeQI5FQJXE3AY00g.ttf",
        "600italic": "http://fonts.gstatic.com/s/chakrapetch/v4/cIfnMapbsEk7TDLdtEz1BwkWmpK9RJ_A_gMk0izH.ttf",
        "700": "http://fonts.gstatic.com/s/chakrapetch/v4/cIflMapbsEk7TDLdtEz1BwkeJI9FQJXE3AY00g.ttf",
        "700italic": "http://fonts.gstatic.com/s/chakrapetch/v4/cIfnMapbsEk7TDLdtEz1BwkWmpLZRZ_A_gMk0izH.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Changa",
      "variants": [
        "200",
        "300",
        "regular",
        "500",
        "600",
        "700",
        "800"
      ],
      "subsets": [
        "arabic",
        "latin",
        "latin-ext"
      ],
      "version": "v11",
      "lastModified": "2021-01-30",
      "files": {
        "200": "http://fonts.gstatic.com/s/changa/v11/2-c79JNi2YuVOUcOarRPgnNGooxCZy2xQjDp9htf1ZM.ttf",
        "300": "http://fonts.gstatic.com/s/changa/v11/2-c79JNi2YuVOUcOarRPgnNGooxCZ_OxQjDp9htf1ZM.ttf",
        "regular": "http://fonts.gstatic.com/s/changa/v11/2-c79JNi2YuVOUcOarRPgnNGooxCZ62xQjDp9htf1ZM.ttf",
        "500": "http://fonts.gstatic.com/s/changa/v11/2-c79JNi2YuVOUcOarRPgnNGooxCZ5-xQjDp9htf1ZM.ttf",
        "600": "http://fonts.gstatic.com/s/changa/v11/2-c79JNi2YuVOUcOarRPgnNGooxCZ3O2QjDp9htf1ZM.ttf",
        "700": "http://fonts.gstatic.com/s/changa/v11/2-c79JNi2YuVOUcOarRPgnNGooxCZ0q2QjDp9htf1ZM.ttf",
        "800": "http://fonts.gstatic.com/s/changa/v11/2-c79JNi2YuVOUcOarRPgnNGooxCZy22QjDp9htf1ZM.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Changa One",
      "variants": [
        "regular",
        "italic"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v13",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/changaone/v13/xfu00W3wXn3QLUJXhzq46AbouLfbK64.ttf",
        "italic": "http://fonts.gstatic.com/s/changaone/v13/xfu20W3wXn3QLUJXhzq42ATivJXeO67ISw.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Chango",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v9",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/chango/v9/2V0cKI0OB5U7WaJyz324TFUaAw.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Charm",
      "variants": [
        "regular",
        "700"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "thai",
        "vietnamese"
      ],
      "version": "v5",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/charm/v5/7cHmv4oii5K0MeYvIe804WIo.ttf",
        "700": "http://fonts.gstatic.com/s/charm/v5/7cHrv4oii5K0Md6TDss8yn4hnCci.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Charmonman",
      "variants": [
        "regular",
        "700"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "thai",
        "vietnamese"
      ],
      "version": "v5",
      "lastModified": "2020-09-25",
      "files": {
        "regular": "http://fonts.gstatic.com/s/charmonman/v5/MjQDmiR3vP_nuxDv47jiWJGovLdh6OE.ttf",
        "700": "http://fonts.gstatic.com/s/charmonman/v5/MjQAmiR3vP_nuxDv47jiYC2HmL9K9OhmGnY.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Chathura",
      "variants": [
        "100",
        "300",
        "regular",
        "700",
        "800"
      ],
      "subsets": [
        "latin",
        "telugu"
      ],
      "version": "v6",
      "lastModified": "2020-07-23",
      "files": {
        "100": "http://fonts.gstatic.com/s/chathura/v6/_gP91R7-rzUuVjim42dEq0SbTvZyuDo.ttf",
        "300": "http://fonts.gstatic.com/s/chathura/v6/_gP81R7-rzUuVjim42eMiWSxYPp7oSNy.ttf",
        "regular": "http://fonts.gstatic.com/s/chathura/v6/_gP71R7-rzUuVjim418goUC5S-Zy.ttf",
        "700": "http://fonts.gstatic.com/s/chathura/v6/_gP81R7-rzUuVjim42ecjmSxYPp7oSNy.ttf",
        "800": "http://fonts.gstatic.com/s/chathura/v6/_gP81R7-rzUuVjim42eAjWSxYPp7oSNy.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Chau Philomene One",
      "variants": [
        "regular",
        "italic"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v10",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/chauphilomeneone/v10/55xxezRsPtfie1vPY49qzdgSlJiHRQFsnIx7QMISdQ.ttf",
        "italic": "http://fonts.gstatic.com/s/chauphilomeneone/v10/55xzezRsPtfie1vPY49qzdgSlJiHRQFcnoZ_YscCdXQB.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Chela One",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v9",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/chelaone/v9/6ae-4KC7Uqgdz_JZdPIy31vWNTMwoQ.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Chelsea Market",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v8",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/chelseamarket/v8/BCawqZsHqfr89WNP_IApC8tzKBhlLA4uKkWk.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Chenla",
      "variants": [
        "regular"
      ],
      "subsets": [
        "khmer"
      ],
      "version": "v13",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/chenla/v13/SZc43FDpIKu8WZ9eXxfonUPL6Q.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Cherry Cream Soda",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v11",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/cherrycreamsoda/v11/UMBIrOxBrW6w2FFyi9paG0fdVdRciTd6Cd47DJ7G.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Cherry Swash",
      "variants": [
        "regular",
        "700"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v9",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/cherryswash/v9/i7dNIFByZjaNAMxtZcnfAy58QHi-EwWMbg.ttf",
        "700": "http://fonts.gstatic.com/s/cherryswash/v9/i7dSIFByZjaNAMxtZcnfAy5E_FeaGy6QZ3WfYg.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Chewy",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v12",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/chewy/v12/uK_94ruUb-k-wk5xIDMfO-ed.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Chicle",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v9",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/chicle/v9/lJwG-pw9i2dqU-BDyWKuobYSxw.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Chilanka",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "malayalam"
      ],
      "version": "v6",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/chilanka/v6/WWXRlj2DZQiMJYaYRrJQI9EAZhTO.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Chivo",
      "variants": [
        "300",
        "300italic",
        "regular",
        "italic",
        "700",
        "700italic",
        "900",
        "900italic"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v12",
      "lastModified": "2020-09-02",
      "files": {
        "300": "http://fonts.gstatic.com/s/chivo/v12/va9F4kzIxd1KFrjDY8Z_uqzGQC_-.ttf",
        "300italic": "http://fonts.gstatic.com/s/chivo/v12/va9D4kzIxd1KFrBteUp9sKjkRT_-bF0.ttf",
        "regular": "http://fonts.gstatic.com/s/chivo/v12/va9I4kzIxd1KFoBvS-J3kbDP.ttf",
        "italic": "http://fonts.gstatic.com/s/chivo/v12/va9G4kzIxd1KFrBtQeZVlKDPWTY.ttf",
        "700": "http://fonts.gstatic.com/s/chivo/v12/va9F4kzIxd1KFrjTZMZ_uqzGQC_-.ttf",
        "700italic": "http://fonts.gstatic.com/s/chivo/v12/va9D4kzIxd1KFrBteVp6sKjkRT_-bF0.ttf",
        "900": "http://fonts.gstatic.com/s/chivo/v12/va9F4kzIxd1KFrjrZsZ_uqzGQC_-.ttf",
        "900italic": "http://fonts.gstatic.com/s/chivo/v12/va9D4kzIxd1KFrBteWJ4sKjkRT_-bF0.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Chonburi",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "thai",
        "vietnamese"
      ],
      "version": "v5",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/chonburi/v5/8AtqGs-wOpGRTBq66IWaFr3biAfZ.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Cinzel",
      "variants": [
        "regular",
        "500",
        "600",
        "700",
        "800",
        "900"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v11",
      "lastModified": "2021-01-30",
      "files": {
        "regular": "http://fonts.gstatic.com/s/cinzel/v11/8vIU7ww63mVu7gtR-kwKxNvkNOjw-tbnTYrvDE5ZdqU.ttf",
        "500": "http://fonts.gstatic.com/s/cinzel/v11/8vIU7ww63mVu7gtR-kwKxNvkNOjw-uTnTYrvDE5ZdqU.ttf",
        "600": "http://fonts.gstatic.com/s/cinzel/v11/8vIU7ww63mVu7gtR-kwKxNvkNOjw-gjgTYrvDE5ZdqU.ttf",
        "700": "http://fonts.gstatic.com/s/cinzel/v11/8vIU7ww63mVu7gtR-kwKxNvkNOjw-jHgTYrvDE5ZdqU.ttf",
        "800": "http://fonts.gstatic.com/s/cinzel/v11/8vIU7ww63mVu7gtR-kwKxNvkNOjw-lbgTYrvDE5ZdqU.ttf",
        "900": "http://fonts.gstatic.com/s/cinzel/v11/8vIU7ww63mVu7gtR-kwKxNvkNOjw-n_gTYrvDE5ZdqU.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Cinzel Decorative",
      "variants": [
        "regular",
        "700",
        "900"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v9",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/cinzeldecorative/v9/daaCSScvJGqLYhG8nNt8KPPswUAPnh7URs1LaCyC.ttf",
        "700": "http://fonts.gstatic.com/s/cinzeldecorative/v9/daaHSScvJGqLYhG8nNt8KPPswUAPniZoaelDQzCLlQXE.ttf",
        "900": "http://fonts.gstatic.com/s/cinzeldecorative/v9/daaHSScvJGqLYhG8nNt8KPPswUAPniZQa-lDQzCLlQXE.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Clicker Script",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v8",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/clickerscript/v8/raxkHiKPvt8CMH6ZWP8PdlEq72rY2zqUKafv.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Coda",
      "variants": [
        "regular",
        "800"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v16",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/coda/v16/SLXHc1jY5nQ8JUIMapaN39I.ttf",
        "800": "http://fonts.gstatic.com/s/coda/v16/SLXIc1jY5nQ8HeIgTp6mw9t1cX8.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Coda Caption",
      "variants": [
        "800"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v14",
      "lastModified": "2020-09-02",
      "files": {
        "800": "http://fonts.gstatic.com/s/codacaption/v14/ieVm2YRII2GMY7SyXSoDRiQGqcx6x_-fACIgaw.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Codystar",
      "variants": [
        "300",
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v8",
      "lastModified": "2020-07-23",
      "files": {
        "300": "http://fonts.gstatic.com/s/codystar/v8/FwZf7-Q1xVk-40qxOuYsyuyrj0e29bfC.ttf",
        "regular": "http://fonts.gstatic.com/s/codystar/v8/FwZY7-Q1xVk-40qxOt6A4sijpFu_.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Coiny",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "tamil",
        "vietnamese"
      ],
      "version": "v6",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/coiny/v6/gyByhwU1K989PXwbElSvO5Tc.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Combo",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v9",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/combo/v9/BXRlvF3Jh_fIhg0iBu9y8Hf0.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Comfortaa",
      "variants": [
        "300",
        "regular",
        "500",
        "600",
        "700"
      ],
      "subsets": [
        "cyrillic",
        "cyrillic-ext",
        "greek",
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v30",
      "lastModified": "2021-01-30",
      "files": {
        "300": "http://fonts.gstatic.com/s/comfortaa/v30/1Pt_g8LJRfWJmhDAuUsSQamb1W0lwk4S4TbMPrQVIT9c2c8.ttf",
        "regular": "http://fonts.gstatic.com/s/comfortaa/v30/1Pt_g8LJRfWJmhDAuUsSQamb1W0lwk4S4WjMPrQVIT9c2c8.ttf",
        "500": "http://fonts.gstatic.com/s/comfortaa/v30/1Pt_g8LJRfWJmhDAuUsSQamb1W0lwk4S4VrMPrQVIT9c2c8.ttf",
        "600": "http://fonts.gstatic.com/s/comfortaa/v30/1Pt_g8LJRfWJmhDAuUsSQamb1W0lwk4S4bbLPrQVIT9c2c8.ttf",
        "700": "http://fonts.gstatic.com/s/comfortaa/v30/1Pt_g8LJRfWJmhDAuUsSQamb1W0lwk4S4Y_LPrQVIT9c2c8.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Comic Neue",
      "variants": [
        "300",
        "300italic",
        "regular",
        "italic",
        "700",
        "700italic"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v2",
      "lastModified": "2020-07-23",
      "files": {
        "300": "http://fonts.gstatic.com/s/comicneue/v2/4UaErEJDsxBrF37olUeD_wHLwpteLwtHJlc.ttf",
        "300italic": "http://fonts.gstatic.com/s/comicneue/v2/4UaarEJDsxBrF37olUeD96_RTplUKylCNlcw_Q.ttf",
        "regular": "http://fonts.gstatic.com/s/comicneue/v2/4UaHrEJDsxBrF37olUeDx63j5pN1MwI.ttf",
        "italic": "http://fonts.gstatic.com/s/comicneue/v2/4UaFrEJDsxBrF37olUeD96_p4rFwIwJePw.ttf",
        "700": "http://fonts.gstatic.com/s/comicneue/v2/4UaErEJDsxBrF37olUeD_xHMwpteLwtHJlc.ttf",
        "700italic": "http://fonts.gstatic.com/s/comicneue/v2/4UaarEJDsxBrF37olUeD96_RXp5UKylCNlcw_Q.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Coming Soon",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v12",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/comingsoon/v12/qWcuB6mzpYL7AJ2VfdQR1u-SUjjzsykh.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Commissioner",
      "variants": [
        "100",
        "200",
        "300",
        "regular",
        "500",
        "600",
        "700",
        "800",
        "900"
      ],
      "subsets": [
        "cyrillic",
        "cyrillic-ext",
        "greek",
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v3",
      "lastModified": "2021-01-21",
      "files": {
        "100": "http://fonts.gstatic.com/s/commissioner/v3/tDbe2o2WnlgI0FNDgduEk4jAhwgIy5k8SlfU5Ni-IO9pOXuRoaY.ttf",
        "200": "http://fonts.gstatic.com/s/commissioner/v3/tDbe2o2WnlgI0FNDgduEk4jAhwgIy5k8SlfU5Fi_IO9pOXuRoaY.ttf",
        "300": "http://fonts.gstatic.com/s/commissioner/v3/tDbe2o2WnlgI0FNDgduEk4jAhwgIy5k8SlfU5Ia_IO9pOXuRoaY.ttf",
        "regular": "http://fonts.gstatic.com/s/commissioner/v3/tDbe2o2WnlgI0FNDgduEk4jAhwgIy5k8SlfU5Ni_IO9pOXuRoaY.ttf",
        "500": "http://fonts.gstatic.com/s/commissioner/v3/tDbe2o2WnlgI0FNDgduEk4jAhwgIy5k8SlfU5Oq_IO9pOXuRoaY.ttf",
        "600": "http://fonts.gstatic.com/s/commissioner/v3/tDbe2o2WnlgI0FNDgduEk4jAhwgIy5k8SlfU5Aa4IO9pOXuRoaY.ttf",
        "700": "http://fonts.gstatic.com/s/commissioner/v3/tDbe2o2WnlgI0FNDgduEk4jAhwgIy5k8SlfU5D-4IO9pOXuRoaY.ttf",
        "800": "http://fonts.gstatic.com/s/commissioner/v3/tDbe2o2WnlgI0FNDgduEk4jAhwgIy5k8SlfU5Fi4IO9pOXuRoaY.ttf",
        "900": "http://fonts.gstatic.com/s/commissioner/v3/tDbe2o2WnlgI0FNDgduEk4jAhwgIy5k8SlfU5HG4IO9pOXuRoaY.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Concert One",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v11",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/concertone/v11/VEM1Ro9xs5PjtzCu-srDqRTlhv-CuVAQ.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Condiment",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v8",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/condiment/v8/pONk1hggFNmwvXALyH6Sq4n4o1vyCQ.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Content",
      "variants": [
        "regular",
        "700"
      ],
      "subsets": [
        "khmer"
      ],
      "version": "v13",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/content/v13/zrfl0HLayePhU_AwUaDyIiL0RCg.ttf",
        "700": "http://fonts.gstatic.com/s/content/v13/zrfg0HLayePhU_AwaRzdBirfWCHvkAI.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Contrail One",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v10",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/contrailone/v10/eLGbP-j_JA-kG0_Zo51noafdZUvt_c092w.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Convergence",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v9",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/convergence/v9/rax5HiePvdgXPmmMHcIPYRhasU7Q8Cad.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Cookie",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v12",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/cookie/v12/syky-y18lb0tSbfNlQCT9tPdpw.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Copse",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v10",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/copse/v10/11hPGpDKz1rGb0djHkihUb-A.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Corben",
      "variants": [
        "regular",
        "700"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v14",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/corben/v14/LYjDdGzzklQtCMp9oAlEpVs3VQ.ttf",
        "700": "http://fonts.gstatic.com/s/corben/v14/LYjAdGzzklQtCMpFHCZgrXArXN7HWQ.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Cormorant",
      "variants": [
        "300",
        "300italic",
        "regular",
        "italic",
        "500",
        "500italic",
        "600",
        "600italic",
        "700",
        "700italic"
      ],
      "subsets": [
        "cyrillic",
        "cyrillic-ext",
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v10",
      "lastModified": "2020-09-25",
      "files": {
        "300": "http://fonts.gstatic.com/s/cormorant/v10/H4cgBXOCl9bbnla_nHIiRLmYgoyyYzFzFw.ttf",
        "300italic": "http://fonts.gstatic.com/s/cormorant/v10/H4c-BXOCl9bbnla_nHIq6qMUgIa2QTRjF8ER.ttf",
        "regular": "http://fonts.gstatic.com/s/cormorant/v10/H4clBXOCl9bbnla_nHIa6JG8iqeuag.ttf",
        "italic": "http://fonts.gstatic.com/s/cormorant/v10/H4cjBXOCl9bbnla_nHIq6pu4qKK-aihq.ttf",
        "500": "http://fonts.gstatic.com/s/cormorant/v10/H4cgBXOCl9bbnla_nHIiHLiYgoyyYzFzFw.ttf",
        "500italic": "http://fonts.gstatic.com/s/cormorant/v10/H4c-BXOCl9bbnla_nHIq6qNMgYa2QTRjF8ER.ttf",
        "600": "http://fonts.gstatic.com/s/cormorant/v10/H4cgBXOCl9bbnla_nHIiML-YgoyyYzFzFw.ttf",
        "600italic": "http://fonts.gstatic.com/s/cormorant/v10/H4c-BXOCl9bbnla_nHIq6qNghoa2QTRjF8ER.ttf",
        "700": "http://fonts.gstatic.com/s/cormorant/v10/H4cgBXOCl9bbnla_nHIiVL6YgoyyYzFzFw.ttf",
        "700italic": "http://fonts.gstatic.com/s/cormorant/v10/H4c-BXOCl9bbnla_nHIq6qMEh4a2QTRjF8ER.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Cormorant Garamond",
      "variants": [
        "300",
        "300italic",
        "regular",
        "italic",
        "500",
        "500italic",
        "600",
        "600italic",
        "700",
        "700italic"
      ],
      "subsets": [
        "cyrillic",
        "cyrillic-ext",
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v9",
      "lastModified": "2020-09-25",
      "files": {
        "300": "http://fonts.gstatic.com/s/cormorantgaramond/v9/co3YmX5slCNuHLi8bLeY9MK7whWMhyjQAllvuQWJ5heb_w.ttf",
        "300italic": "http://fonts.gstatic.com/s/cormorantgaramond/v9/co3WmX5slCNuHLi8bLeY9MK7whWMhyjYrEPjuw-NxBKL_y94.ttf",
        "regular": "http://fonts.gstatic.com/s/cormorantgaramond/v9/co3bmX5slCNuHLi8bLeY9MK7whWMhyjornFLsS6V7w.ttf",
        "italic": "http://fonts.gstatic.com/s/cormorantgaramond/v9/co3ZmX5slCNuHLi8bLeY9MK7whWMhyjYrHtPkyuF7w6C.ttf",
        "500": "http://fonts.gstatic.com/s/cormorantgaramond/v9/co3YmX5slCNuHLi8bLeY9MK7whWMhyjQWlhvuQWJ5heb_w.ttf",
        "500italic": "http://fonts.gstatic.com/s/cormorantgaramond/v9/co3WmX5slCNuHLi8bLeY9MK7whWMhyjYrEO7ug-NxBKL_y94.ttf",
        "600": "http://fonts.gstatic.com/s/cormorantgaramond/v9/co3YmX5slCNuHLi8bLeY9MK7whWMhyjQdl9vuQWJ5heb_w.ttf",
        "600italic": "http://fonts.gstatic.com/s/cormorantgaramond/v9/co3WmX5slCNuHLi8bLeY9MK7whWMhyjYrEOXvQ-NxBKL_y94.ttf",
        "700": "http://fonts.gstatic.com/s/cormorantgaramond/v9/co3YmX5slCNuHLi8bLeY9MK7whWMhyjQEl5vuQWJ5heb_w.ttf",
        "700italic": "http://fonts.gstatic.com/s/cormorantgaramond/v9/co3WmX5slCNuHLi8bLeY9MK7whWMhyjYrEPzvA-NxBKL_y94.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Cormorant Infant",
      "variants": [
        "300",
        "300italic",
        "regular",
        "italic",
        "500",
        "500italic",
        "600",
        "600italic",
        "700",
        "700italic"
      ],
      "subsets": [
        "cyrillic",
        "cyrillic-ext",
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v10",
      "lastModified": "2020-09-25",
      "files": {
        "300": "http://fonts.gstatic.com/s/cormorantinfant/v10/HhyIU44g9vKiM1sORYSiWeAsLN9951w3_DMrQqcdJrk.ttf",
        "300italic": "http://fonts.gstatic.com/s/cormorantinfant/v10/HhyKU44g9vKiM1sORYSiWeAsLN997_ItcDEhRoUYNrn_Ig.ttf",
        "regular": "http://fonts.gstatic.com/s/cormorantinfant/v10/HhyPU44g9vKiM1sORYSiWeAsLN993_Af2DsAXq4.ttf",
        "italic": "http://fonts.gstatic.com/s/cormorantinfant/v10/HhyJU44g9vKiM1sORYSiWeAsLN997_IV3BkFTq4EPw.ttf",
        "500": "http://fonts.gstatic.com/s/cormorantinfant/v10/HhyIU44g9vKiM1sORYSiWeAsLN995wQ2_DMrQqcdJrk.ttf",
        "500italic": "http://fonts.gstatic.com/s/cormorantinfant/v10/HhyKU44g9vKiM1sORYSiWeAsLN997_ItKDAhRoUYNrn_Ig.ttf",
        "600": "http://fonts.gstatic.com/s/cormorantinfant/v10/HhyIU44g9vKiM1sORYSiWeAsLN995ygx_DMrQqcdJrk.ttf",
        "600italic": "http://fonts.gstatic.com/s/cormorantinfant/v10/HhyKU44g9vKiM1sORYSiWeAsLN997_ItBDchRoUYNrn_Ig.ttf",
        "700": "http://fonts.gstatic.com/s/cormorantinfant/v10/HhyIU44g9vKiM1sORYSiWeAsLN9950ww_DMrQqcdJrk.ttf",
        "700italic": "http://fonts.gstatic.com/s/cormorantinfant/v10/HhyKU44g9vKiM1sORYSiWeAsLN997_ItYDYhRoUYNrn_Ig.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Cormorant SC",
      "variants": [
        "300",
        "regular",
        "500",
        "600",
        "700"
      ],
      "subsets": [
        "cyrillic",
        "cyrillic-ext",
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v10",
      "lastModified": "2020-09-25",
      "files": {
        "300": "http://fonts.gstatic.com/s/cormorantsc/v10/0ybmGD4kxqXBmOVLG30OGwsmABIU_R3y8DOWGA.ttf",
        "regular": "http://fonts.gstatic.com/s/cormorantsc/v10/0yb5GD4kxqXBmOVLG30OGwserDow9Tbu-Q.ttf",
        "500": "http://fonts.gstatic.com/s/cormorantsc/v10/0ybmGD4kxqXBmOVLG30OGwsmWBMU_R3y8DOWGA.ttf",
        "600": "http://fonts.gstatic.com/s/cormorantsc/v10/0ybmGD4kxqXBmOVLG30OGwsmdBQU_R3y8DOWGA.ttf",
        "700": "http://fonts.gstatic.com/s/cormorantsc/v10/0ybmGD4kxqXBmOVLG30OGwsmEBUU_R3y8DOWGA.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Cormorant Unicase",
      "variants": [
        "300",
        "regular",
        "500",
        "600",
        "700"
      ],
      "subsets": [
        "cyrillic",
        "cyrillic-ext",
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v10",
      "lastModified": "2020-09-25",
      "files": {
        "300": "http://fonts.gstatic.com/s/cormorantunicase/v10/HI_ViZUaILtOqhqgDeXoF_n1_fTGX9N_tucv7Gy0DRzS.ttf",
        "regular": "http://fonts.gstatic.com/s/cormorantunicase/v10/HI_QiZUaILtOqhqgDeXoF_n1_fTGX-vTnsMnx3C9.ttf",
        "500": "http://fonts.gstatic.com/s/cormorantunicase/v10/HI_ViZUaILtOqhqgDeXoF_n1_fTGX9Mnt-cv7Gy0DRzS.ttf",
        "600": "http://fonts.gstatic.com/s/cormorantunicase/v10/HI_ViZUaILtOqhqgDeXoF_n1_fTGX9MLsOcv7Gy0DRzS.ttf",
        "700": "http://fonts.gstatic.com/s/cormorantunicase/v10/HI_ViZUaILtOqhqgDeXoF_n1_fTGX9Nvsecv7Gy0DRzS.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Cormorant Upright",
      "variants": [
        "300",
        "regular",
        "500",
        "600",
        "700"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v8",
      "lastModified": "2020-09-25",
      "files": {
        "300": "http://fonts.gstatic.com/s/cormorantupright/v8/VuJudM3I2Y35poFONtLdafkUCHw1y1N5phDsU9X6RPzQ.ttf",
        "regular": "http://fonts.gstatic.com/s/cormorantupright/v8/VuJrdM3I2Y35poFONtLdafkUCHw1y2vVjjTkeMnz.ttf",
        "500": "http://fonts.gstatic.com/s/cormorantupright/v8/VuJudM3I2Y35poFONtLdafkUCHw1y1MhpxDsU9X6RPzQ.ttf",
        "600": "http://fonts.gstatic.com/s/cormorantupright/v8/VuJudM3I2Y35poFONtLdafkUCHw1y1MNoBDsU9X6RPzQ.ttf",
        "700": "http://fonts.gstatic.com/s/cormorantupright/v8/VuJudM3I2Y35poFONtLdafkUCHw1y1NpoRDsU9X6RPzQ.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Courgette",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v8",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/courgette/v8/wEO_EBrAnc9BLjLQAUkFUfAL3EsHiA.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Courier Prime",
      "variants": [
        "regular",
        "italic",
        "700",
        "700italic"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v2",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/courierprime/v2/u-450q2lgwslOqpF_6gQ8kELWwZjW-_-tvg.ttf",
        "italic": "http://fonts.gstatic.com/s/courierprime/v2/u-4n0q2lgwslOqpF_6gQ8kELawRpX837pvjxPA.ttf",
        "700": "http://fonts.gstatic.com/s/courierprime/v2/u-4k0q2lgwslOqpF_6gQ8kELY7pMf-fVqvHoJXw.ttf",
        "700italic": "http://fonts.gstatic.com/s/courierprime/v2/u-4i0q2lgwslOqpF_6gQ8kELawRR4-LfrtPtNXyeAg.ttf"
      },
      "category": "monospace",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Cousine",
      "variants": [
        "regular",
        "italic",
        "700",
        "700italic"
      ],
      "subsets": [
        "cyrillic",
        "cyrillic-ext",
        "greek",
        "greek-ext",
        "hebrew",
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v16",
      "lastModified": "2020-09-25",
      "files": {
        "regular": "http://fonts.gstatic.com/s/cousine/v16/d6lIkaiiRdih4SpPzSMlzTbtz9k.ttf",
        "italic": "http://fonts.gstatic.com/s/cousine/v16/d6lKkaiiRdih4SpP_SEvyRTo39l8hw.ttf",
        "700": "http://fonts.gstatic.com/s/cousine/v16/d6lNkaiiRdih4SpP9Z8K6T7G09BlnmQ.ttf",
        "700italic": "http://fonts.gstatic.com/s/cousine/v16/d6lPkaiiRdih4SpP_SEXdTvM1_JgjmRpOA.ttf"
      },
      "category": "monospace",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Coustard",
      "variants": [
        "regular",
        "900"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v11",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/coustard/v11/3XFpErgg3YsZ5fqUU9UPvWXuROTd.ttf",
        "900": "http://fonts.gstatic.com/s/coustard/v11/3XFuErgg3YsZ5fqUU-2LkEHmb_jU3eRL.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Covered By Your Grace",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v10",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/coveredbyyourgrace/v10/QGYwz-AZahWOJJI9kykWW9mD6opopoqXSOS0FgItq6bFIg.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Crafty Girls",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v10",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/craftygirls/v10/va9B4kXI39VaDdlPJo8N_NvuQR37fF3Wlg.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Creepster",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v9",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/creepster/v9/AlZy_zVUqJz4yMrniH4hdXf4XB0Tow.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Crete Round",
      "variants": [
        "regular",
        "italic"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v9",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/creteround/v9/55xoey1sJNPjPiv1ZZZrxJ1827zAKnxN.ttf",
        "italic": "http://fonts.gstatic.com/s/creteround/v9/55xqey1sJNPjPiv1ZZZrxK1-0bjiL2xNhKc.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Crimson Pro",
      "variants": [
        "200",
        "300",
        "regular",
        "500",
        "600",
        "700",
        "800",
        "900",
        "200italic",
        "300italic",
        "italic",
        "500italic",
        "600italic",
        "700italic",
        "800italic",
        "900italic"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v14",
      "lastModified": "2021-01-30",
      "files": {
        "200": "http://fonts.gstatic.com/s/crimsonpro/v14/q5uUsoa5M_tv7IihmnkabC5XiXCAlXGks1WZTm18OJE_VNWoyQ.ttf",
        "300": "http://fonts.gstatic.com/s/crimsonpro/v14/q5uUsoa5M_tv7IihmnkabC5XiXCAlXGks1WZkG18OJE_VNWoyQ.ttf",
        "regular": "http://fonts.gstatic.com/s/crimsonpro/v14/q5uUsoa5M_tv7IihmnkabC5XiXCAlXGks1WZzm18OJE_VNWoyQ.ttf",
        "500": "http://fonts.gstatic.com/s/crimsonpro/v14/q5uUsoa5M_tv7IihmnkabC5XiXCAlXGks1WZ_G18OJE_VNWoyQ.ttf",
        "600": "http://fonts.gstatic.com/s/crimsonpro/v14/q5uUsoa5M_tv7IihmnkabC5XiXCAlXGks1WZEGp8OJE_VNWoyQ.ttf",
        "700": "http://fonts.gstatic.com/s/crimsonpro/v14/q5uUsoa5M_tv7IihmnkabC5XiXCAlXGks1WZKWp8OJE_VNWoyQ.ttf",
        "800": "http://fonts.gstatic.com/s/crimsonpro/v14/q5uUsoa5M_tv7IihmnkabC5XiXCAlXGks1WZTmp8OJE_VNWoyQ.ttf",
        "900": "http://fonts.gstatic.com/s/crimsonpro/v14/q5uUsoa5M_tv7IihmnkabC5XiXCAlXGks1WZZ2p8OJE_VNWoyQ.ttf",
        "200italic": "http://fonts.gstatic.com/s/crimsonpro/v14/q5uSsoa5M_tv7IihmnkabAReu49Y_Bo-HVKMBi4Ue5s7dtC4yZNE.ttf",
        "300italic": "http://fonts.gstatic.com/s/crimsonpro/v14/q5uSsoa5M_tv7IihmnkabAReu49Y_Bo-HVKMBi7Ke5s7dtC4yZNE.ttf",
        "italic": "http://fonts.gstatic.com/s/crimsonpro/v14/q5uSsoa5M_tv7IihmnkabAReu49Y_Bo-HVKMBi6Ue5s7dtC4yZNE.ttf",
        "500italic": "http://fonts.gstatic.com/s/crimsonpro/v14/q5uSsoa5M_tv7IihmnkabAReu49Y_Bo-HVKMBi6me5s7dtC4yZNE.ttf",
        "600italic": "http://fonts.gstatic.com/s/crimsonpro/v14/q5uSsoa5M_tv7IihmnkabAReu49Y_Bo-HVKMBi5KfJs7dtC4yZNE.ttf",
        "700italic": "http://fonts.gstatic.com/s/crimsonpro/v14/q5uSsoa5M_tv7IihmnkabAReu49Y_Bo-HVKMBi5zfJs7dtC4yZNE.ttf",
        "800italic": "http://fonts.gstatic.com/s/crimsonpro/v14/q5uSsoa5M_tv7IihmnkabAReu49Y_Bo-HVKMBi4UfJs7dtC4yZNE.ttf",
        "900italic": "http://fonts.gstatic.com/s/crimsonpro/v14/q5uSsoa5M_tv7IihmnkabAReu49Y_Bo-HVKMBi49fJs7dtC4yZNE.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Crimson Text",
      "variants": [
        "regular",
        "italic",
        "600",
        "600italic",
        "700",
        "700italic"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v11",
      "lastModified": "2020-09-10",
      "files": {
        "regular": "http://fonts.gstatic.com/s/crimsontext/v11/wlp2gwHKFkZgtmSR3NB0oRJvaAJSA_JN3Q.ttf",
        "italic": "http://fonts.gstatic.com/s/crimsontext/v11/wlpogwHKFkZgtmSR3NB0oRJfaghWIfdd3ahG.ttf",
        "600": "http://fonts.gstatic.com/s/crimsontext/v11/wlppgwHKFkZgtmSR3NB0oRJXsCx2C9lR1LFffg.ttf",
        "600italic": "http://fonts.gstatic.com/s/crimsontext/v11/wlprgwHKFkZgtmSR3NB0oRJfajCOD9NV9rRPfrKu.ttf",
        "700": "http://fonts.gstatic.com/s/crimsontext/v11/wlppgwHKFkZgtmSR3NB0oRJX1C12C9lR1LFffg.ttf",
        "700italic": "http://fonts.gstatic.com/s/crimsontext/v11/wlprgwHKFkZgtmSR3NB0oRJfajDqDtNV9rRPfrKu.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Croissant One",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v8",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/croissantone/v8/3y9n6bU9bTPg4m8NDy3Kq24UM3pqn5cdJ-4.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Crushed",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v11",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/crushed/v11/U9Mc6dym6WXImTlFT1kfuIqyLzA.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Cuprum",
      "variants": [
        "regular",
        "500",
        "600",
        "700",
        "italic",
        "500italic",
        "600italic",
        "700italic"
      ],
      "subsets": [
        "cyrillic",
        "cyrillic-ext",
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v14",
      "lastModified": "2021-01-30",
      "files": {
        "regular": "http://fonts.gstatic.com/s/cuprum/v14/dg45_pLmvrkcOkBnKsOzXyGWTBcmg-X6ZjzSJjQjgnU.ttf",
        "500": "http://fonts.gstatic.com/s/cuprum/v14/dg45_pLmvrkcOkBnKsOzXyGWTBcmg9f6ZjzSJjQjgnU.ttf",
        "600": "http://fonts.gstatic.com/s/cuprum/v14/dg45_pLmvrkcOkBnKsOzXyGWTBcmgzv9ZjzSJjQjgnU.ttf",
        "700": "http://fonts.gstatic.com/s/cuprum/v14/dg45_pLmvrkcOkBnKsOzXyGWTBcmgwL9ZjzSJjQjgnU.ttf",
        "italic": "http://fonts.gstatic.com/s/cuprum/v14/dg47_pLmvrkcOkBNI_FMh0j91rkhli25jn_YIhYmknUPEA.ttf",
        "500italic": "http://fonts.gstatic.com/s/cuprum/v14/dg47_pLmvrkcOkBNI_FMh0j91rkhli25vH_YIhYmknUPEA.ttf",
        "600italic": "http://fonts.gstatic.com/s/cuprum/v14/dg47_pLmvrkcOkBNI_FMh0j91rkhli25UHjYIhYmknUPEA.ttf",
        "700italic": "http://fonts.gstatic.com/s/cuprum/v14/dg47_pLmvrkcOkBNI_FMh0j91rkhli25aXjYIhYmknUPEA.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Cute Font",
      "variants": [
        "regular"
      ],
      "subsets": [
        "korean",
        "latin"
      ],
      "version": "v8",
      "lastModified": "2019-07-16",
      "files": {
        "regular": "http://fonts.gstatic.com/s/cutefont/v8/Noaw6Uny2oWPbSHMrY6vmJNVNC9hkw.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Cutive",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v12",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/cutive/v12/NaPZcZ_fHOhV3Ip7T_hDoyqlZQ.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Cutive Mono",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v9",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/cutivemono/v9/m8JWjfRfY7WVjVi2E-K9H5RFRG-K3Mud.ttf"
      },
      "category": "monospace",
      "kind": "webfonts#webfont"
    },
    {
      "family": "DM Mono",
      "variants": [
        "300",
        "300italic",
        "regular",
        "italic",
        "500",
        "500italic"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v3",
      "lastModified": "2021-01-21",
      "files": {
        "300": "http://fonts.gstatic.com/s/dmmono/v3/aFTR7PB1QTsUX8KYvrGyIYSnbKX9Rlk.ttf",
        "300italic": "http://fonts.gstatic.com/s/dmmono/v3/aFTT7PB1QTsUX8KYth-orYataIf4VllXuA.ttf",
        "regular": "http://fonts.gstatic.com/s/dmmono/v3/aFTU7PB1QTsUX8KYhh2aBYyMcKw.ttf",
        "italic": "http://fonts.gstatic.com/s/dmmono/v3/aFTW7PB1QTsUX8KYth-QAa6JYKzkXw.ttf",
        "500": "http://fonts.gstatic.com/s/dmmono/v3/aFTR7PB1QTsUX8KYvumzIYSnbKX9Rlk.ttf",
        "500italic": "http://fonts.gstatic.com/s/dmmono/v3/aFTT7PB1QTsUX8KYth-o9YetaIf4VllXuA.ttf"
      },
      "category": "monospace",
      "kind": "webfonts#webfont"
    },
    {
      "family": "DM Sans",
      "variants": [
        "regular",
        "italic",
        "500",
        "500italic",
        "700",
        "700italic"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v6",
      "lastModified": "2020-11-06",
      "files": {
        "regular": "http://fonts.gstatic.com/s/dmsans/v6/rP2Hp2ywxg089UriOZSCHBeHFl0.ttf",
        "italic": "http://fonts.gstatic.com/s/dmsans/v6/rP2Fp2ywxg089UriCZaIGDWCBl0O8Q.ttf",
        "500": "http://fonts.gstatic.com/s/dmsans/v6/rP2Cp2ywxg089UriAWCrOB-sClQX6Cg.ttf",
        "500italic": "http://fonts.gstatic.com/s/dmsans/v6/rP2Ap2ywxg089UriCZaw7BymDnYS-Cjk6Q.ttf",
        "700": "http://fonts.gstatic.com/s/dmsans/v6/rP2Cp2ywxg089UriASitOB-sClQX6Cg.ttf",
        "700italic": "http://fonts.gstatic.com/s/dmsans/v6/rP2Ap2ywxg089UriCZawpBqmDnYS-Cjk6Q.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "DM Serif Display",
      "variants": [
        "regular",
        "italic"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v4",
      "lastModified": "2019-11-19",
      "files": {
        "regular": "http://fonts.gstatic.com/s/dmserifdisplay/v4/-nFnOHM81r4j6k0gjAW3mujVU2B2K_d709jy92k.ttf",
        "italic": "http://fonts.gstatic.com/s/dmserifdisplay/v4/-nFhOHM81r4j6k0gjAW3mujVU2B2G_Vx1_r352np3Q.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "DM Serif Text",
      "variants": [
        "regular",
        "italic"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v4",
      "lastModified": "2019-11-19",
      "files": {
        "regular": "http://fonts.gstatic.com/s/dmseriftext/v4/rnCu-xZa_krGokauCeNq1wWyafOPXHIJErY.ttf",
        "italic": "http://fonts.gstatic.com/s/dmseriftext/v4/rnCw-xZa_krGokauCeNq1wWyWfGFWFAMArZKqQ.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Damion",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v10",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/damion/v10/hv-XlzJ3KEUe_YZUbWY3MTFgVg.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Dancing Script",
      "variants": [
        "regular",
        "500",
        "600",
        "700"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v16",
      "lastModified": "2021-01-30",
      "files": {
        "regular": "http://fonts.gstatic.com/s/dancingscript/v16/If2cXTr6YS-zF4S-kcSWSVi_sxjsohD9F50Ruu7BMSoHTeB9ptDqpw.ttf",
        "500": "http://fonts.gstatic.com/s/dancingscript/v16/If2cXTr6YS-zF4S-kcSWSVi_sxjsohD9F50Ruu7BAyoHTeB9ptDqpw.ttf",
        "600": "http://fonts.gstatic.com/s/dancingscript/v16/If2cXTr6YS-zF4S-kcSWSVi_sxjsohD9F50Ruu7B7y0HTeB9ptDqpw.ttf",
        "700": "http://fonts.gstatic.com/s/dancingscript/v16/If2cXTr6YS-zF4S-kcSWSVi_sxjsohD9F50Ruu7B1i0HTeB9ptDqpw.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Dangrek",
      "variants": [
        "regular"
      ],
      "subsets": [
        "khmer"
      ],
      "version": "v12",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/dangrek/v12/LYjCdG30nEgoH8E2gCNqqVIuTN4.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Darker Grotesque",
      "variants": [
        "300",
        "regular",
        "500",
        "600",
        "700",
        "800",
        "900"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v2",
      "lastModified": "2020-07-23",
      "files": {
        "300": "http://fonts.gstatic.com/s/darkergrotesque/v2/U9MA6cuh-mLQlC4BKCtayOfARkSVoxr2AW8hTOsXsX0.ttf",
        "regular": "http://fonts.gstatic.com/s/darkergrotesque/v2/U9MH6cuh-mLQlC4BKCtayOfARkSVm7beJWcKUOI.ttf",
        "500": "http://fonts.gstatic.com/s/darkergrotesque/v2/U9MA6cuh-mLQlC4BKCtayOfARkSVo0L3AW8hTOsXsX0.ttf",
        "600": "http://fonts.gstatic.com/s/darkergrotesque/v2/U9MA6cuh-mLQlC4BKCtayOfARkSVo27wAW8hTOsXsX0.ttf",
        "700": "http://fonts.gstatic.com/s/darkergrotesque/v2/U9MA6cuh-mLQlC4BKCtayOfARkSVowrxAW8hTOsXsX0.ttf",
        "800": "http://fonts.gstatic.com/s/darkergrotesque/v2/U9MA6cuh-mLQlC4BKCtayOfARkSVoxbyAW8hTOsXsX0.ttf",
        "900": "http://fonts.gstatic.com/s/darkergrotesque/v2/U9MA6cuh-mLQlC4BKCtayOfARkSVozLzAW8hTOsXsX0.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "David Libre",
      "variants": [
        "regular",
        "500",
        "700"
      ],
      "subsets": [
        "hebrew",
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v5",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/davidlibre/v5/snfus0W_99N64iuYSvp4W_l86p6TYS-Y.ttf",
        "500": "http://fonts.gstatic.com/s/davidlibre/v5/snfzs0W_99N64iuYSvp4W8GIw7qbSjORSo9W.ttf",
        "700": "http://fonts.gstatic.com/s/davidlibre/v5/snfzs0W_99N64iuYSvp4W8HAxbqbSjORSo9W.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Dawning of a New Day",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v11",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/dawningofanewday/v11/t5t_IQMbOp2SEwuncwLRjMfIg1yYit_nAz8bhWJGNoBE.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Days One",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v10",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/daysone/v10/mem9YaCnxnKRiYZOCLYVeLkWVNBt.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Dekko",
      "variants": [
        "regular"
      ],
      "subsets": [
        "devanagari",
        "latin",
        "latin-ext"
      ],
      "version": "v7",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/dekko/v7/46khlb_wWjfSrttFR0vsfl1B.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Delius",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v10",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/delius/v10/PN_xRfK0pW_9e1rtYcI-jT3L_w.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Delius Swash Caps",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v12",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/deliusswashcaps/v12/oY1E8fPLr7v4JWCExZpWebxVKORpXXedKmeBvEYs.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Delius Unicase",
      "variants": [
        "regular",
        "700"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v14",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/deliusunicase/v14/845BNMEwEIOVT8BmgfSzIr_6mmLHd-73LXWs.ttf",
        "700": "http://fonts.gstatic.com/s/deliusunicase/v14/845CNMEwEIOVT8BmgfSzIr_6mlp7WMr_BmmlS5aw.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Della Respira",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v8",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/dellarespira/v8/RLp5K5v44KaueWI6iEJQBiGPRfkSu6EuTHo.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Denk One",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v8",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/denkone/v8/dg4m_pzhrqcFb2IzROtHpbglShon.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Devonshire",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v9",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/devonshire/v9/46kqlbDwWirWr4gtBD2BX0Vq01lYAZM.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Dhurjati",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "telugu"
      ],
      "version": "v8",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/dhurjati/v8/_6_8ED3gSeatXfFiFX3ySKQtuTA2.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Didact Gothic",
      "variants": [
        "regular"
      ],
      "subsets": [
        "cyrillic",
        "cyrillic-ext",
        "greek",
        "greek-ext",
        "latin",
        "latin-ext"
      ],
      "version": "v14",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/didactgothic/v14/ahcfv8qz1zt6hCC5G4F_P4ASpUySp0LlcyQ.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Diplomata",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v12",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/diplomata/v12/Cn-0JtiMXwhNwp-wKxyfYGxYrdM9Sg.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Diplomata SC",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v9",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/diplomatasc/v9/buExpoi3ecvs3kidKgBJo2kf-P5Oaiw4cw.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Do Hyeon",
      "variants": [
        "regular"
      ],
      "subsets": [
        "korean",
        "latin"
      ],
      "version": "v11",
      "lastModified": "2019-07-16",
      "files": {
        "regular": "http://fonts.gstatic.com/s/dohyeon/v11/TwMN-I8CRRU2zM86HFE3ZwaH__-C.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Dokdo",
      "variants": [
        "regular"
      ],
      "subsets": [
        "korean",
        "latin"
      ],
      "version": "v8",
      "lastModified": "2019-07-16",
      "files": {
        "regular": "http://fonts.gstatic.com/s/dokdo/v8/esDf315XNuCBLxLo4NaMlKcH.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Domine",
      "variants": [
        "regular",
        "500",
        "600",
        "700"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v11",
      "lastModified": "2021-01-30",
      "files": {
        "regular": "http://fonts.gstatic.com/s/domine/v11/L0xhDFMnlVwD4h3Lt9JWnbX3jG-2X3LAI10VErGuW8Q.ttf",
        "500": "http://fonts.gstatic.com/s/domine/v11/L0xhDFMnlVwD4h3Lt9JWnbX3jG-2X0DAI10VErGuW8Q.ttf",
        "600": "http://fonts.gstatic.com/s/domine/v11/L0xhDFMnlVwD4h3Lt9JWnbX3jG-2X6zHI10VErGuW8Q.ttf",
        "700": "http://fonts.gstatic.com/s/domine/v11/L0xhDFMnlVwD4h3Lt9JWnbX3jG-2X5XHI10VErGuW8Q.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Donegal One",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v8",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/donegalone/v8/m8JWjfRYea-ZnFz6fsK9FZRFRG-K3Mud.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Doppio One",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v8",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/doppioone/v8/Gg8wN5gSaBfyBw2MqCh-lgshKGpe5Fg.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Dorsa",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v11",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/dorsa/v11/yYLn0hjd0OGwqo493XCFxAnQ.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Dosis",
      "variants": [
        "200",
        "300",
        "regular",
        "500",
        "600",
        "700",
        "800"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v19",
      "lastModified": "2021-01-30",
      "files": {
        "200": "http://fonts.gstatic.com/s/dosis/v19/HhyJU5sn9vOmLxNkIwRSjTVNWLEJt7MV3BkFTq4EPw.ttf",
        "300": "http://fonts.gstatic.com/s/dosis/v19/HhyJU5sn9vOmLxNkIwRSjTVNWLEJabMV3BkFTq4EPw.ttf",
        "regular": "http://fonts.gstatic.com/s/dosis/v19/HhyJU5sn9vOmLxNkIwRSjTVNWLEJN7MV3BkFTq4EPw.ttf",
        "500": "http://fonts.gstatic.com/s/dosis/v19/HhyJU5sn9vOmLxNkIwRSjTVNWLEJBbMV3BkFTq4EPw.ttf",
        "600": "http://fonts.gstatic.com/s/dosis/v19/HhyJU5sn9vOmLxNkIwRSjTVNWLEJ6bQV3BkFTq4EPw.ttf",
        "700": "http://fonts.gstatic.com/s/dosis/v19/HhyJU5sn9vOmLxNkIwRSjTVNWLEJ0LQV3BkFTq4EPw.ttf",
        "800": "http://fonts.gstatic.com/s/dosis/v19/HhyJU5sn9vOmLxNkIwRSjTVNWLEJt7QV3BkFTq4EPw.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Dr Sugiyama",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v10",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/drsugiyama/v10/HTxoL2k4N3O9n5I1boGI7abRM4-t-g7y.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Duru Sans",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v14",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/durusans/v14/xn7iYH8xwmSyTvEV_HOxT_fYdN-WZw.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Dynalight",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v9",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/dynalight/v9/1Ptsg8LOU_aOmQvTsF4ISotrDfGGxA.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "EB Garamond",
      "variants": [
        "regular",
        "500",
        "600",
        "700",
        "800",
        "italic",
        "500italic",
        "600italic",
        "700italic",
        "800italic"
      ],
      "subsets": [
        "cyrillic",
        "cyrillic-ext",
        "greek",
        "greek-ext",
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v15",
      "lastModified": "2021-01-30",
      "files": {
        "regular": "http://fonts.gstatic.com/s/ebgaramond/v15/SlGDmQSNjdsmc35JDF1K5E55YMjF_7DPuGi-6_RUA4V-e6yHgQ.ttf",
        "500": "http://fonts.gstatic.com/s/ebgaramond/v15/SlGDmQSNjdsmc35JDF1K5E55YMjF_7DPuGi-2fRUA4V-e6yHgQ.ttf",
        "600": "http://fonts.gstatic.com/s/ebgaramond/v15/SlGDmQSNjdsmc35JDF1K5E55YMjF_7DPuGi-NfNUA4V-e6yHgQ.ttf",
        "700": "http://fonts.gstatic.com/s/ebgaramond/v15/SlGDmQSNjdsmc35JDF1K5E55YMjF_7DPuGi-DPNUA4V-e6yHgQ.ttf",
        "800": "http://fonts.gstatic.com/s/ebgaramond/v15/SlGDmQSNjdsmc35JDF1K5E55YMjF_7DPuGi-a_NUA4V-e6yHgQ.ttf",
        "italic": "http://fonts.gstatic.com/s/ebgaramond/v15/SlGFmQSNjdsmc35JDF1K5GRwUjcdlttVFm-rI7e8QI96WamXgXFI.ttf",
        "500italic": "http://fonts.gstatic.com/s/ebgaramond/v15/SlGFmQSNjdsmc35JDF1K5GRwUjcdlttVFm-rI7eOQI96WamXgXFI.ttf",
        "600italic": "http://fonts.gstatic.com/s/ebgaramond/v15/SlGFmQSNjdsmc35JDF1K5GRwUjcdlttVFm-rI7diR496WamXgXFI.ttf",
        "700italic": "http://fonts.gstatic.com/s/ebgaramond/v15/SlGFmQSNjdsmc35JDF1K5GRwUjcdlttVFm-rI7dbR496WamXgXFI.ttf",
        "800italic": "http://fonts.gstatic.com/s/ebgaramond/v15/SlGFmQSNjdsmc35JDF1K5GRwUjcdlttVFm-rI7c8R496WamXgXFI.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Eagle Lake",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v8",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/eaglelake/v8/ptRMTiqbbuNJDOiKj9wG5O7yKQNute8.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "East Sea Dokdo",
      "variants": [
        "regular"
      ],
      "subsets": [
        "korean",
        "latin"
      ],
      "version": "v8",
      "lastModified": "2019-07-16",
      "files": {
        "regular": "http://fonts.gstatic.com/s/eastseadokdo/v8/xfuo0Wn2V2_KanASqXSZp22m05_aGavYS18y.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Eater",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v9",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/eater/v9/mtG04_FCK7bOvpu2u3FwsXsR.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Economica",
      "variants": [
        "regular",
        "italic",
        "700",
        "700italic"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v8",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/economica/v8/Qw3fZQZaHCLgIWa29ZBrMcgAAl1lfQ.ttf",
        "italic": "http://fonts.gstatic.com/s/economica/v8/Qw3ZZQZaHCLgIWa29ZBbM8IEIFh1fWUl.ttf",
        "700": "http://fonts.gstatic.com/s/economica/v8/Qw3aZQZaHCLgIWa29ZBTjeckCnZ5dHw8iw.ttf",
        "700italic": "http://fonts.gstatic.com/s/economica/v8/Qw3EZQZaHCLgIWa29ZBbM_q4D3x9Vnksi4M7.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Eczar",
      "variants": [
        "regular",
        "500",
        "600",
        "700",
        "800"
      ],
      "subsets": [
        "devanagari",
        "latin",
        "latin-ext"
      ],
      "version": "v9",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/eczar/v9/BXRlvF3Pi-DLmw0iBu9y8Hf0.ttf",
        "500": "http://fonts.gstatic.com/s/eczar/v9/BXRovF3Pi-DLmzXWL8t622v9WNjW.ttf",
        "600": "http://fonts.gstatic.com/s/eczar/v9/BXRovF3Pi-DLmzX6KMt622v9WNjW.ttf",
        "700": "http://fonts.gstatic.com/s/eczar/v9/BXRovF3Pi-DLmzWeKct622v9WNjW.ttf",
        "800": "http://fonts.gstatic.com/s/eczar/v9/BXRovF3Pi-DLmzWCKst622v9WNjW.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "El Messiri",
      "variants": [
        "regular",
        "500",
        "600",
        "700"
      ],
      "subsets": [
        "arabic",
        "cyrillic",
        "latin"
      ],
      "version": "v8",
      "lastModified": "2020-09-25",
      "files": {
        "regular": "http://fonts.gstatic.com/s/elmessiri/v8/K2F0fZBRmr9vQ1pHEey6AoqKAyLzfWo.ttf",
        "500": "http://fonts.gstatic.com/s/elmessiri/v8/K2F3fZBRmr9vQ1pHEey6On6jJyrYYWOMluQ.ttf",
        "600": "http://fonts.gstatic.com/s/elmessiri/v8/K2F3fZBRmr9vQ1pHEey6OlKkJyrYYWOMluQ.ttf",
        "700": "http://fonts.gstatic.com/s/elmessiri/v8/K2F3fZBRmr9vQ1pHEey6OjalJyrYYWOMluQ.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Electrolize",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v9",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/electrolize/v9/cIf5Ma1dtE0zSiGSiED7AUEGso5tQafB.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Elsie",
      "variants": [
        "regular",
        "900"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v11",
      "lastModified": "2020-11-20",
      "files": {
        "regular": "http://fonts.gstatic.com/s/elsie/v11/BCanqZABrez54yYu9slAeLgX.ttf",
        "900": "http://fonts.gstatic.com/s/elsie/v11/BCaqqZABrez54x6q2-1IU6QeXSBk.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Elsie Swash Caps",
      "variants": [
        "regular",
        "900"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v9",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/elsieswashcaps/v9/845DNN8xGZyVX5MVo_upKf7KnjK0ferVKGWsUo8.ttf",
        "900": "http://fonts.gstatic.com/s/elsieswashcaps/v9/845ENN8xGZyVX5MVo_upKf7KnjK0RW74DG2HToawrdU.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Emblema One",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v9",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/emblemaone/v9/nKKT-GQ0F5dSY8vzG0rOEIRBHl57G_f_.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Emilys Candy",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v8",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/emilyscandy/v8/2EbgL-1mD1Rnb0OGKudbk0y5r9xrX84JjA.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Encode Sans",
      "variants": [
        "100",
        "200",
        "300",
        "regular",
        "500",
        "600",
        "700",
        "800",
        "900"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v8",
      "lastModified": "2021-01-30",
      "files": {
        "100": "http://fonts.gstatic.com/s/encodesans/v8/LDIcapOFNxEwR-Bd1O9uYNmnUQomAgE25imKSbHhROjLsZBWTSrQGGHiZtWP7FJCt2c.ttf",
        "200": "http://fonts.gstatic.com/s/encodesans/v8/LDIcapOFNxEwR-Bd1O9uYNmnUQomAgE25imKSbHhROjLsZBWTSrQGOHjZtWP7FJCt2c.ttf",
        "300": "http://fonts.gstatic.com/s/encodesans/v8/LDIcapOFNxEwR-Bd1O9uYNmnUQomAgE25imKSbHhROjLsZBWTSrQGD_jZtWP7FJCt2c.ttf",
        "regular": "http://fonts.gstatic.com/s/encodesans/v8/LDIcapOFNxEwR-Bd1O9uYNmnUQomAgE25imKSbHhROjLsZBWTSrQGGHjZtWP7FJCt2c.ttf",
        "500": "http://fonts.gstatic.com/s/encodesans/v8/LDIcapOFNxEwR-Bd1O9uYNmnUQomAgE25imKSbHhROjLsZBWTSrQGFPjZtWP7FJCt2c.ttf",
        "600": "http://fonts.gstatic.com/s/encodesans/v8/LDIcapOFNxEwR-Bd1O9uYNmnUQomAgE25imKSbHhROjLsZBWTSrQGL_kZtWP7FJCt2c.ttf",
        "700": "http://fonts.gstatic.com/s/encodesans/v8/LDIcapOFNxEwR-Bd1O9uYNmnUQomAgE25imKSbHhROjLsZBWTSrQGIbkZtWP7FJCt2c.ttf",
        "800": "http://fonts.gstatic.com/s/encodesans/v8/LDIcapOFNxEwR-Bd1O9uYNmnUQomAgE25imKSbHhROjLsZBWTSrQGOHkZtWP7FJCt2c.ttf",
        "900": "http://fonts.gstatic.com/s/encodesans/v8/LDIcapOFNxEwR-Bd1O9uYNmnUQomAgE25imKSbHhROjLsZBWTSrQGMjkZtWP7FJCt2c.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Encode Sans Condensed",
      "variants": [
        "100",
        "200",
        "300",
        "regular",
        "500",
        "600",
        "700",
        "800",
        "900"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v5",
      "lastModified": "2020-09-02",
      "files": {
        "100": "http://fonts.gstatic.com/s/encodesanscondensed/v5/j8_76_LD37rqfuwxyIuaZhE6cRXOLtm2gfT-5a-JLQoFI2KR.ttf",
        "200": "http://fonts.gstatic.com/s/encodesanscondensed/v5/j8_46_LD37rqfuwxyIuaZhE6cRXOLtm2gfT-SY6pByQJKnuIFA.ttf",
        "300": "http://fonts.gstatic.com/s/encodesanscondensed/v5/j8_46_LD37rqfuwxyIuaZhE6cRXOLtm2gfT-LY2pByQJKnuIFA.ttf",
        "regular": "http://fonts.gstatic.com/s/encodesanscondensed/v5/j8_16_LD37rqfuwxyIuaZhE6cRXOLtm2gfTGgaWNDw8VIw.ttf",
        "500": "http://fonts.gstatic.com/s/encodesanscondensed/v5/j8_46_LD37rqfuwxyIuaZhE6cRXOLtm2gfT-dYypByQJKnuIFA.ttf",
        "600": "http://fonts.gstatic.com/s/encodesanscondensed/v5/j8_46_LD37rqfuwxyIuaZhE6cRXOLtm2gfT-WYupByQJKnuIFA.ttf",
        "700": "http://fonts.gstatic.com/s/encodesanscondensed/v5/j8_46_LD37rqfuwxyIuaZhE6cRXOLtm2gfT-PYqpByQJKnuIFA.ttf",
        "800": "http://fonts.gstatic.com/s/encodesanscondensed/v5/j8_46_LD37rqfuwxyIuaZhE6cRXOLtm2gfT-IYmpByQJKnuIFA.ttf",
        "900": "http://fonts.gstatic.com/s/encodesanscondensed/v5/j8_46_LD37rqfuwxyIuaZhE6cRXOLtm2gfT-BYipByQJKnuIFA.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Encode Sans Expanded",
      "variants": [
        "100",
        "200",
        "300",
        "regular",
        "500",
        "600",
        "700",
        "800",
        "900"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v5",
      "lastModified": "2020-07-23",
      "files": {
        "100": "http://fonts.gstatic.com/s/encodesansexpanded/v5/c4mx1mF4GcnstG_Jh1QH6ac4hNLeNyeYUpJGKQNicoAbJlw.ttf",
        "200": "http://fonts.gstatic.com/s/encodesansexpanded/v5/c4mw1mF4GcnstG_Jh1QH6ac4hNLeNyeYUpLqCCNIXIwSP0XD.ttf",
        "300": "http://fonts.gstatic.com/s/encodesansexpanded/v5/c4mw1mF4GcnstG_Jh1QH6ac4hNLeNyeYUpKOCyNIXIwSP0XD.ttf",
        "regular": "http://fonts.gstatic.com/s/encodesansexpanded/v5/c4m_1mF4GcnstG_Jh1QH6ac4hNLeNyeYUqoiIwdAd5Ab.ttf",
        "500": "http://fonts.gstatic.com/s/encodesansexpanded/v5/c4mw1mF4GcnstG_Jh1QH6ac4hNLeNyeYUpLWCiNIXIwSP0XD.ttf",
        "600": "http://fonts.gstatic.com/s/encodesansexpanded/v5/c4mw1mF4GcnstG_Jh1QH6ac4hNLeNyeYUpL6DSNIXIwSP0XD.ttf",
        "700": "http://fonts.gstatic.com/s/encodesansexpanded/v5/c4mw1mF4GcnstG_Jh1QH6ac4hNLeNyeYUpKeDCNIXIwSP0XD.ttf",
        "800": "http://fonts.gstatic.com/s/encodesansexpanded/v5/c4mw1mF4GcnstG_Jh1QH6ac4hNLeNyeYUpKCDyNIXIwSP0XD.ttf",
        "900": "http://fonts.gstatic.com/s/encodesansexpanded/v5/c4mw1mF4GcnstG_Jh1QH6ac4hNLeNyeYUpKmDiNIXIwSP0XD.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Encode Sans Semi Condensed",
      "variants": [
        "100",
        "200",
        "300",
        "regular",
        "500",
        "600",
        "700",
        "800",
        "900"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v5",
      "lastModified": "2020-07-23",
      "files": {
        "100": "http://fonts.gstatic.com/s/encodesanssemicondensed/v5/3qT6oiKqnDuUtQUEHMoXcmspmy55SFWrXFRp9FTOG1T19MFtQ9jpVUA.ttf",
        "200": "http://fonts.gstatic.com/s/encodesanssemicondensed/v5/3qT7oiKqnDuUtQUEHMoXcmspmy55SFWrXFRp9FTOG1RZ1eFHbdTgTFmr.ttf",
        "300": "http://fonts.gstatic.com/s/encodesanssemicondensed/v5/3qT7oiKqnDuUtQUEHMoXcmspmy55SFWrXFRp9FTOG1Q91uFHbdTgTFmr.ttf",
        "regular": "http://fonts.gstatic.com/s/encodesanssemicondensed/v5/3qT4oiKqnDuUtQUEHMoXcmspmy55SFWrXFRp9FTOG2yR_sVPRsjp.ttf",
        "500": "http://fonts.gstatic.com/s/encodesanssemicondensed/v5/3qT7oiKqnDuUtQUEHMoXcmspmy55SFWrXFRp9FTOG1Rl1-FHbdTgTFmr.ttf",
        "600": "http://fonts.gstatic.com/s/encodesanssemicondensed/v5/3qT7oiKqnDuUtQUEHMoXcmspmy55SFWrXFRp9FTOG1RJ0OFHbdTgTFmr.ttf",
        "700": "http://fonts.gstatic.com/s/encodesanssemicondensed/v5/3qT7oiKqnDuUtQUEHMoXcmspmy55SFWrXFRp9FTOG1Qt0eFHbdTgTFmr.ttf",
        "800": "http://fonts.gstatic.com/s/encodesanssemicondensed/v5/3qT7oiKqnDuUtQUEHMoXcmspmy55SFWrXFRp9FTOG1Qx0uFHbdTgTFmr.ttf",
        "900": "http://fonts.gstatic.com/s/encodesanssemicondensed/v5/3qT7oiKqnDuUtQUEHMoXcmspmy55SFWrXFRp9FTOG1QV0-FHbdTgTFmr.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Encode Sans Semi Expanded",
      "variants": [
        "100",
        "200",
        "300",
        "regular",
        "500",
        "600",
        "700",
        "800",
        "900"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v6",
      "lastModified": "2020-07-23",
      "files": {
        "100": "http://fonts.gstatic.com/s/encodesanssemiexpanded/v6/ke8xOhAPMEZs-BDuzwftTNJ85JvwMOzE9d9Cca5TM-41KwrlKXeOEA.ttf",
        "200": "http://fonts.gstatic.com/s/encodesanssemiexpanded/v6/ke8yOhAPMEZs-BDuzwftTNJ85JvwMOzE9d9Cca5TM0IUCyDLJX6XCWU.ttf",
        "300": "http://fonts.gstatic.com/s/encodesanssemiexpanded/v6/ke8yOhAPMEZs-BDuzwftTNJ85JvwMOzE9d9Cca5TMyYXCyDLJX6XCWU.ttf",
        "regular": "http://fonts.gstatic.com/s/encodesanssemiexpanded/v6/ke83OhAPMEZs-BDuzwftTNJ85JvwMOzE9d9Cca5TC4o_LyjgOXc.ttf",
        "500": "http://fonts.gstatic.com/s/encodesanssemiexpanded/v6/ke8yOhAPMEZs-BDuzwftTNJ85JvwMOzE9d9Cca5TM34WCyDLJX6XCWU.ttf",
        "600": "http://fonts.gstatic.com/s/encodesanssemiexpanded/v6/ke8yOhAPMEZs-BDuzwftTNJ85JvwMOzE9d9Cca5TM1IRCyDLJX6XCWU.ttf",
        "700": "http://fonts.gstatic.com/s/encodesanssemiexpanded/v6/ke8yOhAPMEZs-BDuzwftTNJ85JvwMOzE9d9Cca5TMzYQCyDLJX6XCWU.ttf",
        "800": "http://fonts.gstatic.com/s/encodesanssemiexpanded/v6/ke8yOhAPMEZs-BDuzwftTNJ85JvwMOzE9d9Cca5TMyoTCyDLJX6XCWU.ttf",
        "900": "http://fonts.gstatic.com/s/encodesanssemiexpanded/v6/ke8yOhAPMEZs-BDuzwftTNJ85JvwMOzE9d9Cca5TMw4SCyDLJX6XCWU.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Engagement",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v10",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/engagement/v10/x3dlckLDZbqa7RUs9MFVXNossybsHQI.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Englebert",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v8",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/englebert/v8/xn7iYH8w2XGrC8AR4HSxT_fYdN-WZw.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Enriqueta",
      "variants": [
        "regular",
        "500",
        "600",
        "700"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v10",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/enriqueta/v10/goksH6L7AUFrRvV44HVTS0CjkP1Yog.ttf",
        "500": "http://fonts.gstatic.com/s/enriqueta/v10/gokpH6L7AUFrRvV44HVrv2mHmNZEq6TTFw.ttf",
        "600": "http://fonts.gstatic.com/s/enriqueta/v10/gokpH6L7AUFrRvV44HVrk26HmNZEq6TTFw.ttf",
        "700": "http://fonts.gstatic.com/s/enriqueta/v10/gokpH6L7AUFrRvV44HVr92-HmNZEq6TTFw.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Epilogue",
      "variants": [
        "100",
        "200",
        "300",
        "regular",
        "500",
        "600",
        "700",
        "800",
        "900",
        "100italic",
        "200italic",
        "300italic",
        "italic",
        "500italic",
        "600italic",
        "700italic",
        "800italic",
        "900italic"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v4",
      "lastModified": "2021-01-21",
      "files": {
        "100": "http://fonts.gstatic.com/s/epilogue/v4/O4ZMFGj5hxF0EhjimngomvnCCtqb30OXMDLiDJXVigHPVA.ttf",
        "200": "http://fonts.gstatic.com/s/epilogue/v4/O4ZMFGj5hxF0EhjimngomvnCCtqb30OXsDPiDJXVigHPVA.ttf",
        "300": "http://fonts.gstatic.com/s/epilogue/v4/O4ZMFGj5hxF0EhjimngomvnCCtqb30OXbjPiDJXVigHPVA.ttf",
        "regular": "http://fonts.gstatic.com/s/epilogue/v4/O4ZMFGj5hxF0EhjimngomvnCCtqb30OXMDPiDJXVigHPVA.ttf",
        "500": "http://fonts.gstatic.com/s/epilogue/v4/O4ZMFGj5hxF0EhjimngomvnCCtqb30OXAjPiDJXVigHPVA.ttf",
        "600": "http://fonts.gstatic.com/s/epilogue/v4/O4ZMFGj5hxF0EhjimngomvnCCtqb30OX7jTiDJXVigHPVA.ttf",
        "700": "http://fonts.gstatic.com/s/epilogue/v4/O4ZMFGj5hxF0EhjimngomvnCCtqb30OX1zTiDJXVigHPVA.ttf",
        "800": "http://fonts.gstatic.com/s/epilogue/v4/O4ZMFGj5hxF0EhjimngomvnCCtqb30OXsDTiDJXVigHPVA.ttf",
        "900": "http://fonts.gstatic.com/s/epilogue/v4/O4ZMFGj5hxF0EhjimngomvnCCtqb30OXmTTiDJXVigHPVA.ttf",
        "100italic": "http://fonts.gstatic.com/s/epilogue/v4/O4ZCFGj5hxF0EhjimlIhqAYaY7EBcUSC-HAKTp_RqATfVHNU.ttf",
        "200italic": "http://fonts.gstatic.com/s/epilogue/v4/O4ZCFGj5hxF0EhjimlIhqAYaY7EBcUSC-HCKT5_RqATfVHNU.ttf",
        "300italic": "http://fonts.gstatic.com/s/epilogue/v4/O4ZCFGj5hxF0EhjimlIhqAYaY7EBcUSC-HBUT5_RqATfVHNU.ttf",
        "italic": "http://fonts.gstatic.com/s/epilogue/v4/O4ZCFGj5hxF0EhjimlIhqAYaY7EBcUSC-HAKT5_RqATfVHNU.ttf",
        "500italic": "http://fonts.gstatic.com/s/epilogue/v4/O4ZCFGj5hxF0EhjimlIhqAYaY7EBcUSC-HA4T5_RqATfVHNU.ttf",
        "600italic": "http://fonts.gstatic.com/s/epilogue/v4/O4ZCFGj5hxF0EhjimlIhqAYaY7EBcUSC-HDUSJ_RqATfVHNU.ttf",
        "700italic": "http://fonts.gstatic.com/s/epilogue/v4/O4ZCFGj5hxF0EhjimlIhqAYaY7EBcUSC-HDtSJ_RqATfVHNU.ttf",
        "800italic": "http://fonts.gstatic.com/s/epilogue/v4/O4ZCFGj5hxF0EhjimlIhqAYaY7EBcUSC-HCKSJ_RqATfVHNU.ttf",
        "900italic": "http://fonts.gstatic.com/s/epilogue/v4/O4ZCFGj5hxF0EhjimlIhqAYaY7EBcUSC-HCjSJ_RqATfVHNU.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Erica One",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v11",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/ericaone/v11/WBLnrEXccV9VGrOKmGD1W0_MJMGxiQ.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Esteban",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v9",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/esteban/v9/r05bGLZE-bdGdN-GdOuD5jokU8E.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Euphoria Script",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v9",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/euphoriascript/v9/mFTpWb0X2bLb_cx6To2B8GpKoD5ak_ZT1D8x7Q.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Ewert",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v8",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/ewert/v8/va9I4kzO2tFODYBvS-J3kbDP.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Exo",
      "variants": [
        "100",
        "200",
        "300",
        "regular",
        "500",
        "600",
        "700",
        "800",
        "900",
        "100italic",
        "200italic",
        "300italic",
        "italic",
        "500italic",
        "600italic",
        "700italic",
        "800italic",
        "900italic"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v12",
      "lastModified": "2021-01-30",
      "files": {
        "100": "http://fonts.gstatic.com/s/exo/v12/4UaZrEtFpBI4f1ZSIK9d4LjJ4lM2CwNsOl4p5Is.ttf",
        "200": "http://fonts.gstatic.com/s/exo/v12/4UaZrEtFpBI4f1ZSIK9d4LjJ4tM3CwNsOl4p5Is.ttf",
        "300": "http://fonts.gstatic.com/s/exo/v12/4UaZrEtFpBI4f1ZSIK9d4LjJ4g03CwNsOl4p5Is.ttf",
        "regular": "http://fonts.gstatic.com/s/exo/v12/4UaZrEtFpBI4f1ZSIK9d4LjJ4lM3CwNsOl4p5Is.ttf",
        "500": "http://fonts.gstatic.com/s/exo/v12/4UaZrEtFpBI4f1ZSIK9d4LjJ4mE3CwNsOl4p5Is.ttf",
        "600": "http://fonts.gstatic.com/s/exo/v12/4UaZrEtFpBI4f1ZSIK9d4LjJ4o0wCwNsOl4p5Is.ttf",
        "700": "http://fonts.gstatic.com/s/exo/v12/4UaZrEtFpBI4f1ZSIK9d4LjJ4rQwCwNsOl4p5Is.ttf",
        "800": "http://fonts.gstatic.com/s/exo/v12/4UaZrEtFpBI4f1ZSIK9d4LjJ4tMwCwNsOl4p5Is.ttf",
        "900": "http://fonts.gstatic.com/s/exo/v12/4UaZrEtFpBI4f1ZSIK9d4LjJ4vowCwNsOl4p5Is.ttf",
        "100italic": "http://fonts.gstatic.com/s/exo/v12/4UafrEtFpBISdmSt-MY2ehbO95t040FmPnws9Iu-uA.ttf",
        "200italic": "http://fonts.gstatic.com/s/exo/v12/4UafrEtFpBISdmSt-MY2ehbO95t0Y0BmPnws9Iu-uA.ttf",
        "300italic": "http://fonts.gstatic.com/s/exo/v12/4UafrEtFpBISdmSt-MY2ehbO95t0vUBmPnws9Iu-uA.ttf",
        "italic": "http://fonts.gstatic.com/s/exo/v12/4UafrEtFpBISdmSt-MY2ehbO95t040BmPnws9Iu-uA.ttf",
        "500italic": "http://fonts.gstatic.com/s/exo/v12/4UafrEtFpBISdmSt-MY2ehbO95t00UBmPnws9Iu-uA.ttf",
        "600italic": "http://fonts.gstatic.com/s/exo/v12/4UafrEtFpBISdmSt-MY2ehbO95t0PUdmPnws9Iu-uA.ttf",
        "700italic": "http://fonts.gstatic.com/s/exo/v12/4UafrEtFpBISdmSt-MY2ehbO95t0BEdmPnws9Iu-uA.ttf",
        "800italic": "http://fonts.gstatic.com/s/exo/v12/4UafrEtFpBISdmSt-MY2ehbO95t0Y0dmPnws9Iu-uA.ttf",
        "900italic": "http://fonts.gstatic.com/s/exo/v12/4UafrEtFpBISdmSt-MY2ehbO95t0SkdmPnws9Iu-uA.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Exo 2",
      "variants": [
        "100",
        "200",
        "300",
        "regular",
        "500",
        "600",
        "700",
        "800",
        "900",
        "100italic",
        "200italic",
        "300italic",
        "italic",
        "500italic",
        "600italic",
        "700italic",
        "800italic",
        "900italic"
      ],
      "subsets": [
        "cyrillic",
        "cyrillic-ext",
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v10",
      "lastModified": "2021-01-30",
      "files": {
        "100": "http://fonts.gstatic.com/s/exo2/v10/7cH1v4okm5zmbvwkAx_sfcEuiD8jvvOcPtq-rpvLpQ.ttf",
        "200": "http://fonts.gstatic.com/s/exo2/v10/7cH1v4okm5zmbvwkAx_sfcEuiD8jPvKcPtq-rpvLpQ.ttf",
        "300": "http://fonts.gstatic.com/s/exo2/v10/7cH1v4okm5zmbvwkAx_sfcEuiD8j4PKcPtq-rpvLpQ.ttf",
        "regular": "http://fonts.gstatic.com/s/exo2/v10/7cH1v4okm5zmbvwkAx_sfcEuiD8jvvKcPtq-rpvLpQ.ttf",
        "500": "http://fonts.gstatic.com/s/exo2/v10/7cH1v4okm5zmbvwkAx_sfcEuiD8jjPKcPtq-rpvLpQ.ttf",
        "600": "http://fonts.gstatic.com/s/exo2/v10/7cH1v4okm5zmbvwkAx_sfcEuiD8jYPWcPtq-rpvLpQ.ttf",
        "700": "http://fonts.gstatic.com/s/exo2/v10/7cH1v4okm5zmbvwkAx_sfcEuiD8jWfWcPtq-rpvLpQ.ttf",
        "800": "http://fonts.gstatic.com/s/exo2/v10/7cH1v4okm5zmbvwkAx_sfcEuiD8jPvWcPtq-rpvLpQ.ttf",
        "900": "http://fonts.gstatic.com/s/exo2/v10/7cH1v4okm5zmbvwkAx_sfcEuiD8jF_WcPtq-rpvLpQ.ttf",
        "100italic": "http://fonts.gstatic.com/s/exo2/v10/7cH3v4okm5zmbtYtMeA0FKq0Jjg2drF0fNC6jJ7bpQBL.ttf",
        "200italic": "http://fonts.gstatic.com/s/exo2/v10/7cH3v4okm5zmbtYtMeA0FKq0Jjg2drH0fdC6jJ7bpQBL.ttf",
        "300italic": "http://fonts.gstatic.com/s/exo2/v10/7cH3v4okm5zmbtYtMeA0FKq0Jjg2drEqfdC6jJ7bpQBL.ttf",
        "italic": "http://fonts.gstatic.com/s/exo2/v10/7cH3v4okm5zmbtYtMeA0FKq0Jjg2drF0fdC6jJ7bpQBL.ttf",
        "500italic": "http://fonts.gstatic.com/s/exo2/v10/7cH3v4okm5zmbtYtMeA0FKq0Jjg2drFGfdC6jJ7bpQBL.ttf",
        "600italic": "http://fonts.gstatic.com/s/exo2/v10/7cH3v4okm5zmbtYtMeA0FKq0Jjg2drGqetC6jJ7bpQBL.ttf",
        "700italic": "http://fonts.gstatic.com/s/exo2/v10/7cH3v4okm5zmbtYtMeA0FKq0Jjg2drGTetC6jJ7bpQBL.ttf",
        "800italic": "http://fonts.gstatic.com/s/exo2/v10/7cH3v4okm5zmbtYtMeA0FKq0Jjg2drH0etC6jJ7bpQBL.ttf",
        "900italic": "http://fonts.gstatic.com/s/exo2/v10/7cH3v4okm5zmbtYtMeA0FKq0Jjg2drHdetC6jJ7bpQBL.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Expletus Sans",
      "variants": [
        "regular",
        "italic",
        "500",
        "500italic",
        "600",
        "600italic",
        "700",
        "700italic"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v14",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/expletussans/v14/RLp5K5v5_bqufTYdnhFzDj2dRfkSu6EuTHo.ttf",
        "italic": "http://fonts.gstatic.com/s/expletussans/v14/RLpnK5v5_bqufTYdnhFzDj2ddfsYv4MrXHrRDA.ttf",
        "500": "http://fonts.gstatic.com/s/expletussans/v14/RLpkK5v5_bqufTYdnhFzDj2dfQ07n6kFUHPIFaU.ttf",
        "500italic": "http://fonts.gstatic.com/s/expletussans/v14/RLpiK5v5_bqufTYdnhFzDj2ddfsgS6oPVFHNBaVImA.ttf",
        "600": "http://fonts.gstatic.com/s/expletussans/v14/RLpkK5v5_bqufTYdnhFzDj2dfSE8n6kFUHPIFaU.ttf",
        "600italic": "http://fonts.gstatic.com/s/expletussans/v14/RLpiK5v5_bqufTYdnhFzDj2ddfsgZ60PVFHNBaVImA.ttf",
        "700": "http://fonts.gstatic.com/s/expletussans/v14/RLpkK5v5_bqufTYdnhFzDj2dfUU9n6kFUHPIFaU.ttf",
        "700italic": "http://fonts.gstatic.com/s/expletussans/v14/RLpiK5v5_bqufTYdnhFzDj2ddfsgA6wPVFHNBaVImA.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Fahkwang",
      "variants": [
        "200",
        "200italic",
        "300",
        "300italic",
        "regular",
        "italic",
        "500",
        "500italic",
        "600",
        "600italic",
        "700",
        "700italic"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "thai",
        "vietnamese"
      ],
      "version": "v4",
      "lastModified": "2020-07-23",
      "files": {
        "200": "http://fonts.gstatic.com/s/fahkwang/v4/Noa26Uj3zpmBOgbNpOJHmZlRFipxkwjx.ttf",
        "200italic": "http://fonts.gstatic.com/s/fahkwang/v4/Noa06Uj3zpmBOgbNpOqNgHFQHC5Tlhjxdw4.ttf",
        "300": "http://fonts.gstatic.com/s/fahkwang/v4/Noa26Uj3zpmBOgbNpOIjmplRFipxkwjx.ttf",
        "300italic": "http://fonts.gstatic.com/s/fahkwang/v4/Noa06Uj3zpmBOgbNpOqNgBVTHC5Tlhjxdw4.ttf",
        "regular": "http://fonts.gstatic.com/s/fahkwang/v4/Noax6Uj3zpmBOgbNpNqPsr1ZPTZ4.ttf",
        "italic": "http://fonts.gstatic.com/s/fahkwang/v4/Noa36Uj3zpmBOgbNpOqNuLl7OCZ4ihE.ttf",
        "500": "http://fonts.gstatic.com/s/fahkwang/v4/Noa26Uj3zpmBOgbNpOJ7m5lRFipxkwjx.ttf",
        "500italic": "http://fonts.gstatic.com/s/fahkwang/v4/Noa06Uj3zpmBOgbNpOqNgE1SHC5Tlhjxdw4.ttf",
        "600": "http://fonts.gstatic.com/s/fahkwang/v4/Noa26Uj3zpmBOgbNpOJXnJlRFipxkwjx.ttf",
        "600italic": "http://fonts.gstatic.com/s/fahkwang/v4/Noa06Uj3zpmBOgbNpOqNgGFVHC5Tlhjxdw4.ttf",
        "700": "http://fonts.gstatic.com/s/fahkwang/v4/Noa26Uj3zpmBOgbNpOIznZlRFipxkwjx.ttf",
        "700italic": "http://fonts.gstatic.com/s/fahkwang/v4/Noa06Uj3zpmBOgbNpOqNgAVUHC5Tlhjxdw4.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Fanwood Text",
      "variants": [
        "regular",
        "italic"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v10",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/fanwoodtext/v10/3XFtErwl05Ad_vSCF6Fq7xXGRdbY1P1Sbg.ttf",
        "italic": "http://fonts.gstatic.com/s/fanwoodtext/v10/3XFzErwl05Ad_vSCF6Fq7xX2R9zc9vhCblye.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Farro",
      "variants": [
        "300",
        "regular",
        "500",
        "700"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v2",
      "lastModified": "2020-07-23",
      "files": {
        "300": "http://fonts.gstatic.com/s/farro/v2/i7dJIFl3byGNHa3hNJ6-WkJUQUq7.ttf",
        "regular": "http://fonts.gstatic.com/s/farro/v2/i7dEIFl3byGNHZVNHLq2cV5d.ttf",
        "500": "http://fonts.gstatic.com/s/farro/v2/i7dJIFl3byGNHa25NZ6-WkJUQUq7.ttf",
        "700": "http://fonts.gstatic.com/s/farro/v2/i7dJIFl3byGNHa3xM56-WkJUQUq7.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Farsan",
      "variants": [
        "regular"
      ],
      "subsets": [
        "gujarati",
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v6",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/farsan/v6/VEMwRoJ0vY_zsyz62q-pxDX9rQ.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Fascinate",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v9",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/fascinate/v9/z7NWdRrufC8XJK0IIEli1LbQRPyNrw.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Fascinate Inline",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v10",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/fascinateinline/v10/jVyR7mzzB3zc-jp6QCAu60poNqIy1g3CfRXxWZQ.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Faster One",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v12",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/fasterone/v12/H4ciBXCHmdfClFb-vWhfyLuShq63czE.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Fasthand",
      "variants": [
        "regular"
      ],
      "subsets": [
        "khmer"
      ],
      "version": "v11",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/fasthand/v11/0yb9GDohyKTYn_ZEESkuYkw2rQg1.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Fauna One",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v8",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/faunaone/v8/wlpzgwTPBVpjpCuwkuEx2UxLYClOCg.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Faustina",
      "variants": [
        "regular",
        "500",
        "600",
        "700",
        "italic",
        "500italic",
        "600italic",
        "700italic"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v8",
      "lastModified": "2021-01-30",
      "files": {
        "regular": "http://fonts.gstatic.com/s/faustina/v8/XLY4IZPxYpJfTbZAFXWzNT2SO8wpWHlsgoEvGVWWe8tbEg.ttf",
        "500": "http://fonts.gstatic.com/s/faustina/v8/XLY4IZPxYpJfTbZAFXWzNT2SO8wpWHlssIEvGVWWe8tbEg.ttf",
        "600": "http://fonts.gstatic.com/s/faustina/v8/XLY4IZPxYpJfTbZAFXWzNT2SO8wpWHlsXIYvGVWWe8tbEg.ttf",
        "700": "http://fonts.gstatic.com/s/faustina/v8/XLY4IZPxYpJfTbZAFXWzNT2SO8wpWHlsZYYvGVWWe8tbEg.ttf",
        "italic": "http://fonts.gstatic.com/s/faustina/v8/XLY2IZPxYpJfTbZAFV-6B8JKUqez9n55SsLHWl-SWc5LEnoF.ttf",
        "500italic": "http://fonts.gstatic.com/s/faustina/v8/XLY2IZPxYpJfTbZAFV-6B8JKUqez9n55SsL1Wl-SWc5LEnoF.ttf",
        "600italic": "http://fonts.gstatic.com/s/faustina/v8/XLY2IZPxYpJfTbZAFV-6B8JKUqez9n55SsIZXV-SWc5LEnoF.ttf",
        "700italic": "http://fonts.gstatic.com/s/faustina/v8/XLY2IZPxYpJfTbZAFV-6B8JKUqez9n55SsIgXV-SWc5LEnoF.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Federant",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v13",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/federant/v13/2sDdZGNfip_eirT0_U0jRUG0AqUc.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Federo",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v12",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/federo/v12/iJWFBX-cbD_ETsbmjVOe2WTG7Q.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Felipa",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v7",
      "lastModified": "2020-07-15",
      "files": {
        "regular": "http://fonts.gstatic.com/s/felipa/v7/FwZa7-owz1Eu4F_wSNSEwM2zpA.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Fenix",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v8",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/fenix/v8/XoHo2YL_S7-g5ostKzAFvs8o.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Finger Paint",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v10",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/fingerpaint/v10/0QInMXVJ-o-oRn_7dron8YWO85bS8ANesw.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Fira Code",
      "variants": [
        "300",
        "regular",
        "500",
        "600",
        "700"
      ],
      "subsets": [
        "cyrillic",
        "cyrillic-ext",
        "greek",
        "greek-ext",
        "latin",
        "latin-ext"
      ],
      "version": "v10",
      "lastModified": "2021-01-30",
      "files": {
        "300": "http://fonts.gstatic.com/s/firacode/v10/uU9eCBsR6Z2vfE9aq3bL0fxyUs4tcw4W_GNsFVfxN87gsj0.ttf",
        "regular": "http://fonts.gstatic.com/s/firacode/v10/uU9eCBsR6Z2vfE9aq3bL0fxyUs4tcw4W_D1sFVfxN87gsj0.ttf",
        "500": "http://fonts.gstatic.com/s/firacode/v10/uU9eCBsR6Z2vfE9aq3bL0fxyUs4tcw4W_A9sFVfxN87gsj0.ttf",
        "600": "http://fonts.gstatic.com/s/firacode/v10/uU9eCBsR6Z2vfE9aq3bL0fxyUs4tcw4W_ONrFVfxN87gsj0.ttf",
        "700": "http://fonts.gstatic.com/s/firacode/v10/uU9eCBsR6Z2vfE9aq3bL0fxyUs4tcw4W_NprFVfxN87gsj0.ttf"
      },
      "category": "monospace",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Fira Mono",
      "variants": [
        "regular",
        "500",
        "700"
      ],
      "subsets": [
        "cyrillic",
        "cyrillic-ext",
        "greek",
        "greek-ext",
        "latin",
        "latin-ext"
      ],
      "version": "v9",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/firamono/v9/N0bX2SlFPv1weGeLZDtQIfTTkdbJYA.ttf",
        "500": "http://fonts.gstatic.com/s/firamono/v9/N0bS2SlFPv1weGeLZDto1d33mf3VaZBRBQ.ttf",
        "700": "http://fonts.gstatic.com/s/firamono/v9/N0bS2SlFPv1weGeLZDtondv3mf3VaZBRBQ.ttf"
      },
      "category": "monospace",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Fira Sans",
      "variants": [
        "100",
        "100italic",
        "200",
        "200italic",
        "300",
        "300italic",
        "regular",
        "italic",
        "500",
        "500italic",
        "600",
        "600italic",
        "700",
        "700italic",
        "800",
        "800italic",
        "900",
        "900italic"
      ],
      "subsets": [
        "cyrillic",
        "cyrillic-ext",
        "greek",
        "greek-ext",
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v10",
      "lastModified": "2019-07-22",
      "files": {
        "100": "http://fonts.gstatic.com/s/firasans/v10/va9C4kDNxMZdWfMOD5Vn9IjOazP3dUTP.ttf",
        "100italic": "http://fonts.gstatic.com/s/firasans/v10/va9A4kDNxMZdWfMOD5VvkrCqYTfVcFTPj0s.ttf",
        "200": "http://fonts.gstatic.com/s/firasans/v10/va9B4kDNxMZdWfMOD5VnWKnuQR37fF3Wlg.ttf",
        "200italic": "http://fonts.gstatic.com/s/firasans/v10/va9f4kDNxMZdWfMOD5VvkrAGQBf_XljGllLX.ttf",
        "300": "http://fonts.gstatic.com/s/firasans/v10/va9B4kDNxMZdWfMOD5VnPKruQR37fF3Wlg.ttf",
        "300italic": "http://fonts.gstatic.com/s/firasans/v10/va9f4kDNxMZdWfMOD5VvkrBiQxf_XljGllLX.ttf",
        "regular": "http://fonts.gstatic.com/s/firasans/v10/va9E4kDNxMZdWfMOD5VfkILKSTbndQ.ttf",
        "italic": "http://fonts.gstatic.com/s/firasans/v10/va9C4kDNxMZdWfMOD5VvkojOazP3dUTP.ttf",
        "500": "http://fonts.gstatic.com/s/firasans/v10/va9B4kDNxMZdWfMOD5VnZKvuQR37fF3Wlg.ttf",
        "500italic": "http://fonts.gstatic.com/s/firasans/v10/va9f4kDNxMZdWfMOD5VvkrA6Qhf_XljGllLX.ttf",
        "600": "http://fonts.gstatic.com/s/firasans/v10/va9B4kDNxMZdWfMOD5VnSKzuQR37fF3Wlg.ttf",
        "600italic": "http://fonts.gstatic.com/s/firasans/v10/va9f4kDNxMZdWfMOD5VvkrAWRRf_XljGllLX.ttf",
        "700": "http://fonts.gstatic.com/s/firasans/v10/va9B4kDNxMZdWfMOD5VnLK3uQR37fF3Wlg.ttf",
        "700italic": "http://fonts.gstatic.com/s/firasans/v10/va9f4kDNxMZdWfMOD5VvkrByRBf_XljGllLX.ttf",
        "800": "http://fonts.gstatic.com/s/firasans/v10/va9B4kDNxMZdWfMOD5VnMK7uQR37fF3Wlg.ttf",
        "800italic": "http://fonts.gstatic.com/s/firasans/v10/va9f4kDNxMZdWfMOD5VvkrBuRxf_XljGllLX.ttf",
        "900": "http://fonts.gstatic.com/s/firasans/v10/va9B4kDNxMZdWfMOD5VnFK_uQR37fF3Wlg.ttf",
        "900italic": "http://fonts.gstatic.com/s/firasans/v10/va9f4kDNxMZdWfMOD5VvkrBKRhf_XljGllLX.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Fira Sans Condensed",
      "variants": [
        "100",
        "100italic",
        "200",
        "200italic",
        "300",
        "300italic",
        "regular",
        "italic",
        "500",
        "500italic",
        "600",
        "600italic",
        "700",
        "700italic",
        "800",
        "800italic",
        "900",
        "900italic"
      ],
      "subsets": [
        "cyrillic",
        "cyrillic-ext",
        "greek",
        "greek-ext",
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v4",
      "lastModified": "2019-07-17",
      "files": {
        "100": "http://fonts.gstatic.com/s/firasanscondensed/v4/wEOjEADFm8hSaQTFG18FErVhsC9x-tarWZXtqOlQfx9CjA.ttf",
        "100italic": "http://fonts.gstatic.com/s/firasanscondensed/v4/wEOtEADFm8hSaQTFG18FErVhsC9x-tarUfPVzONUXRpSjJcu.ttf",
        "200": "http://fonts.gstatic.com/s/firasanscondensed/v4/wEOsEADFm8hSaQTFG18FErVhsC9x-tarWTnMiMN-cxZblY4.ttf",
        "200italic": "http://fonts.gstatic.com/s/firasanscondensed/v4/wEOuEADFm8hSaQTFG18FErVhsC9x-tarUfPVYMJ0dzRehY43EA.ttf",
        "300": "http://fonts.gstatic.com/s/firasanscondensed/v4/wEOsEADFm8hSaQTFG18FErVhsC9x-tarWV3PiMN-cxZblY4.ttf",
        "300italic": "http://fonts.gstatic.com/s/firasanscondensed/v4/wEOuEADFm8hSaQTFG18FErVhsC9x-tarUfPVBMF0dzRehY43EA.ttf",
        "regular": "http://fonts.gstatic.com/s/firasanscondensed/v4/wEOhEADFm8hSaQTFG18FErVhsC9x-tarYfHnrMtVbx8.ttf",
        "italic": "http://fonts.gstatic.com/s/firasanscondensed/v4/wEOjEADFm8hSaQTFG18FErVhsC9x-tarUfPtqOlQfx9CjA.ttf",
        "500": "http://fonts.gstatic.com/s/firasanscondensed/v4/wEOsEADFm8hSaQTFG18FErVhsC9x-tarWQXOiMN-cxZblY4.ttf",
        "500italic": "http://fonts.gstatic.com/s/firasanscondensed/v4/wEOuEADFm8hSaQTFG18FErVhsC9x-tarUfPVXMB0dzRehY43EA.ttf",
        "600": "http://fonts.gstatic.com/s/firasanscondensed/v4/wEOsEADFm8hSaQTFG18FErVhsC9x-tarWSnJiMN-cxZblY4.ttf",
        "600italic": "http://fonts.gstatic.com/s/firasanscondensed/v4/wEOuEADFm8hSaQTFG18FErVhsC9x-tarUfPVcMd0dzRehY43EA.ttf",
        "700": "http://fonts.gstatic.com/s/firasanscondensed/v4/wEOsEADFm8hSaQTFG18FErVhsC9x-tarWU3IiMN-cxZblY4.ttf",
        "700italic": "http://fonts.gstatic.com/s/firasanscondensed/v4/wEOuEADFm8hSaQTFG18FErVhsC9x-tarUfPVFMZ0dzRehY43EA.ttf",
        "800": "http://fonts.gstatic.com/s/firasanscondensed/v4/wEOsEADFm8hSaQTFG18FErVhsC9x-tarWVHLiMN-cxZblY4.ttf",
        "800italic": "http://fonts.gstatic.com/s/firasanscondensed/v4/wEOuEADFm8hSaQTFG18FErVhsC9x-tarUfPVCMV0dzRehY43EA.ttf",
        "900": "http://fonts.gstatic.com/s/firasanscondensed/v4/wEOsEADFm8hSaQTFG18FErVhsC9x-tarWXXKiMN-cxZblY4.ttf",
        "900italic": "http://fonts.gstatic.com/s/firasanscondensed/v4/wEOuEADFm8hSaQTFG18FErVhsC9x-tarUfPVLMR0dzRehY43EA.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Fira Sans Extra Condensed",
      "variants": [
        "100",
        "100italic",
        "200",
        "200italic",
        "300",
        "300italic",
        "regular",
        "italic",
        "500",
        "500italic",
        "600",
        "600italic",
        "700",
        "700italic",
        "800",
        "800italic",
        "900",
        "900italic"
      ],
      "subsets": [
        "cyrillic",
        "cyrillic-ext",
        "greek",
        "greek-ext",
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v4",
      "lastModified": "2019-07-17",
      "files": {
        "100": "http://fonts.gstatic.com/s/firasansextracondensed/v4/NaPMcYDaAO5dirw6IaFn7lPJFqXmS-M9Atn3wgda3Zyuv1WarE9ncg.ttf",
        "100italic": "http://fonts.gstatic.com/s/firasansextracondensed/v4/NaPOcYDaAO5dirw6IaFn7lPJFqXmS-M9Atn3wgda1fqW21-ejkp3cn22.ttf",
        "200": "http://fonts.gstatic.com/s/firasansextracondensed/v4/NaPPcYDaAO5dirw6IaFn7lPJFqXmS-M9Atn3wgda3TCPn3-0oEZ-a2Q.ttf",
        "200italic": "http://fonts.gstatic.com/s/firasansextracondensed/v4/NaPxcYDaAO5dirw6IaFn7lPJFqXmS-M9Atn3wgda1fqWd36-pGR7e2SvJQ.ttf",
        "300": "http://fonts.gstatic.com/s/firasansextracondensed/v4/NaPPcYDaAO5dirw6IaFn7lPJFqXmS-M9Atn3wgda3VSMn3-0oEZ-a2Q.ttf",
        "300italic": "http://fonts.gstatic.com/s/firasansextracondensed/v4/NaPxcYDaAO5dirw6IaFn7lPJFqXmS-M9Atn3wgda1fqWE32-pGR7e2SvJQ.ttf",
        "regular": "http://fonts.gstatic.com/s/firasansextracondensed/v4/NaPKcYDaAO5dirw6IaFn7lPJFqXmS-M9Atn3wgda5fiku3efvE8.ttf",
        "italic": "http://fonts.gstatic.com/s/firasansextracondensed/v4/NaPMcYDaAO5dirw6IaFn7lPJFqXmS-M9Atn3wgda1fquv1WarE9ncg.ttf",
        "500": "http://fonts.gstatic.com/s/firasansextracondensed/v4/NaPPcYDaAO5dirw6IaFn7lPJFqXmS-M9Atn3wgda3QyNn3-0oEZ-a2Q.ttf",
        "500italic": "http://fonts.gstatic.com/s/firasansextracondensed/v4/NaPxcYDaAO5dirw6IaFn7lPJFqXmS-M9Atn3wgda1fqWS3y-pGR7e2SvJQ.ttf",
        "600": "http://fonts.gstatic.com/s/firasansextracondensed/v4/NaPPcYDaAO5dirw6IaFn7lPJFqXmS-M9Atn3wgda3SCKn3-0oEZ-a2Q.ttf",
        "600italic": "http://fonts.gstatic.com/s/firasansextracondensed/v4/NaPxcYDaAO5dirw6IaFn7lPJFqXmS-M9Atn3wgda1fqWZ3u-pGR7e2SvJQ.ttf",
        "700": "http://fonts.gstatic.com/s/firasansextracondensed/v4/NaPPcYDaAO5dirw6IaFn7lPJFqXmS-M9Atn3wgda3USLn3-0oEZ-a2Q.ttf",
        "700italic": "http://fonts.gstatic.com/s/firasansextracondensed/v4/NaPxcYDaAO5dirw6IaFn7lPJFqXmS-M9Atn3wgda1fqWA3q-pGR7e2SvJQ.ttf",
        "800": "http://fonts.gstatic.com/s/firasansextracondensed/v4/NaPPcYDaAO5dirw6IaFn7lPJFqXmS-M9Atn3wgda3ViIn3-0oEZ-a2Q.ttf",
        "800italic": "http://fonts.gstatic.com/s/firasansextracondensed/v4/NaPxcYDaAO5dirw6IaFn7lPJFqXmS-M9Atn3wgda1fqWH3m-pGR7e2SvJQ.ttf",
        "900": "http://fonts.gstatic.com/s/firasansextracondensed/v4/NaPPcYDaAO5dirw6IaFn7lPJFqXmS-M9Atn3wgda3XyJn3-0oEZ-a2Q.ttf",
        "900italic": "http://fonts.gstatic.com/s/firasansextracondensed/v4/NaPxcYDaAO5dirw6IaFn7lPJFqXmS-M9Atn3wgda1fqWO3i-pGR7e2SvJQ.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Fjalla One",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v8",
      "lastModified": "2020-09-10",
      "files": {
        "regular": "http://fonts.gstatic.com/s/fjallaone/v8/Yq6R-LCAWCX3-6Ky7FAFnOZwkxgtUb8.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Fjord One",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v9",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/fjordone/v9/zOL-4pbEnKBY_9S1jNKr6e5As-FeiQ.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Flamenco",
      "variants": [
        "300",
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v11",
      "lastModified": "2020-07-23",
      "files": {
        "300": "http://fonts.gstatic.com/s/flamenco/v11/neIPzCehqYguo67ssZ0qNIkyepH9qGsf.ttf",
        "regular": "http://fonts.gstatic.com/s/flamenco/v11/neIIzCehqYguo67ssaWGHK06UY30.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Flavors",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v10",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/flavors/v10/FBV2dDrhxqmveJTpbkzlNqkG9UY.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Fondamento",
      "variants": [
        "regular",
        "italic"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v11",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/fondamento/v11/4UaHrEJGsxNmFTPDnkaJx63j5pN1MwI.ttf",
        "italic": "http://fonts.gstatic.com/s/fondamento/v11/4UaFrEJGsxNmFTPDnkaJ96_p4rFwIwJePw.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Fontdiner Swanky",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v11",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/fontdinerswanky/v11/ijwOs4XgRNsiaI5-hcVb4hQgMvCD4uEfKiGvxts.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Forum",
      "variants": [
        "regular"
      ],
      "subsets": [
        "cyrillic",
        "cyrillic-ext",
        "latin",
        "latin-ext"
      ],
      "version": "v11",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/forum/v11/6aey4Ky-Vb8Ew_IWMJMa3mnT.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Francois One",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v15",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/francoisone/v15/_Xmr-H4zszafZw3A-KPSZutNxgKQu_avAg.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Frank Ruhl Libre",
      "variants": [
        "300",
        "regular",
        "500",
        "700",
        "900"
      ],
      "subsets": [
        "hebrew",
        "latin",
        "latin-ext"
      ],
      "version": "v6",
      "lastModified": "2020-09-02",
      "files": {
        "300": "http://fonts.gstatic.com/s/frankruhllibre/v6/j8_36_fAw7jrcalD7oKYNX0QfAnPUxvHxJDMhYeIHw8.ttf",
        "regular": "http://fonts.gstatic.com/s/frankruhllibre/v6/j8_w6_fAw7jrcalD7oKYNX0QfAnPa7fv4JjnmY4.ttf",
        "500": "http://fonts.gstatic.com/s/frankruhllibre/v6/j8_36_fAw7jrcalD7oKYNX0QfAnPU0PGxJDMhYeIHw8.ttf",
        "700": "http://fonts.gstatic.com/s/frankruhllibre/v6/j8_36_fAw7jrcalD7oKYNX0QfAnPUwvAxJDMhYeIHw8.ttf",
        "900": "http://fonts.gstatic.com/s/frankruhllibre/v6/j8_36_fAw7jrcalD7oKYNX0QfAnPUzPCxJDMhYeIHw8.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Fraunces",
      "variants": [
        "100",
        "200",
        "300",
        "regular",
        "500",
        "600",
        "700",
        "800",
        "900",
        "100italic",
        "200italic",
        "300italic",
        "italic",
        "500italic",
        "600italic",
        "700italic",
        "800italic",
        "900italic"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v5",
      "lastModified": "2021-01-21",
      "files": {
        "100": "http://fonts.gstatic.com/s/fraunces/v5/6NUh8FyLNQOQZAnv9bYEvDiIdE9Ea92uemAk_WBq8U_9v0c2Wa0K7iN7hzFUPJH58nib1603gg7S2nfgRYIctxqjDvTShUtWNg.ttf",
        "200": "http://fonts.gstatic.com/s/fraunces/v5/6NUh8FyLNQOQZAnv9bYEvDiIdE9Ea92uemAk_WBq8U_9v0c2Wa0K7iN7hzFUPJH58nib1603gg7S2nfgRYIcNxujDvTShUtWNg.ttf",
        "300": "http://fonts.gstatic.com/s/fraunces/v5/6NUh8FyLNQOQZAnv9bYEvDiIdE9Ea92uemAk_WBq8U_9v0c2Wa0K7iN7hzFUPJH58nib1603gg7S2nfgRYIc6RujDvTShUtWNg.ttf",
        "regular": "http://fonts.gstatic.com/s/fraunces/v5/6NUh8FyLNQOQZAnv9bYEvDiIdE9Ea92uemAk_WBq8U_9v0c2Wa0K7iN7hzFUPJH58nib1603gg7S2nfgRYIctxujDvTShUtWNg.ttf",
        "500": "http://fonts.gstatic.com/s/fraunces/v5/6NUh8FyLNQOQZAnv9bYEvDiIdE9Ea92uemAk_WBq8U_9v0c2Wa0K7iN7hzFUPJH58nib1603gg7S2nfgRYIchRujDvTShUtWNg.ttf",
        "600": "http://fonts.gstatic.com/s/fraunces/v5/6NUh8FyLNQOQZAnv9bYEvDiIdE9Ea92uemAk_WBq8U_9v0c2Wa0K7iN7hzFUPJH58nib1603gg7S2nfgRYIcaRyjDvTShUtWNg.ttf",
        "700": "http://fonts.gstatic.com/s/fraunces/v5/6NUh8FyLNQOQZAnv9bYEvDiIdE9Ea92uemAk_WBq8U_9v0c2Wa0K7iN7hzFUPJH58nib1603gg7S2nfgRYIcUByjDvTShUtWNg.ttf",
        "800": "http://fonts.gstatic.com/s/fraunces/v5/6NUh8FyLNQOQZAnv9bYEvDiIdE9Ea92uemAk_WBq8U_9v0c2Wa0K7iN7hzFUPJH58nib1603gg7S2nfgRYIcNxyjDvTShUtWNg.ttf",
        "900": "http://fonts.gstatic.com/s/fraunces/v5/6NUh8FyLNQOQZAnv9bYEvDiIdE9Ea92uemAk_WBq8U_9v0c2Wa0K7iN7hzFUPJH58nib1603gg7S2nfgRYIcHhyjDvTShUtWNg.ttf",
        "100italic": "http://fonts.gstatic.com/s/fraunces/v5/6NVf8FyLNQOQZAnv9ZwNjucMHVn85Ni7emAe9lKqZTnbB-gzTK0K1ChJdt9vIVYX9G37lvd9sPEKsxx664UJf1hLTP7Wp05GNi3k.ttf",
        "200italic": "http://fonts.gstatic.com/s/fraunces/v5/6NVf8FyLNQOQZAnv9ZwNjucMHVn85Ni7emAe9lKqZTnbB-gzTK0K1ChJdt9vIVYX9G37lvd9sPEKsxx664UJf1jLTf7Wp05GNi3k.ttf",
        "300italic": "http://fonts.gstatic.com/s/fraunces/v5/6NVf8FyLNQOQZAnv9ZwNjucMHVn85Ni7emAe9lKqZTnbB-gzTK0K1ChJdt9vIVYX9G37lvd9sPEKsxx664UJf1gVTf7Wp05GNi3k.ttf",
        "italic": "http://fonts.gstatic.com/s/fraunces/v5/6NVf8FyLNQOQZAnv9ZwNjucMHVn85Ni7emAe9lKqZTnbB-gzTK0K1ChJdt9vIVYX9G37lvd9sPEKsxx664UJf1hLTf7Wp05GNi3k.ttf",
        "500italic": "http://fonts.gstatic.com/s/fraunces/v5/6NVf8FyLNQOQZAnv9ZwNjucMHVn85Ni7emAe9lKqZTnbB-gzTK0K1ChJdt9vIVYX9G37lvd9sPEKsxx664UJf1h5Tf7Wp05GNi3k.ttf",
        "600italic": "http://fonts.gstatic.com/s/fraunces/v5/6NVf8FyLNQOQZAnv9ZwNjucMHVn85Ni7emAe9lKqZTnbB-gzTK0K1ChJdt9vIVYX9G37lvd9sPEKsxx664UJf1iVSv7Wp05GNi3k.ttf",
        "700italic": "http://fonts.gstatic.com/s/fraunces/v5/6NVf8FyLNQOQZAnv9ZwNjucMHVn85Ni7emAe9lKqZTnbB-gzTK0K1ChJdt9vIVYX9G37lvd9sPEKsxx664UJf1isSv7Wp05GNi3k.ttf",
        "800italic": "http://fonts.gstatic.com/s/fraunces/v5/6NVf8FyLNQOQZAnv9ZwNjucMHVn85Ni7emAe9lKqZTnbB-gzTK0K1ChJdt9vIVYX9G37lvd9sPEKsxx664UJf1jLSv7Wp05GNi3k.ttf",
        "900italic": "http://fonts.gstatic.com/s/fraunces/v5/6NVf8FyLNQOQZAnv9ZwNjucMHVn85Ni7emAe9lKqZTnbB-gzTK0K1ChJdt9vIVYX9G37lvd9sPEKsxx664UJf1jiSv7Wp05GNi3k.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Freckle Face",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v9",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/freckleface/v9/AMOWz4SXrmKHCvXTohxY-YI0U1K2w9lb4g.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Fredericka the Great",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v10",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/frederickathegreat/v10/9Bt33CxNwt7aOctW2xjbCstzwVKsIBVV-9Skz7Ylch2L.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Fredoka One",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v8",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/fredokaone/v8/k3kUo8kEI-tA1RRcTZGmTmHBA6aF8Bf_.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Freehand",
      "variants": [
        "regular"
      ],
      "subsets": [
        "khmer"
      ],
      "version": "v12",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/freehand/v12/cIf-Ma5eqk01VjKTgAmBTmUOmZJk.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Fresca",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v9",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/fresca/v9/6ae94K--SKgCzbM2Gr0W13DKPA.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Frijole",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v9",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/frijole/v9/uU9PCBUR8oakM2BQ7xPb3vyHmlI.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Fruktur",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v13",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/fruktur/v13/SZc53FHsOru5QYsMfz3GkUrS8DI.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Fugaz One",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v10",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/fugazone/v10/rax_HiWKp9EAITukFslMBBJek0vA8A.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "GFS Didot",
      "variants": [
        "regular"
      ],
      "subsets": [
        "greek"
      ],
      "version": "v10",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/gfsdidot/v10/Jqzh5TybZ9vZMWFssvwiF-fGFSCGAA.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "GFS Neohellenic",
      "variants": [
        "regular",
        "italic",
        "700",
        "700italic"
      ],
      "subsets": [
        "greek"
      ],
      "version": "v13",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/gfsneohellenic/v13/8QIRdiDOrfiq0b7R8O1Iw9WLcY5TLahP46UDUw.ttf",
        "italic": "http://fonts.gstatic.com/s/gfsneohellenic/v13/8QITdiDOrfiq0b7R8O1Iw9WLcY5jL6JLwaATU91X.ttf",
        "700": "http://fonts.gstatic.com/s/gfsneohellenic/v13/8QIUdiDOrfiq0b7R8O1Iw9WLcY5rkYdr644fWsRO9w.ttf",
        "700italic": "http://fonts.gstatic.com/s/gfsneohellenic/v13/8QIWdiDOrfiq0b7R8O1Iw9WLcY5jL5r37oQbeMFe985V.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Gabriela",
      "variants": [
        "regular"
      ],
      "subsets": [
        "cyrillic",
        "cyrillic-ext",
        "latin"
      ],
      "version": "v9",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/gabriela/v9/qkBWXvsO6sreR8E-b_m-zrpHmRzC.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Gaegu",
      "variants": [
        "300",
        "regular",
        "700"
      ],
      "subsets": [
        "korean",
        "latin"
      ],
      "version": "v8",
      "lastModified": "2019-07-16",
      "files": {
        "300": "http://fonts.gstatic.com/s/gaegu/v8/TuGSUVB6Up9NU57nifw74sdtBk0x.ttf",
        "regular": "http://fonts.gstatic.com/s/gaegu/v8/TuGfUVB6Up9NU6ZLodgzydtk.ttf",
        "700": "http://fonts.gstatic.com/s/gaegu/v8/TuGSUVB6Up9NU573jvw74sdtBk0x.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Gafata",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v9",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/gafata/v9/XRXV3I6Cn0VJKon4MuyAbsrVcA.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Galada",
      "variants": [
        "regular"
      ],
      "subsets": [
        "bengali",
        "latin"
      ],
      "version": "v6",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/galada/v6/H4cmBXyGmcjXlUX-8iw-4Lqggw.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Galdeano",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v10",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/galdeano/v10/uU9MCBoQ4YOqOW1boDPx8PCOg0uX.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Galindo",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v8",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/galindo/v8/HI_KiYMeLqVKqwyuQ5HiRp-dhpQ.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Gamja Flower",
      "variants": [
        "regular"
      ],
      "subsets": [
        "korean",
        "latin"
      ],
      "version": "v8",
      "lastModified": "2019-07-16",
      "files": {
        "regular": "http://fonts.gstatic.com/s/gamjaflower/v8/6NUR8FiKJg-Pa0rM6uN40Z4kyf9Fdty2ew.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Gayathri",
      "variants": [
        "100",
        "regular",
        "700"
      ],
      "subsets": [
        "latin",
        "malayalam"
      ],
      "version": "v2",
      "lastModified": "2020-07-23",
      "files": {
        "100": "http://fonts.gstatic.com/s/gayathri/v2/MCoWzAb429DbBilWLLhc-pvSA_gA2W8.ttf",
        "regular": "http://fonts.gstatic.com/s/gayathri/v2/MCoQzAb429DbBilWLIA48J_wBugA.ttf",
        "700": "http://fonts.gstatic.com/s/gayathri/v2/MCoXzAb429DbBilWLLiE37v4LfQJwHbn.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Gelasio",
      "variants": [
        "regular",
        "italic",
        "500",
        "500italic",
        "600",
        "600italic",
        "700",
        "700italic"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v3",
      "lastModified": "2020-09-25",
      "files": {
        "regular": "http://fonts.gstatic.com/s/gelasio/v3/cIf9MaFfvUQxTTqSxCmrYGkHgIs.ttf",
        "italic": "http://fonts.gstatic.com/s/gelasio/v3/cIf_MaFfvUQxTTqS9CuhZEsCkIt9QQ.ttf",
        "500": "http://fonts.gstatic.com/s/gelasio/v3/cIf4MaFfvUQxTTqS_N2CRGEsnIJkWL4.ttf",
        "500italic": "http://fonts.gstatic.com/s/gelasio/v3/cIf6MaFfvUQxTTqS9CuZkGImmKBhSL7Y1Q.ttf",
        "600": "http://fonts.gstatic.com/s/gelasio/v3/cIf4MaFfvUQxTTqS_PGFRGEsnIJkWL4.ttf",
        "600italic": "http://fonts.gstatic.com/s/gelasio/v3/cIf6MaFfvUQxTTqS9CuZvGUmmKBhSL7Y1Q.ttf",
        "700": "http://fonts.gstatic.com/s/gelasio/v3/cIf4MaFfvUQxTTqS_JWERGEsnIJkWL4.ttf",
        "700italic": "http://fonts.gstatic.com/s/gelasio/v3/cIf6MaFfvUQxTTqS9CuZ2GQmmKBhSL7Y1Q.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Gentium Basic",
      "variants": [
        "regular",
        "italic",
        "700",
        "700italic"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v12",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/gentiumbasic/v12/Wnz9HAw9aB_JD2VGQVR80We3HAqDiTI_cIM.ttf",
        "italic": "http://fonts.gstatic.com/s/gentiumbasic/v12/WnzjHAw9aB_JD2VGQVR80We3LAiJjRA6YIORZQ.ttf",
        "700": "http://fonts.gstatic.com/s/gentiumbasic/v12/WnzgHAw9aB_JD2VGQVR80We3JLasrToUbIqIfBU.ttf",
        "700italic": "http://fonts.gstatic.com/s/gentiumbasic/v12/WnzmHAw9aB_JD2VGQVR80We3LAixMT8eaKiNbBVWkw.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Gentium Book Basic",
      "variants": [
        "regular",
        "italic",
        "700",
        "700italic"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v11",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/gentiumbookbasic/v11/pe0zMJCbPYBVokB1LHA9bbyaQb8ZGjcIV7t7w6bE2A.ttf",
        "italic": "http://fonts.gstatic.com/s/gentiumbookbasic/v11/pe0xMJCbPYBVokB1LHA9bbyaQb8ZGjc4VbF_4aPU2Ec9.ttf",
        "700": "http://fonts.gstatic.com/s/gentiumbookbasic/v11/pe0wMJCbPYBVokB1LHA9bbyaQb8ZGjcw65Rfy43Y0V4kvg.ttf",
        "700italic": "http://fonts.gstatic.com/s/gentiumbookbasic/v11/pe0-MJCbPYBVokB1LHA9bbyaQb8ZGjc4VYnDzofc81s0voO3.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Geo",
      "variants": [
        "regular",
        "italic"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v12",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/geo/v12/CSRz4zRZlufVL3BmQjlCbQ.ttf",
        "italic": "http://fonts.gstatic.com/s/geo/v12/CSRx4zRZluflLXpiYDxSbf8r.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Geostar",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v11",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/geostar/v11/sykz-yx4n701VLOftSq9-trEvlQ.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Geostar Fill",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v11",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/geostarfill/v11/AMOWz4SWuWiXFfjEohxQ9os0U1K2w9lb4g.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Germania One",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v8",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/germaniaone/v8/Fh4yPjrqIyv2ucM2qzBjeS3ezAJONau6ew.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Gidugu",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "telugu"
      ],
      "version": "v8",
      "lastModified": "2020-09-25",
      "files": {
        "regular": "http://fonts.gstatic.com/s/gidugu/v8/L0x8DFMkk1Uf6w3RvPCmRSlUig.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Gilda Display",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v8",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/gildadisplay/v8/t5tmIRoYMoaYG0WEOh7HwMeR7TnFrpOHYh4.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Girassol",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v3",
      "lastModified": "2020-09-25",
      "files": {
        "regular": "http://fonts.gstatic.com/s/girassol/v3/JTUUjIo_-DK48laaNC9Nz2pJzxbi.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Give You Glory",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v10",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/giveyouglory/v10/8QIQdiHOgt3vv4LR7ahjw9-XYc1zB4ZD6rwa.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Glass Antiqua",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v8",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/glassantiqua/v8/xfu30Wr0Wn3NOQM2piC0uXOjnL_wN6fRUkY.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Glegoo",
      "variants": [
        "regular",
        "700"
      ],
      "subsets": [
        "devanagari",
        "latin",
        "latin-ext"
      ],
      "version": "v10",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/glegoo/v10/_Xmt-HQyrTKWaw2Ji6mZAI91xw.ttf",
        "700": "http://fonts.gstatic.com/s/glegoo/v10/_Xmu-HQyrTKWaw2xN4a9CKRpzimMsg.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Gloria Hallelujah",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v12",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/gloriahallelujah/v12/LYjYdHv3kUk9BMV96EIswT9DIbW-MLSy3TKEvkCF.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Goblin One",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v10",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/goblinone/v10/CSR64z1ZnOqZRjRCBVY_TOcATNt_pOU.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Gochi Hand",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v11",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/gochihand/v11/hES06XlsOjtJsgCkx1PkTo71-n0nXWA.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Goldman",
      "variants": [
        "regular",
        "700"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v2",
      "lastModified": "2021-01-21",
      "files": {
        "regular": "http://fonts.gstatic.com/s/goldman/v2/pe0uMIWbN4JFplR2LDJ4Bt-7G98.ttf",
        "700": "http://fonts.gstatic.com/s/goldman/v2/pe0rMIWbN4JFplR2FI5XIteQB9Zra1U.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Gorditas",
      "variants": [
        "regular",
        "700"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v8",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/gorditas/v8/ll8_K2aTVD26DsPEtQDoDa4AlxYb.ttf",
        "700": "http://fonts.gstatic.com/s/gorditas/v8/ll84K2aTVD26DsPEtThUIooIvAoShA1i.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Gothic A1",
      "variants": [
        "100",
        "200",
        "300",
        "regular",
        "500",
        "600",
        "700",
        "800",
        "900"
      ],
      "subsets": [
        "korean",
        "latin"
      ],
      "version": "v8",
      "lastModified": "2019-07-16",
      "files": {
        "100": "http://fonts.gstatic.com/s/gothica1/v8/CSR74z5ZnPydRjlCCwlCCMcqYtd2vfwk.ttf",
        "200": "http://fonts.gstatic.com/s/gothica1/v8/CSR44z5ZnPydRjlCCwlCpOYKSPl6tOU9Eg.ttf",
        "300": "http://fonts.gstatic.com/s/gothica1/v8/CSR44z5ZnPydRjlCCwlCwOUKSPl6tOU9Eg.ttf",
        "regular": "http://fonts.gstatic.com/s/gothica1/v8/CSR94z5ZnPydRjlCCwl6bM0uQNJmvQ.ttf",
        "500": "http://fonts.gstatic.com/s/gothica1/v8/CSR44z5ZnPydRjlCCwlCmOQKSPl6tOU9Eg.ttf",
        "600": "http://fonts.gstatic.com/s/gothica1/v8/CSR44z5ZnPydRjlCCwlCtOMKSPl6tOU9Eg.ttf",
        "700": "http://fonts.gstatic.com/s/gothica1/v8/CSR44z5ZnPydRjlCCwlC0OIKSPl6tOU9Eg.ttf",
        "800": "http://fonts.gstatic.com/s/gothica1/v8/CSR44z5ZnPydRjlCCwlCzOEKSPl6tOU9Eg.ttf",
        "900": "http://fonts.gstatic.com/s/gothica1/v8/CSR44z5ZnPydRjlCCwlC6OAKSPl6tOU9Eg.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Gotu",
      "variants": [
        "regular"
      ],
      "subsets": [
        "devanagari",
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v1",
      "lastModified": "2020-04-21",
      "files": {
        "regular": "http://fonts.gstatic.com/s/gotu/v1/o-0FIpksx3QOlH0Lioh6-hU.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Goudy Bookletter 1911",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v10",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/goudybookletter1911/v10/sykt-z54laciWfKv-kX8krex0jDiD2HbY6I5tRbXZ4IXAA.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Graduate",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v8",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/graduate/v8/C8cg4cs3o2n15t_2YxgR6X2NZAn2.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Grand Hotel",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v8",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/grandhotel/v8/7Au7p_IgjDKdCRWuR1azpmQNEl0O0kEx.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Grandstander",
      "variants": [
        "100",
        "200",
        "300",
        "regular",
        "500",
        "600",
        "700",
        "800",
        "900",
        "100italic",
        "200italic",
        "300italic",
        "italic",
        "500italic",
        "600italic",
        "700italic",
        "800italic",
        "900italic"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v4",
      "lastModified": "2021-01-21",
      "files": {
        "100": "http://fonts.gstatic.com/s/grandstander/v4/ga6fawtA-GpSsTWrnNHPCSIMZhhKpFjyNZIQD1-_D3jWttFGmQk.ttf",
        "200": "http://fonts.gstatic.com/s/grandstander/v4/ga6fawtA-GpSsTWrnNHPCSIMZhhKpFjyNZIQD9--D3jWttFGmQk.ttf",
        "300": "http://fonts.gstatic.com/s/grandstander/v4/ga6fawtA-GpSsTWrnNHPCSIMZhhKpFjyNZIQDwG-D3jWttFGmQk.ttf",
        "regular": "http://fonts.gstatic.com/s/grandstander/v4/ga6fawtA-GpSsTWrnNHPCSIMZhhKpFjyNZIQD1--D3jWttFGmQk.ttf",
        "500": "http://fonts.gstatic.com/s/grandstander/v4/ga6fawtA-GpSsTWrnNHPCSIMZhhKpFjyNZIQD22-D3jWttFGmQk.ttf",
        "600": "http://fonts.gstatic.com/s/grandstander/v4/ga6fawtA-GpSsTWrnNHPCSIMZhhKpFjyNZIQD4G5D3jWttFGmQk.ttf",
        "700": "http://fonts.gstatic.com/s/grandstander/v4/ga6fawtA-GpSsTWrnNHPCSIMZhhKpFjyNZIQD7i5D3jWttFGmQk.ttf",
        "800": "http://fonts.gstatic.com/s/grandstander/v4/ga6fawtA-GpSsTWrnNHPCSIMZhhKpFjyNZIQD9-5D3jWttFGmQk.ttf",
        "900": "http://fonts.gstatic.com/s/grandstander/v4/ga6fawtA-GpSsTWrnNHPCSIMZhhKpFjyNZIQD_a5D3jWttFGmQk.ttf",
        "100italic": "http://fonts.gstatic.com/s/grandstander/v4/ga6ZawtA-GpSsTWrnNHPCSImbyq1fDGZrzwXGpf95zrcsvNDiQlBYQ.ttf",
        "200italic": "http://fonts.gstatic.com/s/grandstander/v4/ga6ZawtA-GpSsTWrnNHPCSImbyq1fDGZrzwXGpf9ZzvcsvNDiQlBYQ.ttf",
        "300italic": "http://fonts.gstatic.com/s/grandstander/v4/ga6ZawtA-GpSsTWrnNHPCSImbyq1fDGZrzwXGpf9uTvcsvNDiQlBYQ.ttf",
        "italic": "http://fonts.gstatic.com/s/grandstander/v4/ga6ZawtA-GpSsTWrnNHPCSImbyq1fDGZrzwXGpf95zvcsvNDiQlBYQ.ttf",
        "500italic": "http://fonts.gstatic.com/s/grandstander/v4/ga6ZawtA-GpSsTWrnNHPCSImbyq1fDGZrzwXGpf91TvcsvNDiQlBYQ.ttf",
        "600italic": "http://fonts.gstatic.com/s/grandstander/v4/ga6ZawtA-GpSsTWrnNHPCSImbyq1fDGZrzwXGpf9OTzcsvNDiQlBYQ.ttf",
        "700italic": "http://fonts.gstatic.com/s/grandstander/v4/ga6ZawtA-GpSsTWrnNHPCSImbyq1fDGZrzwXGpf9ADzcsvNDiQlBYQ.ttf",
        "800italic": "http://fonts.gstatic.com/s/grandstander/v4/ga6ZawtA-GpSsTWrnNHPCSImbyq1fDGZrzwXGpf9ZzzcsvNDiQlBYQ.ttf",
        "900italic": "http://fonts.gstatic.com/s/grandstander/v4/ga6ZawtA-GpSsTWrnNHPCSImbyq1fDGZrzwXGpf9TjzcsvNDiQlBYQ.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Gravitas One",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v10",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/gravitasone/v10/5h1diZ4hJ3cblKy3LWakKQmaDWRNr3DzbQ.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Great Vibes",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v8",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/greatvibes/v8/RWmMoKWR9v4ksMfaWd_JN-XCg6UKDXlq.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Grenze",
      "variants": [
        "100",
        "100italic",
        "200",
        "200italic",
        "300",
        "300italic",
        "regular",
        "italic",
        "500",
        "500italic",
        "600",
        "600italic",
        "700",
        "700italic",
        "800",
        "800italic",
        "900",
        "900italic"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v2",
      "lastModified": "2020-07-23",
      "files": {
        "100": "http://fonts.gstatic.com/s/grenze/v2/O4ZRFGb7hR12BxqPm2IjuAkalnmd.ttf",
        "100italic": "http://fonts.gstatic.com/s/grenze/v2/O4ZXFGb7hR12BxqH_VpHsg04k2md0kI.ttf",
        "200": "http://fonts.gstatic.com/s/grenze/v2/O4ZQFGb7hR12BxqPN0MDkicWn2CEyw.ttf",
        "200italic": "http://fonts.gstatic.com/s/grenze/v2/O4ZWFGb7hR12BxqH_Vrrky0SvWWUy1uW.ttf",
        "300": "http://fonts.gstatic.com/s/grenze/v2/O4ZQFGb7hR12BxqPU0ADkicWn2CEyw.ttf",
        "300italic": "http://fonts.gstatic.com/s/grenze/v2/O4ZWFGb7hR12BxqH_VqPkC0SvWWUy1uW.ttf",
        "regular": "http://fonts.gstatic.com/s/grenze/v2/O4ZTFGb7hR12Bxq3_2gnmgwKlg.ttf",
        "italic": "http://fonts.gstatic.com/s/grenze/v2/O4ZRFGb7hR12BxqH_WIjuAkalnmd.ttf",
        "500": "http://fonts.gstatic.com/s/grenze/v2/O4ZQFGb7hR12BxqPC0EDkicWn2CEyw.ttf",
        "500italic": "http://fonts.gstatic.com/s/grenze/v2/O4ZWFGb7hR12BxqH_VrXkS0SvWWUy1uW.ttf",
        "600": "http://fonts.gstatic.com/s/grenze/v2/O4ZQFGb7hR12BxqPJ0YDkicWn2CEyw.ttf",
        "600italic": "http://fonts.gstatic.com/s/grenze/v2/O4ZWFGb7hR12BxqH_Vr7li0SvWWUy1uW.ttf",
        "700": "http://fonts.gstatic.com/s/grenze/v2/O4ZQFGb7hR12BxqPQ0cDkicWn2CEyw.ttf",
        "700italic": "http://fonts.gstatic.com/s/grenze/v2/O4ZWFGb7hR12BxqH_Vqfly0SvWWUy1uW.ttf",
        "800": "http://fonts.gstatic.com/s/grenze/v2/O4ZQFGb7hR12BxqPX0QDkicWn2CEyw.ttf",
        "800italic": "http://fonts.gstatic.com/s/grenze/v2/O4ZWFGb7hR12BxqH_VqDlC0SvWWUy1uW.ttf",
        "900": "http://fonts.gstatic.com/s/grenze/v2/O4ZQFGb7hR12BxqPe0UDkicWn2CEyw.ttf",
        "900italic": "http://fonts.gstatic.com/s/grenze/v2/O4ZWFGb7hR12BxqH_VqnlS0SvWWUy1uW.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Grenze Gotisch",
      "variants": [
        "100",
        "200",
        "300",
        "regular",
        "500",
        "600",
        "700",
        "800",
        "900"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v3",
      "lastModified": "2021-01-21",
      "files": {
        "100": "http://fonts.gstatic.com/s/grenzegotisch/v3/Fh4hPjjqNDz1osh_jX9YfjudpBJBNV5y5wf_k1i5Lz5UcICdYPSd_w.ttf",
        "200": "http://fonts.gstatic.com/s/grenzegotisch/v3/Fh4hPjjqNDz1osh_jX9YfjudpBJBNV5y5wf_k1i5rz9UcICdYPSd_w.ttf",
        "300": "http://fonts.gstatic.com/s/grenzegotisch/v3/Fh4hPjjqNDz1osh_jX9YfjudpBJBNV5y5wf_k1i5cT9UcICdYPSd_w.ttf",
        "regular": "http://fonts.gstatic.com/s/grenzegotisch/v3/Fh4hPjjqNDz1osh_jX9YfjudpBJBNV5y5wf_k1i5Lz9UcICdYPSd_w.ttf",
        "500": "http://fonts.gstatic.com/s/grenzegotisch/v3/Fh4hPjjqNDz1osh_jX9YfjudpBJBNV5y5wf_k1i5HT9UcICdYPSd_w.ttf",
        "600": "http://fonts.gstatic.com/s/grenzegotisch/v3/Fh4hPjjqNDz1osh_jX9YfjudpBJBNV5y5wf_k1i58ThUcICdYPSd_w.ttf",
        "700": "http://fonts.gstatic.com/s/grenzegotisch/v3/Fh4hPjjqNDz1osh_jX9YfjudpBJBNV5y5wf_k1i5yDhUcICdYPSd_w.ttf",
        "800": "http://fonts.gstatic.com/s/grenzegotisch/v3/Fh4hPjjqNDz1osh_jX9YfjudpBJBNV5y5wf_k1i5rzhUcICdYPSd_w.ttf",
        "900": "http://fonts.gstatic.com/s/grenzegotisch/v3/Fh4hPjjqNDz1osh_jX9YfjudpBJBNV5y5wf_k1i5hjhUcICdYPSd_w.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Griffy",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v9",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/griffy/v9/FwZa7-ox2FQh9kfwSNSEwM2zpA.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Gruppo",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v11",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/gruppo/v11/WwkfxPmzE06v_ZWFWXDAOIEQUQ.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Gudea",
      "variants": [
        "regular",
        "italic",
        "700"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v10",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/gudea/v10/neIFzCqgsI0mp-CP9IGON7Ez.ttf",
        "italic": "http://fonts.gstatic.com/s/gudea/v10/neILzCqgsI0mp9CN_oWsMqEzSJQ.ttf",
        "700": "http://fonts.gstatic.com/s/gudea/v10/neIIzCqgsI0mp9gz26WGHK06UY30.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Gugi",
      "variants": [
        "regular"
      ],
      "subsets": [
        "korean",
        "latin"
      ],
      "version": "v8",
      "lastModified": "2019-07-16",
      "files": {
        "regular": "http://fonts.gstatic.com/s/gugi/v8/A2BVn5dXywshVA6A9DEfgqM.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Gupter",
      "variants": [
        "regular",
        "500",
        "700"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v2",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/gupter/v2/2-cm9JNmxJqPO1QUYZa_Wu_lpA.ttf",
        "500": "http://fonts.gstatic.com/s/gupter/v2/2-cl9JNmxJqPO1Qslb-bUsT5rZhaZg.ttf",
        "700": "http://fonts.gstatic.com/s/gupter/v2/2-cl9JNmxJqPO1Qs3bmbUsT5rZhaZg.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Gurajada",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "telugu"
      ],
      "version": "v9",
      "lastModified": "2020-09-25",
      "files": {
        "regular": "http://fonts.gstatic.com/s/gurajada/v9/FwZY7-Qx308m-l-0Kd6A4sijpFu_.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Habibi",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v9",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/habibi/v9/CSR-4zFWkuqcTTNCShJeZOYySQ.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Hachi Maru Pop",
      "variants": [
        "regular"
      ],
      "subsets": [
        "cyrillic",
        "japanese",
        "latin",
        "latin-ext"
      ],
      "version": "v3",
      "lastModified": "2021-01-21",
      "files": {
        "regular": "http://fonts.gstatic.com/s/hachimarupop/v3/HI_TiYoRLqpLrEiMAuO9Ysfz7rW1EM_btd8u.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Halant",
      "variants": [
        "300",
        "regular",
        "500",
        "600",
        "700"
      ],
      "subsets": [
        "devanagari",
        "latin",
        "latin-ext"
      ],
      "version": "v8",
      "lastModified": "2020-09-02",
      "files": {
        "300": "http://fonts.gstatic.com/s/halant/v8/u-490qaujRI2Pbsvc_pCmwZqcwdRXg.ttf",
        "regular": "http://fonts.gstatic.com/s/halant/v8/u-4-0qaujRI2PbsX39Jmky12eg.ttf",
        "500": "http://fonts.gstatic.com/s/halant/v8/u-490qaujRI2PbsvK_tCmwZqcwdRXg.ttf",
        "600": "http://fonts.gstatic.com/s/halant/v8/u-490qaujRI2PbsvB_xCmwZqcwdRXg.ttf",
        "700": "http://fonts.gstatic.com/s/halant/v8/u-490qaujRI2PbsvY_1CmwZqcwdRXg.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Hammersmith One",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v12",
      "lastModified": "2020-11-06",
      "files": {
        "regular": "http://fonts.gstatic.com/s/hammersmithone/v12/qWcyB624q4L_C4jGQ9IK0O_dFlnbshsks4MRXw.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Hanalei",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v11",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/hanalei/v11/E21n_dD8iufIjBRHXzgmVydREus.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Hanalei Fill",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v9",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/hanaleifill/v9/fC1mPYtObGbfyQznIaQzPQiMVwLBplm9aw.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Handlee",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v9",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/handlee/v9/-F6xfjBsISg9aMakDmr6oilJ3ik.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Hanuman",
      "variants": [
        "regular",
        "700"
      ],
      "subsets": [
        "khmer"
      ],
      "version": "v14",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/hanuman/v14/VuJxdNvD15HhpJJBeKbXOIFneRo.ttf",
        "700": "http://fonts.gstatic.com/s/hanuman/v14/VuJ0dNvD15HhpJJBQBr4HIlMZRNcp0o.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Happy Monkey",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v9",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/happymonkey/v9/K2F2fZZcl-9SXwl5F_C4R_OABwD2bWqVjw.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Harmattan",
      "variants": [
        "regular",
        "700"
      ],
      "subsets": [
        "arabic",
        "latin",
        "latin-ext"
      ],
      "version": "v10",
      "lastModified": "2021-01-21",
      "files": {
        "regular": "http://fonts.gstatic.com/s/harmattan/v10/goksH6L2DkFvVvRp9XpTS0CjkP1Yog.ttf",
        "700": "http://fonts.gstatic.com/s/harmattan/v10/gokpH6L2DkFvVvRp9Xpr92-HmNZEq6TTFw.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Headland One",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v8",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/headlandone/v8/yYLu0hHR2vKnp89Tk1TCq3Tx0PlTeZ3mJA.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Heebo",
      "variants": [
        "100",
        "200",
        "300",
        "regular",
        "500",
        "600",
        "700",
        "800",
        "900"
      ],
      "subsets": [
        "hebrew",
        "latin"
      ],
      "version": "v10",
      "lastModified": "2021-01-30",
      "files": {
        "100": "http://fonts.gstatic.com/s/heebo/v10/NGSpv5_NC0k9P_v6ZUCbLRAHxK1EiS2cckOnz02SXQ.ttf",
        "200": "http://fonts.gstatic.com/s/heebo/v10/NGSpv5_NC0k9P_v6ZUCbLRAHxK1ECSycckOnz02SXQ.ttf",
        "300": "http://fonts.gstatic.com/s/heebo/v10/NGSpv5_NC0k9P_v6ZUCbLRAHxK1E1yycckOnz02SXQ.ttf",
        "regular": "http://fonts.gstatic.com/s/heebo/v10/NGSpv5_NC0k9P_v6ZUCbLRAHxK1EiSycckOnz02SXQ.ttf",
        "500": "http://fonts.gstatic.com/s/heebo/v10/NGSpv5_NC0k9P_v6ZUCbLRAHxK1EuyycckOnz02SXQ.ttf",
        "600": "http://fonts.gstatic.com/s/heebo/v10/NGSpv5_NC0k9P_v6ZUCbLRAHxK1EVyucckOnz02SXQ.ttf",
        "700": "http://fonts.gstatic.com/s/heebo/v10/NGSpv5_NC0k9P_v6ZUCbLRAHxK1EbiucckOnz02SXQ.ttf",
        "800": "http://fonts.gstatic.com/s/heebo/v10/NGSpv5_NC0k9P_v6ZUCbLRAHxK1ECSucckOnz02SXQ.ttf",
        "900": "http://fonts.gstatic.com/s/heebo/v10/NGSpv5_NC0k9P_v6ZUCbLRAHxK1EICucckOnz02SXQ.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Henny Penny",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v8",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/hennypenny/v8/wXKvE3UZookzsxz_kjGSfMQqt3M7tMDT.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Hepta Slab",
      "variants": [
        "100",
        "200",
        "300",
        "regular",
        "500",
        "600",
        "700",
        "800",
        "900"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v9",
      "lastModified": "2021-01-30",
      "files": {
        "100": "http://fonts.gstatic.com/s/heptaslab/v9/ea8JadoyU_jkHdalebHvyWVNdYoIsHe5HvkV5jfbY5B0NBkz.ttf",
        "200": "http://fonts.gstatic.com/s/heptaslab/v9/ea8JadoyU_jkHdalebHvyWVNdYoIsHe5HvmV5zfbY5B0NBkz.ttf",
        "300": "http://fonts.gstatic.com/s/heptaslab/v9/ea8JadoyU_jkHdalebHvyWVNdYoIsHe5HvlL5zfbY5B0NBkz.ttf",
        "regular": "http://fonts.gstatic.com/s/heptaslab/v9/ea8JadoyU_jkHdalebHvyWVNdYoIsHe5HvkV5zfbY5B0NBkz.ttf",
        "500": "http://fonts.gstatic.com/s/heptaslab/v9/ea8JadoyU_jkHdalebHvyWVNdYoIsHe5Hvkn5zfbY5B0NBkz.ttf",
        "600": "http://fonts.gstatic.com/s/heptaslab/v9/ea8JadoyU_jkHdalebHvyWVNdYoIsHe5HvnL4DfbY5B0NBkz.ttf",
        "700": "http://fonts.gstatic.com/s/heptaslab/v9/ea8JadoyU_jkHdalebHvyWVNdYoIsHe5Hvny4DfbY5B0NBkz.ttf",
        "800": "http://fonts.gstatic.com/s/heptaslab/v9/ea8JadoyU_jkHdalebHvyWVNdYoIsHe5HvmV4DfbY5B0NBkz.ttf",
        "900": "http://fonts.gstatic.com/s/heptaslab/v9/ea8JadoyU_jkHdalebHvyWVNdYoIsHe5Hvm84DfbY5B0NBkz.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Herr Von Muellerhoff",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v10",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/herrvonmuellerhoff/v10/WBL6rFjRZkREW8WqmCWYLgCkQKXb4CAft3c6_qJY3QPQ.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Hi Melody",
      "variants": [
        "regular"
      ],
      "subsets": [
        "korean",
        "latin"
      ],
      "version": "v8",
      "lastModified": "2019-07-16",
      "files": {
        "regular": "http://fonts.gstatic.com/s/himelody/v8/46ktlbP8Vnz0pJcqCTbEf29E31BBGA.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Hind",
      "variants": [
        "300",
        "regular",
        "500",
        "600",
        "700"
      ],
      "subsets": [
        "devanagari",
        "latin",
        "latin-ext"
      ],
      "version": "v11",
      "lastModified": "2020-09-10",
      "files": {
        "300": "http://fonts.gstatic.com/s/hind/v11/5aU19_a8oxmIfMJaIRuYjDpf5Vw.ttf",
        "regular": "http://fonts.gstatic.com/s/hind/v11/5aU69_a8oxmIRG5yBROzkDM.ttf",
        "500": "http://fonts.gstatic.com/s/hind/v11/5aU19_a8oxmIfJpbIRuYjDpf5Vw.ttf",
        "600": "http://fonts.gstatic.com/s/hind/v11/5aU19_a8oxmIfLZcIRuYjDpf5Vw.ttf",
        "700": "http://fonts.gstatic.com/s/hind/v11/5aU19_a8oxmIfNJdIRuYjDpf5Vw.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Hind Guntur",
      "variants": [
        "300",
        "regular",
        "500",
        "600",
        "700"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "telugu"
      ],
      "version": "v7",
      "lastModified": "2020-11-06",
      "files": {
        "300": "http://fonts.gstatic.com/s/hindguntur/v7/wXKyE3UZrok56nvamSuJd_yGn1czn9zaj5Ju.ttf",
        "regular": "http://fonts.gstatic.com/s/hindguntur/v7/wXKvE3UZrok56nvamSuJd8Qqt3M7tMDT.ttf",
        "500": "http://fonts.gstatic.com/s/hindguntur/v7/wXKyE3UZrok56nvamSuJd_zenlczn9zaj5Ju.ttf",
        "600": "http://fonts.gstatic.com/s/hindguntur/v7/wXKyE3UZrok56nvamSuJd_zymVczn9zaj5Ju.ttf",
        "700": "http://fonts.gstatic.com/s/hindguntur/v7/wXKyE3UZrok56nvamSuJd_yWmFczn9zaj5Ju.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Hind Madurai",
      "variants": [
        "300",
        "regular",
        "500",
        "600",
        "700"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "tamil"
      ],
      "version": "v6",
      "lastModified": "2020-09-02",
      "files": {
        "300": "http://fonts.gstatic.com/s/hindmadurai/v6/f0Xu0e2p98ZvDXdZQIOcpqjfXaUnecsoMJ0b_g.ttf",
        "regular": "http://fonts.gstatic.com/s/hindmadurai/v6/f0Xx0e2p98ZvDXdZQIOcpqjn8Y0DceA0OQ.ttf",
        "500": "http://fonts.gstatic.com/s/hindmadurai/v6/f0Xu0e2p98ZvDXdZQIOcpqjfBaQnecsoMJ0b_g.ttf",
        "600": "http://fonts.gstatic.com/s/hindmadurai/v6/f0Xu0e2p98ZvDXdZQIOcpqjfKaMnecsoMJ0b_g.ttf",
        "700": "http://fonts.gstatic.com/s/hindmadurai/v6/f0Xu0e2p98ZvDXdZQIOcpqjfTaInecsoMJ0b_g.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Hind Siliguri",
      "variants": [
        "300",
        "regular",
        "500",
        "600",
        "700"
      ],
      "subsets": [
        "bengali",
        "latin",
        "latin-ext"
      ],
      "version": "v7",
      "lastModified": "2020-09-10",
      "files": {
        "300": "http://fonts.gstatic.com/s/hindsiliguri/v7/ijwOs5juQtsyLLR5jN4cxBEoRDf44uEfKiGvxts.ttf",
        "regular": "http://fonts.gstatic.com/s/hindsiliguri/v7/ijwTs5juQtsyLLR5jN4cxBEofJvQxuk0Nig.ttf",
        "500": "http://fonts.gstatic.com/s/hindsiliguri/v7/ijwOs5juQtsyLLR5jN4cxBEoRG_54uEfKiGvxts.ttf",
        "600": "http://fonts.gstatic.com/s/hindsiliguri/v7/ijwOs5juQtsyLLR5jN4cxBEoREP-4uEfKiGvxts.ttf",
        "700": "http://fonts.gstatic.com/s/hindsiliguri/v7/ijwOs5juQtsyLLR5jN4cxBEoRCf_4uEfKiGvxts.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Hind Vadodara",
      "variants": [
        "300",
        "regular",
        "500",
        "600",
        "700"
      ],
      "subsets": [
        "gujarati",
        "latin",
        "latin-ext"
      ],
      "version": "v7",
      "lastModified": "2020-09-02",
      "files": {
        "300": "http://fonts.gstatic.com/s/hindvadodara/v7/neIQzCKvrIcn5pbuuuriV9tTSDn3iXM0oSOL2Yw.ttf",
        "regular": "http://fonts.gstatic.com/s/hindvadodara/v7/neINzCKvrIcn5pbuuuriV9tTcJXfrXsfvSo.ttf",
        "500": "http://fonts.gstatic.com/s/hindvadodara/v7/neIQzCKvrIcn5pbuuuriV9tTSGH2iXM0oSOL2Yw.ttf",
        "600": "http://fonts.gstatic.com/s/hindvadodara/v7/neIQzCKvrIcn5pbuuuriV9tTSE3xiXM0oSOL2Yw.ttf",
        "700": "http://fonts.gstatic.com/s/hindvadodara/v7/neIQzCKvrIcn5pbuuuriV9tTSCnwiXM0oSOL2Yw.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Holtwood One SC",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v11",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/holtwoodonesc/v11/yYLx0hLR0P-3vMFSk1TCq3Txg5B3cbb6LZttyg.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Homemade Apple",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v11",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/homemadeapple/v11/Qw3EZQFXECDrI2q789EKQZJob3x9Vnksi4M7.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Homenaje",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v10",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/homenaje/v10/FwZY7-Q-xVAi_l-6Ld6A4sijpFu_.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "IBM Plex Mono",
      "variants": [
        "100",
        "100italic",
        "200",
        "200italic",
        "300",
        "300italic",
        "regular",
        "italic",
        "500",
        "500italic",
        "600",
        "600italic",
        "700",
        "700italic"
      ],
      "subsets": [
        "cyrillic",
        "cyrillic-ext",
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v6",
      "lastModified": "2020-09-02",
      "files": {
        "100": "http://fonts.gstatic.com/s/ibmplexmono/v6/-F6pfjptAgt5VM-kVkqdyU8n3kwq0n1hj-sNFQ.ttf",
        "100italic": "http://fonts.gstatic.com/s/ibmplexmono/v6/-F6rfjptAgt5VM-kVkqdyU8n1ioStndlre4dFcFh.ttf",
        "200": "http://fonts.gstatic.com/s/ibmplexmono/v6/-F6qfjptAgt5VM-kVkqdyU8n3uAL8ldPg-IUDNg.ttf",
        "200italic": "http://fonts.gstatic.com/s/ibmplexmono/v6/-F6sfjptAgt5VM-kVkqdyU8n1ioSGlZFh8ARHNh4zg.ttf",
        "300": "http://fonts.gstatic.com/s/ibmplexmono/v6/-F6qfjptAgt5VM-kVkqdyU8n3oQI8ldPg-IUDNg.ttf",
        "300italic": "http://fonts.gstatic.com/s/ibmplexmono/v6/-F6sfjptAgt5VM-kVkqdyU8n1ioSflVFh8ARHNh4zg.ttf",
        "regular": "http://fonts.gstatic.com/s/ibmplexmono/v6/-F63fjptAgt5VM-kVkqdyU8n5igg1l9kn-s.ttf",
        "italic": "http://fonts.gstatic.com/s/ibmplexmono/v6/-F6pfjptAgt5VM-kVkqdyU8n1ioq0n1hj-sNFQ.ttf",
        "500": "http://fonts.gstatic.com/s/ibmplexmono/v6/-F6qfjptAgt5VM-kVkqdyU8n3twJ8ldPg-IUDNg.ttf",
        "500italic": "http://fonts.gstatic.com/s/ibmplexmono/v6/-F6sfjptAgt5VM-kVkqdyU8n1ioSJlRFh8ARHNh4zg.ttf",
        "600": "http://fonts.gstatic.com/s/ibmplexmono/v6/-F6qfjptAgt5VM-kVkqdyU8n3vAO8ldPg-IUDNg.ttf",
        "600italic": "http://fonts.gstatic.com/s/ibmplexmono/v6/-F6sfjptAgt5VM-kVkqdyU8n1ioSClNFh8ARHNh4zg.ttf",
        "700": "http://fonts.gstatic.com/s/ibmplexmono/v6/-F6qfjptAgt5VM-kVkqdyU8n3pQP8ldPg-IUDNg.ttf",
        "700italic": "http://fonts.gstatic.com/s/ibmplexmono/v6/-F6sfjptAgt5VM-kVkqdyU8n1ioSblJFh8ARHNh4zg.ttf"
      },
      "category": "monospace",
      "kind": "webfonts#webfont"
    },
    {
      "family": "IBM Plex Sans",
      "variants": [
        "100",
        "100italic",
        "200",
        "200italic",
        "300",
        "300italic",
        "regular",
        "italic",
        "500",
        "500italic",
        "600",
        "600italic",
        "700",
        "700italic"
      ],
      "subsets": [
        "cyrillic",
        "cyrillic-ext",
        "greek",
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v8",
      "lastModified": "2020-09-10",
      "files": {
        "100": "http://fonts.gstatic.com/s/ibmplexsans/v8/zYX-KVElMYYaJe8bpLHnCwDKjbLeEKxIedbzDw.ttf",
        "100italic": "http://fonts.gstatic.com/s/ibmplexsans/v8/zYX8KVElMYYaJe8bpLHnCwDKhdTmdKZMW9PjD3N8.ttf",
        "200": "http://fonts.gstatic.com/s/ibmplexsans/v8/zYX9KVElMYYaJe8bpLHnCwDKjR7_MIZmdd_qFmo.ttf",
        "200italic": "http://fonts.gstatic.com/s/ibmplexsans/v8/zYX7KVElMYYaJe8bpLHnCwDKhdTm2Idscf3vBmpl8A.ttf",
        "300": "http://fonts.gstatic.com/s/ibmplexsans/v8/zYX9KVElMYYaJe8bpLHnCwDKjXr8MIZmdd_qFmo.ttf",
        "300italic": "http://fonts.gstatic.com/s/ibmplexsans/v8/zYX7KVElMYYaJe8bpLHnCwDKhdTmvIRscf3vBmpl8A.ttf",
        "regular": "http://fonts.gstatic.com/s/ibmplexsans/v8/zYXgKVElMYYaJe8bpLHnCwDKtdbUFI5NadY.ttf",
        "italic": "http://fonts.gstatic.com/s/ibmplexsans/v8/zYX-KVElMYYaJe8bpLHnCwDKhdTeEKxIedbzDw.ttf",
        "500": "http://fonts.gstatic.com/s/ibmplexsans/v8/zYX9KVElMYYaJe8bpLHnCwDKjSL9MIZmdd_qFmo.ttf",
        "500italic": "http://fonts.gstatic.com/s/ibmplexsans/v8/zYX7KVElMYYaJe8bpLHnCwDKhdTm5IVscf3vBmpl8A.ttf",
        "600": "http://fonts.gstatic.com/s/ibmplexsans/v8/zYX9KVElMYYaJe8bpLHnCwDKjQ76MIZmdd_qFmo.ttf",
        "600italic": "http://fonts.gstatic.com/s/ibmplexsans/v8/zYX7KVElMYYaJe8bpLHnCwDKhdTmyIJscf3vBmpl8A.ttf",
        "700": "http://fonts.gstatic.com/s/ibmplexsans/v8/zYX9KVElMYYaJe8bpLHnCwDKjWr7MIZmdd_qFmo.ttf",
        "700italic": "http://fonts.gstatic.com/s/ibmplexsans/v8/zYX7KVElMYYaJe8bpLHnCwDKhdTmrINscf3vBmpl8A.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "IBM Plex Sans Condensed",
      "variants": [
        "100",
        "100italic",
        "200",
        "200italic",
        "300",
        "300italic",
        "regular",
        "italic",
        "500",
        "500italic",
        "600",
        "600italic",
        "700",
        "700italic"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v7",
      "lastModified": "2020-07-23",
      "files": {
        "100": "http://fonts.gstatic.com/s/ibmplexsanscondensed/v7/Gg8nN4UfRSqiPg7Jn2ZI12V4DCEwkj1E4LVeHY7KyKvBgYsMDhM.ttf",
        "100italic": "http://fonts.gstatic.com/s/ibmplexsanscondensed/v7/Gg8hN4UfRSqiPg7Jn2ZI12V4DCEwkj1E4LVeHYas8M_LhakJHhOgBg.ttf",
        "200": "http://fonts.gstatic.com/s/ibmplexsanscondensed/v7/Gg8gN4UfRSqiPg7Jn2ZI12V4DCEwkj1E4LVeHY5m6Yvrr4cFFwq5.ttf",
        "200italic": "http://fonts.gstatic.com/s/ibmplexsanscondensed/v7/Gg8iN4UfRSqiPg7Jn2ZI12V4DCEwkj1E4LVeHYas8GPqpYMnEhq5H1w.ttf",
        "300": "http://fonts.gstatic.com/s/ibmplexsanscondensed/v7/Gg8gN4UfRSqiPg7Jn2ZI12V4DCEwkj1E4LVeHY4C6ovrr4cFFwq5.ttf",
        "300italic": "http://fonts.gstatic.com/s/ibmplexsanscondensed/v7/Gg8iN4UfRSqiPg7Jn2ZI12V4DCEwkj1E4LVeHYas8AfppYMnEhq5H1w.ttf",
        "regular": "http://fonts.gstatic.com/s/ibmplexsanscondensed/v7/Gg8lN4UfRSqiPg7Jn2ZI12V4DCEwkj1E4LVeHbauwq_jhJsM.ttf",
        "italic": "http://fonts.gstatic.com/s/ibmplexsanscondensed/v7/Gg8nN4UfRSqiPg7Jn2ZI12V4DCEwkj1E4LVeHYasyKvBgYsMDhM.ttf",
        "500": "http://fonts.gstatic.com/s/ibmplexsanscondensed/v7/Gg8gN4UfRSqiPg7Jn2ZI12V4DCEwkj1E4LVeHY5a64vrr4cFFwq5.ttf",
        "500italic": "http://fonts.gstatic.com/s/ibmplexsanscondensed/v7/Gg8iN4UfRSqiPg7Jn2ZI12V4DCEwkj1E4LVeHYas8F_opYMnEhq5H1w.ttf",
        "600": "http://fonts.gstatic.com/s/ibmplexsanscondensed/v7/Gg8gN4UfRSqiPg7Jn2ZI12V4DCEwkj1E4LVeHY527Ivrr4cFFwq5.ttf",
        "600italic": "http://fonts.gstatic.com/s/ibmplexsanscondensed/v7/Gg8iN4UfRSqiPg7Jn2ZI12V4DCEwkj1E4LVeHYas8HPvpYMnEhq5H1w.ttf",
        "700": "http://fonts.gstatic.com/s/ibmplexsanscondensed/v7/Gg8gN4UfRSqiPg7Jn2ZI12V4DCEwkj1E4LVeHY4S7Yvrr4cFFwq5.ttf",
        "700italic": "http://fonts.gstatic.com/s/ibmplexsanscondensed/v7/Gg8iN4UfRSqiPg7Jn2ZI12V4DCEwkj1E4LVeHYas8BfupYMnEhq5H1w.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "IBM Plex Serif",
      "variants": [
        "100",
        "100italic",
        "200",
        "200italic",
        "300",
        "300italic",
        "regular",
        "italic",
        "500",
        "500italic",
        "600",
        "600italic",
        "700",
        "700italic"
      ],
      "subsets": [
        "cyrillic",
        "cyrillic-ext",
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v9",
      "lastModified": "2020-09-02",
      "files": {
        "100": "http://fonts.gstatic.com/s/ibmplexserif/v9/jizBREVNn1dOx-zrZ2X3pZvkTi182zIZj1bIkNo.ttf",
        "100italic": "http://fonts.gstatic.com/s/ibmplexserif/v9/jizHREVNn1dOx-zrZ2X3pZvkTiUa41YTi3TNgNq55w.ttf",
        "200": "http://fonts.gstatic.com/s/ibmplexserif/v9/jizAREVNn1dOx-zrZ2X3pZvkTi3Q-hIzoVrBicOg.ttf",
        "200italic": "http://fonts.gstatic.com/s/ibmplexserif/v9/jizGREVNn1dOx-zrZ2X3pZvkTiUa4_oyq17jjNOg_oc.ttf",
        "300": "http://fonts.gstatic.com/s/ibmplexserif/v9/jizAREVNn1dOx-zrZ2X3pZvkTi20-RIzoVrBicOg.ttf",
        "300italic": "http://fonts.gstatic.com/s/ibmplexserif/v9/jizGREVNn1dOx-zrZ2X3pZvkTiUa454xq17jjNOg_oc.ttf",
        "regular": "http://fonts.gstatic.com/s/ibmplexserif/v9/jizDREVNn1dOx-zrZ2X3pZvkThUY0TY7ikbI.ttf",
        "italic": "http://fonts.gstatic.com/s/ibmplexserif/v9/jizBREVNn1dOx-zrZ2X3pZvkTiUa2zIZj1bIkNo.ttf",
        "500": "http://fonts.gstatic.com/s/ibmplexserif/v9/jizAREVNn1dOx-zrZ2X3pZvkTi3s-BIzoVrBicOg.ttf",
        "500italic": "http://fonts.gstatic.com/s/ibmplexserif/v9/jizGREVNn1dOx-zrZ2X3pZvkTiUa48Ywq17jjNOg_oc.ttf",
        "600": "http://fonts.gstatic.com/s/ibmplexserif/v9/jizAREVNn1dOx-zrZ2X3pZvkTi3A_xIzoVrBicOg.ttf",
        "600italic": "http://fonts.gstatic.com/s/ibmplexserif/v9/jizGREVNn1dOx-zrZ2X3pZvkTiUa4-o3q17jjNOg_oc.ttf",
        "700": "http://fonts.gstatic.com/s/ibmplexserif/v9/jizAREVNn1dOx-zrZ2X3pZvkTi2k_hIzoVrBicOg.ttf",
        "700italic": "http://fonts.gstatic.com/s/ibmplexserif/v9/jizGREVNn1dOx-zrZ2X3pZvkTiUa4442q17jjNOg_oc.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "IM Fell DW Pica",
      "variants": [
        "regular",
        "italic"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v10",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/imfelldwpica/v10/2sDGZGRQotv9nbn2qSl0TxXVYNw9ZAPUvi88MQ.ttf",
        "italic": "http://fonts.gstatic.com/s/imfelldwpica/v10/2sDEZGRQotv9nbn2qSl0TxXVYNwNZgnQnCosMXm0.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "IM Fell DW Pica SC",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v10",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/imfelldwpicasc/v10/0ybjGCAu5PfqkvtGVU15aBhXz3EUrnTW-BiKEUiBGA.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "IM Fell Double Pica",
      "variants": [
        "regular",
        "italic"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v10",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/imfelldoublepica/v10/3XF2EqMq_94s9PeKF7Fg4gOKINyMtZ8rT0S1UL5Ayp0.ttf",
        "italic": "http://fonts.gstatic.com/s/imfelldoublepica/v10/3XF0EqMq_94s9PeKF7Fg4gOKINyMtZ8rf0a_VJxF2p2G8g.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "IM Fell Double Pica SC",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v10",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/imfelldoublepicasc/v10/neIazDmuiMkFo6zj_sHpQ8teNbWlwBB_hXjJ4Y0Eeru2dGg.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "IM Fell English",
      "variants": [
        "regular",
        "italic"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v10",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/imfellenglish/v10/Ktk1ALSLW8zDe0rthJysWrnLsAz3F6mZVY9Y5w.ttf",
        "italic": "http://fonts.gstatic.com/s/imfellenglish/v10/Ktk3ALSLW8zDe0rthJysWrnLsAzHFaOdd4pI59zg.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "IM Fell English SC",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v10",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/imfellenglishsc/v10/a8IENpD3CDX-4zrWfr1VY879qFF05pZLO4gOg0shzA.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "IM Fell French Canon",
      "variants": [
        "regular",
        "italic"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v10",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/imfellfrenchcanon/v10/-F6ufiNtDWYfYc-tDiyiw08rrghJszkK6coVPt1ozoPz.ttf",
        "italic": "http://fonts.gstatic.com/s/imfellfrenchcanon/v10/-F6gfiNtDWYfYc-tDiyiw08rrghJszkK6foXNNlKy5PzzrU.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "IM Fell French Canon SC",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v10",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/imfellfrenchcanonsc/v10/FBVmdCru5-ifcor2bgq9V89khWcmQghEURY7H3c0UBCVIVqH.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "IM Fell Great Primer",
      "variants": [
        "regular",
        "italic"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v10",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/imfellgreatprimer/v10/bx6aNwSJtayYxOkbYFsT6hMsLzX7u85rJorXvDo3SQY1.ttf",
        "italic": "http://fonts.gstatic.com/s/imfellgreatprimer/v10/bx6UNwSJtayYxOkbYFsT6hMsLzX7u85rJrrVtj4VTBY1N6U.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "IM Fell Great Primer SC",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v10",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/imfellgreatprimersc/v10/ga6daxBOxyt6sCqz3fjZCTFCTUDMHagsQKdDTLf9BXz0s8FG.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Ibarra Real Nova",
      "variants": [
        "regular",
        "500",
        "600",
        "700",
        "italic",
        "500italic",
        "600italic",
        "700italic"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v6",
      "lastModified": "2021-01-30",
      "files": {
        "regular": "http://fonts.gstatic.com/s/ibarrarealnova/v6/sZlSdQiA-DBIDCcaWtQzL4BZHoiDundw4ATyjed3EXdg5MDtVT9TWIvS.ttf",
        "500": "http://fonts.gstatic.com/s/ibarrarealnova/v6/sZlSdQiA-DBIDCcaWtQzL4BZHoiDundw4ATyjed3EXdS5MDtVT9TWIvS.ttf",
        "600": "http://fonts.gstatic.com/s/ibarrarealnova/v6/sZlSdQiA-DBIDCcaWtQzL4BZHoiDundw4ATyjed3EXe-48DtVT9TWIvS.ttf",
        "700": "http://fonts.gstatic.com/s/ibarrarealnova/v6/sZlSdQiA-DBIDCcaWtQzL4BZHoiDundw4ATyjed3EXeH48DtVT9TWIvS.ttf",
        "italic": "http://fonts.gstatic.com/s/ibarrarealnova/v6/sZlsdQiA-DBIDCcaWtQzL4BZHoiDkH5CH9yb5n3ZFmKopyiuXztxXZvSkTo.ttf",
        "500italic": "http://fonts.gstatic.com/s/ibarrarealnova/v6/sZlsdQiA-DBIDCcaWtQzL4BZHoiDkH5CH9yb5n3ZFmKopxquXztxXZvSkTo.ttf",
        "600italic": "http://fonts.gstatic.com/s/ibarrarealnova/v6/sZlsdQiA-DBIDCcaWtQzL4BZHoiDkH5CH9yb5n3ZFmKop_apXztxXZvSkTo.ttf",
        "700italic": "http://fonts.gstatic.com/s/ibarrarealnova/v6/sZlsdQiA-DBIDCcaWtQzL4BZHoiDkH5CH9yb5n3ZFmKop8-pXztxXZvSkTo.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Iceberg",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v8",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/iceberg/v8/8QIJdijAiM7o-qnZuIgOq7jkAOw.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Iceland",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v9",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/iceland/v9/rax9HiuFsdMNOnWPWKxGADBbg0s.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Imbue",
      "variants": [
        "100",
        "200",
        "300",
        "regular",
        "500",
        "600",
        "700",
        "800",
        "900"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v2",
      "lastModified": "2021-01-30",
      "files": {
        "100": "http://fonts.gstatic.com/s/imbue/v2/RLpXK5P16Ki3fXhj5cvGrqjocPk4n-gVX3M93TnrnvhoP8iWfOsNNK-Q4xY.ttf",
        "200": "http://fonts.gstatic.com/s/imbue/v2/RLpXK5P16Ki3fXhj5cvGrqjocPk4n-gVX3M93TnrnvhoP0iXfOsNNK-Q4xY.ttf",
        "300": "http://fonts.gstatic.com/s/imbue/v2/RLpXK5P16Ki3fXhj5cvGrqjocPk4n-gVX3M93TnrnvhoP5aXfOsNNK-Q4xY.ttf",
        "regular": "http://fonts.gstatic.com/s/imbue/v2/RLpXK5P16Ki3fXhj5cvGrqjocPk4n-gVX3M93TnrnvhoP8iXfOsNNK-Q4xY.ttf",
        "500": "http://fonts.gstatic.com/s/imbue/v2/RLpXK5P16Ki3fXhj5cvGrqjocPk4n-gVX3M93TnrnvhoP_qXfOsNNK-Q4xY.ttf",
        "600": "http://fonts.gstatic.com/s/imbue/v2/RLpXK5P16Ki3fXhj5cvGrqjocPk4n-gVX3M93TnrnvhoPxaQfOsNNK-Q4xY.ttf",
        "700": "http://fonts.gstatic.com/s/imbue/v2/RLpXK5P16Ki3fXhj5cvGrqjocPk4n-gVX3M93TnrnvhoPy-QfOsNNK-Q4xY.ttf",
        "800": "http://fonts.gstatic.com/s/imbue/v2/RLpXK5P16Ki3fXhj5cvGrqjocPk4n-gVX3M93TnrnvhoP0iQfOsNNK-Q4xY.ttf",
        "900": "http://fonts.gstatic.com/s/imbue/v2/RLpXK5P16Ki3fXhj5cvGrqjocPk4n-gVX3M93TnrnvhoP2GQfOsNNK-Q4xY.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Imprima",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v9",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/imprima/v9/VEMxRoN7sY3yuy-7-oWHyDzktPo.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Inconsolata",
      "variants": [
        "200",
        "300",
        "regular",
        "500",
        "600",
        "700",
        "800",
        "900"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v21",
      "lastModified": "2021-01-30",
      "files": {
        "200": "http://fonts.gstatic.com/s/inconsolata/v21/QldgNThLqRwH-OJ1UHjlKENVzkWGVkL3GZQmAwLYxYWI2qfdm7LppwU8aRr8lleY2co.ttf",
        "300": "http://fonts.gstatic.com/s/inconsolata/v21/QldgNThLqRwH-OJ1UHjlKENVzkWGVkL3GZQmAwLYxYWI2qfdm7Lpp9s8aRr8lleY2co.ttf",
        "regular": "http://fonts.gstatic.com/s/inconsolata/v21/QldgNThLqRwH-OJ1UHjlKENVzkWGVkL3GZQmAwLYxYWI2qfdm7Lpp4U8aRr8lleY2co.ttf",
        "500": "http://fonts.gstatic.com/s/inconsolata/v21/QldgNThLqRwH-OJ1UHjlKENVzkWGVkL3GZQmAwLYxYWI2qfdm7Lpp7c8aRr8lleY2co.ttf",
        "600": "http://fonts.gstatic.com/s/inconsolata/v21/QldgNThLqRwH-OJ1UHjlKENVzkWGVkL3GZQmAwLYxYWI2qfdm7Lpp1s7aRr8lleY2co.ttf",
        "700": "http://fonts.gstatic.com/s/inconsolata/v21/QldgNThLqRwH-OJ1UHjlKENVzkWGVkL3GZQmAwLYxYWI2qfdm7Lpp2I7aRr8lleY2co.ttf",
        "800": "http://fonts.gstatic.com/s/inconsolata/v21/QldgNThLqRwH-OJ1UHjlKENVzkWGVkL3GZQmAwLYxYWI2qfdm7LppwU7aRr8lleY2co.ttf",
        "900": "http://fonts.gstatic.com/s/inconsolata/v21/QldgNThLqRwH-OJ1UHjlKENVzkWGVkL3GZQmAwLYxYWI2qfdm7Lppyw7aRr8lleY2co.ttf"
      },
      "category": "monospace",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Inder",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v9",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/inder/v9/w8gUH2YoQe8_4vq6pw-P3U4O.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Indie Flower",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v12",
      "lastModified": "2020-09-10",
      "files": {
        "regular": "http://fonts.gstatic.com/s/indieflower/v12/m8JVjfNVeKWVnh3QMuKkFcZlbkGG1dKEDw.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Inika",
      "variants": [
        "regular",
        "700"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v9",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/inika/v9/rnCm-x5X3QP-phTHRcc2s2XH.ttf",
        "700": "http://fonts.gstatic.com/s/inika/v9/rnCr-x5X3QP-pix7auM-mHnOSOuk.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Inknut Antiqua",
      "variants": [
        "300",
        "regular",
        "500",
        "600",
        "700",
        "800",
        "900"
      ],
      "subsets": [
        "devanagari",
        "latin",
        "latin-ext"
      ],
      "version": "v7",
      "lastModified": "2020-11-06",
      "files": {
        "300": "http://fonts.gstatic.com/s/inknutantiqua/v7/Y4GRYax7VC4ot_qNB4nYpBdaKU2vwrj5bBoIYJNf.ttf",
        "regular": "http://fonts.gstatic.com/s/inknutantiqua/v7/Y4GSYax7VC4ot_qNB4nYpBdaKXUD6pzxRwYB.ttf",
        "500": "http://fonts.gstatic.com/s/inknutantiqua/v7/Y4GRYax7VC4ot_qNB4nYpBdaKU33w7j5bBoIYJNf.ttf",
        "600": "http://fonts.gstatic.com/s/inknutantiqua/v7/Y4GRYax7VC4ot_qNB4nYpBdaKU3bxLj5bBoIYJNf.ttf",
        "700": "http://fonts.gstatic.com/s/inknutantiqua/v7/Y4GRYax7VC4ot_qNB4nYpBdaKU2_xbj5bBoIYJNf.ttf",
        "800": "http://fonts.gstatic.com/s/inknutantiqua/v7/Y4GRYax7VC4ot_qNB4nYpBdaKU2jxrj5bBoIYJNf.ttf",
        "900": "http://fonts.gstatic.com/s/inknutantiqua/v7/Y4GRYax7VC4ot_qNB4nYpBdaKU2Hx7j5bBoIYJNf.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Inria Sans",
      "variants": [
        "300",
        "300italic",
        "regular",
        "italic",
        "700",
        "700italic"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v2",
      "lastModified": "2020-07-23",
      "files": {
        "300": "http://fonts.gstatic.com/s/inriasans/v2/ptRPTiqXYfZMCOiVj9kQ3ELaDQtFqeY3fX4.ttf",
        "300italic": "http://fonts.gstatic.com/s/inriasans/v2/ptRRTiqXYfZMCOiVj9kQ1OzAgQlPrcQybX4pQA.ttf",
        "regular": "http://fonts.gstatic.com/s/inriasans/v2/ptRMTiqXYfZMCOiVj9kQ5O7yKQNute8.ttf",
        "italic": "http://fonts.gstatic.com/s/inriasans/v2/ptROTiqXYfZMCOiVj9kQ1Oz4LSFrpe8uZA.ttf",
        "700": "http://fonts.gstatic.com/s/inriasans/v2/ptRPTiqXYfZMCOiVj9kQ3FLdDQtFqeY3fX4.ttf",
        "700italic": "http://fonts.gstatic.com/s/inriasans/v2/ptRRTiqXYfZMCOiVj9kQ1OzAkQ5PrcQybX4pQA.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Inria Serif",
      "variants": [
        "300",
        "300italic",
        "regular",
        "italic",
        "700",
        "700italic"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v2",
      "lastModified": "2020-07-23",
      "files": {
        "300": "http://fonts.gstatic.com/s/inriaserif/v2/fC14PYxPY3rXxEndZJAzN3wAVQjFhFyta3xN.ttf",
        "300italic": "http://fonts.gstatic.com/s/inriaserif/v2/fC16PYxPY3rXxEndZJAzN3SuT4THjliPbmxN0_E.ttf",
        "regular": "http://fonts.gstatic.com/s/inriaserif/v2/fC1lPYxPY3rXxEndZJAzN0SsfSzNr0Ck.ttf",
        "italic": "http://fonts.gstatic.com/s/inriaserif/v2/fC1nPYxPY3rXxEndZJAzN3SudyjvqlCkcmU.ttf",
        "700": "http://fonts.gstatic.com/s/inriaserif/v2/fC14PYxPY3rXxEndZJAzN3wQUgjFhFyta3xN.ttf",
        "700italic": "http://fonts.gstatic.com/s/inriaserif/v2/fC16PYxPY3rXxEndZJAzN3SuT5TAjliPbmxN0_E.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Inter",
      "variants": [
        "100",
        "200",
        "300",
        "regular",
        "500",
        "600",
        "700",
        "800",
        "900"
      ],
      "subsets": [
        "cyrillic",
        "cyrillic-ext",
        "greek",
        "greek-ext",
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v3",
      "lastModified": "2021-01-30",
      "files": {
        "100": "http://fonts.gstatic.com/s/inter/v3/UcCO3FwrK3iLTeHuS_fvQtMwCp50KnMw2boKoduKmMEVuLyeMZhrib2Bg-4.ttf",
        "200": "http://fonts.gstatic.com/s/inter/v3/UcCO3FwrK3iLTeHuS_fvQtMwCp50KnMw2boKoduKmMEVuDyfMZhrib2Bg-4.ttf",
        "300": "http://fonts.gstatic.com/s/inter/v3/UcCO3FwrK3iLTeHuS_fvQtMwCp50KnMw2boKoduKmMEVuOKfMZhrib2Bg-4.ttf",
        "regular": "http://fonts.gstatic.com/s/inter/v3/UcCO3FwrK3iLTeHuS_fvQtMwCp50KnMw2boKoduKmMEVuLyfMZhrib2Bg-4.ttf",
        "500": "http://fonts.gstatic.com/s/inter/v3/UcCO3FwrK3iLTeHuS_fvQtMwCp50KnMw2boKoduKmMEVuI6fMZhrib2Bg-4.ttf",
        "600": "http://fonts.gstatic.com/s/inter/v3/UcCO3FwrK3iLTeHuS_fvQtMwCp50KnMw2boKoduKmMEVuGKYMZhrib2Bg-4.ttf",
        "700": "http://fonts.gstatic.com/s/inter/v3/UcCO3FwrK3iLTeHuS_fvQtMwCp50KnMw2boKoduKmMEVuFuYMZhrib2Bg-4.ttf",
        "800": "http://fonts.gstatic.com/s/inter/v3/UcCO3FwrK3iLTeHuS_fvQtMwCp50KnMw2boKoduKmMEVuDyYMZhrib2Bg-4.ttf",
        "900": "http://fonts.gstatic.com/s/inter/v3/UcCO3FwrK3iLTeHuS_fvQtMwCp50KnMw2boKoduKmMEVuBWYMZhrib2Bg-4.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Irish Grover",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v10",
      "lastModified": "2020-07-15",
      "files": {
        "regular": "http://fonts.gstatic.com/s/irishgrover/v10/buExpoi6YtLz2QW7LA4flVgf-P5Oaiw4cw.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Istok Web",
      "variants": [
        "regular",
        "italic",
        "700",
        "700italic"
      ],
      "subsets": [
        "cyrillic",
        "cyrillic-ext",
        "latin",
        "latin-ext"
      ],
      "version": "v15",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/istokweb/v15/3qTvojGmgSyUukBzKslZAWF-9kIIaQ.ttf",
        "italic": "http://fonts.gstatic.com/s/istokweb/v15/3qTpojGmgSyUukBzKslpA2t61EcYaQ7F.ttf",
        "700": "http://fonts.gstatic.com/s/istokweb/v15/3qTqojGmgSyUukBzKslhvU5a_mkUYBfcMw.ttf",
        "700italic": "http://fonts.gstatic.com/s/istokweb/v15/3qT0ojGmgSyUukBzKslpA1PG-2MQQhLMMygN.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Italiana",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v9",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/italiana/v9/QldNNTtLsx4E__B0XTmRY31Wx7Vv.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Italianno",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v10",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/italianno/v10/dg4n_p3sv6gCJkwzT6Rnj5YpQwM-gg.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Itim",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "thai",
        "vietnamese"
      ],
      "version": "v4",
      "lastModified": "2019-07-16",
      "files": {
        "regular": "http://fonts.gstatic.com/s/itim/v4/0nknC9ziJOYewARKkc7ZdwU.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Jacques Francois",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v8",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/jacquesfrancois/v8/ZXu9e04ZvKeOOHIe1TMahbcIU2cgmcPqoeRWfbs.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Jacques Francois Shadow",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v9",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/jacquesfrancoisshadow/v9/KR1FBtOz8PKTMk-kqdkLVrvR0ECFrB6Pin-2_q8VsHuV5ULS.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Jaldi",
      "variants": [
        "regular",
        "700"
      ],
      "subsets": [
        "devanagari",
        "latin",
        "latin-ext"
      ],
      "version": "v7",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/jaldi/v7/or3sQ67z0_CI30NUZpD_B6g8.ttf",
        "700": "http://fonts.gstatic.com/s/jaldi/v7/or3hQ67z0_CI33voSbT3LLQ1niPn.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "JetBrains Mono",
      "variants": [
        "100",
        "200",
        "300",
        "regular",
        "500",
        "600",
        "700",
        "800",
        "100italic",
        "200italic",
        "300italic",
        "italic",
        "500italic",
        "600italic",
        "700italic",
        "800italic"
      ],
      "subsets": [
        "cyrillic",
        "cyrillic-ext",
        "greek",
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v3",
      "lastModified": "2021-01-21",
      "files": {
        "100": "http://fonts.gstatic.com/s/jetbrainsmono/v3/tDbY2o-flEEny0FZhsfKu5WU4zr3E_BX0PnT8RD8yK1jPVmUsaaDhw.ttf",
        "200": "http://fonts.gstatic.com/s/jetbrainsmono/v3/tDbY2o-flEEny0FZhsfKu5WU4zr3E_BX0PnT8RD8SKxjPVmUsaaDhw.ttf",
        "300": "http://fonts.gstatic.com/s/jetbrainsmono/v3/tDbY2o-flEEny0FZhsfKu5WU4zr3E_BX0PnT8RD8lqxjPVmUsaaDhw.ttf",
        "regular": "http://fonts.gstatic.com/s/jetbrainsmono/v3/tDbY2o-flEEny0FZhsfKu5WU4zr3E_BX0PnT8RD8yKxjPVmUsaaDhw.ttf",
        "500": "http://fonts.gstatic.com/s/jetbrainsmono/v3/tDbY2o-flEEny0FZhsfKu5WU4zr3E_BX0PnT8RD8-qxjPVmUsaaDhw.ttf",
        "600": "http://fonts.gstatic.com/s/jetbrainsmono/v3/tDbY2o-flEEny0FZhsfKu5WU4zr3E_BX0PnT8RD8FqtjPVmUsaaDhw.ttf",
        "700": "http://fonts.gstatic.com/s/jetbrainsmono/v3/tDbY2o-flEEny0FZhsfKu5WU4zr3E_BX0PnT8RD8L6tjPVmUsaaDhw.ttf",
        "800": "http://fonts.gstatic.com/s/jetbrainsmono/v3/tDbY2o-flEEny0FZhsfKu5WU4zr3E_BX0PnT8RD8SKtjPVmUsaaDhw.ttf",
        "100italic": "http://fonts.gstatic.com/s/jetbrainsmono/v3/tDba2o-flEEny0FZhsfKu5WU4xD-IQ-PuZJJXxfpAO-Lf1OQk6OThxPA.ttf",
        "200italic": "http://fonts.gstatic.com/s/jetbrainsmono/v3/tDba2o-flEEny0FZhsfKu5WU4xD-IQ-PuZJJXxfpAO8LflOQk6OThxPA.ttf",
        "300italic": "http://fonts.gstatic.com/s/jetbrainsmono/v3/tDba2o-flEEny0FZhsfKu5WU4xD-IQ-PuZJJXxfpAO_VflOQk6OThxPA.ttf",
        "italic": "http://fonts.gstatic.com/s/jetbrainsmono/v3/tDba2o-flEEny0FZhsfKu5WU4xD-IQ-PuZJJXxfpAO-LflOQk6OThxPA.ttf",
        "500italic": "http://fonts.gstatic.com/s/jetbrainsmono/v3/tDba2o-flEEny0FZhsfKu5WU4xD-IQ-PuZJJXxfpAO-5flOQk6OThxPA.ttf",
        "600italic": "http://fonts.gstatic.com/s/jetbrainsmono/v3/tDba2o-flEEny0FZhsfKu5WU4xD-IQ-PuZJJXxfpAO9VeVOQk6OThxPA.ttf",
        "700italic": "http://fonts.gstatic.com/s/jetbrainsmono/v3/tDba2o-flEEny0FZhsfKu5WU4xD-IQ-PuZJJXxfpAO9seVOQk6OThxPA.ttf",
        "800italic": "http://fonts.gstatic.com/s/jetbrainsmono/v3/tDba2o-flEEny0FZhsfKu5WU4xD-IQ-PuZJJXxfpAO8LeVOQk6OThxPA.ttf"
      },
      "category": "monospace",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Jim Nightshade",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v8",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/jimnightshade/v8/PlIkFlu9Pb08Q8HLM1PxmB0g-OS4V3qKaMxD.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Jockey One",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v10",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/jockeyone/v10/HTxpL2g2KjCFj4x8WI6ArIb7HYOk4xc.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Jolly Lodger",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v8",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/jollylodger/v8/BXRsvFTAh_bGkA1uQ48dlB3VWerT3ZyuqA.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Jomhuria",
      "variants": [
        "regular"
      ],
      "subsets": [
        "arabic",
        "latin",
        "latin-ext"
      ],
      "version": "v9",
      "lastModified": "2020-09-25",
      "files": {
        "regular": "http://fonts.gstatic.com/s/jomhuria/v9/Dxxp8j-TMXf-llKur2b1MOGbC3Dh.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Jomolhari",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "tibetan"
      ],
      "version": "v2",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/jomolhari/v2/EvONzA1M1Iw_CBd2hsQCF1IZKq5INg.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Josefin Sans",
      "variants": [
        "100",
        "200",
        "300",
        "regular",
        "500",
        "600",
        "700",
        "100italic",
        "200italic",
        "300italic",
        "italic",
        "500italic",
        "600italic",
        "700italic"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v17",
      "lastModified": "2021-01-30",
      "files": {
        "100": "http://fonts.gstatic.com/s/josefinsans/v17/Qw3PZQNVED7rKGKxtqIqX5E-AVSJrOCfjY46_DjRXMFrLgTsQV0.ttf",
        "200": "http://fonts.gstatic.com/s/josefinsans/v17/Qw3PZQNVED7rKGKxtqIqX5E-AVSJrOCfjY46_LjQXMFrLgTsQV0.ttf",
        "300": "http://fonts.gstatic.com/s/josefinsans/v17/Qw3PZQNVED7rKGKxtqIqX5E-AVSJrOCfjY46_GbQXMFrLgTsQV0.ttf",
        "regular": "http://fonts.gstatic.com/s/josefinsans/v17/Qw3PZQNVED7rKGKxtqIqX5E-AVSJrOCfjY46_DjQXMFrLgTsQV0.ttf",
        "500": "http://fonts.gstatic.com/s/josefinsans/v17/Qw3PZQNVED7rKGKxtqIqX5E-AVSJrOCfjY46_ArQXMFrLgTsQV0.ttf",
        "600": "http://fonts.gstatic.com/s/josefinsans/v17/Qw3PZQNVED7rKGKxtqIqX5E-AVSJrOCfjY46_ObXXMFrLgTsQV0.ttf",
        "700": "http://fonts.gstatic.com/s/josefinsans/v17/Qw3PZQNVED7rKGKxtqIqX5E-AVSJrOCfjY46_N_XXMFrLgTsQV0.ttf",
        "100italic": "http://fonts.gstatic.com/s/josefinsans/v17/Qw3JZQNVED7rKGKxtqIqX5EUCGZ2dIn0FyA96fCTtINhKibpUV3MEQ.ttf",
        "200italic": "http://fonts.gstatic.com/s/josefinsans/v17/Qw3JZQNVED7rKGKxtqIqX5EUCGZ2dIn0FyA96fCTNIJhKibpUV3MEQ.ttf",
        "300italic": "http://fonts.gstatic.com/s/josefinsans/v17/Qw3JZQNVED7rKGKxtqIqX5EUCGZ2dIn0FyA96fCT6oJhKibpUV3MEQ.ttf",
        "italic": "http://fonts.gstatic.com/s/josefinsans/v17/Qw3JZQNVED7rKGKxtqIqX5EUCGZ2dIn0FyA96fCTtIJhKibpUV3MEQ.ttf",
        "500italic": "http://fonts.gstatic.com/s/josefinsans/v17/Qw3JZQNVED7rKGKxtqIqX5EUCGZ2dIn0FyA96fCThoJhKibpUV3MEQ.ttf",
        "600italic": "http://fonts.gstatic.com/s/josefinsans/v17/Qw3JZQNVED7rKGKxtqIqX5EUCGZ2dIn0FyA96fCTaoVhKibpUV3MEQ.ttf",
        "700italic": "http://fonts.gstatic.com/s/josefinsans/v17/Qw3JZQNVED7rKGKxtqIqX5EUCGZ2dIn0FyA96fCTU4VhKibpUV3MEQ.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Josefin Slab",
      "variants": [
        "100",
        "200",
        "300",
        "regular",
        "500",
        "600",
        "700",
        "100italic",
        "200italic",
        "300italic",
        "italic",
        "500italic",
        "600italic",
        "700italic"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v13",
      "lastModified": "2021-01-30",
      "files": {
        "100": "http://fonts.gstatic.com/s/josefinslab/v13/lW-swjwOK3Ps5GSJlNNkMalNpiZe_ldbOR4W71mtd3k3K6CcEyI.ttf",
        "200": "http://fonts.gstatic.com/s/josefinslab/v13/lW-swjwOK3Ps5GSJlNNkMalNpiZe_ldbOR4W79msd3k3K6CcEyI.ttf",
        "300": "http://fonts.gstatic.com/s/josefinslab/v13/lW-swjwOK3Ps5GSJlNNkMalNpiZe_ldbOR4W7wesd3k3K6CcEyI.ttf",
        "regular": "http://fonts.gstatic.com/s/josefinslab/v13/lW-swjwOK3Ps5GSJlNNkMalNpiZe_ldbOR4W71msd3k3K6CcEyI.ttf",
        "500": "http://fonts.gstatic.com/s/josefinslab/v13/lW-swjwOK3Ps5GSJlNNkMalNpiZe_ldbOR4W72usd3k3K6CcEyI.ttf",
        "600": "http://fonts.gstatic.com/s/josefinslab/v13/lW-swjwOK3Ps5GSJlNNkMalNpiZe_ldbOR4W74erd3k3K6CcEyI.ttf",
        "700": "http://fonts.gstatic.com/s/josefinslab/v13/lW-swjwOK3Ps5GSJlNNkMalNpiZe_ldbOR4W776rd3k3K6CcEyI.ttf",
        "100italic": "http://fonts.gstatic.com/s/josefinslab/v13/lW-qwjwOK3Ps5GSJlNNkMalnrxShJj4wo7AR-pHvnzs9L4KZAyK43w.ttf",
        "200italic": "http://fonts.gstatic.com/s/josefinslab/v13/lW-qwjwOK3Ps5GSJlNNkMalnrxShJj4wo7AR-pHvHzo9L4KZAyK43w.ttf",
        "300italic": "http://fonts.gstatic.com/s/josefinslab/v13/lW-qwjwOK3Ps5GSJlNNkMalnrxShJj4wo7AR-pHvwTo9L4KZAyK43w.ttf",
        "italic": "http://fonts.gstatic.com/s/josefinslab/v13/lW-qwjwOK3Ps5GSJlNNkMalnrxShJj4wo7AR-pHvnzo9L4KZAyK43w.ttf",
        "500italic": "http://fonts.gstatic.com/s/josefinslab/v13/lW-qwjwOK3Ps5GSJlNNkMalnrxShJj4wo7AR-pHvrTo9L4KZAyK43w.ttf",
        "600italic": "http://fonts.gstatic.com/s/josefinslab/v13/lW-qwjwOK3Ps5GSJlNNkMalnrxShJj4wo7AR-pHvQT09L4KZAyK43w.ttf",
        "700italic": "http://fonts.gstatic.com/s/josefinslab/v13/lW-qwjwOK3Ps5GSJlNNkMalnrxShJj4wo7AR-pHveD09L4KZAyK43w.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Jost",
      "variants": [
        "100",
        "200",
        "300",
        "regular",
        "500",
        "600",
        "700",
        "800",
        "900",
        "100italic",
        "200italic",
        "300italic",
        "italic",
        "500italic",
        "600italic",
        "700italic",
        "800italic",
        "900italic"
      ],
      "subsets": [
        "cyrillic",
        "latin",
        "latin-ext"
      ],
      "version": "v6",
      "lastModified": "2021-01-21",
      "files": {
        "100": "http://fonts.gstatic.com/s/jost/v6/92zPtBhPNqw79Ij1E865zBUv7myjJAVGPokMmuHL.ttf",
        "200": "http://fonts.gstatic.com/s/jost/v6/92zPtBhPNqw79Ij1E865zBUv7mwjJQVGPokMmuHL.ttf",
        "300": "http://fonts.gstatic.com/s/jost/v6/92zPtBhPNqw79Ij1E865zBUv7mz9JQVGPokMmuHL.ttf",
        "regular": "http://fonts.gstatic.com/s/jost/v6/92zPtBhPNqw79Ij1E865zBUv7myjJQVGPokMmuHL.ttf",
        "500": "http://fonts.gstatic.com/s/jost/v6/92zPtBhPNqw79Ij1E865zBUv7myRJQVGPokMmuHL.ttf",
        "600": "http://fonts.gstatic.com/s/jost/v6/92zPtBhPNqw79Ij1E865zBUv7mx9IgVGPokMmuHL.ttf",
        "700": "http://fonts.gstatic.com/s/jost/v6/92zPtBhPNqw79Ij1E865zBUv7mxEIgVGPokMmuHL.ttf",
        "800": "http://fonts.gstatic.com/s/jost/v6/92zPtBhPNqw79Ij1E865zBUv7mwjIgVGPokMmuHL.ttf",
        "900": "http://fonts.gstatic.com/s/jost/v6/92zPtBhPNqw79Ij1E865zBUv7mwKIgVGPokMmuHL.ttf",
        "100italic": "http://fonts.gstatic.com/s/jost/v6/92zJtBhPNqw73oHH7BbQp4-B6XlrZu0ENI0un_HLMEo.ttf",
        "200italic": "http://fonts.gstatic.com/s/jost/v6/92zJtBhPNqw73oHH7BbQp4-B6XlrZm0FNI0un_HLMEo.ttf",
        "300italic": "http://fonts.gstatic.com/s/jost/v6/92zJtBhPNqw73oHH7BbQp4-B6XlrZrMFNI0un_HLMEo.ttf",
        "italic": "http://fonts.gstatic.com/s/jost/v6/92zJtBhPNqw73oHH7BbQp4-B6XlrZu0FNI0un_HLMEo.ttf",
        "500italic": "http://fonts.gstatic.com/s/jost/v6/92zJtBhPNqw73oHH7BbQp4-B6XlrZt8FNI0un_HLMEo.ttf",
        "600italic": "http://fonts.gstatic.com/s/jost/v6/92zJtBhPNqw73oHH7BbQp4-B6XlrZjMCNI0un_HLMEo.ttf",
        "700italic": "http://fonts.gstatic.com/s/jost/v6/92zJtBhPNqw73oHH7BbQp4-B6XlrZgoCNI0un_HLMEo.ttf",
        "800italic": "http://fonts.gstatic.com/s/jost/v6/92zJtBhPNqw73oHH7BbQp4-B6XlrZm0CNI0un_HLMEo.ttf",
        "900italic": "http://fonts.gstatic.com/s/jost/v6/92zJtBhPNqw73oHH7BbQp4-B6XlrZkQCNI0un_HLMEo.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Joti One",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v9",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/jotione/v9/Z9XVDmdJQAmWm9TwaYTe4u2El6GC.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Jua",
      "variants": [
        "regular"
      ],
      "subsets": [
        "korean",
        "latin"
      ],
      "version": "v8",
      "lastModified": "2019-07-16",
      "files": {
        "regular": "http://fonts.gstatic.com/s/jua/v8/co3KmW9ljjAjc-DZCsKgsg.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Judson",
      "variants": [
        "regular",
        "italic",
        "700"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v13",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/judson/v13/FeVRS0Fbvbc14VxRD7N01bV7kg.ttf",
        "italic": "http://fonts.gstatic.com/s/judson/v13/FeVTS0Fbvbc14VxhDblw97BrknZf.ttf",
        "700": "http://fonts.gstatic.com/s/judson/v13/FeVSS0Fbvbc14Vxps5xQ3Z5nm29Gww.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Julee",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v10",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/julee/v10/TuGfUVB3RpZPQ6ZLodgzydtk.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Julius Sans One",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v9",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/juliussansone/v9/1Pt2g8TAX_SGgBGUi0tGOYEga5W-xXEW6aGXHw.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Junge",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v8",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/junge/v8/gokgH670Gl1lUqAdvhB7SnKm.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Jura",
      "variants": [
        "300",
        "regular",
        "500",
        "600",
        "700"
      ],
      "subsets": [
        "cyrillic",
        "cyrillic-ext",
        "greek",
        "greek-ext",
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v16",
      "lastModified": "2021-01-30",
      "files": {
        "300": "http://fonts.gstatic.com/s/jura/v16/z7NOdRfiaC4Vd8hhoPzfb5vBTP0D7auhTfmrH_rt.ttf",
        "regular": "http://fonts.gstatic.com/s/jura/v16/z7NOdRfiaC4Vd8hhoPzfb5vBTP1d7auhTfmrH_rt.ttf",
        "500": "http://fonts.gstatic.com/s/jura/v16/z7NOdRfiaC4Vd8hhoPzfb5vBTP1v7auhTfmrH_rt.ttf",
        "600": "http://fonts.gstatic.com/s/jura/v16/z7NOdRfiaC4Vd8hhoPzfb5vBTP2D6quhTfmrH_rt.ttf",
        "700": "http://fonts.gstatic.com/s/jura/v16/z7NOdRfiaC4Vd8hhoPzfb5vBTP266quhTfmrH_rt.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Just Another Hand",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v12",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/justanotherhand/v12/845CNN4-AJyIGvIou-6yJKyptyOpOcr_BmmlS5aw.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Just Me Again Down Here",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v12",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/justmeagaindownhere/v12/MwQmbgXtz-Wc6RUEGNMc0QpRrfUh2hSdBBMoAuwHvqDwc_fg.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "K2D",
      "variants": [
        "100",
        "100italic",
        "200",
        "200italic",
        "300",
        "300italic",
        "regular",
        "italic",
        "500",
        "500italic",
        "600",
        "600italic",
        "700",
        "700italic",
        "800",
        "800italic"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "thai",
        "vietnamese"
      ],
      "version": "v4",
      "lastModified": "2020-07-23",
      "files": {
        "100": "http://fonts.gstatic.com/s/k2d/v4/J7aRnpF2V0ErE6UpvrIw74NL.ttf",
        "100italic": "http://fonts.gstatic.com/s/k2d/v4/J7afnpF2V0EjdZ1NtLYS6pNLAjk.ttf",
        "200": "http://fonts.gstatic.com/s/k2d/v4/J7aenpF2V0Erv4QJlJw85ppSGw.ttf",
        "200italic": "http://fonts.gstatic.com/s/k2d/v4/J7acnpF2V0EjdZ3hlZY4xJ9CGyAa.ttf",
        "300": "http://fonts.gstatic.com/s/k2d/v4/J7aenpF2V0Er24cJlJw85ppSGw.ttf",
        "300italic": "http://fonts.gstatic.com/s/k2d/v4/J7acnpF2V0EjdZ2FlpY4xJ9CGyAa.ttf",
        "regular": "http://fonts.gstatic.com/s/k2d/v4/J7aTnpF2V0ETd68tnLcg7w.ttf",
        "italic": "http://fonts.gstatic.com/s/k2d/v4/J7aRnpF2V0EjdaUpvrIw74NL.ttf",
        "500": "http://fonts.gstatic.com/s/k2d/v4/J7aenpF2V0Erg4YJlJw85ppSGw.ttf",
        "500italic": "http://fonts.gstatic.com/s/k2d/v4/J7acnpF2V0EjdZ3dl5Y4xJ9CGyAa.ttf",
        "600": "http://fonts.gstatic.com/s/k2d/v4/J7aenpF2V0Err4EJlJw85ppSGw.ttf",
        "600italic": "http://fonts.gstatic.com/s/k2d/v4/J7acnpF2V0EjdZ3xkJY4xJ9CGyAa.ttf",
        "700": "http://fonts.gstatic.com/s/k2d/v4/J7aenpF2V0Ery4AJlJw85ppSGw.ttf",
        "700italic": "http://fonts.gstatic.com/s/k2d/v4/J7acnpF2V0EjdZ2VkZY4xJ9CGyAa.ttf",
        "800": "http://fonts.gstatic.com/s/k2d/v4/J7aenpF2V0Er14MJlJw85ppSGw.ttf",
        "800italic": "http://fonts.gstatic.com/s/k2d/v4/J7acnpF2V0EjdZ2JkpY4xJ9CGyAa.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Kadwa",
      "variants": [
        "regular",
        "700"
      ],
      "subsets": [
        "devanagari",
        "latin"
      ],
      "version": "v4",
      "lastModified": "2019-07-16",
      "files": {
        "regular": "http://fonts.gstatic.com/s/kadwa/v4/rnCm-x5V0g7iphTHRcc2s2XH.ttf",
        "700": "http://fonts.gstatic.com/s/kadwa/v4/rnCr-x5V0g7ipix7auM-mHnOSOuk.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Kalam",
      "variants": [
        "300",
        "regular",
        "700"
      ],
      "subsets": [
        "devanagari",
        "latin",
        "latin-ext"
      ],
      "version": "v11",
      "lastModified": "2020-09-02",
      "files": {
        "300": "http://fonts.gstatic.com/s/kalam/v11/YA9Qr0Wd4kDdMtD6GgLLmCUItqGt.ttf",
        "regular": "http://fonts.gstatic.com/s/kalam/v11/YA9dr0Wd4kDdMuhWMibDszkB.ttf",
        "700": "http://fonts.gstatic.com/s/kalam/v11/YA9Qr0Wd4kDdMtDqHQLLmCUItqGt.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Kameron",
      "variants": [
        "regular",
        "700"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v11",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/kameron/v11/vm82dR7vXErQxuznsL4wL-XIYH8.ttf",
        "700": "http://fonts.gstatic.com/s/kameron/v11/vm8zdR7vXErQxuzniAIfC-3jfHb--NY.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Kanit",
      "variants": [
        "100",
        "100italic",
        "200",
        "200italic",
        "300",
        "300italic",
        "regular",
        "italic",
        "500",
        "500italic",
        "600",
        "600italic",
        "700",
        "700italic",
        "800",
        "800italic",
        "900",
        "900italic"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "thai",
        "vietnamese"
      ],
      "version": "v7",
      "lastModified": "2020-09-02",
      "files": {
        "100": "http://fonts.gstatic.com/s/kanit/v7/nKKX-Go6G5tXcr72GwWKcaxALFs.ttf",
        "100italic": "http://fonts.gstatic.com/s/kanit/v7/nKKV-Go6G5tXcraQI2GAdY5FPFtrGw.ttf",
        "200": "http://fonts.gstatic.com/s/kanit/v7/nKKU-Go6G5tXcr5aOiWgX6BJNUJy.ttf",
        "200italic": "http://fonts.gstatic.com/s/kanit/v7/nKKS-Go6G5tXcraQI82hVaRrMFJyAu4.ttf",
        "300": "http://fonts.gstatic.com/s/kanit/v7/nKKU-Go6G5tXcr4-OSWgX6BJNUJy.ttf",
        "300italic": "http://fonts.gstatic.com/s/kanit/v7/nKKS-Go6G5tXcraQI6miVaRrMFJyAu4.ttf",
        "regular": "http://fonts.gstatic.com/s/kanit/v7/nKKZ-Go6G5tXcoaSEQGodLxA.ttf",
        "italic": "http://fonts.gstatic.com/s/kanit/v7/nKKX-Go6G5tXcraQGwWKcaxALFs.ttf",
        "500": "http://fonts.gstatic.com/s/kanit/v7/nKKU-Go6G5tXcr5mOCWgX6BJNUJy.ttf",
        "500italic": "http://fonts.gstatic.com/s/kanit/v7/nKKS-Go6G5tXcraQI_GjVaRrMFJyAu4.ttf",
        "600": "http://fonts.gstatic.com/s/kanit/v7/nKKU-Go6G5tXcr5KPyWgX6BJNUJy.ttf",
        "600italic": "http://fonts.gstatic.com/s/kanit/v7/nKKS-Go6G5tXcraQI92kVaRrMFJyAu4.ttf",
        "700": "http://fonts.gstatic.com/s/kanit/v7/nKKU-Go6G5tXcr4uPiWgX6BJNUJy.ttf",
        "700italic": "http://fonts.gstatic.com/s/kanit/v7/nKKS-Go6G5tXcraQI7mlVaRrMFJyAu4.ttf",
        "800": "http://fonts.gstatic.com/s/kanit/v7/nKKU-Go6G5tXcr4yPSWgX6BJNUJy.ttf",
        "800italic": "http://fonts.gstatic.com/s/kanit/v7/nKKS-Go6G5tXcraQI6WmVaRrMFJyAu4.ttf",
        "900": "http://fonts.gstatic.com/s/kanit/v7/nKKU-Go6G5tXcr4WPCWgX6BJNUJy.ttf",
        "900italic": "http://fonts.gstatic.com/s/kanit/v7/nKKS-Go6G5tXcraQI4GnVaRrMFJyAu4.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Kantumruy",
      "variants": [
        "300",
        "regular",
        "700"
      ],
      "subsets": [
        "khmer"
      ],
      "version": "v9",
      "lastModified": "2020-10-08",
      "files": {
        "300": "http://fonts.gstatic.com/s/kantumruy/v9/syk0-yJ0m7wyVb-f4FOPUtDlpn-UJ1H6Uw.ttf",
        "regular": "http://fonts.gstatic.com/s/kantumruy/v9/sykx-yJ0m7wyVb-f4FO3_vjBrlSILg.ttf",
        "700": "http://fonts.gstatic.com/s/kantumruy/v9/syk0-yJ0m7wyVb-f4FOPQtflpn-UJ1H6Uw.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Karla",
      "variants": [
        "200",
        "300",
        "regular",
        "500",
        "600",
        "700",
        "800",
        "200italic",
        "300italic",
        "italic",
        "500italic",
        "600italic",
        "700italic",
        "800italic"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v15",
      "lastModified": "2021-01-30",
      "files": {
        "200": "http://fonts.gstatic.com/s/karla/v15/qkBIXvYC6trAT55ZBi1ueQVIjQTDeJqqFENLR7fHGw.ttf",
        "300": "http://fonts.gstatic.com/s/karla/v15/qkBIXvYC6trAT55ZBi1ueQVIjQTDppqqFENLR7fHGw.ttf",
        "regular": "http://fonts.gstatic.com/s/karla/v15/qkBIXvYC6trAT55ZBi1ueQVIjQTD-JqqFENLR7fHGw.ttf",
        "500": "http://fonts.gstatic.com/s/karla/v15/qkBIXvYC6trAT55ZBi1ueQVIjQTDypqqFENLR7fHGw.ttf",
        "600": "http://fonts.gstatic.com/s/karla/v15/qkBIXvYC6trAT55ZBi1ueQVIjQTDJp2qFENLR7fHGw.ttf",
        "700": "http://fonts.gstatic.com/s/karla/v15/qkBIXvYC6trAT55ZBi1ueQVIjQTDH52qFENLR7fHGw.ttf",
        "800": "http://fonts.gstatic.com/s/karla/v15/qkBIXvYC6trAT55ZBi1ueQVIjQTDeJ2qFENLR7fHGw.ttf",
        "200italic": "http://fonts.gstatic.com/s/karla/v15/qkBKXvYC6trAT7RQNNK2EG7SIwPWMNnCV0lPZbLXGxGR.ttf",
        "300italic": "http://fonts.gstatic.com/s/karla/v15/qkBKXvYC6trAT7RQNNK2EG7SIwPWMNkcV0lPZbLXGxGR.ttf",
        "italic": "http://fonts.gstatic.com/s/karla/v15/qkBKXvYC6trAT7RQNNK2EG7SIwPWMNlCV0lPZbLXGxGR.ttf",
        "500italic": "http://fonts.gstatic.com/s/karla/v15/qkBKXvYC6trAT7RQNNK2EG7SIwPWMNlwV0lPZbLXGxGR.ttf",
        "600italic": "http://fonts.gstatic.com/s/karla/v15/qkBKXvYC6trAT7RQNNK2EG7SIwPWMNmcUElPZbLXGxGR.ttf",
        "700italic": "http://fonts.gstatic.com/s/karla/v15/qkBKXvYC6trAT7RQNNK2EG7SIwPWMNmlUElPZbLXGxGR.ttf",
        "800italic": "http://fonts.gstatic.com/s/karla/v15/qkBKXvYC6trAT7RQNNK2EG7SIwPWMNnCUElPZbLXGxGR.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Karma",
      "variants": [
        "300",
        "regular",
        "500",
        "600",
        "700"
      ],
      "subsets": [
        "devanagari",
        "latin",
        "latin-ext"
      ],
      "version": "v11",
      "lastModified": "2020-09-02",
      "files": {
        "300": "http://fonts.gstatic.com/s/karma/v11/va9F4kzAzMZRGLjDY8Z_uqzGQC_-.ttf",
        "regular": "http://fonts.gstatic.com/s/karma/v11/va9I4kzAzMZRGIBvS-J3kbDP.ttf",
        "500": "http://fonts.gstatic.com/s/karma/v11/va9F4kzAzMZRGLibYsZ_uqzGQC_-.ttf",
        "600": "http://fonts.gstatic.com/s/karma/v11/va9F4kzAzMZRGLi3ZcZ_uqzGQC_-.ttf",
        "700": "http://fonts.gstatic.com/s/karma/v11/va9F4kzAzMZRGLjTZMZ_uqzGQC_-.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Katibeh",
      "variants": [
        "regular"
      ],
      "subsets": [
        "arabic",
        "latin",
        "latin-ext"
      ],
      "version": "v9",
      "lastModified": "2020-09-25",
      "files": {
        "regular": "http://fonts.gstatic.com/s/katibeh/v9/ZGjXol5MQJog4bxDaC1RVDNdGDs.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Kaushan Script",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v9",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/kaushanscript/v9/vm8vdRfvXFLG3OLnsO15WYS5DF7_ytN3M48a.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Kavivanar",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "tamil"
      ],
      "version": "v6",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/kavivanar/v6/o-0IIpQgyXYSwhxP7_Jb4j5Ba_2c7A.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Kavoon",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v9",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/kavoon/v9/pxiFyp4_scRYhlU4NLr6f1pdEQ.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Kdam Thmor",
      "variants": [
        "regular"
      ],
      "subsets": [
        "khmer"
      ],
      "version": "v9",
      "lastModified": "2020-10-08",
      "files": {
        "regular": "http://fonts.gstatic.com/s/kdamthmor/v9/MwQzbhjs3veF6QwJVf0JkGMViblPtXs.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Keania One",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v8",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/keaniaone/v8/zOL54pXJk65E8pXardnuycRuv-hHkOs.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Kelly Slab",
      "variants": [
        "regular"
      ],
      "subsets": [
        "cyrillic",
        "latin",
        "latin-ext"
      ],
      "version": "v11",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/kellyslab/v11/-W_7XJX0Rz3cxUnJC5t6TkMBf50kbiM.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Kenia",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v12",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/kenia/v12/jizURE5PuHQH9qCONUGswfGM.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Khand",
      "variants": [
        "300",
        "regular",
        "500",
        "600",
        "700"
      ],
      "subsets": [
        "devanagari",
        "latin",
        "latin-ext"
      ],
      "version": "v9",
      "lastModified": "2020-09-02",
      "files": {
        "300": "http://fonts.gstatic.com/s/khand/v9/TwMN-IINQlQQ0bL5cFE3ZwaH__-C.ttf",
        "regular": "http://fonts.gstatic.com/s/khand/v9/TwMA-IINQlQQ0YpVWHU_TBqO.ttf",
        "500": "http://fonts.gstatic.com/s/khand/v9/TwMN-IINQlQQ0bKhcVE3ZwaH__-C.ttf",
        "600": "http://fonts.gstatic.com/s/khand/v9/TwMN-IINQlQQ0bKNdlE3ZwaH__-C.ttf",
        "700": "http://fonts.gstatic.com/s/khand/v9/TwMN-IINQlQQ0bLpd1E3ZwaH__-C.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Khmer",
      "variants": [
        "regular"
      ],
      "subsets": [
        "khmer"
      ],
      "version": "v13",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/khmer/v13/MjQImit_vPPwpF-BpN2EeYmD.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Khula",
      "variants": [
        "300",
        "regular",
        "600",
        "700",
        "800"
      ],
      "subsets": [
        "devanagari",
        "latin",
        "latin-ext"
      ],
      "version": "v7",
      "lastModified": "2020-11-06",
      "files": {
        "300": "http://fonts.gstatic.com/s/khula/v7/OpNPnoEOns3V7G-ljCvUrC59XwXD.ttf",
        "regular": "http://fonts.gstatic.com/s/khula/v7/OpNCnoEOns3V7FcJpA_chzJ0.ttf",
        "600": "http://fonts.gstatic.com/s/khula/v7/OpNPnoEOns3V7G_RiivUrC59XwXD.ttf",
        "700": "http://fonts.gstatic.com/s/khula/v7/OpNPnoEOns3V7G-1iyvUrC59XwXD.ttf",
        "800": "http://fonts.gstatic.com/s/khula/v7/OpNPnoEOns3V7G-piCvUrC59XwXD.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Kirang Haerang",
      "variants": [
        "regular"
      ],
      "subsets": [
        "korean",
        "latin"
      ],
      "version": "v8",
      "lastModified": "2019-07-16",
      "files": {
        "regular": "http://fonts.gstatic.com/s/kiranghaerang/v8/E21-_dn_gvvIjhYON1lpIU4-bcqvWPaJq4no.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Kite One",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v8",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/kiteone/v8/70lQu7shLnA_E02vyq1b6HnGO4uA.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Knewave",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v9",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/knewave/v9/sykz-yx0lLcxQaSItSq9-trEvlQ.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "KoHo",
      "variants": [
        "200",
        "200italic",
        "300",
        "300italic",
        "regular",
        "italic",
        "500",
        "500italic",
        "600",
        "600italic",
        "700",
        "700italic"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "thai",
        "vietnamese"
      ],
      "version": "v4",
      "lastModified": "2020-07-23",
      "files": {
        "200": "http://fonts.gstatic.com/s/koho/v4/K2FxfZ5fmddNPuE1WJ75JoKhHys.ttf",
        "200italic": "http://fonts.gstatic.com/s/koho/v4/K2FzfZ5fmddNNisssJ_zIqCkDyvqZA.ttf",
        "300": "http://fonts.gstatic.com/s/koho/v4/K2FxfZ5fmddNPoU2WJ75JoKhHys.ttf",
        "300italic": "http://fonts.gstatic.com/s/koho/v4/K2FzfZ5fmddNNiss1JzzIqCkDyvqZA.ttf",
        "regular": "http://fonts.gstatic.com/s/koho/v4/K2F-fZ5fmddNBikefJbSOos.ttf",
        "italic": "http://fonts.gstatic.com/s/koho/v4/K2FwfZ5fmddNNisUeLTXKou4Bg.ttf",
        "500": "http://fonts.gstatic.com/s/koho/v4/K2FxfZ5fmddNPt03WJ75JoKhHys.ttf",
        "500italic": "http://fonts.gstatic.com/s/koho/v4/K2FzfZ5fmddNNissjJ3zIqCkDyvqZA.ttf",
        "600": "http://fonts.gstatic.com/s/koho/v4/K2FxfZ5fmddNPvEwWJ75JoKhHys.ttf",
        "600italic": "http://fonts.gstatic.com/s/koho/v4/K2FzfZ5fmddNNissoJrzIqCkDyvqZA.ttf",
        "700": "http://fonts.gstatic.com/s/koho/v4/K2FxfZ5fmddNPpUxWJ75JoKhHys.ttf",
        "700italic": "http://fonts.gstatic.com/s/koho/v4/K2FzfZ5fmddNNissxJvzIqCkDyvqZA.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Kodchasan",
      "variants": [
        "200",
        "200italic",
        "300",
        "300italic",
        "regular",
        "italic",
        "500",
        "500italic",
        "600",
        "600italic",
        "700",
        "700italic"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "thai",
        "vietnamese"
      ],
      "version": "v4",
      "lastModified": "2020-07-23",
      "files": {
        "200": "http://fonts.gstatic.com/s/kodchasan/v4/1cX0aUPOAJv9sG4I-DJeR1Cggeqo3eMeoA.ttf",
        "200italic": "http://fonts.gstatic.com/s/kodchasan/v4/1cXqaUPOAJv9sG4I-DJWjUlIgOCs_-YOoIgN.ttf",
        "300": "http://fonts.gstatic.com/s/kodchasan/v4/1cX0aUPOAJv9sG4I-DJeI1Oggeqo3eMeoA.ttf",
        "300italic": "http://fonts.gstatic.com/s/kodchasan/v4/1cXqaUPOAJv9sG4I-DJWjUksg-Cs_-YOoIgN.ttf",
        "regular": "http://fonts.gstatic.com/s/kodchasan/v4/1cXxaUPOAJv9sG4I-DJmj3uEicG01A.ttf",
        "italic": "http://fonts.gstatic.com/s/kodchasan/v4/1cX3aUPOAJv9sG4I-DJWjXGAq8Sk1PoH.ttf",
        "500": "http://fonts.gstatic.com/s/kodchasan/v4/1cX0aUPOAJv9sG4I-DJee1Kggeqo3eMeoA.ttf",
        "500italic": "http://fonts.gstatic.com/s/kodchasan/v4/1cXqaUPOAJv9sG4I-DJWjUl0guCs_-YOoIgN.ttf",
        "600": "http://fonts.gstatic.com/s/kodchasan/v4/1cX0aUPOAJv9sG4I-DJeV1Wggeqo3eMeoA.ttf",
        "600italic": "http://fonts.gstatic.com/s/kodchasan/v4/1cXqaUPOAJv9sG4I-DJWjUlYheCs_-YOoIgN.ttf",
        "700": "http://fonts.gstatic.com/s/kodchasan/v4/1cX0aUPOAJv9sG4I-DJeM1Sggeqo3eMeoA.ttf",
        "700italic": "http://fonts.gstatic.com/s/kodchasan/v4/1cXqaUPOAJv9sG4I-DJWjUk8hOCs_-YOoIgN.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Kosugi",
      "variants": [
        "regular"
      ],
      "subsets": [
        "cyrillic",
        "japanese",
        "latin"
      ],
      "version": "v6",
      "lastModified": "2020-03-03",
      "files": {
        "regular": "http://fonts.gstatic.com/s/kosugi/v6/pxiFyp4_v8FCjlI4NLr6f1pdEQ.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Kosugi Maru",
      "variants": [
        "regular"
      ],
      "subsets": [
        "cyrillic",
        "japanese",
        "latin"
      ],
      "version": "v6",
      "lastModified": "2020-03-03",
      "files": {
        "regular": "http://fonts.gstatic.com/s/kosugimaru/v6/0nksC9PgP_wGh21A2KeqGiTqivr9iBq_.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Kotta One",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v8",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/kottaone/v8/S6u_w41LXzPc_jlfNWqPHA3s5dwt7w.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Koulen",
      "variants": [
        "regular"
      ],
      "subsets": [
        "khmer"
      ],
      "version": "v14",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/koulen/v14/AMOQz46as3KIBPeWgnA9kuYMUg.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Kranky",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v11",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/kranky/v11/hESw6XVgJzlPsFnMpheEZo_H_w.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Kreon",
      "variants": [
        "300",
        "regular",
        "500",
        "600",
        "700"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v24",
      "lastModified": "2021-01-30",
      "files": {
        "300": "http://fonts.gstatic.com/s/kreon/v24/t5t9IRIUKY-TFF_LW5lnMR3v2DnvPNimejUfp2dWNg.ttf",
        "regular": "http://fonts.gstatic.com/s/kreon/v24/t5t9IRIUKY-TFF_LW5lnMR3v2DnvYtimejUfp2dWNg.ttf",
        "500": "http://fonts.gstatic.com/s/kreon/v24/t5t9IRIUKY-TFF_LW5lnMR3v2DnvUNimejUfp2dWNg.ttf",
        "600": "http://fonts.gstatic.com/s/kreon/v24/t5t9IRIUKY-TFF_LW5lnMR3v2DnvvN-mejUfp2dWNg.ttf",
        "700": "http://fonts.gstatic.com/s/kreon/v24/t5t9IRIUKY-TFF_LW5lnMR3v2Dnvhd-mejUfp2dWNg.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Kristi",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v12",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/kristi/v12/uK_y4ricdeU6zwdRCh0TMv6EXw.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Krona One",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v9",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/kronaone/v9/jAnEgHdjHcjgfIb1ZcUCMY-h3cWkWg.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Krub",
      "variants": [
        "200",
        "200italic",
        "300",
        "300italic",
        "regular",
        "italic",
        "500",
        "500italic",
        "600",
        "600italic",
        "700",
        "700italic"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "thai",
        "vietnamese"
      ],
      "version": "v4",
      "lastModified": "2020-09-02",
      "files": {
        "200": "http://fonts.gstatic.com/s/krub/v4/sZlEdRyC6CRYZo47KLF4R6gWaf8.ttf",
        "200italic": "http://fonts.gstatic.com/s/krub/v4/sZlGdRyC6CRYbkQiwLByQ4oTef_6gQ.ttf",
        "300": "http://fonts.gstatic.com/s/krub/v4/sZlEdRyC6CRYZuo4KLF4R6gWaf8.ttf",
        "300italic": "http://fonts.gstatic.com/s/krub/v4/sZlGdRyC6CRYbkQipLNyQ4oTef_6gQ.ttf",
        "regular": "http://fonts.gstatic.com/s/krub/v4/sZlLdRyC6CRYXkYQDLlTW6E.ttf",
        "italic": "http://fonts.gstatic.com/s/krub/v4/sZlFdRyC6CRYbkQaCJtWS6EPcA.ttf",
        "500": "http://fonts.gstatic.com/s/krub/v4/sZlEdRyC6CRYZrI5KLF4R6gWaf8.ttf",
        "500italic": "http://fonts.gstatic.com/s/krub/v4/sZlGdRyC6CRYbkQi_LJyQ4oTef_6gQ.ttf",
        "600": "http://fonts.gstatic.com/s/krub/v4/sZlEdRyC6CRYZp4-KLF4R6gWaf8.ttf",
        "600italic": "http://fonts.gstatic.com/s/krub/v4/sZlGdRyC6CRYbkQi0LVyQ4oTef_6gQ.ttf",
        "700": "http://fonts.gstatic.com/s/krub/v4/sZlEdRyC6CRYZvo_KLF4R6gWaf8.ttf",
        "700italic": "http://fonts.gstatic.com/s/krub/v4/sZlGdRyC6CRYbkQitLRyQ4oTef_6gQ.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Kufam",
      "variants": [
        "regular",
        "500",
        "600",
        "700",
        "800",
        "900",
        "italic",
        "500italic",
        "600italic",
        "700italic",
        "800italic",
        "900italic"
      ],
      "subsets": [
        "arabic",
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v4",
      "lastModified": "2021-01-21",
      "files": {
        "regular": "http://fonts.gstatic.com/s/kufam/v4/C8c-4cY7pG7w_oSJDszBXsKCcBH3lqk7qQCJHvIwYg.ttf",
        "500": "http://fonts.gstatic.com/s/kufam/v4/C8c-4cY7pG7w_oSJDszBXsKCcBH3pKk7qQCJHvIwYg.ttf",
        "600": "http://fonts.gstatic.com/s/kufam/v4/C8c-4cY7pG7w_oSJDszBXsKCcBH3SK47qQCJHvIwYg.ttf",
        "700": "http://fonts.gstatic.com/s/kufam/v4/C8c-4cY7pG7w_oSJDszBXsKCcBH3ca47qQCJHvIwYg.ttf",
        "800": "http://fonts.gstatic.com/s/kufam/v4/C8c-4cY7pG7w_oSJDszBXsKCcBH3Fq47qQCJHvIwYg.ttf",
        "900": "http://fonts.gstatic.com/s/kufam/v4/C8c-4cY7pG7w_oSJDszBXsKCcBH3P647qQCJHvIwYg.ttf",
        "italic": "http://fonts.gstatic.com/s/kufam/v4/C8c84cY7pG7w_q6APDMZN6kY3hbiXurT6gqNPPcgYp0i.ttf",
        "500italic": "http://fonts.gstatic.com/s/kufam/v4/C8c84cY7pG7w_q6APDMZN6kY3hbiXurh6gqNPPcgYp0i.ttf",
        "600italic": "http://fonts.gstatic.com/s/kufam/v4/C8c84cY7pG7w_q6APDMZN6kY3hbiXuoN7QqNPPcgYp0i.ttf",
        "700italic": "http://fonts.gstatic.com/s/kufam/v4/C8c84cY7pG7w_q6APDMZN6kY3hbiXuo07QqNPPcgYp0i.ttf",
        "800italic": "http://fonts.gstatic.com/s/kufam/v4/C8c84cY7pG7w_q6APDMZN6kY3hbiXupT7QqNPPcgYp0i.ttf",
        "900italic": "http://fonts.gstatic.com/s/kufam/v4/C8c84cY7pG7w_q6APDMZN6kY3hbiXup67QqNPPcgYp0i.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Kulim Park",
      "variants": [
        "200",
        "200italic",
        "300",
        "300italic",
        "regular",
        "italic",
        "600",
        "600italic",
        "700",
        "700italic"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v2",
      "lastModified": "2020-07-23",
      "files": {
        "200": "http://fonts.gstatic.com/s/kulimpark/v2/fdN49secq3hflz1Uu3IwjJYNwa5aZbUvGjU.ttf",
        "200italic": "http://fonts.gstatic.com/s/kulimpark/v2/fdNm9secq3hflz1Uu3IwhFwUKa9QYZcqCjVVUA.ttf",
        "300": "http://fonts.gstatic.com/s/kulimpark/v2/fdN49secq3hflz1Uu3IwjPIOwa5aZbUvGjU.ttf",
        "300italic": "http://fonts.gstatic.com/s/kulimpark/v2/fdNm9secq3hflz1Uu3IwhFwUTaxQYZcqCjVVUA.ttf",
        "regular": "http://fonts.gstatic.com/s/kulimpark/v2/fdN79secq3hflz1Uu3IwtF4m5aZxebw.ttf",
        "italic": "http://fonts.gstatic.com/s/kulimpark/v2/fdN59secq3hflz1Uu3IwhFws4YR0abw2Aw.ttf",
        "600": "http://fonts.gstatic.com/s/kulimpark/v2/fdN49secq3hflz1Uu3IwjIYIwa5aZbUvGjU.ttf",
        "600italic": "http://fonts.gstatic.com/s/kulimpark/v2/fdNm9secq3hflz1Uu3IwhFwUOapQYZcqCjVVUA.ttf",
        "700": "http://fonts.gstatic.com/s/kulimpark/v2/fdN49secq3hflz1Uu3IwjOIJwa5aZbUvGjU.ttf",
        "700italic": "http://fonts.gstatic.com/s/kulimpark/v2/fdNm9secq3hflz1Uu3IwhFwUXatQYZcqCjVVUA.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Kumar One",
      "variants": [
        "regular"
      ],
      "subsets": [
        "gujarati",
        "latin",
        "latin-ext"
      ],
      "version": "v5",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/kumarone/v5/bMr1mS-P958wYi6YaGeGNO6WU3oT0g.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Kumar One Outline",
      "variants": [
        "regular"
      ],
      "subsets": [
        "gujarati",
        "latin",
        "latin-ext"
      ],
      "version": "v6",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/kumaroneoutline/v6/Noao6VH62pyLP0fsrZ-v18wlUEcX9zDwRQu8EGKF.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Kumbh Sans",
      "variants": [
        "300",
        "regular",
        "700"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v2",
      "lastModified": "2021-01-21",
      "files": {
        "300": "http://fonts.gstatic.com/s/kumbhsans/v2/c4mm1n92AsfhuCq6tVsagit_3KKVXUv8Los.ttf",
        "regular": "http://fonts.gstatic.com/s/kumbhsans/v2/c4ml1n92AsfhuCq6tVsauodX-Kq-QUI.ttf",
        "700": "http://fonts.gstatic.com/s/kumbhsans/v2/c4mm1n92AsfhuCq6tVsagjt43KKVXUv8Los.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Kurale",
      "variants": [
        "regular"
      ],
      "subsets": [
        "cyrillic",
        "cyrillic-ext",
        "devanagari",
        "latin",
        "latin-ext"
      ],
      "version": "v6",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/kurale/v6/4iCs6KV9e9dXjho6eAT3v02QFg.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "La Belle Aurore",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v11",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/labelleaurore/v11/RrQIbot8-mNYKnGNDkWlocovHeIIG-eFNVmULg.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Lacquer",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v3",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/lacquer/v3/EYqzma1QwqpG4_BBB7-AXhttQ5I.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Laila",
      "variants": [
        "300",
        "regular",
        "500",
        "600",
        "700"
      ],
      "subsets": [
        "devanagari",
        "latin",
        "latin-ext"
      ],
      "version": "v7",
      "lastModified": "2020-07-23",
      "files": {
        "300": "http://fonts.gstatic.com/s/laila/v7/LYjBdG_8nE8jDLzxogNAh14nVcfe.ttf",
        "regular": "http://fonts.gstatic.com/s/laila/v7/LYjMdG_8nE8jDIRdiidIrEIu.ttf",
        "500": "http://fonts.gstatic.com/s/laila/v7/LYjBdG_8nE8jDLypowNAh14nVcfe.ttf",
        "600": "http://fonts.gstatic.com/s/laila/v7/LYjBdG_8nE8jDLyFpANAh14nVcfe.ttf",
        "700": "http://fonts.gstatic.com/s/laila/v7/LYjBdG_8nE8jDLzhpQNAh14nVcfe.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Lakki Reddy",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "telugu"
      ],
      "version": "v7",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/lakkireddy/v7/S6u5w49MUSzD9jlCPmvLZQfox9k97-xZ.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Lalezar",
      "variants": [
        "regular"
      ],
      "subsets": [
        "arabic",
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v8",
      "lastModified": "2020-09-25",
      "files": {
        "regular": "http://fonts.gstatic.com/s/lalezar/v8/zrfl0HLVx-HwTP82UaDyIiL0RCg.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Lancelot",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v10",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/lancelot/v10/J7acnppxBGtQEulG4JY4xJ9CGyAa.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Langar",
      "variants": [
        "regular"
      ],
      "subsets": [
        "gurmukhi",
        "latin",
        "latin-ext"
      ],
      "version": "v12",
      "lastModified": "2021-01-21",
      "files": {
        "regular": "http://fonts.gstatic.com/s/langar/v12/kJEyBukW7AIlgjGVrTVZ99sqrQ.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Lateef",
      "variants": [
        "regular"
      ],
      "subsets": [
        "arabic",
        "latin"
      ],
      "version": "v17",
      "lastModified": "2021-01-21",
      "files": {
        "regular": "http://fonts.gstatic.com/s/lateef/v17/hESw6XVnNCxEvkbMpheEZo_H_w.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Lato",
      "variants": [
        "100",
        "100italic",
        "300",
        "300italic",
        "regular",
        "italic",
        "700",
        "700italic",
        "900",
        "900italic"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v17",
      "lastModified": "2020-09-15",
      "files": {
        "100": "http://fonts.gstatic.com/s/lato/v17/S6u8w4BMUTPHh30wWyWrFCbw7A.ttf",
        "100italic": "http://fonts.gstatic.com/s/lato/v17/S6u-w4BMUTPHjxsIPy-vNiPg7MU0.ttf",
        "300": "http://fonts.gstatic.com/s/lato/v17/S6u9w4BMUTPHh7USew-FGC_p9dw.ttf",
        "300italic": "http://fonts.gstatic.com/s/lato/v17/S6u_w4BMUTPHjxsI9w2PHA3s5dwt7w.ttf",
        "regular": "http://fonts.gstatic.com/s/lato/v17/S6uyw4BMUTPHvxk6XweuBCY.ttf",
        "italic": "http://fonts.gstatic.com/s/lato/v17/S6u8w4BMUTPHjxswWyWrFCbw7A.ttf",
        "700": "http://fonts.gstatic.com/s/lato/v17/S6u9w4BMUTPHh6UVew-FGC_p9dw.ttf",
        "700italic": "http://fonts.gstatic.com/s/lato/v17/S6u_w4BMUTPHjxsI5wqPHA3s5dwt7w.ttf",
        "900": "http://fonts.gstatic.com/s/lato/v17/S6u9w4BMUTPHh50Xew-FGC_p9dw.ttf",
        "900italic": "http://fonts.gstatic.com/s/lato/v17/S6u_w4BMUTPHjxsI3wiPHA3s5dwt7w.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "League Script",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v12",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/leaguescript/v12/CSR54zpSlumSWj9CGVsoBZdeaNNUuOwkC2s.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Leckerli One",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v11",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/leckerlione/v11/V8mCoQH8VCsNttEnxnGQ-1itLZxcBtItFw.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Ledger",
      "variants": [
        "regular"
      ],
      "subsets": [
        "cyrillic",
        "latin",
        "latin-ext"
      ],
      "version": "v9",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/ledger/v9/j8_q6-HK1L3if_sxm8DwHTBhHw.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Lekton",
      "variants": [
        "regular",
        "italic",
        "700"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v11",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/lekton/v11/SZc43FDmLaWmWpBeXxfonUPL6Q.ttf",
        "italic": "http://fonts.gstatic.com/s/lekton/v11/SZc63FDmLaWmWpBuXR3sv0bb6StO.ttf",
        "700": "http://fonts.gstatic.com/s/lekton/v11/SZc73FDmLaWmWpBm4zjMlWjX4DJXgQ.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Lemon",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v9",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/lemon/v9/HI_EiYEVKqRMq0jBSZXAQ4-d.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Lemonada",
      "variants": [
        "300",
        "regular",
        "500",
        "600",
        "700"
      ],
      "subsets": [
        "arabic",
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v12",
      "lastModified": "2021-01-30",
      "files": {
        "300": "http://fonts.gstatic.com/s/lemonada/v12/0QI-MXFD9oygTWy_R-FFlwV-bgfR7QJGJOt2mfWc3Z2pTg.ttf",
        "regular": "http://fonts.gstatic.com/s/lemonada/v12/0QI-MXFD9oygTWy_R-FFlwV-bgfR7QJGeut2mfWc3Z2pTg.ttf",
        "500": "http://fonts.gstatic.com/s/lemonada/v12/0QI-MXFD9oygTWy_R-FFlwV-bgfR7QJGSOt2mfWc3Z2pTg.ttf",
        "600": "http://fonts.gstatic.com/s/lemonada/v12/0QI-MXFD9oygTWy_R-FFlwV-bgfR7QJGpOx2mfWc3Z2pTg.ttf",
        "700": "http://fonts.gstatic.com/s/lemonada/v12/0QI-MXFD9oygTWy_R-FFlwV-bgfR7QJGnex2mfWc3Z2pTg.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Lexend Deca",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v4",
      "lastModified": "2020-11-20",
      "files": {
        "regular": "http://fonts.gstatic.com/s/lexenddeca/v4/K2F1fZFYk-dHSE0UPPuwQ6qgLS76ZHOM.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Lexend Exa",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v4",
      "lastModified": "2020-11-20",
      "files": {
        "regular": "http://fonts.gstatic.com/s/lexendexa/v4/UMBXrPdOoHOnxExyjdBeWirXArM58BY.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Lexend Giga",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v4",
      "lastModified": "2020-11-20",
      "files": {
        "regular": "http://fonts.gstatic.com/s/lexendgiga/v4/PlI5Fl67Mah5Y8yMHE7lkVxEt8CwfGaD.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Lexend Mega",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v4",
      "lastModified": "2020-11-20",
      "files": {
        "regular": "http://fonts.gstatic.com/s/lexendmega/v4/qFdA35aBi5JtHD41zSTFEv7K6BsAikI7.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Lexend Peta",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v4",
      "lastModified": "2020-11-20",
      "files": {
        "regular": "http://fonts.gstatic.com/s/lexendpeta/v4/BXRvvFPGjeLPh0kCfI4OkE_1c8Tf1IW3.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Lexend Tera",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v4",
      "lastModified": "2020-11-20",
      "files": {
        "regular": "http://fonts.gstatic.com/s/lexendtera/v4/RrQUbo98_jt_IXnBPwCWtZhARYMgGtWA.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Lexend Zetta",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v4",
      "lastModified": "2020-11-20",
      "files": {
        "regular": "http://fonts.gstatic.com/s/lexendzetta/v4/ll87K2KYXje7CdOFnEWcU8soliQejRR7AQ.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Libre Barcode 128",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v10",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/librebarcode128/v10/cIfnMbdUsUoiW3O_hVviCwVjuLtXeJ_A_gMk0izH.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Libre Barcode 128 Text",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v10",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/librebarcode128text/v10/fdNv9tubt3ZEnz1Gu3I4-zppwZ9CWZ16Z0w5cV3Y6M90w4k.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Libre Barcode 39",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v10",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/librebarcode39/v10/-nFnOHM08vwC6h8Li1eQnP_AHzI2K_d709jy92k.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Libre Barcode 39 Extended",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v9",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/librebarcode39extended/v9/8At7Gt6_O5yNS0-K4Nf5U922qSzhJ3dUdfJpwNUgfNRCOZ1GOBw.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Libre Barcode 39 Extended Text",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v9",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/librebarcode39extendedtext/v9/eLG1P_rwIgOiDA7yrs9LoKaYRVLQ1YldrrOnnL7xPO4jNP68fLIiPopNNA.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Libre Barcode 39 Text",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v10",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/librebarcode39text/v10/sJoa3KhViNKANw_E3LwoDXvs5Un0HQ1vT-031RRL-9rYaw.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Libre Barcode EAN13 Text",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v4",
      "lastModified": "2021-02-03",
      "files": {
        "regular": "http://fonts.gstatic.com/s/librebarcodeean13text/v4/wlpigxXFDU1_oCu9nfZytgIqSG0XRcJm_OQiB96PAGEki52WfA.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Libre Baskerville",
      "variants": [
        "regular",
        "italic",
        "700"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v9",
      "lastModified": "2020-09-10",
      "files": {
        "regular": "http://fonts.gstatic.com/s/librebaskerville/v9/kmKnZrc3Hgbbcjq75U4uslyuy4kn0pNeYRI4CN2V.ttf",
        "italic": "http://fonts.gstatic.com/s/librebaskerville/v9/kmKhZrc3Hgbbcjq75U4uslyuy4kn0qNcaxYaDc2V2ro.ttf",
        "700": "http://fonts.gstatic.com/s/librebaskerville/v9/kmKiZrc3Hgbbcjq75U4uslyuy4kn0qviTjYwI8Gcw6Oi.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Libre Caslon Display",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v2",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/librecaslondisplay/v2/TuGOUUFxWphYQ6YI6q9Xp61FQzxDRKmzr2lRdRhtCC4d.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Libre Caslon Text",
      "variants": [
        "regular",
        "italic",
        "700"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v2",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/librecaslontext/v2/DdT878IGsGw1aF1JU10PUbTvNNaDMcq_3eNrHgO1.ttf",
        "italic": "http://fonts.gstatic.com/s/librecaslontext/v2/DdT678IGsGw1aF1JU10PUbTvNNaDMfq91-dJGxO1q9o.ttf",
        "700": "http://fonts.gstatic.com/s/librecaslontext/v2/DdT578IGsGw1aF1JU10PUbTvNNaDMfID8sdjNR-8ssPt.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Libre Franklin",
      "variants": [
        "100",
        "200",
        "300",
        "regular",
        "500",
        "600",
        "700",
        "800",
        "900",
        "100italic",
        "200italic",
        "300italic",
        "italic",
        "500italic",
        "600italic",
        "700italic",
        "800italic",
        "900italic"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v7",
      "lastModified": "2021-01-30",
      "files": {
        "100": "http://fonts.gstatic.com/s/librefranklin/v7/jizOREVItHgc8qDIbSTKq4XkRg8T88bjFuXOnduhLsSUB9rIb-JH1g.ttf",
        "200": "http://fonts.gstatic.com/s/librefranklin/v7/jizOREVItHgc8qDIbSTKq4XkRg8T88bjFuXOnduhrsWUB9rIb-JH1g.ttf",
        "300": "http://fonts.gstatic.com/s/librefranklin/v7/jizOREVItHgc8qDIbSTKq4XkRg8T88bjFuXOnduhcMWUB9rIb-JH1g.ttf",
        "regular": "http://fonts.gstatic.com/s/librefranklin/v7/jizOREVItHgc8qDIbSTKq4XkRg8T88bjFuXOnduhLsWUB9rIb-JH1g.ttf",
        "500": "http://fonts.gstatic.com/s/librefranklin/v7/jizOREVItHgc8qDIbSTKq4XkRg8T88bjFuXOnduhHMWUB9rIb-JH1g.ttf",
        "600": "http://fonts.gstatic.com/s/librefranklin/v7/jizOREVItHgc8qDIbSTKq4XkRg8T88bjFuXOnduh8MKUB9rIb-JH1g.ttf",
        "700": "http://fonts.gstatic.com/s/librefranklin/v7/jizOREVItHgc8qDIbSTKq4XkRg8T88bjFuXOnduhycKUB9rIb-JH1g.ttf",
        "800": "http://fonts.gstatic.com/s/librefranklin/v7/jizOREVItHgc8qDIbSTKq4XkRg8T88bjFuXOnduhrsKUB9rIb-JH1g.ttf",
        "900": "http://fonts.gstatic.com/s/librefranklin/v7/jizOREVItHgc8qDIbSTKq4XkRg8T88bjFuXOnduhh8KUB9rIb-JH1g.ttf",
        "100italic": "http://fonts.gstatic.com/s/librefranklin/v7/jizMREVItHgc8qDIbSTKq4XkRiUawTk7f45UM9y05oZ8RdDMTedX1sGE.ttf",
        "200italic": "http://fonts.gstatic.com/s/librefranklin/v7/jizMREVItHgc8qDIbSTKq4XkRiUawTk7f45UM9y05ob8RNDMTedX1sGE.ttf",
        "300italic": "http://fonts.gstatic.com/s/librefranklin/v7/jizMREVItHgc8qDIbSTKq4XkRiUawTk7f45UM9y05oYiRNDMTedX1sGE.ttf",
        "italic": "http://fonts.gstatic.com/s/librefranklin/v7/jizMREVItHgc8qDIbSTKq4XkRiUawTk7f45UM9y05oZ8RNDMTedX1sGE.ttf",
        "500italic": "http://fonts.gstatic.com/s/librefranklin/v7/jizMREVItHgc8qDIbSTKq4XkRiUawTk7f45UM9y05oZORNDMTedX1sGE.ttf",
        "600italic": "http://fonts.gstatic.com/s/librefranklin/v7/jizMREVItHgc8qDIbSTKq4XkRiUawTk7f45UM9y05oaiQ9DMTedX1sGE.ttf",
        "700italic": "http://fonts.gstatic.com/s/librefranklin/v7/jizMREVItHgc8qDIbSTKq4XkRiUawTk7f45UM9y05oabQ9DMTedX1sGE.ttf",
        "800italic": "http://fonts.gstatic.com/s/librefranklin/v7/jizMREVItHgc8qDIbSTKq4XkRiUawTk7f45UM9y05ob8Q9DMTedX1sGE.ttf",
        "900italic": "http://fonts.gstatic.com/s/librefranklin/v7/jizMREVItHgc8qDIbSTKq4XkRiUawTk7f45UM9y05obVQ9DMTedX1sGE.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Life Savers",
      "variants": [
        "regular",
        "700",
        "800"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v11",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/lifesavers/v11/ZXuie1UftKKabUQMgxAal_lrFgpbuNvB.ttf",
        "700": "http://fonts.gstatic.com/s/lifesavers/v11/ZXu_e1UftKKabUQMgxAal8HXOS5Tk8fIpPRW.ttf",
        "800": "http://fonts.gstatic.com/s/lifesavers/v11/ZXu_e1UftKKabUQMgxAal8HLOi5Tk8fIpPRW.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Lilita One",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v8",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/lilitaone/v8/i7dPIFZ9Zz-WBtRtedDbUEZ2RFq7AwU.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Lily Script One",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v8",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/lilyscriptone/v8/LhW9MV7ZMfIPdMxeBjBvFN8SXLS4gsSjQNsRMg.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Limelight",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v11",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/limelight/v11/XLYkIZL7aopJVbZJHDuYPeNGrnY2TA.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Linden Hill",
      "variants": [
        "regular",
        "italic"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v10",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/lindenhill/v10/-F61fjxoKSg9Yc3hZgO8ygFI7CwC009k.ttf",
        "italic": "http://fonts.gstatic.com/s/lindenhill/v10/-F63fjxoKSg9Yc3hZgO8yjFK5igg1l9kn-s.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Literata",
      "variants": [
        "200",
        "300",
        "regular",
        "500",
        "600",
        "700",
        "800",
        "900",
        "200italic",
        "300italic",
        "italic",
        "500italic",
        "600italic",
        "700italic",
        "800italic",
        "900italic"
      ],
      "subsets": [
        "cyrillic",
        "cyrillic-ext",
        "greek",
        "greek-ext",
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v19",
      "lastModified": "2021-01-30",
      "files": {
        "200": "http://fonts.gstatic.com/s/literata/v19/or3PQ6P12-iJxAIgLa78DkrbXsDgk0oVDaDPYLanFLHpPf2TbJG_F_bcTWCWp8g.ttf",
        "300": "http://fonts.gstatic.com/s/literata/v19/or3PQ6P12-iJxAIgLa78DkrbXsDgk0oVDaDPYLanFLHpPf2TbE-_F_bcTWCWp8g.ttf",
        "regular": "http://fonts.gstatic.com/s/literata/v19/or3PQ6P12-iJxAIgLa78DkrbXsDgk0oVDaDPYLanFLHpPf2TbBG_F_bcTWCWp8g.ttf",
        "500": "http://fonts.gstatic.com/s/literata/v19/or3PQ6P12-iJxAIgLa78DkrbXsDgk0oVDaDPYLanFLHpPf2TbCO_F_bcTWCWp8g.ttf",
        "600": "http://fonts.gstatic.com/s/literata/v19/or3PQ6P12-iJxAIgLa78DkrbXsDgk0oVDaDPYLanFLHpPf2TbM-4F_bcTWCWp8g.ttf",
        "700": "http://fonts.gstatic.com/s/literata/v19/or3PQ6P12-iJxAIgLa78DkrbXsDgk0oVDaDPYLanFLHpPf2TbPa4F_bcTWCWp8g.ttf",
        "800": "http://fonts.gstatic.com/s/literata/v19/or3PQ6P12-iJxAIgLa78DkrbXsDgk0oVDaDPYLanFLHpPf2TbJG4F_bcTWCWp8g.ttf",
        "900": "http://fonts.gstatic.com/s/literata/v19/or3PQ6P12-iJxAIgLa78DkrbXsDgk0oVDaDPYLanFLHpPf2TbLi4F_bcTWCWp8g.ttf",
        "200italic": "http://fonts.gstatic.com/s/literata/v19/or3NQ6P12-iJxAIgLYT1PLs1Zd0nfUwAbeGVKoRYzNiCp1OUedn8f7XWSUKTt8iVow.ttf",
        "300italic": "http://fonts.gstatic.com/s/literata/v19/or3NQ6P12-iJxAIgLYT1PLs1Zd0nfUwAbeGVKoRYzNiCp1OUedn8obXWSUKTt8iVow.ttf",
        "italic": "http://fonts.gstatic.com/s/literata/v19/or3NQ6P12-iJxAIgLYT1PLs1Zd0nfUwAbeGVKoRYzNiCp1OUedn8_7XWSUKTt8iVow.ttf",
        "500italic": "http://fonts.gstatic.com/s/literata/v19/or3NQ6P12-iJxAIgLYT1PLs1Zd0nfUwAbeGVKoRYzNiCp1OUedn8zbXWSUKTt8iVow.ttf",
        "600italic": "http://fonts.gstatic.com/s/literata/v19/or3NQ6P12-iJxAIgLYT1PLs1Zd0nfUwAbeGVKoRYzNiCp1OUedn8IbLWSUKTt8iVow.ttf",
        "700italic": "http://fonts.gstatic.com/s/literata/v19/or3NQ6P12-iJxAIgLYT1PLs1Zd0nfUwAbeGVKoRYzNiCp1OUedn8GLLWSUKTt8iVow.ttf",
        "800italic": "http://fonts.gstatic.com/s/literata/v19/or3NQ6P12-iJxAIgLYT1PLs1Zd0nfUwAbeGVKoRYzNiCp1OUedn8f7LWSUKTt8iVow.ttf",
        "900italic": "http://fonts.gstatic.com/s/literata/v19/or3NQ6P12-iJxAIgLYT1PLs1Zd0nfUwAbeGVKoRYzNiCp1OUedn8VrLWSUKTt8iVow.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Liu Jian Mao Cao",
      "variants": [
        "regular"
      ],
      "subsets": [
        "chinese-simplified",
        "latin"
      ],
      "version": "v5",
      "lastModified": "2019-11-05",
      "files": {
        "regular": "http://fonts.gstatic.com/s/liujianmaocao/v5/845DNN84HJrccNonurqXILGpvCOoferVKGWsUo8.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Livvic",
      "variants": [
        "100",
        "100italic",
        "200",
        "200italic",
        "300",
        "300italic",
        "regular",
        "italic",
        "500",
        "500italic",
        "600",
        "600italic",
        "700",
        "700italic",
        "900",
        "900italic"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v5",
      "lastModified": "2020-09-25",
      "files": {
        "100": "http://fonts.gstatic.com/s/livvic/v5/rnCr-x1S2hzjrlffC-M-mHnOSOuk.ttf",
        "100italic": "http://fonts.gstatic.com/s/livvic/v5/rnCt-x1S2hzjrlfXbdtakn3sTfukQHs.ttf",
        "200": "http://fonts.gstatic.com/s/livvic/v5/rnCq-x1S2hzjrlffp8IeslfCQfK9WQ.ttf",
        "200italic": "http://fonts.gstatic.com/s/livvic/v5/rnCs-x1S2hzjrlfXbdv2s13GY_etWWIJ.ttf",
        "300": "http://fonts.gstatic.com/s/livvic/v5/rnCq-x1S2hzjrlffw8EeslfCQfK9WQ.ttf",
        "300italic": "http://fonts.gstatic.com/s/livvic/v5/rnCs-x1S2hzjrlfXbduSsF3GY_etWWIJ.ttf",
        "regular": "http://fonts.gstatic.com/s/livvic/v5/rnCp-x1S2hzjrlfnb-k6unzeSA.ttf",
        "italic": "http://fonts.gstatic.com/s/livvic/v5/rnCr-x1S2hzjrlfXbeM-mHnOSOuk.ttf",
        "500": "http://fonts.gstatic.com/s/livvic/v5/rnCq-x1S2hzjrlffm8AeslfCQfK9WQ.ttf",
        "500italic": "http://fonts.gstatic.com/s/livvic/v5/rnCs-x1S2hzjrlfXbdvKsV3GY_etWWIJ.ttf",
        "600": "http://fonts.gstatic.com/s/livvic/v5/rnCq-x1S2hzjrlfft8ceslfCQfK9WQ.ttf",
        "600italic": "http://fonts.gstatic.com/s/livvic/v5/rnCs-x1S2hzjrlfXbdvmtl3GY_etWWIJ.ttf",
        "700": "http://fonts.gstatic.com/s/livvic/v5/rnCq-x1S2hzjrlff08YeslfCQfK9WQ.ttf",
        "700italic": "http://fonts.gstatic.com/s/livvic/v5/rnCs-x1S2hzjrlfXbduCt13GY_etWWIJ.ttf",
        "900": "http://fonts.gstatic.com/s/livvic/v5/rnCq-x1S2hzjrlff68QeslfCQfK9WQ.ttf",
        "900italic": "http://fonts.gstatic.com/s/livvic/v5/rnCs-x1S2hzjrlfXbdu6tV3GY_etWWIJ.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Lobster",
      "variants": [
        "regular"
      ],
      "subsets": [
        "cyrillic",
        "cyrillic-ext",
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v23",
      "lastModified": "2020-09-10",
      "files": {
        "regular": "http://fonts.gstatic.com/s/lobster/v23/neILzCirqoswsqX9_oWsMqEzSJQ.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Lobster Two",
      "variants": [
        "regular",
        "italic",
        "700",
        "700italic"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v13",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/lobstertwo/v13/BngMUXZGTXPUvIoyV6yN59fK7KSJ4ACD.ttf",
        "italic": "http://fonts.gstatic.com/s/lobstertwo/v13/BngOUXZGTXPUvIoyV6yN5-fI5qCr5RCDY_k.ttf",
        "700": "http://fonts.gstatic.com/s/lobstertwo/v13/BngRUXZGTXPUvIoyV6yN5-92w4CByxyKeuDp.ttf",
        "700italic": "http://fonts.gstatic.com/s/lobstertwo/v13/BngTUXZGTXPUvIoyV6yN5-fI3hyEwRiof_DpXMY.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Londrina Outline",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v11",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/londrinaoutline/v11/C8c44dM8vmb14dfsZxhetg3pDH-SfuoxrSKMDvI.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Londrina Shadow",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v10",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/londrinashadow/v10/oPWX_kB4kOQoWNJmjxLV5JuoCUlXRlaSxkrMCQ.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Londrina Sketch",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v9",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/londrinasketch/v9/c4m41npxGMTnomOHtRU68eIJn8qfWWn5Pos6CA.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Londrina Solid",
      "variants": [
        "100",
        "300",
        "regular",
        "900"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v10",
      "lastModified": "2020-09-02",
      "files": {
        "100": "http://fonts.gstatic.com/s/londrinasolid/v10/flUjRq6sw40kQEJxWNgkLuudGfs9KBYesZHhV64.ttf",
        "300": "http://fonts.gstatic.com/s/londrinasolid/v10/flUiRq6sw40kQEJxWNgkLuudGfv1CjY0n53oTrcL.ttf",
        "regular": "http://fonts.gstatic.com/s/londrinasolid/v10/flUhRq6sw40kQEJxWNgkLuudGcNZIhI8tIHh.ttf",
        "900": "http://fonts.gstatic.com/s/londrinasolid/v10/flUiRq6sw40kQEJxWNgkLuudGfvdDzY0n53oTrcL.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Long Cang",
      "variants": [
        "regular"
      ],
      "subsets": [
        "chinese-simplified",
        "latin"
      ],
      "version": "v5",
      "lastModified": "2019-11-05",
      "files": {
        "regular": "http://fonts.gstatic.com/s/longcang/v5/LYjAdGP8kkgoTec8zkRgrXArXN7HWQ.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Lora",
      "variants": [
        "regular",
        "500",
        "600",
        "700",
        "italic",
        "500italic",
        "600italic",
        "700italic"
      ],
      "subsets": [
        "cyrillic",
        "cyrillic-ext",
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v17",
      "lastModified": "2021-01-30",
      "files": {
        "regular": "http://fonts.gstatic.com/s/lora/v17/0QI6MX1D_JOuGQbT0gvTJPa787weuyJGmKxemMeZ.ttf",
        "500": "http://fonts.gstatic.com/s/lora/v17/0QI6MX1D_JOuGQbT0gvTJPa787wsuyJGmKxemMeZ.ttf",
        "600": "http://fonts.gstatic.com/s/lora/v17/0QI6MX1D_JOuGQbT0gvTJPa787zAvCJGmKxemMeZ.ttf",
        "700": "http://fonts.gstatic.com/s/lora/v17/0QI6MX1D_JOuGQbT0gvTJPa787z5vCJGmKxemMeZ.ttf",
        "italic": "http://fonts.gstatic.com/s/lora/v17/0QI8MX1D_JOuMw_hLdO6T2wV9KnW-MoFkqh8ndeZzZ0.ttf",
        "500italic": "http://fonts.gstatic.com/s/lora/v17/0QI8MX1D_JOuMw_hLdO6T2wV9KnW-PgFkqh8ndeZzZ0.ttf",
        "600italic": "http://fonts.gstatic.com/s/lora/v17/0QI8MX1D_JOuMw_hLdO6T2wV9KnW-BQCkqh8ndeZzZ0.ttf",
        "700italic": "http://fonts.gstatic.com/s/lora/v17/0QI8MX1D_JOuMw_hLdO6T2wV9KnW-C0Ckqh8ndeZzZ0.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Love Ya Like A Sister",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v11",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/loveyalikeasister/v11/R70EjzUBlOqPeouhFDfR80-0FhOqJubN-Be78nZcsGGycA.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Loved by the King",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v10",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/lovedbytheking/v10/Gw6gwdP76VDVJNXerebZxUMeRXUF2PiNlXFu2R64.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Lovers Quarrel",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v8",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/loversquarrel/v8/Yq6N-LSKXTL-5bCy8ksBzpQ_-zAsY7pO6siz.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Luckiest Guy",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v11",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/luckiestguy/v11/_gP_1RrxsjcxVyin9l9n_j2RStR3qDpraA.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Lusitana",
      "variants": [
        "regular",
        "700"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v8",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/lusitana/v8/CSR84z9ShvucWzsMKxhaRuMiSct_.ttf",
        "700": "http://fonts.gstatic.com/s/lusitana/v8/CSR74z9ShvucWzsMKyDmaccqYtd2vfwk.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Lustria",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v8",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/lustria/v8/9oRONYodvDEyjuhOrCg5MtPyAcg.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "M PLUS 1p",
      "variants": [
        "100",
        "300",
        "regular",
        "500",
        "700",
        "800",
        "900"
      ],
      "subsets": [
        "cyrillic",
        "cyrillic-ext",
        "greek",
        "greek-ext",
        "hebrew",
        "japanese",
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v19",
      "lastModified": "2020-03-03",
      "files": {
        "100": "http://fonts.gstatic.com/s/mplus1p/v19/e3tleuShHdiFyPFzBRrQnDQAUW3aq-5N.ttf",
        "300": "http://fonts.gstatic.com/s/mplus1p/v19/e3tmeuShHdiFyPFzBRrQVBYge0PWovdU4w.ttf",
        "regular": "http://fonts.gstatic.com/s/mplus1p/v19/e3tjeuShHdiFyPFzBRro-D4Ec2jKqw.ttf",
        "500": "http://fonts.gstatic.com/s/mplus1p/v19/e3tmeuShHdiFyPFzBRrQDBcge0PWovdU4w.ttf",
        "700": "http://fonts.gstatic.com/s/mplus1p/v19/e3tmeuShHdiFyPFzBRrQRBEge0PWovdU4w.ttf",
        "800": "http://fonts.gstatic.com/s/mplus1p/v19/e3tmeuShHdiFyPFzBRrQWBIge0PWovdU4w.ttf",
        "900": "http://fonts.gstatic.com/s/mplus1p/v19/e3tmeuShHdiFyPFzBRrQfBMge0PWovdU4w.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "M PLUS Rounded 1c",
      "variants": [
        "100",
        "300",
        "regular",
        "500",
        "700",
        "800",
        "900"
      ],
      "subsets": [
        "cyrillic",
        "cyrillic-ext",
        "greek",
        "greek-ext",
        "hebrew",
        "japanese",
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v10",
      "lastModified": "2019-11-05",
      "files": {
        "100": "http://fonts.gstatic.com/s/mplusrounded1c/v10/VdGCAYIAV6gnpUpoWwNkYvrugw9RuM3ixLsg6-av1x0.ttf",
        "300": "http://fonts.gstatic.com/s/mplusrounded1c/v10/VdGBAYIAV6gnpUpoWwNkYvrugw9RuM0q5psKxeqmzgRK.ttf",
        "regular": "http://fonts.gstatic.com/s/mplusrounded1c/v10/VdGEAYIAV6gnpUpoWwNkYvrugw9RuPWGzr8C7vav.ttf",
        "500": "http://fonts.gstatic.com/s/mplusrounded1c/v10/VdGBAYIAV6gnpUpoWwNkYvrugw9RuM1y55sKxeqmzgRK.ttf",
        "700": "http://fonts.gstatic.com/s/mplusrounded1c/v10/VdGBAYIAV6gnpUpoWwNkYvrugw9RuM064ZsKxeqmzgRK.ttf",
        "800": "http://fonts.gstatic.com/s/mplusrounded1c/v10/VdGBAYIAV6gnpUpoWwNkYvrugw9RuM0m4psKxeqmzgRK.ttf",
        "900": "http://fonts.gstatic.com/s/mplusrounded1c/v10/VdGBAYIAV6gnpUpoWwNkYvrugw9RuM0C45sKxeqmzgRK.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Ma Shan Zheng",
      "variants": [
        "regular"
      ],
      "subsets": [
        "chinese-simplified",
        "latin"
      ],
      "version": "v5",
      "lastModified": "2019-11-05",
      "files": {
        "regular": "http://fonts.gstatic.com/s/mashanzheng/v5/NaPecZTRCLxvwo41b4gvzkXaRMTsDIRSfr0.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Macondo",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v9",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/macondo/v9/RrQQboN9-iB1IXmOS2XO0LBBd4Y.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Macondo Swash Caps",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v8",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/macondoswashcaps/v8/6NUL8EaAJgGKZA7lpt941Z9s6ZYgDq6Oekoa_mm5bA.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Mada",
      "variants": [
        "200",
        "300",
        "regular",
        "500",
        "600",
        "700",
        "900"
      ],
      "subsets": [
        "arabic",
        "latin"
      ],
      "version": "v10",
      "lastModified": "2021-01-21",
      "files": {
        "200": "http://fonts.gstatic.com/s/mada/v10/7Au_p_0qnzeSdf3nCCL8zkwMIFg.ttf",
        "300": "http://fonts.gstatic.com/s/mada/v10/7Au_p_0qnzeSdZnkCCL8zkwMIFg.ttf",
        "regular": "http://fonts.gstatic.com/s/mada/v10/7Auwp_0qnzeSTTXMLCrX0kU.ttf",
        "500": "http://fonts.gstatic.com/s/mada/v10/7Au_p_0qnzeSdcHlCCL8zkwMIFg.ttf",
        "600": "http://fonts.gstatic.com/s/mada/v10/7Au_p_0qnzeSde3iCCL8zkwMIFg.ttf",
        "700": "http://fonts.gstatic.com/s/mada/v10/7Au_p_0qnzeSdYnjCCL8zkwMIFg.ttf",
        "900": "http://fonts.gstatic.com/s/mada/v10/7Au_p_0qnzeSdbHhCCL8zkwMIFg.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Magra",
      "variants": [
        "regular",
        "700"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v9",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/magra/v9/uK_94ruaZus72k5xIDMfO-ed.ttf",
        "700": "http://fonts.gstatic.com/s/magra/v9/uK_w4ruaZus72nbNDxcXEPuUX1ow.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Maiden Orange",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v11",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/maidenorange/v11/kJE1BuIX7AUmhi2V4m08kb1XjOZdCZS8FY8.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Maitree",
      "variants": [
        "200",
        "300",
        "regular",
        "500",
        "600",
        "700"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "thai",
        "vietnamese"
      ],
      "version": "v5",
      "lastModified": "2020-07-23",
      "files": {
        "200": "http://fonts.gstatic.com/s/maitree/v5/MjQDmil5tffhpBrklhGNWJGovLdh6OE.ttf",
        "300": "http://fonts.gstatic.com/s/maitree/v5/MjQDmil5tffhpBrklnWOWJGovLdh6OE.ttf",
        "regular": "http://fonts.gstatic.com/s/maitree/v5/MjQGmil5tffhpBrkrtmmfJmDoL4.ttf",
        "500": "http://fonts.gstatic.com/s/maitree/v5/MjQDmil5tffhpBrkli2PWJGovLdh6OE.ttf",
        "600": "http://fonts.gstatic.com/s/maitree/v5/MjQDmil5tffhpBrklgGIWJGovLdh6OE.ttf",
        "700": "http://fonts.gstatic.com/s/maitree/v5/MjQDmil5tffhpBrklmWJWJGovLdh6OE.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Major Mono Display",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v5",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/majormonodisplay/v5/RWmVoLyb5fEqtsfBX9PDZIGr2tFubRhLCn2QIndPww.ttf"
      },
      "category": "monospace",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Mako",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v12",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/mako/v12/H4coBX6Mmc_Z0ST09g478Lo.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Mali",
      "variants": [
        "200",
        "200italic",
        "300",
        "300italic",
        "regular",
        "italic",
        "500",
        "500italic",
        "600",
        "600italic",
        "700",
        "700italic"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "thai",
        "vietnamese"
      ],
      "version": "v4",
      "lastModified": "2020-09-02",
      "files": {
        "200": "http://fonts.gstatic.com/s/mali/v4/N0bV2SRONuN4QOLlKlRaJdbWgdY.ttf",
        "200italic": "http://fonts.gstatic.com/s/mali/v4/N0bX2SRONuN4SCj8wlVQIfTTkdbJYA.ttf",
        "300": "http://fonts.gstatic.com/s/mali/v4/N0bV2SRONuN4QIbmKlRaJdbWgdY.ttf",
        "300italic": "http://fonts.gstatic.com/s/mali/v4/N0bX2SRONuN4SCj8plZQIfTTkdbJYA.ttf",
        "regular": "http://fonts.gstatic.com/s/mali/v4/N0ba2SRONuN4eCrODlxxOd8.ttf",
        "italic": "http://fonts.gstatic.com/s/mali/v4/N0bU2SRONuN4SCjECn50Kd_PmA.ttf",
        "500": "http://fonts.gstatic.com/s/mali/v4/N0bV2SRONuN4QN7nKlRaJdbWgdY.ttf",
        "500italic": "http://fonts.gstatic.com/s/mali/v4/N0bX2SRONuN4SCj8_ldQIfTTkdbJYA.ttf",
        "600": "http://fonts.gstatic.com/s/mali/v4/N0bV2SRONuN4QPLgKlRaJdbWgdY.ttf",
        "600italic": "http://fonts.gstatic.com/s/mali/v4/N0bX2SRONuN4SCj80lBQIfTTkdbJYA.ttf",
        "700": "http://fonts.gstatic.com/s/mali/v4/N0bV2SRONuN4QJbhKlRaJdbWgdY.ttf",
        "700italic": "http://fonts.gstatic.com/s/mali/v4/N0bX2SRONuN4SCj8tlFQIfTTkdbJYA.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Mallanna",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "telugu"
      ],
      "version": "v8",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/mallanna/v8/hv-Vlzx-KEQb84YaDGwzEzRwVvJ-.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Mandali",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "telugu"
      ],
      "version": "v9",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/mandali/v9/LhWlMVbYOfASNfNUVFk1ZPdcKtA.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Manjari",
      "variants": [
        "100",
        "regular",
        "700"
      ],
      "subsets": [
        "latin",
        "malayalam"
      ],
      "version": "v3",
      "lastModified": "2020-07-23",
      "files": {
        "100": "http://fonts.gstatic.com/s/manjari/v3/k3kSo8UPMOBO2w1UdbroK2vFIaOV8A.ttf",
        "regular": "http://fonts.gstatic.com/s/manjari/v3/k3kQo8UPMOBO2w1UTd7iL0nAMaM.ttf",
        "700": "http://fonts.gstatic.com/s/manjari/v3/k3kVo8UPMOBO2w1UdWLNC0HrLaqM6Q4.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Manrope",
      "variants": [
        "200",
        "300",
        "regular",
        "500",
        "600",
        "700",
        "800"
      ],
      "subsets": [
        "cyrillic",
        "greek",
        "latin",
        "latin-ext"
      ],
      "version": "v4",
      "lastModified": "2021-01-30",
      "files": {
        "200": "http://fonts.gstatic.com/s/manrope/v4/xn7_YHE41ni1AdIRqAuZuw1Bx9mbZk59FO_F87jxeN7B.ttf",
        "300": "http://fonts.gstatic.com/s/manrope/v4/xn7_YHE41ni1AdIRqAuZuw1Bx9mbZk6jFO_F87jxeN7B.ttf",
        "regular": "http://fonts.gstatic.com/s/manrope/v4/xn7_YHE41ni1AdIRqAuZuw1Bx9mbZk79FO_F87jxeN7B.ttf",
        "500": "http://fonts.gstatic.com/s/manrope/v4/xn7_YHE41ni1AdIRqAuZuw1Bx9mbZk7PFO_F87jxeN7B.ttf",
        "600": "http://fonts.gstatic.com/s/manrope/v4/xn7_YHE41ni1AdIRqAuZuw1Bx9mbZk4jE-_F87jxeN7B.ttf",
        "700": "http://fonts.gstatic.com/s/manrope/v4/xn7_YHE41ni1AdIRqAuZuw1Bx9mbZk4aE-_F87jxeN7B.ttf",
        "800": "http://fonts.gstatic.com/s/manrope/v4/xn7_YHE41ni1AdIRqAuZuw1Bx9mbZk59E-_F87jxeN7B.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Mansalva",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v2",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/mansalva/v2/aWB4m0aacbtDfvq5NJllI47vdyBg.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Manuale",
      "variants": [
        "regular",
        "500",
        "600",
        "700",
        "italic",
        "500italic",
        "600italic",
        "700italic"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v8",
      "lastModified": "2021-01-30",
      "files": {
        "regular": "http://fonts.gstatic.com/s/manuale/v8/f0Xp0eas_8Z-TFZdHv3mMxFaSqASeeHke7wD1TB_JHHY.ttf",
        "500": "http://fonts.gstatic.com/s/manuale/v8/f0Xp0eas_8Z-TFZdHv3mMxFaSqASeeHWe7wD1TB_JHHY.ttf",
        "600": "http://fonts.gstatic.com/s/manuale/v8/f0Xp0eas_8Z-TFZdHv3mMxFaSqASeeE6fLwD1TB_JHHY.ttf",
        "700": "http://fonts.gstatic.com/s/manuale/v8/f0Xp0eas_8Z-TFZdHv3mMxFaSqASeeEDfLwD1TB_JHHY.ttf",
        "italic": "http://fonts.gstatic.com/s/manuale/v8/f0Xn0eas_8Z-TFZdNPTUzMkzITq8fvQsOFRA3zRdIWHYr8M.ttf",
        "500italic": "http://fonts.gstatic.com/s/manuale/v8/f0Xn0eas_8Z-TFZdNPTUzMkzITq8fvQsOGZA3zRdIWHYr8M.ttf",
        "600italic": "http://fonts.gstatic.com/s/manuale/v8/f0Xn0eas_8Z-TFZdNPTUzMkzITq8fvQsOIpH3zRdIWHYr8M.ttf",
        "700italic": "http://fonts.gstatic.com/s/manuale/v8/f0Xn0eas_8Z-TFZdNPTUzMkzITq8fvQsOLNH3zRdIWHYr8M.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Marcellus",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v8",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/marcellus/v8/wEO_EBrOk8hQLDvIAF8FUfAL3EsHiA.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Marcellus SC",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v8",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/marcellussc/v8/ke8iOgUHP1dg-Rmi6RWjbLEPgdydGKikhA.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Marck Script",
      "variants": [
        "regular"
      ],
      "subsets": [
        "cyrillic",
        "latin",
        "latin-ext"
      ],
      "version": "v11",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/marckscript/v11/nwpTtK2oNgBA3Or78gapdwuCzyI-aMPF7Q.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Margarine",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v9",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/margarine/v9/qkBXXvoE6trLT9Y7YLye5JRLkAXbMQ.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Markazi Text",
      "variants": [
        "regular",
        "500",
        "600",
        "700"
      ],
      "subsets": [
        "arabic",
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v13",
      "lastModified": "2021-01-30",
      "files": {
        "regular": "http://fonts.gstatic.com/s/markazitext/v13/sykh-ydym6AtQaiEtX7yhqb_rV1k_81ZVYYZtfSQT4MlBekmJLo.ttf",
        "500": "http://fonts.gstatic.com/s/markazitext/v13/sykh-ydym6AtQaiEtX7yhqb_rV1k_81ZVYYZtcaQT4MlBekmJLo.ttf",
        "600": "http://fonts.gstatic.com/s/markazitext/v13/sykh-ydym6AtQaiEtX7yhqb_rV1k_81ZVYYZtSqXT4MlBekmJLo.ttf",
        "700": "http://fonts.gstatic.com/s/markazitext/v13/sykh-ydym6AtQaiEtX7yhqb_rV1k_81ZVYYZtROXT4MlBekmJLo.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Marko One",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v10",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/markoone/v10/9Btq3DFG0cnVM5lw1haaKpUfrHPzUw.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Marmelad",
      "variants": [
        "regular"
      ],
      "subsets": [
        "cyrillic",
        "latin",
        "latin-ext"
      ],
      "version": "v10",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/marmelad/v10/Qw3eZQdSHj_jK2e-8tFLG-YMC0R8.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Martel",
      "variants": [
        "200",
        "300",
        "regular",
        "600",
        "700",
        "800",
        "900"
      ],
      "subsets": [
        "devanagari",
        "latin",
        "latin-ext"
      ],
      "version": "v5",
      "lastModified": "2020-09-02",
      "files": {
        "200": "http://fonts.gstatic.com/s/martel/v5/PN_yRfK9oXHga0XVqekahRbX9vnDzw.ttf",
        "300": "http://fonts.gstatic.com/s/martel/v5/PN_yRfK9oXHga0XVzeoahRbX9vnDzw.ttf",
        "regular": "http://fonts.gstatic.com/s/martel/v5/PN_xRfK9oXHga0XtYcI-jT3L_w.ttf",
        "600": "http://fonts.gstatic.com/s/martel/v5/PN_yRfK9oXHga0XVuewahRbX9vnDzw.ttf",
        "700": "http://fonts.gstatic.com/s/martel/v5/PN_yRfK9oXHga0XV3e0ahRbX9vnDzw.ttf",
        "800": "http://fonts.gstatic.com/s/martel/v5/PN_yRfK9oXHga0XVwe4ahRbX9vnDzw.ttf",
        "900": "http://fonts.gstatic.com/s/martel/v5/PN_yRfK9oXHga0XV5e8ahRbX9vnDzw.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Martel Sans",
      "variants": [
        "200",
        "300",
        "regular",
        "600",
        "700",
        "800",
        "900"
      ],
      "subsets": [
        "devanagari",
        "latin",
        "latin-ext"
      ],
      "version": "v7",
      "lastModified": "2020-09-02",
      "files": {
        "200": "http://fonts.gstatic.com/s/martelsans/v7/h0GxssGi7VdzDgKjM-4d8hAX5suHFUknqMxQ.ttf",
        "300": "http://fonts.gstatic.com/s/martelsans/v7/h0GxssGi7VdzDgKjM-4d8hBz5cuHFUknqMxQ.ttf",
        "regular": "http://fonts.gstatic.com/s/martelsans/v7/h0GsssGi7VdzDgKjM-4d8ijfze-PPlUu.ttf",
        "600": "http://fonts.gstatic.com/s/martelsans/v7/h0GxssGi7VdzDgKjM-4d8hAH48uHFUknqMxQ.ttf",
        "700": "http://fonts.gstatic.com/s/martelsans/v7/h0GxssGi7VdzDgKjM-4d8hBj4suHFUknqMxQ.ttf",
        "800": "http://fonts.gstatic.com/s/martelsans/v7/h0GxssGi7VdzDgKjM-4d8hB_4cuHFUknqMxQ.ttf",
        "900": "http://fonts.gstatic.com/s/martelsans/v7/h0GxssGi7VdzDgKjM-4d8hBb4MuHFUknqMxQ.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Marvel",
      "variants": [
        "regular",
        "italic",
        "700",
        "700italic"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v10",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/marvel/v10/nwpVtKeoNgBV0qaIkV7ED366zg.ttf",
        "italic": "http://fonts.gstatic.com/s/marvel/v10/nwpXtKeoNgBV0qa4k1TALXuqzhA7.ttf",
        "700": "http://fonts.gstatic.com/s/marvel/v10/nwpWtKeoNgBV0qawLXHgB1WmxwkiYQ.ttf",
        "700italic": "http://fonts.gstatic.com/s/marvel/v10/nwpQtKeoNgBV0qa4k2x8Al-i5QwyYdrc.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Mate",
      "variants": [
        "regular",
        "italic"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v9",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/mate/v9/m8JdjftRd7WZ2z28WoXSaLU.ttf",
        "italic": "http://fonts.gstatic.com/s/mate/v9/m8JTjftRd7WZ6z-2XqfXeLVdbw.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Mate SC",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v9",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/matesc/v9/-nF8OGQ1-uoVr2wKyiXZ95OkJwA.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Maven Pro",
      "variants": [
        "regular",
        "500",
        "600",
        "700",
        "800",
        "900"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v22",
      "lastModified": "2021-01-30",
      "files": {
        "regular": "http://fonts.gstatic.com/s/mavenpro/v22/7Auup_AqnyWWAxW2Wk3swUz56MS91Eww8SX25nCpozp5GvU.ttf",
        "500": "http://fonts.gstatic.com/s/mavenpro/v22/7Auup_AqnyWWAxW2Wk3swUz56MS91Eww8Rf25nCpozp5GvU.ttf",
        "600": "http://fonts.gstatic.com/s/mavenpro/v22/7Auup_AqnyWWAxW2Wk3swUz56MS91Eww8fvx5nCpozp5GvU.ttf",
        "700": "http://fonts.gstatic.com/s/mavenpro/v22/7Auup_AqnyWWAxW2Wk3swUz56MS91Eww8cLx5nCpozp5GvU.ttf",
        "800": "http://fonts.gstatic.com/s/mavenpro/v22/7Auup_AqnyWWAxW2Wk3swUz56MS91Eww8aXx5nCpozp5GvU.ttf",
        "900": "http://fonts.gstatic.com/s/mavenpro/v22/7Auup_AqnyWWAxW2Wk3swUz56MS91Eww8Yzx5nCpozp5GvU.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "McLaren",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v8",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/mclaren/v8/2EbnL-ZuAXFqZFXISYYf8z2Yt_c.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Meddon",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v13",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/meddon/v13/kmK8ZqA2EgDNeHTZhBdB3y_Aow.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "MedievalSharp",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v12",
      "lastModified": "2020-07-15",
      "files": {
        "regular": "http://fonts.gstatic.com/s/medievalsharp/v12/EvOJzAlL3oU5AQl2mP5KdgptAq96MwvXLDk.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Medula One",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v10",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/medulaone/v10/YA9Wr0qb5kjJM6l2V0yukiEqs7GtlvY.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Meera Inimai",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "tamil"
      ],
      "version": "v5",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/meerainimai/v5/845fNMM5EIqOW5MPuvO3ILep_2jDVevnLQ.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Megrim",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v11",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/megrim/v11/46kulbz5WjvLqJZlbWXgd0RY1g.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Meie Script",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v8",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/meiescript/v8/_LOImzDK7erRjhunIspaMjxn5IXg0WDz.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Merienda",
      "variants": [
        "regular",
        "700"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v9",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/merienda/v9/gNMHW3x8Qoy5_mf8uVMCOou6_dvg.ttf",
        "700": "http://fonts.gstatic.com/s/merienda/v9/gNMAW3x8Qoy5_mf8uWu-Fa-y1sfpPES4.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Merienda One",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v11",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/meriendaone/v11/H4cgBXaMndbflEq6kyZ1ht6YgoyyYzFzFw.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Merriweather",
      "variants": [
        "300",
        "300italic",
        "regular",
        "italic",
        "700",
        "700italic",
        "900",
        "900italic"
      ],
      "subsets": [
        "cyrillic",
        "cyrillic-ext",
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v22",
      "lastModified": "2020-09-10",
      "files": {
        "300": "http://fonts.gstatic.com/s/merriweather/v22/u-4n0qyriQwlOrhSvowK_l521wRpX837pvjxPA.ttf",
        "300italic": "http://fonts.gstatic.com/s/merriweather/v22/u-4l0qyriQwlOrhSvowK_l5-eR7lXcf_hP3hPGWH.ttf",
        "regular": "http://fonts.gstatic.com/s/merriweather/v22/u-440qyriQwlOrhSvowK_l5OeyxNV-bnrw.ttf",
        "italic": "http://fonts.gstatic.com/s/merriweather/v22/u-4m0qyriQwlOrhSvowK_l5-eSZJdeP3r-Ho.ttf",
        "700": "http://fonts.gstatic.com/s/merriweather/v22/u-4n0qyriQwlOrhSvowK_l52xwNpX837pvjxPA.ttf",
        "700italic": "http://fonts.gstatic.com/s/merriweather/v22/u-4l0qyriQwlOrhSvowK_l5-eR71Wsf_hP3hPGWH.ttf",
        "900": "http://fonts.gstatic.com/s/merriweather/v22/u-4n0qyriQwlOrhSvowK_l52_wFpX837pvjxPA.ttf",
        "900italic": "http://fonts.gstatic.com/s/merriweather/v22/u-4l0qyriQwlOrhSvowK_l5-eR7NWMf_hP3hPGWH.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Merriweather Sans",
      "variants": [
        "300",
        "regular",
        "500",
        "600",
        "700",
        "800",
        "300italic",
        "italic",
        "500italic",
        "600italic",
        "700italic",
        "800italic"
      ],
      "subsets": [
        "cyrillic-ext",
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v14",
      "lastModified": "2021-01-30",
      "files": {
        "300": "http://fonts.gstatic.com/s/merriweathersans/v14/2-cO9IRs1JiJN1FRAMjTN5zd9vgsFF_5asQTb6hZ2JKZ_O4ljuEG7xFHnQ.ttf",
        "regular": "http://fonts.gstatic.com/s/merriweathersans/v14/2-cO9IRs1JiJN1FRAMjTN5zd9vgsFF_5asQTb6hZ2JKZou4ljuEG7xFHnQ.ttf",
        "500": "http://fonts.gstatic.com/s/merriweathersans/v14/2-cO9IRs1JiJN1FRAMjTN5zd9vgsFF_5asQTb6hZ2JKZkO4ljuEG7xFHnQ.ttf",
        "600": "http://fonts.gstatic.com/s/merriweathersans/v14/2-cO9IRs1JiJN1FRAMjTN5zd9vgsFF_5asQTb6hZ2JKZfOkljuEG7xFHnQ.ttf",
        "700": "http://fonts.gstatic.com/s/merriweathersans/v14/2-cO9IRs1JiJN1FRAMjTN5zd9vgsFF_5asQTb6hZ2JKZRekljuEG7xFHnQ.ttf",
        "800": "http://fonts.gstatic.com/s/merriweathersans/v14/2-cO9IRs1JiJN1FRAMjTN5zd9vgsFF_5asQTb6hZ2JKZIukljuEG7xFHnQ.ttf",
        "300italic": "http://fonts.gstatic.com/s/merriweathersans/v14/2-cM9IRs1JiJN1FRAMjTN5zd9vgsFHXwWDvLBsPDdpWMaq2TzesCzRRXnaur.ttf",
        "italic": "http://fonts.gstatic.com/s/merriweathersans/v14/2-cM9IRs1JiJN1FRAMjTN5zd9vgsFHXwWDvLBsPDdpWMaq3NzesCzRRXnaur.ttf",
        "500italic": "http://fonts.gstatic.com/s/merriweathersans/v14/2-cM9IRs1JiJN1FRAMjTN5zd9vgsFHXwWDvLBsPDdpWMaq3_zesCzRRXnaur.ttf",
        "600italic": "http://fonts.gstatic.com/s/merriweathersans/v14/2-cM9IRs1JiJN1FRAMjTN5zd9vgsFHXwWDvLBsPDdpWMaq0TyusCzRRXnaur.ttf",
        "700italic": "http://fonts.gstatic.com/s/merriweathersans/v14/2-cM9IRs1JiJN1FRAMjTN5zd9vgsFHXwWDvLBsPDdpWMaq0qyusCzRRXnaur.ttf",
        "800italic": "http://fonts.gstatic.com/s/merriweathersans/v14/2-cM9IRs1JiJN1FRAMjTN5zd9vgsFHXwWDvLBsPDdpWMaq1NyusCzRRXnaur.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Metal",
      "variants": [
        "regular"
      ],
      "subsets": [
        "khmer"
      ],
      "version": "v13",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/metal/v13/lW-wwjUJIXTo7i3nnoQAUdN2.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Metal Mania",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v10",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/metalmania/v10/RWmMoKWb4e8kqMfBUdPFJeXCg6UKDXlq.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Metamorphous",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v11",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/metamorphous/v11/Wnz8HA03aAXcC39ZEX5y1330PCCthTsmaQ.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Metrophobic",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v14",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/metrophobic/v14/sJoA3LZUhMSAPV_u0qwiAT-J737FPEEL.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Michroma",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v11",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/michroma/v11/PN_zRfy9qWD8fEagAMg6rzjb_-Da.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Milonga",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v8",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/milonga/v8/SZc53FHnIaK9W5kffz3GkUrS8DI.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Miltonian",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v14",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/miltonian/v14/zOL-4pbPn6Ne9JqTg9mr6e5As-FeiQ.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Miltonian Tattoo",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v16",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/miltoniantattoo/v16/EvOUzBRL0o0kCxF-lcMCQxlpVsA_FwP8MDBku-s.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Mina",
      "variants": [
        "regular",
        "700"
      ],
      "subsets": [
        "bengali",
        "latin",
        "latin-ext"
      ],
      "version": "v4",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/mina/v4/-nFzOGc18vARrz9j7i3y65o.ttf",
        "700": "http://fonts.gstatic.com/s/mina/v4/-nF8OGc18vARl4NMyiXZ95OkJwA.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Miniver",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v9",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/miniver/v9/eLGcP-PxIg-5H0vC770Cy8r8fWA.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Miriam Libre",
      "variants": [
        "regular",
        "700"
      ],
      "subsets": [
        "hebrew",
        "latin",
        "latin-ext"
      ],
      "version": "v7",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/miriamlibre/v7/DdTh798HsHwubBAqfkcBTL_vYJn_Teun9g.ttf",
        "700": "http://fonts.gstatic.com/s/miriamlibre/v7/DdT-798HsHwubBAqfkcBTL_X3LbbRcC7_-Z7Hg.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Mirza",
      "variants": [
        "regular",
        "500",
        "600",
        "700"
      ],
      "subsets": [
        "arabic",
        "latin",
        "latin-ext"
      ],
      "version": "v9",
      "lastModified": "2020-09-25",
      "files": {
        "regular": "http://fonts.gstatic.com/s/mirza/v9/co3ImWlikiN5EurdKMewsrvI.ttf",
        "500": "http://fonts.gstatic.com/s/mirza/v9/co3FmWlikiN5EtIpAeO4mafBomDi.ttf",
        "600": "http://fonts.gstatic.com/s/mirza/v9/co3FmWlikiN5EtIFBuO4mafBomDi.ttf",
        "700": "http://fonts.gstatic.com/s/mirza/v9/co3FmWlikiN5EtJhB-O4mafBomDi.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Miss Fajardose",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v10",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/missfajardose/v10/E21-_dn5gvrawDdPFVl-N0Ajb8qvWPaJq4no.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Mitr",
      "variants": [
        "200",
        "300",
        "regular",
        "500",
        "600",
        "700"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "thai",
        "vietnamese"
      ],
      "version": "v5",
      "lastModified": "2019-07-16",
      "files": {
        "200": "http://fonts.gstatic.com/s/mitr/v5/pxiEypw5ucZF8fMZFJDUc1NECPY.ttf",
        "300": "http://fonts.gstatic.com/s/mitr/v5/pxiEypw5ucZF8ZcaFJDUc1NECPY.ttf",
        "regular": "http://fonts.gstatic.com/s/mitr/v5/pxiLypw5ucZFyTsyMJj_b1o.ttf",
        "500": "http://fonts.gstatic.com/s/mitr/v5/pxiEypw5ucZF8c8bFJDUc1NECPY.ttf",
        "600": "http://fonts.gstatic.com/s/mitr/v5/pxiEypw5ucZF8eMcFJDUc1NECPY.ttf",
        "700": "http://fonts.gstatic.com/s/mitr/v5/pxiEypw5ucZF8YcdFJDUc1NECPY.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Modak",
      "variants": [
        "regular"
      ],
      "subsets": [
        "devanagari",
        "latin",
        "latin-ext"
      ],
      "version": "v5",
      "lastModified": "2019-07-16",
      "files": {
        "regular": "http://fonts.gstatic.com/s/modak/v5/EJRYQgs1XtIEsnMH8BVZ76KU.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Modern Antiqua",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v10",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/modernantiqua/v10/NGStv5TIAUg6Iq_RLNo_2dp1sI1Ea2u0c3Gi.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Mogra",
      "variants": [
        "regular"
      ],
      "subsets": [
        "gujarati",
        "latin",
        "latin-ext"
      ],
      "version": "v7",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/mogra/v7/f0X40eSs8c95TBo4DvLmxtnG.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Molengo",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v11",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/molengo/v11/I_uuMpWeuBzZNBtQbbRQkiCvs5Y.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Molle",
      "variants": [
        "italic"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v9",
      "lastModified": "2020-07-23",
      "files": {
        "italic": "http://fonts.gstatic.com/s/molle/v9/E21n_dL5hOXFhWEsXzgmVydREus.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Monda",
      "variants": [
        "regular",
        "700"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v10",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/monda/v10/TK3tWkYFABsmjvpmNBsLvPdG.ttf",
        "700": "http://fonts.gstatic.com/s/monda/v10/TK3gWkYFABsmjsLaGz8Dl-tPKo2t.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Monofett",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v10",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/monofett/v10/mFTyWbofw6zc9NtnW43SuRwr0VJ7.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Monoton",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v10",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/monoton/v10/5h1aiZUrOngCibe4fkbBQ2S7FU8.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Monsieur La Doulaise",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v9",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/monsieurladoulaise/v9/_Xmz-GY4rjmCbQfc-aPRaa4pqV340p7EZl5ewkEU4HTy.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Montaga",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v8",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/montaga/v8/H4cnBX2Ml8rCkEO_0gYQ7LO5mqc.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Montez",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v11",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/montez/v11/845ZNMk5GoGIX8lm1LDeSd-R_g.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Montserrat",
      "variants": [
        "100",
        "100italic",
        "200",
        "200italic",
        "300",
        "300italic",
        "regular",
        "italic",
        "500",
        "500italic",
        "600",
        "600italic",
        "700",
        "700italic",
        "800",
        "800italic",
        "900",
        "900italic"
      ],
      "subsets": [
        "cyrillic",
        "cyrillic-ext",
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v15",
      "lastModified": "2020-09-15",
      "files": {
        "100": "http://fonts.gstatic.com/s/montserrat/v15/JTUQjIg1_i6t8kCHKm45_QphziTn89dtpQ.ttf",
        "100italic": "http://fonts.gstatic.com/s/montserrat/v15/JTUOjIg1_i6t8kCHKm459WxZqi7j0dJ9pTOi.ttf",
        "200": "http://fonts.gstatic.com/s/montserrat/v15/JTURjIg1_i6t8kCHKm45_aZA7g7J_950vCo.ttf",
        "200italic": "http://fonts.gstatic.com/s/montserrat/v15/JTUPjIg1_i6t8kCHKm459WxZBg_D-_xxrCq7qg.ttf",
        "300": "http://fonts.gstatic.com/s/montserrat/v15/JTURjIg1_i6t8kCHKm45_cJD7g7J_950vCo.ttf",
        "300italic": "http://fonts.gstatic.com/s/montserrat/v15/JTUPjIg1_i6t8kCHKm459WxZYgzD-_xxrCq7qg.ttf",
        "regular": "http://fonts.gstatic.com/s/montserrat/v15/JTUSjIg1_i6t8kCHKm45xW5rygbi49c.ttf",
        "italic": "http://fonts.gstatic.com/s/montserrat/v15/JTUQjIg1_i6t8kCHKm459WxhziTn89dtpQ.ttf",
        "500": "http://fonts.gstatic.com/s/montserrat/v15/JTURjIg1_i6t8kCHKm45_ZpC7g7J_950vCo.ttf",
        "500italic": "http://fonts.gstatic.com/s/montserrat/v15/JTUPjIg1_i6t8kCHKm459WxZOg3D-_xxrCq7qg.ttf",
        "600": "http://fonts.gstatic.com/s/montserrat/v15/JTURjIg1_i6t8kCHKm45_bZF7g7J_950vCo.ttf",
        "600italic": "http://fonts.gstatic.com/s/montserrat/v15/JTUPjIg1_i6t8kCHKm459WxZFgrD-_xxrCq7qg.ttf",
        "700": "http://fonts.gstatic.com/s/montserrat/v15/JTURjIg1_i6t8kCHKm45_dJE7g7J_950vCo.ttf",
        "700italic": "http://fonts.gstatic.com/s/montserrat/v15/JTUPjIg1_i6t8kCHKm459WxZcgvD-_xxrCq7qg.ttf",
        "800": "http://fonts.gstatic.com/s/montserrat/v15/JTURjIg1_i6t8kCHKm45_c5H7g7J_950vCo.ttf",
        "800italic": "http://fonts.gstatic.com/s/montserrat/v15/JTUPjIg1_i6t8kCHKm459WxZbgjD-_xxrCq7qg.ttf",
        "900": "http://fonts.gstatic.com/s/montserrat/v15/JTURjIg1_i6t8kCHKm45_epG7g7J_950vCo.ttf",
        "900italic": "http://fonts.gstatic.com/s/montserrat/v15/JTUPjIg1_i6t8kCHKm459WxZSgnD-_xxrCq7qg.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Montserrat Alternates",
      "variants": [
        "100",
        "100italic",
        "200",
        "200italic",
        "300",
        "300italic",
        "regular",
        "italic",
        "500",
        "500italic",
        "600",
        "600italic",
        "700",
        "700italic",
        "800",
        "800italic",
        "900",
        "900italic"
      ],
      "subsets": [
        "cyrillic",
        "cyrillic-ext",
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v12",
      "lastModified": "2020-09-02",
      "files": {
        "100": "http://fonts.gstatic.com/s/montserratalternates/v12/mFThWacfw6zH4dthXcyms1lPpC8I_b0juU0xiKfVKphL03l4.ttf",
        "100italic": "http://fonts.gstatic.com/s/montserratalternates/v12/mFTjWacfw6zH4dthXcyms1lPpC8I_b0juU057p-xIJxp1ml4imo.ttf",
        "200": "http://fonts.gstatic.com/s/montserratalternates/v12/mFTiWacfw6zH4dthXcyms1lPpC8I_b0juU0xJIb1ALZH2mBhkw.ttf",
        "200italic": "http://fonts.gstatic.com/s/montserratalternates/v12/mFTkWacfw6zH4dthXcyms1lPpC8I_b0juU057p8dAbxD-GVxk3Nd.ttf",
        "300": "http://fonts.gstatic.com/s/montserratalternates/v12/mFTiWacfw6zH4dthXcyms1lPpC8I_b0juU0xQIX1ALZH2mBhkw.ttf",
        "300italic": "http://fonts.gstatic.com/s/montserratalternates/v12/mFTkWacfw6zH4dthXcyms1lPpC8I_b0juU057p95ArxD-GVxk3Nd.ttf",
        "regular": "http://fonts.gstatic.com/s/montserratalternates/v12/mFTvWacfw6zH4dthXcyms1lPpC8I_b0juU0J7K3RCJ1b0w.ttf",
        "italic": "http://fonts.gstatic.com/s/montserratalternates/v12/mFThWacfw6zH4dthXcyms1lPpC8I_b0juU057qfVKphL03l4.ttf",
        "500": "http://fonts.gstatic.com/s/montserratalternates/v12/mFTiWacfw6zH4dthXcyms1lPpC8I_b0juU0xGIT1ALZH2mBhkw.ttf",
        "500italic": "http://fonts.gstatic.com/s/montserratalternates/v12/mFTkWacfw6zH4dthXcyms1lPpC8I_b0juU057p8hA7xD-GVxk3Nd.ttf",
        "600": "http://fonts.gstatic.com/s/montserratalternates/v12/mFTiWacfw6zH4dthXcyms1lPpC8I_b0juU0xNIP1ALZH2mBhkw.ttf",
        "600italic": "http://fonts.gstatic.com/s/montserratalternates/v12/mFTkWacfw6zH4dthXcyms1lPpC8I_b0juU057p8NBLxD-GVxk3Nd.ttf",
        "700": "http://fonts.gstatic.com/s/montserratalternates/v12/mFTiWacfw6zH4dthXcyms1lPpC8I_b0juU0xUIL1ALZH2mBhkw.ttf",
        "700italic": "http://fonts.gstatic.com/s/montserratalternates/v12/mFTkWacfw6zH4dthXcyms1lPpC8I_b0juU057p9pBbxD-GVxk3Nd.ttf",
        "800": "http://fonts.gstatic.com/s/montserratalternates/v12/mFTiWacfw6zH4dthXcyms1lPpC8I_b0juU0xTIH1ALZH2mBhkw.ttf",
        "800italic": "http://fonts.gstatic.com/s/montserratalternates/v12/mFTkWacfw6zH4dthXcyms1lPpC8I_b0juU057p91BrxD-GVxk3Nd.ttf",
        "900": "http://fonts.gstatic.com/s/montserratalternates/v12/mFTiWacfw6zH4dthXcyms1lPpC8I_b0juU0xaID1ALZH2mBhkw.ttf",
        "900italic": "http://fonts.gstatic.com/s/montserratalternates/v12/mFTkWacfw6zH4dthXcyms1lPpC8I_b0juU057p9RB7xD-GVxk3Nd.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Montserrat Subrayada",
      "variants": [
        "regular",
        "700"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v10",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/montserratsubrayada/v10/U9MD6c-o9H7PgjlTHThBnNHGVUORwteQQE8LYuceqGT-.ttf",
        "700": "http://fonts.gstatic.com/s/montserratsubrayada/v10/U9MM6c-o9H7PgjlTHThBnNHGVUORwteQQHe3TcMWg3j36Ebz.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Moul",
      "variants": [
        "regular"
      ],
      "subsets": [
        "khmer"
      ],
      "version": "v12",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/moul/v12/nuF2D__FSo_3E-RYiJCy-00.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Moulpali",
      "variants": [
        "regular"
      ],
      "subsets": [
        "khmer"
      ],
      "version": "v13",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/moulpali/v13/H4ckBXKMl9HagUWymyY6wr-wg763.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Mountains of Christmas",
      "variants": [
        "regular",
        "700"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v13",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/mountainsofchristmas/v13/3y9w6a4zcCnn5X0FDyrKi2ZRUBIy8uxoUo7ePNamMPNpJpc.ttf",
        "700": "http://fonts.gstatic.com/s/mountainsofchristmas/v13/3y9z6a4zcCnn5X0FDyrKi2ZRUBIy8uxoUo7eBGqJFPtCOp6IaEA.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Mouse Memoirs",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v8",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/mousememoirs/v8/t5tmIRoSNJ-PH0WNNgDYxdSb7TnFrpOHYh4.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Mr Bedfort",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v9",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/mrbedfort/v9/MQpR-WCtNZSWAdTMwBicliq0XZe_Iy8.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Mr Dafoe",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v9",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/mrdafoe/v9/lJwE-pIzkS5NXuMMrGiqg7MCxz_C.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Mr De Haviland",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v9",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/mrdehaviland/v9/OpNVnooIhJj96FdB73296ksbOj3C4ULVNTlB.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Mrs Saint Delafield",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v8",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/mrssaintdelafield/v8/v6-IGZDIOVXH9xtmTZfRagunqBw5WC62cK4tLsubB2w.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Mrs Sheppards",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v9",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/mrssheppards/v9/PN_2Rfm9snC0XUGoEZhb91ig3vjxynMix4Y.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Mukta",
      "variants": [
        "200",
        "300",
        "regular",
        "500",
        "600",
        "700",
        "800"
      ],
      "subsets": [
        "devanagari",
        "latin",
        "latin-ext"
      ],
      "version": "v7",
      "lastModified": "2019-07-17",
      "files": {
        "200": "http://fonts.gstatic.com/s/mukta/v7/iJWHBXyXfDDVXbEOjFma-2HW7ZB_.ttf",
        "300": "http://fonts.gstatic.com/s/mukta/v7/iJWHBXyXfDDVXbFqj1ma-2HW7ZB_.ttf",
        "regular": "http://fonts.gstatic.com/s/mukta/v7/iJWKBXyXfDDVXYnGp32S0H3f.ttf",
        "500": "http://fonts.gstatic.com/s/mukta/v7/iJWHBXyXfDDVXbEyjlma-2HW7ZB_.ttf",
        "600": "http://fonts.gstatic.com/s/mukta/v7/iJWHBXyXfDDVXbEeiVma-2HW7ZB_.ttf",
        "700": "http://fonts.gstatic.com/s/mukta/v7/iJWHBXyXfDDVXbF6iFma-2HW7ZB_.ttf",
        "800": "http://fonts.gstatic.com/s/mukta/v7/iJWHBXyXfDDVXbFmi1ma-2HW7ZB_.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Mukta Mahee",
      "variants": [
        "200",
        "300",
        "regular",
        "500",
        "600",
        "700",
        "800"
      ],
      "subsets": [
        "gurmukhi",
        "latin",
        "latin-ext"
      ],
      "version": "v7",
      "lastModified": "2020-09-25",
      "files": {
        "200": "http://fonts.gstatic.com/s/muktamahee/v7/XRXN3IOIi0hcP8iVU67hA9MFcBoHJndqZCsW.ttf",
        "300": "http://fonts.gstatic.com/s/muktamahee/v7/XRXN3IOIi0hcP8iVU67hA9NhcxoHJndqZCsW.ttf",
        "regular": "http://fonts.gstatic.com/s/muktamahee/v7/XRXQ3IOIi0hcP8iVU67hA-vNWz4PDWtj.ttf",
        "500": "http://fonts.gstatic.com/s/muktamahee/v7/XRXN3IOIi0hcP8iVU67hA9M5choHJndqZCsW.ttf",
        "600": "http://fonts.gstatic.com/s/muktamahee/v7/XRXN3IOIi0hcP8iVU67hA9MVdRoHJndqZCsW.ttf",
        "700": "http://fonts.gstatic.com/s/muktamahee/v7/XRXN3IOIi0hcP8iVU67hA9NxdBoHJndqZCsW.ttf",
        "800": "http://fonts.gstatic.com/s/muktamahee/v7/XRXN3IOIi0hcP8iVU67hA9NtdxoHJndqZCsW.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Mukta Malar",
      "variants": [
        "200",
        "300",
        "regular",
        "500",
        "600",
        "700",
        "800"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "tamil"
      ],
      "version": "v7",
      "lastModified": "2020-09-02",
      "files": {
        "200": "http://fonts.gstatic.com/s/muktamalar/v7/MCoKzAXyz8LOE2FpJMxZqIMwBtAB62ruoAZW.ttf",
        "300": "http://fonts.gstatic.com/s/muktamalar/v7/MCoKzAXyz8LOE2FpJMxZqINUBdAB62ruoAZW.ttf",
        "regular": "http://fonts.gstatic.com/s/muktamalar/v7/MCoXzAXyz8LOE2FpJMxZqLv4LfQJwHbn.ttf",
        "500": "http://fonts.gstatic.com/s/muktamalar/v7/MCoKzAXyz8LOE2FpJMxZqIMMBNAB62ruoAZW.ttf",
        "600": "http://fonts.gstatic.com/s/muktamalar/v7/MCoKzAXyz8LOE2FpJMxZqIMgA9AB62ruoAZW.ttf",
        "700": "http://fonts.gstatic.com/s/muktamalar/v7/MCoKzAXyz8LOE2FpJMxZqINEAtAB62ruoAZW.ttf",
        "800": "http://fonts.gstatic.com/s/muktamalar/v7/MCoKzAXyz8LOE2FpJMxZqINYAdAB62ruoAZW.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Mukta Vaani",
      "variants": [
        "200",
        "300",
        "regular",
        "500",
        "600",
        "700",
        "800"
      ],
      "subsets": [
        "gujarati",
        "latin",
        "latin-ext"
      ],
      "version": "v7",
      "lastModified": "2019-07-16",
      "files": {
        "200": "http://fonts.gstatic.com/s/muktavaani/v7/3JnkSD_-ynaxmxnEfVHPIGXNV8BD-u97MW1a.ttf",
        "300": "http://fonts.gstatic.com/s/muktavaani/v7/3JnkSD_-ynaxmxnEfVHPIGWpVMBD-u97MW1a.ttf",
        "regular": "http://fonts.gstatic.com/s/muktavaani/v7/3Jn5SD_-ynaxmxnEfVHPIF0FfORL0fNy.ttf",
        "500": "http://fonts.gstatic.com/s/muktavaani/v7/3JnkSD_-ynaxmxnEfVHPIGXxVcBD-u97MW1a.ttf",
        "600": "http://fonts.gstatic.com/s/muktavaani/v7/3JnkSD_-ynaxmxnEfVHPIGXdUsBD-u97MW1a.ttf",
        "700": "http://fonts.gstatic.com/s/muktavaani/v7/3JnkSD_-ynaxmxnEfVHPIGW5U8BD-u97MW1a.ttf",
        "800": "http://fonts.gstatic.com/s/muktavaani/v7/3JnkSD_-ynaxmxnEfVHPIGWlUMBD-u97MW1a.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Mulish",
      "variants": [
        "200",
        "300",
        "regular",
        "500",
        "600",
        "700",
        "800",
        "900",
        "200italic",
        "300italic",
        "italic",
        "500italic",
        "600italic",
        "700italic",
        "800italic",
        "900italic"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v3",
      "lastModified": "2021-01-21",
      "files": {
        "200": "http://fonts.gstatic.com/s/mulish/v3/1Ptyg83HX_SGhgqO0yLcmjzUAuWexRNRwaClGrw-PTY.ttf",
        "300": "http://fonts.gstatic.com/s/mulish/v3/1Ptyg83HX_SGhgqO0yLcmjzUAuWexc1RwaClGrw-PTY.ttf",
        "regular": "http://fonts.gstatic.com/s/mulish/v3/1Ptyg83HX_SGhgqO0yLcmjzUAuWexZNRwaClGrw-PTY.ttf",
        "500": "http://fonts.gstatic.com/s/mulish/v3/1Ptyg83HX_SGhgqO0yLcmjzUAuWexaFRwaClGrw-PTY.ttf",
        "600": "http://fonts.gstatic.com/s/mulish/v3/1Ptyg83HX_SGhgqO0yLcmjzUAuWexU1WwaClGrw-PTY.ttf",
        "700": "http://fonts.gstatic.com/s/mulish/v3/1Ptyg83HX_SGhgqO0yLcmjzUAuWexXRWwaClGrw-PTY.ttf",
        "800": "http://fonts.gstatic.com/s/mulish/v3/1Ptyg83HX_SGhgqO0yLcmjzUAuWexRNWwaClGrw-PTY.ttf",
        "900": "http://fonts.gstatic.com/s/mulish/v3/1Ptyg83HX_SGhgqO0yLcmjzUAuWexTpWwaClGrw-PTY.ttf",
        "200italic": "http://fonts.gstatic.com/s/mulish/v3/1Ptwg83HX_SGhgqk2hAjQlW_mEuZ0FsSqeOvHp47LTZFwA.ttf",
        "300italic": "http://fonts.gstatic.com/s/mulish/v3/1Ptwg83HX_SGhgqk2hAjQlW_mEuZ0FsSd-OvHp47LTZFwA.ttf",
        "italic": "http://fonts.gstatic.com/s/mulish/v3/1Ptwg83HX_SGhgqk2hAjQlW_mEuZ0FsSKeOvHp47LTZFwA.ttf",
        "500italic": "http://fonts.gstatic.com/s/mulish/v3/1Ptwg83HX_SGhgqk2hAjQlW_mEuZ0FsSG-OvHp47LTZFwA.ttf",
        "600italic": "http://fonts.gstatic.com/s/mulish/v3/1Ptwg83HX_SGhgqk2hAjQlW_mEuZ0FsS9-SvHp47LTZFwA.ttf",
        "700italic": "http://fonts.gstatic.com/s/mulish/v3/1Ptwg83HX_SGhgqk2hAjQlW_mEuZ0FsSzuSvHp47LTZFwA.ttf",
        "800italic": "http://fonts.gstatic.com/s/mulish/v3/1Ptwg83HX_SGhgqk2hAjQlW_mEuZ0FsSqeSvHp47LTZFwA.ttf",
        "900italic": "http://fonts.gstatic.com/s/mulish/v3/1Ptwg83HX_SGhgqk2hAjQlW_mEuZ0FsSgOSvHp47LTZFwA.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "MuseoModerno",
      "variants": [
        "100",
        "200",
        "300",
        "regular",
        "500",
        "600",
        "700",
        "800",
        "900"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v4",
      "lastModified": "2021-01-21",
      "files": {
        "100": "http://fonts.gstatic.com/s/museomoderno/v4/zrf30HnU0_7wWdMrFcWqSEXPVyEaWJ55pTleMlZFuewajeKlCdo.ttf",
        "200": "http://fonts.gstatic.com/s/museomoderno/v4/zrf30HnU0_7wWdMrFcWqSEXPVyEaWJ55pTleMtZEuewajeKlCdo.ttf",
        "300": "http://fonts.gstatic.com/s/museomoderno/v4/zrf30HnU0_7wWdMrFcWqSEXPVyEaWJ55pTleMghEuewajeKlCdo.ttf",
        "regular": "http://fonts.gstatic.com/s/museomoderno/v4/zrf30HnU0_7wWdMrFcWqSEXPVyEaWJ55pTleMlZEuewajeKlCdo.ttf",
        "500": "http://fonts.gstatic.com/s/museomoderno/v4/zrf30HnU0_7wWdMrFcWqSEXPVyEaWJ55pTleMmREuewajeKlCdo.ttf",
        "600": "http://fonts.gstatic.com/s/museomoderno/v4/zrf30HnU0_7wWdMrFcWqSEXPVyEaWJ55pTleMohDuewajeKlCdo.ttf",
        "700": "http://fonts.gstatic.com/s/museomoderno/v4/zrf30HnU0_7wWdMrFcWqSEXPVyEaWJ55pTleMrFDuewajeKlCdo.ttf",
        "800": "http://fonts.gstatic.com/s/museomoderno/v4/zrf30HnU0_7wWdMrFcWqSEXPVyEaWJ55pTleMtZDuewajeKlCdo.ttf",
        "900": "http://fonts.gstatic.com/s/museomoderno/v4/zrf30HnU0_7wWdMrFcWqSEXPVyEaWJ55pTleMv9DuewajeKlCdo.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Mystery Quest",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v8",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/mysteryquest/v8/-nF6OG414u0E6k0wynSGlujRHwElD_9Qz9E.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "NTR",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "telugu"
      ],
      "version": "v9",
      "lastModified": "2020-09-25",
      "files": {
        "regular": "http://fonts.gstatic.com/s/ntr/v9/RLpzK5Xy0ZjiGGhs5TA4bg.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Nanum Brush Script",
      "variants": [
        "regular"
      ],
      "subsets": [
        "korean",
        "latin"
      ],
      "version": "v17",
      "lastModified": "2019-07-16",
      "files": {
        "regular": "http://fonts.gstatic.com/s/nanumbrushscript/v17/wXK2E2wfpokopxzthSqPbcR5_gVaxazyjqBr1lO97Q.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Nanum Gothic",
      "variants": [
        "regular",
        "700",
        "800"
      ],
      "subsets": [
        "korean",
        "latin"
      ],
      "version": "v17",
      "lastModified": "2019-07-22",
      "files": {
        "regular": "http://fonts.gstatic.com/s/nanumgothic/v17/PN_3Rfi-oW3hYwmKDpxS7F_z_tLfxno73g.ttf",
        "700": "http://fonts.gstatic.com/s/nanumgothic/v17/PN_oRfi-oW3hYwmKDpxS7F_LQv37zlEn14YEUQ.ttf",
        "800": "http://fonts.gstatic.com/s/nanumgothic/v17/PN_oRfi-oW3hYwmKDpxS7F_LXv77zlEn14YEUQ.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Nanum Gothic Coding",
      "variants": [
        "regular",
        "700"
      ],
      "subsets": [
        "korean",
        "latin"
      ],
      "version": "v14",
      "lastModified": "2019-07-16",
      "files": {
        "regular": "http://fonts.gstatic.com/s/nanumgothiccoding/v14/8QIVdjzHisX_8vv59_xMxtPFW4IXROwsy6QxVs1X7tc.ttf",
        "700": "http://fonts.gstatic.com/s/nanumgothiccoding/v14/8QIYdjzHisX_8vv59_xMxtPFW4IXROws8xgecsV88t5V9r4.ttf"
      },
      "category": "monospace",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Nanum Myeongjo",
      "variants": [
        "regular",
        "700",
        "800"
      ],
      "subsets": [
        "korean",
        "latin"
      ],
      "version": "v15",
      "lastModified": "2019-07-17",
      "files": {
        "regular": "http://fonts.gstatic.com/s/nanummyeongjo/v15/9Btx3DZF0dXLMZlywRbVRNhxy1LreHQ8juyl.ttf",
        "700": "http://fonts.gstatic.com/s/nanummyeongjo/v15/9Bty3DZF0dXLMZlywRbVRNhxy2pXV1A0pfCs5Kos.ttf",
        "800": "http://fonts.gstatic.com/s/nanummyeongjo/v15/9Bty3DZF0dXLMZlywRbVRNhxy2pLVFA0pfCs5Kos.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Nanum Pen Script",
      "variants": [
        "regular"
      ],
      "subsets": [
        "korean",
        "latin"
      ],
      "version": "v15",
      "lastModified": "2019-07-16",
      "files": {
        "regular": "http://fonts.gstatic.com/s/nanumpenscript/v15/daaDSSYiLGqEal3MvdA_FOL_3FkN2z7-aMFCcTU.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Nerko One",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v2",
      "lastModified": "2021-01-21",
      "files": {
        "regular": "http://fonts.gstatic.com/s/nerkoone/v2/m8JQjfZSc7OXlB3ZMOjzcJ5BZmqa3A.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Neucha",
      "variants": [
        "regular"
      ],
      "subsets": [
        "cyrillic",
        "latin"
      ],
      "version": "v12",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/neucha/v12/q5uGsou0JOdh94bvugNsCxVEgA.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Neuton",
      "variants": [
        "200",
        "300",
        "regular",
        "italic",
        "700",
        "800"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v13",
      "lastModified": "2020-09-02",
      "files": {
        "200": "http://fonts.gstatic.com/s/neuton/v13/UMBQrPtMoH62xUZKAKkfegD5Drog6Q.ttf",
        "300": "http://fonts.gstatic.com/s/neuton/v13/UMBQrPtMoH62xUZKZKofegD5Drog6Q.ttf",
        "regular": "http://fonts.gstatic.com/s/neuton/v13/UMBTrPtMoH62xUZyyII7civlBw.ttf",
        "italic": "http://fonts.gstatic.com/s/neuton/v13/UMBRrPtMoH62xUZCyog_UC71B6M5.ttf",
        "700": "http://fonts.gstatic.com/s/neuton/v13/UMBQrPtMoH62xUZKdK0fegD5Drog6Q.ttf",
        "800": "http://fonts.gstatic.com/s/neuton/v13/UMBQrPtMoH62xUZKaK4fegD5Drog6Q.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "New Rocker",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v9",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/newrocker/v9/MwQzbhjp3-HImzcCU_cJkGMViblPtXs.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "News Cycle",
      "variants": [
        "regular",
        "700"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v17",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/newscycle/v17/CSR64z1Qlv-GDxkbKVQ_TOcATNt_pOU.ttf",
        "700": "http://fonts.gstatic.com/s/newscycle/v17/CSR54z1Qlv-GDxkbKVQ_dFsvaNNUuOwkC2s.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Niconne",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v10",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/niconne/v10/w8gaH2QvRug1_rTfrQut2F4OuOo.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Niramit",
      "variants": [
        "200",
        "200italic",
        "300",
        "300italic",
        "regular",
        "italic",
        "500",
        "500italic",
        "600",
        "600italic",
        "700",
        "700italic"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "thai",
        "vietnamese"
      ],
      "version": "v5",
      "lastModified": "2020-07-23",
      "files": {
        "200": "http://fonts.gstatic.com/s/niramit/v5/I_urMpWdvgLdNxVLVXx7tiiEr5_BdZ8.ttf",
        "200italic": "http://fonts.gstatic.com/s/niramit/v5/I_upMpWdvgLdNxVLXbZiXimOq73EZZ_f6w.ttf",
        "300": "http://fonts.gstatic.com/s/niramit/v5/I_urMpWdvgLdNxVLVRh4tiiEr5_BdZ8.ttf",
        "300italic": "http://fonts.gstatic.com/s/niramit/v5/I_upMpWdvgLdNxVLXbZiOiqOq73EZZ_f6w.ttf",
        "regular": "http://fonts.gstatic.com/s/niramit/v5/I_uuMpWdvgLdNxVLbbRQkiCvs5Y.ttf",
        "italic": "http://fonts.gstatic.com/s/niramit/v5/I_usMpWdvgLdNxVLXbZalgKqo5bYbA.ttf",
        "500": "http://fonts.gstatic.com/s/niramit/v5/I_urMpWdvgLdNxVLVUB5tiiEr5_BdZ8.ttf",
        "500italic": "http://fonts.gstatic.com/s/niramit/v5/I_upMpWdvgLdNxVLXbZiYiuOq73EZZ_f6w.ttf",
        "600": "http://fonts.gstatic.com/s/niramit/v5/I_urMpWdvgLdNxVLVWx-tiiEr5_BdZ8.ttf",
        "600italic": "http://fonts.gstatic.com/s/niramit/v5/I_upMpWdvgLdNxVLXbZiTiyOq73EZZ_f6w.ttf",
        "700": "http://fonts.gstatic.com/s/niramit/v5/I_urMpWdvgLdNxVLVQh_tiiEr5_BdZ8.ttf",
        "700italic": "http://fonts.gstatic.com/s/niramit/v5/I_upMpWdvgLdNxVLXbZiKi2Oq73EZZ_f6w.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Nixie One",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v11",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/nixieone/v11/lW-8wjkKLXjg5y2o2uUoUOFzpS-yLw.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Nobile",
      "variants": [
        "regular",
        "italic",
        "500",
        "500italic",
        "700",
        "700italic"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v12",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/nobile/v12/m8JTjflSeaOVl1i2XqfXeLVdbw.ttf",
        "italic": "http://fonts.gstatic.com/s/nobile/v12/m8JRjflSeaOVl1iGXK3TWrBNb3OD.ttf",
        "500": "http://fonts.gstatic.com/s/nobile/v12/m8JQjflSeaOVl1iOqo7zcJ5BZmqa3A.ttf",
        "500italic": "http://fonts.gstatic.com/s/nobile/v12/m8JWjflSeaOVl1iGXJUnc5RFRG-K3Mud.ttf",
        "700": "http://fonts.gstatic.com/s/nobile/v12/m8JQjflSeaOVl1iO4ojzcJ5BZmqa3A.ttf",
        "700italic": "http://fonts.gstatic.com/s/nobile/v12/m8JWjflSeaOVl1iGXJVvdZRFRG-K3Mud.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Nokora",
      "variants": [
        "regular",
        "700"
      ],
      "subsets": [
        "khmer"
      ],
      "version": "v14",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/nokora/v14/hYkIPuwgTubzaWxQOzoPovZg8Q.ttf",
        "700": "http://fonts.gstatic.com/s/nokora/v14/hYkLPuwgTubzaWxohxUrqt18-B9Uuw.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Norican",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v9",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/norican/v9/MwQ2bhXp1eSBqjkPGJJRtGs-lbA.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Nosifer",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v9",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/nosifer/v9/ZGjXol5JTp0g5bxZaC1RVDNdGDs.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Notable",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v6",
      "lastModified": "2020-09-25",
      "files": {
        "regular": "http://fonts.gstatic.com/s/notable/v6/gNMEW3N_SIqx-WX9-HMoFIez5MI.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Nothing You Could Do",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v10",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/nothingyoucoulddo/v10/oY1B8fbBpaP5OX3DtrRYf_Q2BPB1SnfZb0OJl1ol2Ymo.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Noticia Text",
      "variants": [
        "regular",
        "italic",
        "700",
        "700italic"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v10",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/noticiatext/v10/VuJ2dNDF2Yv9qppOePKYRP1GYTFZt0rNpQ.ttf",
        "italic": "http://fonts.gstatic.com/s/noticiatext/v10/VuJodNDF2Yv9qppOePKYRP12YztdlU_dpSjt.ttf",
        "700": "http://fonts.gstatic.com/s/noticiatext/v10/VuJpdNDF2Yv9qppOePKYRP1-3R59v2HRrDH0eA.ttf",
        "700italic": "http://fonts.gstatic.com/s/noticiatext/v10/VuJrdNDF2Yv9qppOePKYRP12YwPhumvVjjTkeMnz.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Noto Sans",
      "variants": [
        "regular",
        "italic",
        "700",
        "700italic"
      ],
      "subsets": [
        "cyrillic",
        "cyrillic-ext",
        "devanagari",
        "greek",
        "greek-ext",
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v11",
      "lastModified": "2020-09-25",
      "files": {
        "regular": "http://fonts.gstatic.com/s/notosans/v11/o-0IIpQlx3QUlC5A4PNb4j5Ba_2c7A.ttf",
        "italic": "http://fonts.gstatic.com/s/notosans/v11/o-0OIpQlx3QUlC5A4PNr4DRFSfiM7HBj.ttf",
        "700": "http://fonts.gstatic.com/s/notosans/v11/o-0NIpQlx3QUlC5A4PNjXhFlY9aA5Wl6PQ.ttf",
        "700italic": "http://fonts.gstatic.com/s/notosans/v11/o-0TIpQlx3QUlC5A4PNr4Az5ZtyEx2xqPaif.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Noto Sans HK",
      "variants": [
        "100",
        "300",
        "regular",
        "500",
        "700",
        "900"
      ],
      "subsets": [
        "chinese-hongkong",
        "latin"
      ],
      "version": "v6",
      "lastModified": "2020-11-12",
      "files": {
        "100": "http://fonts.gstatic.com/s/notosanshk/v6/nKKO-GM_FYFRJvXzVXaAPe9ZUHp1MOv2ObB7.otf",
        "300": "http://fonts.gstatic.com/s/notosanshk/v6/nKKP-GM_FYFRJvXzVXaAPe9ZmFhTHMX6MKliqQ.otf",
        "regular": "http://fonts.gstatic.com/s/notosanshk/v6/nKKQ-GM_FYFRJvXzVXaAPe9hMnB3Eu7mOQ.otf",
        "500": "http://fonts.gstatic.com/s/notosanshk/v6/nKKP-GM_FYFRJvXzVXaAPe9ZwFlTHMX6MKliqQ.otf",
        "700": "http://fonts.gstatic.com/s/notosanshk/v6/nKKP-GM_FYFRJvXzVXaAPe9ZiF9THMX6MKliqQ.otf",
        "900": "http://fonts.gstatic.com/s/notosanshk/v6/nKKP-GM_FYFRJvXzVXaAPe9ZsF1THMX6MKliqQ.otf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Noto Sans JP",
      "variants": [
        "100",
        "300",
        "regular",
        "500",
        "700",
        "900"
      ],
      "subsets": [
        "japanese",
        "latin"
      ],
      "version": "v28",
      "lastModified": "2020-11-12",
      "files": {
        "100": "http://fonts.gstatic.com/s/notosansjp/v28/-F6ofjtqLzI2JPCgQBnw7HFQoggM-FNthvIU.otf",
        "300": "http://fonts.gstatic.com/s/notosansjp/v28/-F6pfjtqLzI2JPCgQBnw7HFQaioq1H1hj-sNFQ.otf",
        "regular": "http://fonts.gstatic.com/s/notosansjp/v28/-F62fjtqLzI2JPCgQBnw7HFowAIO2lZ9hg.otf",
        "500": "http://fonts.gstatic.com/s/notosansjp/v28/-F6pfjtqLzI2JPCgQBnw7HFQMisq1H1hj-sNFQ.otf",
        "700": "http://fonts.gstatic.com/s/notosansjp/v28/-F6pfjtqLzI2JPCgQBnw7HFQei0q1H1hj-sNFQ.otf",
        "900": "http://fonts.gstatic.com/s/notosansjp/v28/-F6pfjtqLzI2JPCgQBnw7HFQQi8q1H1hj-sNFQ.otf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Noto Sans KR",
      "variants": [
        "100",
        "300",
        "regular",
        "500",
        "700",
        "900"
      ],
      "subsets": [
        "korean",
        "latin"
      ],
      "version": "v13",
      "lastModified": "2020-11-12",
      "files": {
        "100": "http://fonts.gstatic.com/s/notosanskr/v13/Pby6FmXiEBPT4ITbgNA5CgmOsn7uwpYcuH8y.otf",
        "300": "http://fonts.gstatic.com/s/notosanskr/v13/Pby7FmXiEBPT4ITbgNA5CgmOelzI7rgQsWYrzw.otf",
        "regular": "http://fonts.gstatic.com/s/notosanskr/v13/PbykFmXiEBPT4ITbgNA5Cgm20HTs4JMMuA.otf",
        "500": "http://fonts.gstatic.com/s/notosanskr/v13/Pby7FmXiEBPT4ITbgNA5CgmOIl3I7rgQsWYrzw.otf",
        "700": "http://fonts.gstatic.com/s/notosanskr/v13/Pby7FmXiEBPT4ITbgNA5CgmOalvI7rgQsWYrzw.otf",
        "900": "http://fonts.gstatic.com/s/notosanskr/v13/Pby7FmXiEBPT4ITbgNA5CgmOUlnI7rgQsWYrzw.otf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Noto Sans SC",
      "variants": [
        "100",
        "300",
        "regular",
        "500",
        "700",
        "900"
      ],
      "subsets": [
        "chinese-simplified",
        "latin"
      ],
      "version": "v12",
      "lastModified": "2020-11-12",
      "files": {
        "100": "http://fonts.gstatic.com/s/notosanssc/v12/k3kJo84MPvpLmixcA63oeALZTYKL2wv287Sb.otf",
        "300": "http://fonts.gstatic.com/s/notosanssc/v12/k3kIo84MPvpLmixcA63oeALZhaCt9yX6-q2CGg.otf",
        "regular": "http://fonts.gstatic.com/s/notosanssc/v12/k3kXo84MPvpLmixcA63oeALhL4iJ-Q7m8w.otf",
        "500": "http://fonts.gstatic.com/s/notosanssc/v12/k3kIo84MPvpLmixcA63oeALZ3aGt9yX6-q2CGg.otf",
        "700": "http://fonts.gstatic.com/s/notosanssc/v12/k3kIo84MPvpLmixcA63oeALZlaet9yX6-q2CGg.otf",
        "900": "http://fonts.gstatic.com/s/notosanssc/v12/k3kIo84MPvpLmixcA63oeALZraWt9yX6-q2CGg.otf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Noto Sans TC",
      "variants": [
        "100",
        "300",
        "regular",
        "500",
        "700",
        "900"
      ],
      "subsets": [
        "chinese-traditional",
        "latin"
      ],
      "version": "v11",
      "lastModified": "2020-11-12",
      "files": {
        "100": "http://fonts.gstatic.com/s/notosanstc/v11/-nFlOG829Oofr2wohFbTp9i9WyEJIfNZ1sjy.otf",
        "300": "http://fonts.gstatic.com/s/notosanstc/v11/-nFkOG829Oofr2wohFbTp9i9kwMvDd1V39Hr7g.otf",
        "regular": "http://fonts.gstatic.com/s/notosanstc/v11/-nF7OG829Oofr2wohFbTp9iFOSsLA_ZJ1g.otf",
        "500": "http://fonts.gstatic.com/s/notosanstc/v11/-nFkOG829Oofr2wohFbTp9i9ywIvDd1V39Hr7g.otf",
        "700": "http://fonts.gstatic.com/s/notosanstc/v11/-nFkOG829Oofr2wohFbTp9i9gwQvDd1V39Hr7g.otf",
        "900": "http://fonts.gstatic.com/s/notosanstc/v11/-nFkOG829Oofr2wohFbTp9i9uwYvDd1V39Hr7g.otf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Noto Serif",
      "variants": [
        "regular",
        "italic",
        "700",
        "700italic"
      ],
      "subsets": [
        "cyrillic",
        "cyrillic-ext",
        "greek",
        "greek-ext",
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v9",
      "lastModified": "2020-09-10",
      "files": {
        "regular": "http://fonts.gstatic.com/s/notoserif/v9/ga6Iaw1J5X9T9RW6j9bNTFAcaRi_bMQ.ttf",
        "italic": "http://fonts.gstatic.com/s/notoserif/v9/ga6Kaw1J5X9T9RW6j9bNfFIWbTq6fMRRMw.ttf",
        "700": "http://fonts.gstatic.com/s/notoserif/v9/ga6Law1J5X9T9RW6j9bNdOwzTRCUcM1IKoY.ttf",
        "700italic": "http://fonts.gstatic.com/s/notoserif/v9/ga6Vaw1J5X9T9RW6j9bNfFIu0RWedO9NOoYIDg.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Noto Serif JP",
      "variants": [
        "200",
        "300",
        "regular",
        "500",
        "600",
        "700",
        "900"
      ],
      "subsets": [
        "japanese",
        "latin"
      ],
      "version": "v8",
      "lastModified": "2020-11-12",
      "files": {
        "200": "http://fonts.gstatic.com/s/notoserifjp/v8/xn77YHs72GKoTvER4Gn3b5eMZBaPRkgfU8fEwb0.otf",
        "300": "http://fonts.gstatic.com/s/notoserifjp/v8/xn77YHs72GKoTvER4Gn3b5eMZHKMRkgfU8fEwb0.otf",
        "regular": "http://fonts.gstatic.com/s/notoserifjp/v8/xn7mYHs72GKoTvER4Gn3b5eMXNikYkY0T84.otf",
        "500": "http://fonts.gstatic.com/s/notoserifjp/v8/xn77YHs72GKoTvER4Gn3b5eMZCqNRkgfU8fEwb0.otf",
        "600": "http://fonts.gstatic.com/s/notoserifjp/v8/xn77YHs72GKoTvER4Gn3b5eMZAaKRkgfU8fEwb0.otf",
        "700": "http://fonts.gstatic.com/s/notoserifjp/v8/xn77YHs72GKoTvER4Gn3b5eMZGKLRkgfU8fEwb0.otf",
        "900": "http://fonts.gstatic.com/s/notoserifjp/v8/xn77YHs72GKoTvER4Gn3b5eMZFqJRkgfU8fEwb0.otf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Noto Serif KR",
      "variants": [
        "200",
        "300",
        "regular",
        "500",
        "600",
        "700",
        "900"
      ],
      "subsets": [
        "korean",
        "latin"
      ],
      "version": "v7",
      "lastModified": "2020-11-12",
      "files": {
        "200": "http://fonts.gstatic.com/s/notoserifkr/v7/3JnmSDn90Gmq2mr3blnHaTZXTihC8O1ZNH1ahck.otf",
        "300": "http://fonts.gstatic.com/s/notoserifkr/v7/3JnmSDn90Gmq2mr3blnHaTZXTkxB8O1ZNH1ahck.otf",
        "regular": "http://fonts.gstatic.com/s/notoserifkr/v7/3Jn7SDn90Gmq2mr3blnHaTZXduZp1ONyKHQ.otf",
        "500": "http://fonts.gstatic.com/s/notoserifkr/v7/3JnmSDn90Gmq2mr3blnHaTZXThRA8O1ZNH1ahck.otf",
        "600": "http://fonts.gstatic.com/s/notoserifkr/v7/3JnmSDn90Gmq2mr3blnHaTZXTjhH8O1ZNH1ahck.otf",
        "700": "http://fonts.gstatic.com/s/notoserifkr/v7/3JnmSDn90Gmq2mr3blnHaTZXTlxG8O1ZNH1ahck.otf",
        "900": "http://fonts.gstatic.com/s/notoserifkr/v7/3JnmSDn90Gmq2mr3blnHaTZXTmRE8O1ZNH1ahck.otf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Noto Serif SC",
      "variants": [
        "200",
        "300",
        "regular",
        "500",
        "600",
        "700",
        "900"
      ],
      "subsets": [
        "chinese-simplified",
        "latin"
      ],
      "version": "v8",
      "lastModified": "2020-11-12",
      "files": {
        "200": "http://fonts.gstatic.com/s/notoserifsc/v8/H4c8BXePl9DZ0Xe7gG9cyOj7mm63SzZBEtERe7U.otf",
        "300": "http://fonts.gstatic.com/s/notoserifsc/v8/H4c8BXePl9DZ0Xe7gG9cyOj7mgq0SzZBEtERe7U.otf",
        "regular": "http://fonts.gstatic.com/s/notoserifsc/v8/H4chBXePl9DZ0Xe7gG9cyOj7oqCcbzhqDtg.otf",
        "500": "http://fonts.gstatic.com/s/notoserifsc/v8/H4c8BXePl9DZ0Xe7gG9cyOj7mlK1SzZBEtERe7U.otf",
        "600": "http://fonts.gstatic.com/s/notoserifsc/v8/H4c8BXePl9DZ0Xe7gG9cyOj7mn6ySzZBEtERe7U.otf",
        "700": "http://fonts.gstatic.com/s/notoserifsc/v8/H4c8BXePl9DZ0Xe7gG9cyOj7mhqzSzZBEtERe7U.otf",
        "900": "http://fonts.gstatic.com/s/notoserifsc/v8/H4c8BXePl9DZ0Xe7gG9cyOj7miKxSzZBEtERe7U.otf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Noto Serif TC",
      "variants": [
        "200",
        "300",
        "regular",
        "500",
        "600",
        "700",
        "900"
      ],
      "subsets": [
        "chinese-traditional",
        "latin"
      ],
      "version": "v8",
      "lastModified": "2020-11-12",
      "files": {
        "200": "http://fonts.gstatic.com/s/notoseriftc/v8/XLY9IZb5bJNDGYxLBibeHZ0Bvr8vbX9GTsoOAX4.otf",
        "300": "http://fonts.gstatic.com/s/notoseriftc/v8/XLY9IZb5bJNDGYxLBibeHZ0BvtssbX9GTsoOAX4.otf",
        "regular": "http://fonts.gstatic.com/s/notoseriftc/v8/XLYgIZb5bJNDGYxLBibeHZ0BhnEESXFtUsM.otf",
        "500": "http://fonts.gstatic.com/s/notoseriftc/v8/XLY9IZb5bJNDGYxLBibeHZ0BvoMtbX9GTsoOAX4.otf",
        "600": "http://fonts.gstatic.com/s/notoseriftc/v8/XLY9IZb5bJNDGYxLBibeHZ0Bvq8qbX9GTsoOAX4.otf",
        "700": "http://fonts.gstatic.com/s/notoseriftc/v8/XLY9IZb5bJNDGYxLBibeHZ0BvssrbX9GTsoOAX4.otf",
        "900": "http://fonts.gstatic.com/s/notoseriftc/v8/XLY9IZb5bJNDGYxLBibeHZ0BvvMpbX9GTsoOAX4.otf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Nova Cut",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v12",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/novacut/v12/KFOkCnSYu8mL-39LkWxPKTM1K9nz.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Nova Flat",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v12",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/novaflat/v12/QdVUSTc-JgqpytEbVebEuStkm20oJA.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Nova Mono",
      "variants": [
        "regular"
      ],
      "subsets": [
        "greek",
        "latin"
      ],
      "version": "v11",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/novamono/v11/Cn-0JtiGWQ5Ajb--MRKfYGxYrdM9Sg.ttf"
      },
      "category": "monospace",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Nova Oval",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v12",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/novaoval/v12/jAnEgHdmANHvPenMaswCMY-h3cWkWg.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Nova Round",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v12",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/novaround/v12/flU9Rqquw5UhEnlwTJYTYYfeeetYEBc.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Nova Script",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v13",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/novascript/v13/7Au7p_IpkSWSTWaFWkumvmQNEl0O0kEx.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Nova Slim",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v12",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/novaslim/v12/Z9XUDmZNQAuem8jyZcn-yMOInrib9Q.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Nova Square",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v13",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/novasquare/v13/RrQUbo9-9DV7b06QHgSWsZhARYMgGtWA.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Numans",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v10",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/numans/v10/SlGRmQmGupYAfH8IYRggiHVqaQ.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Nunito",
      "variants": [
        "200",
        "200italic",
        "300",
        "300italic",
        "regular",
        "italic",
        "600",
        "600italic",
        "700",
        "700italic",
        "800",
        "800italic",
        "900",
        "900italic"
      ],
      "subsets": [
        "cyrillic",
        "cyrillic-ext",
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v16",
      "lastModified": "2020-11-25",
      "files": {
        "200": "http://fonts.gstatic.com/s/nunito/v16/XRXW3I6Li01BKofA-sekZuHJeTsfDQ.ttf",
        "200italic": "http://fonts.gstatic.com/s/nunito/v16/XRXQ3I6Li01BKofIMN5MZ-vNWz4PDWtj.ttf",
        "300": "http://fonts.gstatic.com/s/nunito/v16/XRXW3I6Li01BKofAnsSkZuHJeTsfDQ.ttf",
        "300italic": "http://fonts.gstatic.com/s/nunito/v16/XRXQ3I6Li01BKofIMN4oZOvNWz4PDWtj.ttf",
        "regular": "http://fonts.gstatic.com/s/nunito/v16/XRXV3I6Li01BKof4MuyAbsrVcA.ttf",
        "italic": "http://fonts.gstatic.com/s/nunito/v16/XRXX3I6Li01BKofIMOaETM_FcCIG.ttf",
        "600": "http://fonts.gstatic.com/s/nunito/v16/XRXW3I6Li01BKofA6sKkZuHJeTsfDQ.ttf",
        "600italic": "http://fonts.gstatic.com/s/nunito/v16/XRXQ3I6Li01BKofIMN5cYuvNWz4PDWtj.ttf",
        "700": "http://fonts.gstatic.com/s/nunito/v16/XRXW3I6Li01BKofAjsOkZuHJeTsfDQ.ttf",
        "700italic": "http://fonts.gstatic.com/s/nunito/v16/XRXQ3I6Li01BKofIMN44Y-vNWz4PDWtj.ttf",
        "800": "http://fonts.gstatic.com/s/nunito/v16/XRXW3I6Li01BKofAksCkZuHJeTsfDQ.ttf",
        "800italic": "http://fonts.gstatic.com/s/nunito/v16/XRXQ3I6Li01BKofIMN4kYOvNWz4PDWtj.ttf",
        "900": "http://fonts.gstatic.com/s/nunito/v16/XRXW3I6Li01BKofAtsGkZuHJeTsfDQ.ttf",
        "900italic": "http://fonts.gstatic.com/s/nunito/v16/XRXQ3I6Li01BKofIMN4AYevNWz4PDWtj.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Nunito Sans",
      "variants": [
        "200",
        "200italic",
        "300",
        "300italic",
        "regular",
        "italic",
        "600",
        "600italic",
        "700",
        "700italic",
        "800",
        "800italic",
        "900",
        "900italic"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v6",
      "lastModified": "2020-09-10",
      "files": {
        "200": "http://fonts.gstatic.com/s/nunitosans/v6/pe03MImSLYBIv1o4X1M8cc9yAv5qWVAgVol-.ttf",
        "200italic": "http://fonts.gstatic.com/s/nunitosans/v6/pe01MImSLYBIv1o4X1M8cce4GxZrU1QCU5l-06Y.ttf",
        "300": "http://fonts.gstatic.com/s/nunitosans/v6/pe03MImSLYBIv1o4X1M8cc8WAf5qWVAgVol-.ttf",
        "300italic": "http://fonts.gstatic.com/s/nunitosans/v6/pe01MImSLYBIv1o4X1M8cce4G3JoU1QCU5l-06Y.ttf",
        "regular": "http://fonts.gstatic.com/s/nunitosans/v6/pe0qMImSLYBIv1o4X1M8cfe6Kdpickwp.ttf",
        "italic": "http://fonts.gstatic.com/s/nunitosans/v6/pe0oMImSLYBIv1o4X1M8cce4I95Ad1wpT5A.ttf",
        "600": "http://fonts.gstatic.com/s/nunitosans/v6/pe03MImSLYBIv1o4X1M8cc9iB_5qWVAgVol-.ttf",
        "600italic": "http://fonts.gstatic.com/s/nunitosans/v6/pe01MImSLYBIv1o4X1M8cce4GwZuU1QCU5l-06Y.ttf",
        "700": "http://fonts.gstatic.com/s/nunitosans/v6/pe03MImSLYBIv1o4X1M8cc8GBv5qWVAgVol-.ttf",
        "700italic": "http://fonts.gstatic.com/s/nunitosans/v6/pe01MImSLYBIv1o4X1M8cce4G2JvU1QCU5l-06Y.ttf",
        "800": "http://fonts.gstatic.com/s/nunitosans/v6/pe03MImSLYBIv1o4X1M8cc8aBf5qWVAgVol-.ttf",
        "800italic": "http://fonts.gstatic.com/s/nunitosans/v6/pe01MImSLYBIv1o4X1M8cce4G35sU1QCU5l-06Y.ttf",
        "900": "http://fonts.gstatic.com/s/nunitosans/v6/pe03MImSLYBIv1o4X1M8cc8-BP5qWVAgVol-.ttf",
        "900italic": "http://fonts.gstatic.com/s/nunitosans/v6/pe01MImSLYBIv1o4X1M8cce4G1ptU1QCU5l-06Y.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Odibee Sans",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v2",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/odibeesans/v2/neIPzCSooYAho6WvjeToRYkyepH9qGsf.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Odor Mean Chey",
      "variants": [
        "regular"
      ],
      "subsets": [
        "khmer"
      ],
      "version": "v12",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/odormeanchey/v12/raxkHiKDttkTe1aOGcJMR1A_4mrY2zqUKafv.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Offside",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v8",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/offside/v8/HI_KiYMWKa9QrAykQ5HiRp-dhpQ.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Old Standard TT",
      "variants": [
        "regular",
        "italic",
        "700"
      ],
      "subsets": [
        "cyrillic",
        "cyrillic-ext",
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v13",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/oldstandardtt/v13/MwQubh3o1vLImiwAVvYawgcf2eVurVC5RHdCZg.ttf",
        "italic": "http://fonts.gstatic.com/s/oldstandardtt/v13/MwQsbh3o1vLImiwAVvYawgcf2eVer1q9ZnJSZtQG.ttf",
        "700": "http://fonts.gstatic.com/s/oldstandardtt/v13/MwQrbh3o1vLImiwAVvYawgcf2eVWEX-dTFxeb80flQ.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Oldenburg",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v8",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/oldenburg/v8/fC1jPY5JYWzbywv7c4V6UU6oXyndrw.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Oleo Script",
      "variants": [
        "regular",
        "700"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v9",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/oleoscript/v9/rax5HieDvtMOe0iICsUccBhasU7Q8Cad.ttf",
        "700": "http://fonts.gstatic.com/s/oleoscript/v9/raxkHieDvtMOe0iICsUccCDmnmrY2zqUKafv.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Oleo Script Swash Caps",
      "variants": [
        "regular",
        "700"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v8",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/oleoscriptswashcaps/v8/Noaj6Vb-w5SFbTTAsZP_7JkCS08K-jCzDn_HMXquSY0Hg90.ttf",
        "700": "http://fonts.gstatic.com/s/oleoscriptswashcaps/v8/Noag6Vb-w5SFbTTAsZP_7JkCS08K-jCzDn_HCcaBbYUsn9T5dt0.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Open Sans",
      "variants": [
        "300",
        "300italic",
        "regular",
        "italic",
        "600",
        "600italic",
        "700",
        "700italic",
        "800",
        "800italic"
      ],
      "subsets": [
        "cyrillic",
        "cyrillic-ext",
        "greek",
        "greek-ext",
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v18",
      "lastModified": "2020-09-15",
      "files": {
        "300": "http://fonts.gstatic.com/s/opensans/v18/mem5YaGs126MiZpBA-UN_r8-VeJoCqeDjg.ttf",
        "300italic": "http://fonts.gstatic.com/s/opensans/v18/memnYaGs126MiZpBA-UFUKWyV-hsKKKTjrPW.ttf",
        "regular": "http://fonts.gstatic.com/s/opensans/v18/mem8YaGs126MiZpBA-U1UpcaXcl0Aw.ttf",
        "italic": "http://fonts.gstatic.com/s/opensans/v18/mem6YaGs126MiZpBA-UFUJ0ef8xkA76a.ttf",
        "600": "http://fonts.gstatic.com/s/opensans/v18/mem5YaGs126MiZpBA-UNirk-VeJoCqeDjg.ttf",
        "600italic": "http://fonts.gstatic.com/s/opensans/v18/memnYaGs126MiZpBA-UFUKXGUehsKKKTjrPW.ttf",
        "700": "http://fonts.gstatic.com/s/opensans/v18/mem5YaGs126MiZpBA-UN7rg-VeJoCqeDjg.ttf",
        "700italic": "http://fonts.gstatic.com/s/opensans/v18/memnYaGs126MiZpBA-UFUKWiUOhsKKKTjrPW.ttf",
        "800": "http://fonts.gstatic.com/s/opensans/v18/mem5YaGs126MiZpBA-UN8rs-VeJoCqeDjg.ttf",
        "800italic": "http://fonts.gstatic.com/s/opensans/v18/memnYaGs126MiZpBA-UFUKW-U-hsKKKTjrPW.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Open Sans Condensed",
      "variants": [
        "300",
        "300italic",
        "700"
      ],
      "subsets": [
        "cyrillic",
        "cyrillic-ext",
        "greek",
        "greek-ext",
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v15",
      "lastModified": "2020-09-10",
      "files": {
        "300": "http://fonts.gstatic.com/s/opensanscondensed/v15/z7NFdQDnbTkabZAIOl9il_O6KJj73e7Ff1GhPuLGRpWRyAs.ttf",
        "300italic": "http://fonts.gstatic.com/s/opensanscondensed/v15/z7NHdQDnbTkabZAIOl9il_O6KJj73e7Fd_-7suDMQreU2AsJSg.ttf",
        "700": "http://fonts.gstatic.com/s/opensanscondensed/v15/z7NFdQDnbTkabZAIOl9il_O6KJj73e7Ff0GmPuLGRpWRyAs.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Oranienbaum",
      "variants": [
        "regular"
      ],
      "subsets": [
        "cyrillic",
        "cyrillic-ext",
        "latin",
        "latin-ext"
      ],
      "version": "v9",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/oranienbaum/v9/OZpHg_txtzZKMuXLIVrx-3zn7kz3dpHc.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Orbitron",
      "variants": [
        "regular",
        "500",
        "600",
        "700",
        "800",
        "900"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v17",
      "lastModified": "2021-01-30",
      "files": {
        "regular": "http://fonts.gstatic.com/s/orbitron/v17/yMJMMIlzdpvBhQQL_SC3X9yhF25-T1nyGy6xpmIyXjU1pg.ttf",
        "500": "http://fonts.gstatic.com/s/orbitron/v17/yMJMMIlzdpvBhQQL_SC3X9yhF25-T1nyKS6xpmIyXjU1pg.ttf",
        "600": "http://fonts.gstatic.com/s/orbitron/v17/yMJMMIlzdpvBhQQL_SC3X9yhF25-T1nyxSmxpmIyXjU1pg.ttf",
        "700": "http://fonts.gstatic.com/s/orbitron/v17/yMJMMIlzdpvBhQQL_SC3X9yhF25-T1ny_CmxpmIyXjU1pg.ttf",
        "800": "http://fonts.gstatic.com/s/orbitron/v17/yMJMMIlzdpvBhQQL_SC3X9yhF25-T1nymymxpmIyXjU1pg.ttf",
        "900": "http://fonts.gstatic.com/s/orbitron/v17/yMJMMIlzdpvBhQQL_SC3X9yhF25-T1nysimxpmIyXjU1pg.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Oregano",
      "variants": [
        "regular",
        "italic"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v8",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/oregano/v8/If2IXTPxciS3H4S2kZffPznO3yM.ttf",
        "italic": "http://fonts.gstatic.com/s/oregano/v8/If2KXTPxciS3H4S2oZXVOxvLzyP_qw.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Orienta",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v8",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/orienta/v8/PlI9FlK4Jrl5Y9zNeyeo9HRFhcU.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Original Surfer",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v9",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/originalsurfer/v9/RWmQoKGZ9vIirYntXJ3_MbekzNMiDEtvAlaMKw.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Oswald",
      "variants": [
        "200",
        "300",
        "regular",
        "500",
        "600",
        "700"
      ],
      "subsets": [
        "cyrillic",
        "cyrillic-ext",
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v36",
      "lastModified": "2021-01-30",
      "files": {
        "200": "http://fonts.gstatic.com/s/oswald/v36/TK3_WkUHHAIjg75cFRf3bXL8LICs13FvgUFoZAaRliE.ttf",
        "300": "http://fonts.gstatic.com/s/oswald/v36/TK3_WkUHHAIjg75cFRf3bXL8LICs169vgUFoZAaRliE.ttf",
        "regular": "http://fonts.gstatic.com/s/oswald/v36/TK3_WkUHHAIjg75cFRf3bXL8LICs1_FvgUFoZAaRliE.ttf",
        "500": "http://fonts.gstatic.com/s/oswald/v36/TK3_WkUHHAIjg75cFRf3bXL8LICs18NvgUFoZAaRliE.ttf",
        "600": "http://fonts.gstatic.com/s/oswald/v36/TK3_WkUHHAIjg75cFRf3bXL8LICs1y9ogUFoZAaRliE.ttf",
        "700": "http://fonts.gstatic.com/s/oswald/v36/TK3_WkUHHAIjg75cFRf3bXL8LICs1xZogUFoZAaRliE.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Over the Rainbow",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v11",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/overtherainbow/v11/11haGoXG1k_HKhMLUWz7Mc7vvW5upvOm9NA2XG0.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Overlock",
      "variants": [
        "regular",
        "italic",
        "700",
        "700italic",
        "900",
        "900italic"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v10",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/overlock/v10/Z9XVDmdMWRiN1_T9Z4Te4u2El6GC.ttf",
        "italic": "http://fonts.gstatic.com/s/overlock/v10/Z9XTDmdMWRiN1_T9Z7Tc6OmmkrGC7Cs.ttf",
        "700": "http://fonts.gstatic.com/s/overlock/v10/Z9XSDmdMWRiN1_T9Z7xizcmMvL2L9TLT.ttf",
        "700italic": "http://fonts.gstatic.com/s/overlock/v10/Z9XQDmdMWRiN1_T9Z7Tc0FWJtrmp8CLTlNs.ttf",
        "900": "http://fonts.gstatic.com/s/overlock/v10/Z9XSDmdMWRiN1_T9Z7xaz8mMvL2L9TLT.ttf",
        "900italic": "http://fonts.gstatic.com/s/overlock/v10/Z9XQDmdMWRiN1_T9Z7Tc0G2Ltrmp8CLTlNs.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Overlock SC",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v9",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/overlocksc/v9/1cX3aUHKGZrstGAY8nwVzHGAq8Sk1PoH.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Overpass",
      "variants": [
        "100",
        "100italic",
        "200",
        "200italic",
        "300",
        "300italic",
        "regular",
        "italic",
        "600",
        "600italic",
        "700",
        "700italic",
        "800",
        "800italic",
        "900",
        "900italic"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v5",
      "lastModified": "2020-09-10",
      "files": {
        "100": "http://fonts.gstatic.com/s/overpass/v5/qFdB35WCmI96Ajtm81nGU97gxhcJk1s.ttf",
        "100italic": "http://fonts.gstatic.com/s/overpass/v5/qFdD35WCmI96Ajtm81Gga7rqwjUMg1siNQ.ttf",
        "200": "http://fonts.gstatic.com/s/overpass/v5/qFdA35WCmI96Ajtm81lqcv7K6BsAikI7.ttf",
        "200italic": "http://fonts.gstatic.com/s/overpass/v5/qFdC35WCmI96Ajtm81GgaxbL4h8ij1I7LLE.ttf",
        "300": "http://fonts.gstatic.com/s/overpass/v5/qFdA35WCmI96Ajtm81kOcf7K6BsAikI7.ttf",
        "300italic": "http://fonts.gstatic.com/s/overpass/v5/qFdC35WCmI96Ajtm81Gga3LI4h8ij1I7LLE.ttf",
        "regular": "http://fonts.gstatic.com/s/overpass/v5/qFdH35WCmI96Ajtm82GiWdrCwwcJ.ttf",
        "italic": "http://fonts.gstatic.com/s/overpass/v5/qFdB35WCmI96Ajtm81GgU97gxhcJk1s.ttf",
        "600": "http://fonts.gstatic.com/s/overpass/v5/qFdA35WCmI96Ajtm81l6d_7K6BsAikI7.ttf",
        "600italic": "http://fonts.gstatic.com/s/overpass/v5/qFdC35WCmI96Ajtm81GgawbO4h8ij1I7LLE.ttf",
        "700": "http://fonts.gstatic.com/s/overpass/v5/qFdA35WCmI96Ajtm81kedv7K6BsAikI7.ttf",
        "700italic": "http://fonts.gstatic.com/s/overpass/v5/qFdC35WCmI96Ajtm81Gga2LP4h8ij1I7LLE.ttf",
        "800": "http://fonts.gstatic.com/s/overpass/v5/qFdA35WCmI96Ajtm81kCdf7K6BsAikI7.ttf",
        "800italic": "http://fonts.gstatic.com/s/overpass/v5/qFdC35WCmI96Ajtm81Gga37M4h8ij1I7LLE.ttf",
        "900": "http://fonts.gstatic.com/s/overpass/v5/qFdA35WCmI96Ajtm81kmdP7K6BsAikI7.ttf",
        "900italic": "http://fonts.gstatic.com/s/overpass/v5/qFdC35WCmI96Ajtm81Gga1rN4h8ij1I7LLE.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Overpass Mono",
      "variants": [
        "300",
        "regular",
        "600",
        "700"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v6",
      "lastModified": "2020-09-02",
      "files": {
        "300": "http://fonts.gstatic.com/s/overpassmono/v6/_Xm3-H86tzKDdAPa-KPQZ-AC3oSWk_edB3Zf8EQ.ttf",
        "regular": "http://fonts.gstatic.com/s/overpassmono/v6/_Xmq-H86tzKDdAPa-KPQZ-AC5ii-t_-2G38.ttf",
        "600": "http://fonts.gstatic.com/s/overpassmono/v6/_Xm3-H86tzKDdAPa-KPQZ-AC3vCQk_edB3Zf8EQ.ttf",
        "700": "http://fonts.gstatic.com/s/overpassmono/v6/_Xm3-H86tzKDdAPa-KPQZ-AC3pSRk_edB3Zf8EQ.ttf"
      },
      "category": "monospace",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Ovo",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v12",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/ovo/v12/yYLl0h7Wyfzjy4Q5_3WVxA.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Oxanium",
      "variants": [
        "200",
        "300",
        "regular",
        "500",
        "600",
        "700",
        "800"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v4",
      "lastModified": "2021-01-30",
      "files": {
        "200": "http://fonts.gstatic.com/s/oxanium/v4/RrQPboN_4yJ0JmiMUW7sIGjd1IA9G83JfniMBXQ7d67x.ttf",
        "300": "http://fonts.gstatic.com/s/oxanium/v4/RrQPboN_4yJ0JmiMUW7sIGjd1IA9G80XfniMBXQ7d67x.ttf",
        "regular": "http://fonts.gstatic.com/s/oxanium/v4/RrQPboN_4yJ0JmiMUW7sIGjd1IA9G81JfniMBXQ7d67x.ttf",
        "500": "http://fonts.gstatic.com/s/oxanium/v4/RrQPboN_4yJ0JmiMUW7sIGjd1IA9G817fniMBXQ7d67x.ttf",
        "600": "http://fonts.gstatic.com/s/oxanium/v4/RrQPboN_4yJ0JmiMUW7sIGjd1IA9G82XeXiMBXQ7d67x.ttf",
        "700": "http://fonts.gstatic.com/s/oxanium/v4/RrQPboN_4yJ0JmiMUW7sIGjd1IA9G82ueXiMBXQ7d67x.ttf",
        "800": "http://fonts.gstatic.com/s/oxanium/v4/RrQPboN_4yJ0JmiMUW7sIGjd1IA9G83JeXiMBXQ7d67x.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Oxygen",
      "variants": [
        "300",
        "regular",
        "700"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v10",
      "lastModified": "2020-09-10",
      "files": {
        "300": "http://fonts.gstatic.com/s/oxygen/v10/2sDcZG1Wl4LcnbuCJW8Db2-4C7wFZQ.ttf",
        "regular": "http://fonts.gstatic.com/s/oxygen/v10/2sDfZG1Wl4Lcnbu6iUcnZ0SkAg.ttf",
        "700": "http://fonts.gstatic.com/s/oxygen/v10/2sDcZG1Wl4LcnbuCNWgDb2-4C7wFZQ.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Oxygen Mono",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v8",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/oxygenmono/v8/h0GsssGg9FxgDgCjLeAd7ijfze-PPlUu.ttf"
      },
      "category": "monospace",
      "kind": "webfonts#webfont"
    },
    {
      "family": "PT Mono",
      "variants": [
        "regular"
      ],
      "subsets": [
        "cyrillic",
        "cyrillic-ext",
        "latin",
        "latin-ext"
      ],
      "version": "v8",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/ptmono/v8/9oRONYoBnWILk-9ArCg5MtPyAcg.ttf"
      },
      "category": "monospace",
      "kind": "webfonts#webfont"
    },
    {
      "family": "PT Sans",
      "variants": [
        "regular",
        "italic",
        "700",
        "700italic"
      ],
      "subsets": [
        "cyrillic",
        "cyrillic-ext",
        "latin",
        "latin-ext"
      ],
      "version": "v12",
      "lastModified": "2020-09-15",
      "files": {
        "regular": "http://fonts.gstatic.com/s/ptsans/v12/jizaRExUiTo99u79P0WOxOGMMDQ.ttf",
        "italic": "http://fonts.gstatic.com/s/ptsans/v12/jizYRExUiTo99u79D0eEwMOJIDQA-g.ttf",
        "700": "http://fonts.gstatic.com/s/ptsans/v12/jizfRExUiTo99u79B_mh4OmnLD0Z4zM.ttf",
        "700italic": "http://fonts.gstatic.com/s/ptsans/v12/jizdRExUiTo99u79D0e8fOytKB8c8zMrig.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "PT Sans Caption",
      "variants": [
        "regular",
        "700"
      ],
      "subsets": [
        "cyrillic",
        "cyrillic-ext",
        "latin",
        "latin-ext"
      ],
      "version": "v13",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/ptsanscaption/v13/0FlMVP6Hrxmt7-fsUFhlFXNIlpcqfQXwQy6yxg.ttf",
        "700": "http://fonts.gstatic.com/s/ptsanscaption/v13/0FlJVP6Hrxmt7-fsUFhlFXNIlpcSwSrUSwWuz38Tgg.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "PT Sans Narrow",
      "variants": [
        "regular",
        "700"
      ],
      "subsets": [
        "cyrillic",
        "cyrillic-ext",
        "latin",
        "latin-ext"
      ],
      "version": "v12",
      "lastModified": "2020-09-10",
      "files": {
        "regular": "http://fonts.gstatic.com/s/ptsansnarrow/v12/BngRUXNadjH0qYEzV7ab-oWlsYCByxyKeuDp.ttf",
        "700": "http://fonts.gstatic.com/s/ptsansnarrow/v12/BngSUXNadjH0qYEzV7ab-oWlsbg95DiCUfzgRd-3.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "PT Serif",
      "variants": [
        "regular",
        "italic",
        "700",
        "700italic"
      ],
      "subsets": [
        "cyrillic",
        "cyrillic-ext",
        "latin",
        "latin-ext"
      ],
      "version": "v12",
      "lastModified": "2020-09-10",
      "files": {
        "regular": "http://fonts.gstatic.com/s/ptserif/v12/EJRVQgYoZZY2vCFuvDFRxL6ddjb-.ttf",
        "italic": "http://fonts.gstatic.com/s/ptserif/v12/EJRTQgYoZZY2vCFuvAFTzrq_cyb-vco.ttf",
        "700": "http://fonts.gstatic.com/s/ptserif/v12/EJRSQgYoZZY2vCFuvAnt65qVXSr3pNNB.ttf",
        "700italic": "http://fonts.gstatic.com/s/ptserif/v12/EJRQQgYoZZY2vCFuvAFT9gaQVy7VocNB6Iw.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "PT Serif Caption",
      "variants": [
        "regular",
        "italic"
      ],
      "subsets": [
        "cyrillic",
        "cyrillic-ext",
        "latin",
        "latin-ext"
      ],
      "version": "v12",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/ptserifcaption/v12/ieVl2ZhbGCW-JoW6S34pSDpqYKU059WxDCs5cvI.ttf",
        "italic": "http://fonts.gstatic.com/s/ptserifcaption/v12/ieVj2ZhbGCW-JoW6S34pSDpqYKU019e7CAk8YvJEeg.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Pacifico",
      "variants": [
        "regular"
      ],
      "subsets": [
        "cyrillic",
        "cyrillic-ext",
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v17",
      "lastModified": "2020-09-10",
      "files": {
        "regular": "http://fonts.gstatic.com/s/pacifico/v17/FwZY7-Qmy14u9lezJ96A4sijpFu_.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Padauk",
      "variants": [
        "regular",
        "700"
      ],
      "subsets": [
        "latin",
        "myanmar"
      ],
      "version": "v7",
      "lastModified": "2020-11-06",
      "files": {
        "regular": "http://fonts.gstatic.com/s/padauk/v7/RrQRboJg-id7OnbBa0_g3LlYbg.ttf",
        "700": "http://fonts.gstatic.com/s/padauk/v7/RrQSboJg-id7Onb512DE1JJEZ4YwGg.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Palanquin",
      "variants": [
        "100",
        "200",
        "300",
        "regular",
        "500",
        "600",
        "700"
      ],
      "subsets": [
        "devanagari",
        "latin",
        "latin-ext"
      ],
      "version": "v6",
      "lastModified": "2020-09-02",
      "files": {
        "100": "http://fonts.gstatic.com/s/palanquin/v6/9XUhlJ90n1fBFg7ceXwUEltI7rWmZzTH.ttf",
        "200": "http://fonts.gstatic.com/s/palanquin/v6/9XUilJ90n1fBFg7ceXwUvnpoxJuqbi3ezg.ttf",
        "300": "http://fonts.gstatic.com/s/palanquin/v6/9XUilJ90n1fBFg7ceXwU2nloxJuqbi3ezg.ttf",
        "regular": "http://fonts.gstatic.com/s/palanquin/v6/9XUnlJ90n1fBFg7ceXwsdlFMzLC2Zw.ttf",
        "500": "http://fonts.gstatic.com/s/palanquin/v6/9XUilJ90n1fBFg7ceXwUgnhoxJuqbi3ezg.ttf",
        "600": "http://fonts.gstatic.com/s/palanquin/v6/9XUilJ90n1fBFg7ceXwUrn9oxJuqbi3ezg.ttf",
        "700": "http://fonts.gstatic.com/s/palanquin/v6/9XUilJ90n1fBFg7ceXwUyn5oxJuqbi3ezg.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Palanquin Dark",
      "variants": [
        "regular",
        "500",
        "600",
        "700"
      ],
      "subsets": [
        "devanagari",
        "latin",
        "latin-ext"
      ],
      "version": "v7",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/palanquindark/v7/xn75YHgl1nqmANMB-26xC7yuF_6OTEo9VtfE.ttf",
        "500": "http://fonts.gstatic.com/s/palanquindark/v7/xn76YHgl1nqmANMB-26xC7yuF8Z6ZW41fcvN2KT4.ttf",
        "600": "http://fonts.gstatic.com/s/palanquindark/v7/xn76YHgl1nqmANMB-26xC7yuF8ZWYm41fcvN2KT4.ttf",
        "700": "http://fonts.gstatic.com/s/palanquindark/v7/xn76YHgl1nqmANMB-26xC7yuF8YyY241fcvN2KT4.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Pangolin",
      "variants": [
        "regular"
      ],
      "subsets": [
        "cyrillic",
        "cyrillic-ext",
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v6",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/pangolin/v6/cY9GfjGcW0FPpi-tWPfK5d3aiLBG.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Paprika",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v8",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/paprika/v8/8QIJdijZitv49rDfuIgOq7jkAOw.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Parisienne",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v8",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/parisienne/v8/E21i_d3kivvAkxhLEVZpcy96DuKuavM.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Passero One",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v12",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/passeroone/v12/JTUTjIko8DOq5FeaeEAjgE5B5Arr-s50.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Passion One",
      "variants": [
        "regular",
        "700",
        "900"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v11",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/passionone/v11/PbynFmL8HhTPqbjUzux3JHuW_Frg6YoV.ttf",
        "700": "http://fonts.gstatic.com/s/passionone/v11/Pby6FmL8HhTPqbjUzux3JEMq037owpYcuH8y.ttf",
        "900": "http://fonts.gstatic.com/s/passionone/v11/Pby6FmL8HhTPqbjUzux3JEMS0X7owpYcuH8y.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Pathway Gothic One",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v9",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/pathwaygothicone/v9/MwQrbgD32-KAvjkYGNUUxAtW7pEBwx-dTFxeb80flQ.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Patrick Hand",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v14",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/patrickhand/v14/LDI1apSQOAYtSuYWp8ZhfYeMWcjKm7sp8g.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Patrick Hand SC",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v8",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/patrickhandsc/v8/0nkwC9f7MfsBiWcLtY65AWDK873ViSi6JQc7Vg.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Pattaya",
      "variants": [
        "regular"
      ],
      "subsets": [
        "cyrillic",
        "latin",
        "latin-ext",
        "thai",
        "vietnamese"
      ],
      "version": "v6",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/pattaya/v6/ea8ZadcqV_zkHY-XNdCn92ZEmVs.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Patua One",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v11",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/patuaone/v11/ZXuke1cDvLCKLDcimxBI5PNvNA9LuA.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Pavanam",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "tamil"
      ],
      "version": "v5",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/pavanam/v5/BXRrvF_aiezLh0xPDOtQ9Wf0QcE.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Paytone One",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v13",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/paytoneone/v13/0nksC9P7MfYHj2oFtYm2CiTqivr9iBq_.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Peddana",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "telugu"
      ],
      "version": "v8",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/peddana/v8/aFTU7PBhaX89UcKWhh2aBYyMcKw.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Peralta",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v8",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/peralta/v8/hYkJPu0-RP_9d3kRGxAhrv956B8.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Permanent Marker",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v10",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/permanentmarker/v10/Fh4uPib9Iyv2ucM6pGQMWimMp004HaqIfrT5nlk.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Petit Formal Script",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v8",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/petitformalscript/v8/B50TF6xQr2TXJBnGOFME6u5OR83oRP5qoHnqP4gZSiE.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Petrona",
      "variants": [
        "100",
        "200",
        "300",
        "regular",
        "500",
        "600",
        "700",
        "800",
        "900",
        "100italic",
        "200italic",
        "300italic",
        "italic",
        "500italic",
        "600italic",
        "700italic",
        "800italic",
        "900italic"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v13",
      "lastModified": "2021-01-30",
      "files": {
        "100": "http://fonts.gstatic.com/s/petrona/v13/mtGl4_NXL7bZo9XXq35wRLONYyOjFk6NsARBH452Mvds.ttf",
        "200": "http://fonts.gstatic.com/s/petrona/v13/mtGl4_NXL7bZo9XXq35wRLONYyOjFk4NsQRBH452Mvds.ttf",
        "300": "http://fonts.gstatic.com/s/petrona/v13/mtGl4_NXL7bZo9XXq35wRLONYyOjFk7TsQRBH452Mvds.ttf",
        "regular": "http://fonts.gstatic.com/s/petrona/v13/mtGl4_NXL7bZo9XXq35wRLONYyOjFk6NsQRBH452Mvds.ttf",
        "500": "http://fonts.gstatic.com/s/petrona/v13/mtGl4_NXL7bZo9XXq35wRLONYyOjFk6_sQRBH452Mvds.ttf",
        "600": "http://fonts.gstatic.com/s/petrona/v13/mtGl4_NXL7bZo9XXq35wRLONYyOjFk5TtgRBH452Mvds.ttf",
        "700": "http://fonts.gstatic.com/s/petrona/v13/mtGl4_NXL7bZo9XXq35wRLONYyOjFk5qtgRBH452Mvds.ttf",
        "800": "http://fonts.gstatic.com/s/petrona/v13/mtGl4_NXL7bZo9XXq35wRLONYyOjFk4NtgRBH452Mvds.ttf",
        "900": "http://fonts.gstatic.com/s/petrona/v13/mtGl4_NXL7bZo9XXq35wRLONYyOjFk4ktgRBH452Mvds.ttf",
        "100italic": "http://fonts.gstatic.com/s/petrona/v13/mtGr4_NXL7bZo9XXgXdCu2vkCLkNEVtF8uwDFYpUN-dsIWs.ttf",
        "200italic": "http://fonts.gstatic.com/s/petrona/v13/mtGr4_NXL7bZo9XXgXdCu2vkCLkNEVtF8mwCFYpUN-dsIWs.ttf",
        "300italic": "http://fonts.gstatic.com/s/petrona/v13/mtGr4_NXL7bZo9XXgXdCu2vkCLkNEVtF8rICFYpUN-dsIWs.ttf",
        "italic": "http://fonts.gstatic.com/s/petrona/v13/mtGr4_NXL7bZo9XXgXdCu2vkCLkNEVtF8uwCFYpUN-dsIWs.ttf",
        "500italic": "http://fonts.gstatic.com/s/petrona/v13/mtGr4_NXL7bZo9XXgXdCu2vkCLkNEVtF8t4CFYpUN-dsIWs.ttf",
        "600italic": "http://fonts.gstatic.com/s/petrona/v13/mtGr4_NXL7bZo9XXgXdCu2vkCLkNEVtF8jIFFYpUN-dsIWs.ttf",
        "700italic": "http://fonts.gstatic.com/s/petrona/v13/mtGr4_NXL7bZo9XXgXdCu2vkCLkNEVtF8gsFFYpUN-dsIWs.ttf",
        "800italic": "http://fonts.gstatic.com/s/petrona/v13/mtGr4_NXL7bZo9XXgXdCu2vkCLkNEVtF8mwFFYpUN-dsIWs.ttf",
        "900italic": "http://fonts.gstatic.com/s/petrona/v13/mtGr4_NXL7bZo9XXgXdCu2vkCLkNEVtF8kUFFYpUN-dsIWs.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Philosopher",
      "variants": [
        "regular",
        "italic",
        "700",
        "700italic"
      ],
      "subsets": [
        "cyrillic",
        "cyrillic-ext",
        "latin",
        "vietnamese"
      ],
      "version": "v14",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/philosopher/v14/vEFV2_5QCwIS4_Dhez5jcVBpRUwU08qe.ttf",
        "italic": "http://fonts.gstatic.com/s/philosopher/v14/vEFX2_5QCwIS4_Dhez5jcWBrT0g21tqeR7c.ttf",
        "700": "http://fonts.gstatic.com/s/philosopher/v14/vEFI2_5QCwIS4_Dhez5jcWjVamgc-NaXXq7H.ttf",
        "700italic": "http://fonts.gstatic.com/s/philosopher/v14/vEFK2_5QCwIS4_Dhez5jcWBrd_QZ8tK1W77HtMo.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Piazzolla",
      "variants": [
        "100",
        "200",
        "300",
        "regular",
        "500",
        "600",
        "700",
        "800",
        "900",
        "100italic",
        "200italic",
        "300italic",
        "italic",
        "500italic",
        "600italic",
        "700italic",
        "800italic",
        "900italic"
      ],
      "subsets": [
        "cyrillic",
        "cyrillic-ext",
        "greek",
        "greek-ext",
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v6",
      "lastModified": "2021-01-21",
      "files": {
        "100": "http://fonts.gstatic.com/s/piazzolla/v6/N0b52SlTPu5rIkWIZjVKKtYtfxYqZ4RJBFzFfYUjkSDdlqZgy7LYx3Ly1AHfAAy5.ttf",
        "200": "http://fonts.gstatic.com/s/piazzolla/v6/N0b52SlTPu5rIkWIZjVKKtYtfxYqZ4RJBFzFfYUjkSDdlqZgy7JYxnLy1AHfAAy5.ttf",
        "300": "http://fonts.gstatic.com/s/piazzolla/v6/N0b52SlTPu5rIkWIZjVKKtYtfxYqZ4RJBFzFfYUjkSDdlqZgy7KGxnLy1AHfAAy5.ttf",
        "regular": "http://fonts.gstatic.com/s/piazzolla/v6/N0b52SlTPu5rIkWIZjVKKtYtfxYqZ4RJBFzFfYUjkSDdlqZgy7LYxnLy1AHfAAy5.ttf",
        "500": "http://fonts.gstatic.com/s/piazzolla/v6/N0b52SlTPu5rIkWIZjVKKtYtfxYqZ4RJBFzFfYUjkSDdlqZgy7LqxnLy1AHfAAy5.ttf",
        "600": "http://fonts.gstatic.com/s/piazzolla/v6/N0b52SlTPu5rIkWIZjVKKtYtfxYqZ4RJBFzFfYUjkSDdlqZgy7IGwXLy1AHfAAy5.ttf",
        "700": "http://fonts.gstatic.com/s/piazzolla/v6/N0b52SlTPu5rIkWIZjVKKtYtfxYqZ4RJBFzFfYUjkSDdlqZgy7I_wXLy1AHfAAy5.ttf",
        "800": "http://fonts.gstatic.com/s/piazzolla/v6/N0b52SlTPu5rIkWIZjVKKtYtfxYqZ4RJBFzFfYUjkSDdlqZgy7JYwXLy1AHfAAy5.ttf",
        "900": "http://fonts.gstatic.com/s/piazzolla/v6/N0b52SlTPu5rIkWIZjVKKtYtfxYqZ4RJBFzFfYUjkSDdlqZgy7JxwXLy1AHfAAy5.ttf",
        "100italic": "http://fonts.gstatic.com/s/piazzolla/v6/N0b72SlTPu5rIkWIZjVgI-TckS03oGpPETyEJ88Rbvi0_TzOzKcQhZqw3gX9BRy5m5M.ttf",
        "200italic": "http://fonts.gstatic.com/s/piazzolla/v6/N0b72SlTPu5rIkWIZjVgI-TckS03oGpPETyEJ88Rbvi0_TzOzKcQhRqx3gX9BRy5m5M.ttf",
        "300italic": "http://fonts.gstatic.com/s/piazzolla/v6/N0b72SlTPu5rIkWIZjVgI-TckS03oGpPETyEJ88Rbvi0_TzOzKcQhcSx3gX9BRy5m5M.ttf",
        "italic": "http://fonts.gstatic.com/s/piazzolla/v6/N0b72SlTPu5rIkWIZjVgI-TckS03oGpPETyEJ88Rbvi0_TzOzKcQhZqx3gX9BRy5m5M.ttf",
        "500italic": "http://fonts.gstatic.com/s/piazzolla/v6/N0b72SlTPu5rIkWIZjVgI-TckS03oGpPETyEJ88Rbvi0_TzOzKcQhaix3gX9BRy5m5M.ttf",
        "600italic": "http://fonts.gstatic.com/s/piazzolla/v6/N0b72SlTPu5rIkWIZjVgI-TckS03oGpPETyEJ88Rbvi0_TzOzKcQhUS23gX9BRy5m5M.ttf",
        "700italic": "http://fonts.gstatic.com/s/piazzolla/v6/N0b72SlTPu5rIkWIZjVgI-TckS03oGpPETyEJ88Rbvi0_TzOzKcQhX223gX9BRy5m5M.ttf",
        "800italic": "http://fonts.gstatic.com/s/piazzolla/v6/N0b72SlTPu5rIkWIZjVgI-TckS03oGpPETyEJ88Rbvi0_TzOzKcQhRq23gX9BRy5m5M.ttf",
        "900italic": "http://fonts.gstatic.com/s/piazzolla/v6/N0b72SlTPu5rIkWIZjVgI-TckS03oGpPETyEJ88Rbvi0_TzOzKcQhTO23gX9BRy5m5M.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Piedra",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v9",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/piedra/v9/ke8kOg8aN0Bn7hTunEyHN_M3gA.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Pinyon Script",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v11",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/pinyonscript/v11/6xKpdSJbL9-e9LuoeQiDRQR8aOLQO4bhiDY.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Pirata One",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v9",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/pirataone/v9/I_urMpiDvgLdLh0fAtoftiiEr5_BdZ8.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Plaster",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v12",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/plaster/v12/DdTm79QatW80eRh4Ei5JOtLOeLI.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Play",
      "variants": [
        "regular",
        "700"
      ],
      "subsets": [
        "cyrillic",
        "cyrillic-ext",
        "greek",
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v12",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/play/v12/6aez4K2oVqwIjtI8Hp8Tx3A.ttf",
        "700": "http://fonts.gstatic.com/s/play/v12/6ae84K2oVqwItm4TOpc423nTJTM.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Playball",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v10",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/playball/v10/TK3gWksYAxQ7jbsKcj8Dl-tPKo2t.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Playfair Display",
      "variants": [
        "regular",
        "500",
        "600",
        "700",
        "800",
        "900",
        "italic",
        "500italic",
        "600italic",
        "700italic",
        "800italic",
        "900italic"
      ],
      "subsets": [
        "cyrillic",
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v22",
      "lastModified": "2021-01-30",
      "files": {
        "regular": "http://fonts.gstatic.com/s/playfairdisplay/v22/nuFvD-vYSZviVYUb_rj3ij__anPXJzDwcbmjWBN2PKdFvUDQZNLo_U2r.ttf",
        "500": "http://fonts.gstatic.com/s/playfairdisplay/v22/nuFvD-vYSZviVYUb_rj3ij__anPXJzDwcbmjWBN2PKd3vUDQZNLo_U2r.ttf",
        "600": "http://fonts.gstatic.com/s/playfairdisplay/v22/nuFvD-vYSZviVYUb_rj3ij__anPXJzDwcbmjWBN2PKebukDQZNLo_U2r.ttf",
        "700": "http://fonts.gstatic.com/s/playfairdisplay/v22/nuFvD-vYSZviVYUb_rj3ij__anPXJzDwcbmjWBN2PKeiukDQZNLo_U2r.ttf",
        "800": "http://fonts.gstatic.com/s/playfairdisplay/v22/nuFvD-vYSZviVYUb_rj3ij__anPXJzDwcbmjWBN2PKfFukDQZNLo_U2r.ttf",
        "900": "http://fonts.gstatic.com/s/playfairdisplay/v22/nuFvD-vYSZviVYUb_rj3ij__anPXJzDwcbmjWBN2PKfsukDQZNLo_U2r.ttf",
        "italic": "http://fonts.gstatic.com/s/playfairdisplay/v22/nuFRD-vYSZviVYUb_rj3ij__anPXDTnCjmHKM4nYO7KN_qiTbtbK-F2rA0s.ttf",
        "500italic": "http://fonts.gstatic.com/s/playfairdisplay/v22/nuFRD-vYSZviVYUb_rj3ij__anPXDTnCjmHKM4nYO7KN_pqTbtbK-F2rA0s.ttf",
        "600italic": "http://fonts.gstatic.com/s/playfairdisplay/v22/nuFRD-vYSZviVYUb_rj3ij__anPXDTnCjmHKM4nYO7KN_naUbtbK-F2rA0s.ttf",
        "700italic": "http://fonts.gstatic.com/s/playfairdisplay/v22/nuFRD-vYSZviVYUb_rj3ij__anPXDTnCjmHKM4nYO7KN_k-UbtbK-F2rA0s.ttf",
        "800italic": "http://fonts.gstatic.com/s/playfairdisplay/v22/nuFRD-vYSZviVYUb_rj3ij__anPXDTnCjmHKM4nYO7KN_iiUbtbK-F2rA0s.ttf",
        "900italic": "http://fonts.gstatic.com/s/playfairdisplay/v22/nuFRD-vYSZviVYUb_rj3ij__anPXDTnCjmHKM4nYO7KN_gGUbtbK-F2rA0s.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Playfair Display SC",
      "variants": [
        "regular",
        "italic",
        "700",
        "700italic",
        "900",
        "900italic"
      ],
      "subsets": [
        "cyrillic",
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v10",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/playfairdisplaysc/v10/ke85OhoaMkR6-hSn7kbHVoFf7ZfgMPr_pb4GEcM2M4s.ttf",
        "italic": "http://fonts.gstatic.com/s/playfairdisplaysc/v10/ke87OhoaMkR6-hSn7kbHVoFf7ZfgMPr_lbwMFeEzI4sNKg.ttf",
        "700": "http://fonts.gstatic.com/s/playfairdisplaysc/v10/ke80OhoaMkR6-hSn7kbHVoFf7ZfgMPr_nQIpNcsdL4IUMyE.ttf",
        "700italic": "http://fonts.gstatic.com/s/playfairdisplaysc/v10/ke82OhoaMkR6-hSn7kbHVoFf7ZfgMPr_lbw0qc4XK6ARIyH5IA.ttf",
        "900": "http://fonts.gstatic.com/s/playfairdisplaysc/v10/ke80OhoaMkR6-hSn7kbHVoFf7ZfgMPr_nTorNcsdL4IUMyE.ttf",
        "900italic": "http://fonts.gstatic.com/s/playfairdisplaysc/v10/ke82OhoaMkR6-hSn7kbHVoFf7ZfgMPr_lbw0kcwXK6ARIyH5IA.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Podkova",
      "variants": [
        "regular",
        "500",
        "600",
        "700",
        "800"
      ],
      "subsets": [
        "cyrillic",
        "cyrillic-ext",
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v18",
      "lastModified": "2021-01-30",
      "files": {
        "regular": "http://fonts.gstatic.com/s/podkova/v18/K2FufZ1EmftJSV9VQpXb1lo9vC3nZWtFzcU4EoporSHH.ttf",
        "500": "http://fonts.gstatic.com/s/podkova/v18/K2FufZ1EmftJSV9VQpXb1lo9vC3nZWt3zcU4EoporSHH.ttf",
        "600": "http://fonts.gstatic.com/s/podkova/v18/K2FufZ1EmftJSV9VQpXb1lo9vC3nZWubysU4EoporSHH.ttf",
        "700": "http://fonts.gstatic.com/s/podkova/v18/K2FufZ1EmftJSV9VQpXb1lo9vC3nZWuiysU4EoporSHH.ttf",
        "800": "http://fonts.gstatic.com/s/podkova/v18/K2FufZ1EmftJSV9VQpXb1lo9vC3nZWvFysU4EoporSHH.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Poiret One",
      "variants": [
        "regular"
      ],
      "subsets": [
        "cyrillic",
        "latin",
        "latin-ext"
      ],
      "version": "v9",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/poiretone/v9/UqyVK80NJXN4zfRgbdfbk5lWVscxdKE.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Poller One",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v10",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/pollerone/v10/ahccv82n0TN3gia5E4Bud-lbgUS5u0s.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Poly",
      "variants": [
        "regular",
        "italic"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v11",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/poly/v11/MQpb-W6wKNitRLCAq2Lpris.ttf",
        "italic": "http://fonts.gstatic.com/s/poly/v11/MQpV-W6wKNitdLKKr0DsviuGWA.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Pompiere",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v10",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/pompiere/v10/VEMyRoxis5Dwuyeov6Wt5jDtreOL.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Pontano Sans",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v8",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/pontanosans/v8/qFdD35GdgYR8EzR6oBLDHa3qwjUMg1siNQ.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Poor Story",
      "variants": [
        "regular"
      ],
      "subsets": [
        "korean",
        "latin"
      ],
      "version": "v8",
      "lastModified": "2019-07-16",
      "files": {
        "regular": "http://fonts.gstatic.com/s/poorstory/v8/jizfREFUsnUct9P6cDfd4OmnLD0Z4zM.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Poppins",
      "variants": [
        "100",
        "100italic",
        "200",
        "200italic",
        "300",
        "300italic",
        "regular",
        "italic",
        "500",
        "500italic",
        "600",
        "600italic",
        "700",
        "700italic",
        "800",
        "800italic",
        "900",
        "900italic"
      ],
      "subsets": [
        "devanagari",
        "latin",
        "latin-ext"
      ],
      "version": "v15",
      "lastModified": "2020-11-06",
      "files": {
        "100": "http://fonts.gstatic.com/s/poppins/v15/pxiGyp8kv8JHgFVrLPTed3FBGPaTSQ.ttf",
        "100italic": "http://fonts.gstatic.com/s/poppins/v15/pxiAyp8kv8JHgFVrJJLmE3tFOvODSVFF.ttf",
        "200": "http://fonts.gstatic.com/s/poppins/v15/pxiByp8kv8JHgFVrLFj_V1tvFP-KUEg.ttf",
        "200italic": "http://fonts.gstatic.com/s/poppins/v15/pxiDyp8kv8JHgFVrJJLmv1plEN2PQEhcqw.ttf",
        "300": "http://fonts.gstatic.com/s/poppins/v15/pxiByp8kv8JHgFVrLDz8V1tvFP-KUEg.ttf",
        "300italic": "http://fonts.gstatic.com/s/poppins/v15/pxiDyp8kv8JHgFVrJJLm21llEN2PQEhcqw.ttf",
        "regular": "http://fonts.gstatic.com/s/poppins/v15/pxiEyp8kv8JHgFVrFJDUc1NECPY.ttf",
        "italic": "http://fonts.gstatic.com/s/poppins/v15/pxiGyp8kv8JHgFVrJJLed3FBGPaTSQ.ttf",
        "500": "http://fonts.gstatic.com/s/poppins/v15/pxiByp8kv8JHgFVrLGT9V1tvFP-KUEg.ttf",
        "500italic": "http://fonts.gstatic.com/s/poppins/v15/pxiDyp8kv8JHgFVrJJLmg1hlEN2PQEhcqw.ttf",
        "600": "http://fonts.gstatic.com/s/poppins/v15/pxiByp8kv8JHgFVrLEj6V1tvFP-KUEg.ttf",
        "600italic": "http://fonts.gstatic.com/s/poppins/v15/pxiDyp8kv8JHgFVrJJLmr19lEN2PQEhcqw.ttf",
        "700": "http://fonts.gstatic.com/s/poppins/v15/pxiByp8kv8JHgFVrLCz7V1tvFP-KUEg.ttf",
        "700italic": "http://fonts.gstatic.com/s/poppins/v15/pxiDyp8kv8JHgFVrJJLmy15lEN2PQEhcqw.ttf",
        "800": "http://fonts.gstatic.com/s/poppins/v15/pxiByp8kv8JHgFVrLDD4V1tvFP-KUEg.ttf",
        "800italic": "http://fonts.gstatic.com/s/poppins/v15/pxiDyp8kv8JHgFVrJJLm111lEN2PQEhcqw.ttf",
        "900": "http://fonts.gstatic.com/s/poppins/v15/pxiByp8kv8JHgFVrLBT5V1tvFP-KUEg.ttf",
        "900italic": "http://fonts.gstatic.com/s/poppins/v15/pxiDyp8kv8JHgFVrJJLm81xlEN2PQEhcqw.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Port Lligat Sans",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v9",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/portlligatsans/v9/kmKmZrYrGBbdN1aV7Vokow6Lw4s4l7N0Tx4xEcQ.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Port Lligat Slab",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v9",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/portlligatslab/v9/LDIpaoiQNgArA8kR7ulhZ8P_NYOss7ob9yGLmfI.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Potta One",
      "variants": [
        "regular"
      ],
      "subsets": [
        "japanese",
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v3",
      "lastModified": "2021-01-21",
      "files": {
        "regular": "http://fonts.gstatic.com/s/pottaone/v3/FeVSS05Bp6cy7xI-YfxQ3Z5nm29Gww.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Pragati Narrow",
      "variants": [
        "regular",
        "700"
      ],
      "subsets": [
        "devanagari",
        "latin",
        "latin-ext"
      ],
      "version": "v7",
      "lastModified": "2020-09-25",
      "files": {
        "regular": "http://fonts.gstatic.com/s/pragatinarrow/v7/vm8vdRf0T0bS1ffgsPB7WZ-mD17_ytN3M48a.ttf",
        "700": "http://fonts.gstatic.com/s/pragatinarrow/v7/vm8sdRf0T0bS1ffgsPB7WZ-mD2ZD5fd_GJMTlo_4.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Prata",
      "variants": [
        "regular"
      ],
      "subsets": [
        "cyrillic",
        "cyrillic-ext",
        "latin",
        "vietnamese"
      ],
      "version": "v13",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/prata/v13/6xKhdSpbNNCT-vWIAG_5LWwJ.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Preahvihear",
      "variants": [
        "regular"
      ],
      "subsets": [
        "khmer"
      ],
      "version": "v12",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/preahvihear/v12/6NUS8F-dNQeEYhzj7uluxswE49FJf8Wv.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Press Start 2P",
      "variants": [
        "regular"
      ],
      "subsets": [
        "cyrillic",
        "cyrillic-ext",
        "greek",
        "latin",
        "latin-ext"
      ],
      "version": "v9",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/pressstart2p/v9/e3t4euO8T-267oIAQAu6jDQyK0nSgPJE4580.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Pridi",
      "variants": [
        "200",
        "300",
        "regular",
        "500",
        "600",
        "700"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "thai",
        "vietnamese"
      ],
      "version": "v6",
      "lastModified": "2020-09-02",
      "files": {
        "200": "http://fonts.gstatic.com/s/pridi/v6/2sDdZG5JnZLfkc1SiE0jRUG0AqUc.ttf",
        "300": "http://fonts.gstatic.com/s/pridi/v6/2sDdZG5JnZLfkc02i00jRUG0AqUc.ttf",
        "regular": "http://fonts.gstatic.com/s/pridi/v6/2sDQZG5JnZLfkfWao2krbl29.ttf",
        "500": "http://fonts.gstatic.com/s/pridi/v6/2sDdZG5JnZLfkc1uik0jRUG0AqUc.ttf",
        "600": "http://fonts.gstatic.com/s/pridi/v6/2sDdZG5JnZLfkc1CjU0jRUG0AqUc.ttf",
        "700": "http://fonts.gstatic.com/s/pridi/v6/2sDdZG5JnZLfkc0mjE0jRUG0AqUc.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Princess Sofia",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v9",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/princesssofia/v9/qWczB6yguIb8DZ_GXZst16n7GRz7mDUoupoI.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Prociono",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v10",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/prociono/v10/r05YGLlR-KxAf9GGO8upyDYtStiJ.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Prompt",
      "variants": [
        "100",
        "100italic",
        "200",
        "200italic",
        "300",
        "300italic",
        "regular",
        "italic",
        "500",
        "500italic",
        "600",
        "600italic",
        "700",
        "700italic",
        "800",
        "800italic",
        "900",
        "900italic"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "thai",
        "vietnamese"
      ],
      "version": "v4",
      "lastModified": "2019-07-17",
      "files": {
        "100": "http://fonts.gstatic.com/s/prompt/v4/-W_9XJnvUD7dzB2CA9oYREcjeo0k.ttf",
        "100italic": "http://fonts.gstatic.com/s/prompt/v4/-W_7XJnvUD7dzB2KZeJ8TkMBf50kbiM.ttf",
        "200": "http://fonts.gstatic.com/s/prompt/v4/-W_8XJnvUD7dzB2Cr_s4bmkvc5Q9dw.ttf",
        "200italic": "http://fonts.gstatic.com/s/prompt/v4/-W_6XJnvUD7dzB2KZeLQb2MrUZEtdzow.ttf",
        "300": "http://fonts.gstatic.com/s/prompt/v4/-W_8XJnvUD7dzB2Cy_g4bmkvc5Q9dw.ttf",
        "300italic": "http://fonts.gstatic.com/s/prompt/v4/-W_6XJnvUD7dzB2KZeK0bGMrUZEtdzow.ttf",
        "regular": "http://fonts.gstatic.com/s/prompt/v4/-W__XJnvUD7dzB26Z9AcZkIzeg.ttf",
        "italic": "http://fonts.gstatic.com/s/prompt/v4/-W_9XJnvUD7dzB2KZdoYREcjeo0k.ttf",
        "500": "http://fonts.gstatic.com/s/prompt/v4/-W_8XJnvUD7dzB2Ck_k4bmkvc5Q9dw.ttf",
        "500italic": "http://fonts.gstatic.com/s/prompt/v4/-W_6XJnvUD7dzB2KZeLsbWMrUZEtdzow.ttf",
        "600": "http://fonts.gstatic.com/s/prompt/v4/-W_8XJnvUD7dzB2Cv_44bmkvc5Q9dw.ttf",
        "600italic": "http://fonts.gstatic.com/s/prompt/v4/-W_6XJnvUD7dzB2KZeLAamMrUZEtdzow.ttf",
        "700": "http://fonts.gstatic.com/s/prompt/v4/-W_8XJnvUD7dzB2C2_84bmkvc5Q9dw.ttf",
        "700italic": "http://fonts.gstatic.com/s/prompt/v4/-W_6XJnvUD7dzB2KZeKka2MrUZEtdzow.ttf",
        "800": "http://fonts.gstatic.com/s/prompt/v4/-W_8XJnvUD7dzB2Cx_w4bmkvc5Q9dw.ttf",
        "800italic": "http://fonts.gstatic.com/s/prompt/v4/-W_6XJnvUD7dzB2KZeK4aGMrUZEtdzow.ttf",
        "900": "http://fonts.gstatic.com/s/prompt/v4/-W_8XJnvUD7dzB2C4_04bmkvc5Q9dw.ttf",
        "900italic": "http://fonts.gstatic.com/s/prompt/v4/-W_6XJnvUD7dzB2KZeKcaWMrUZEtdzow.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Prosto One",
      "variants": [
        "regular"
      ],
      "subsets": [
        "cyrillic",
        "latin",
        "latin-ext"
      ],
      "version": "v9",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/prostoone/v9/OpNJno4VhNfK-RgpwWWxpipfWhXD00c.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Proza Libre",
      "variants": [
        "regular",
        "italic",
        "500",
        "500italic",
        "600",
        "600italic",
        "700",
        "700italic",
        "800",
        "800italic"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v5",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/prozalibre/v5/LYjGdGHgj0k1DIQRyUEyyHovftvXWYyz.ttf",
        "italic": "http://fonts.gstatic.com/s/prozalibre/v5/LYjEdGHgj0k1DIQRyUEyyEotdN_1XJyz7zc.ttf",
        "500": "http://fonts.gstatic.com/s/prozalibre/v5/LYjbdGHgj0k1DIQRyUEyyELbV__fcpC69i6N.ttf",
        "500italic": "http://fonts.gstatic.com/s/prozalibre/v5/LYjZdGHgj0k1DIQRyUEyyEotTCvceJSY8z6Np1k.ttf",
        "600": "http://fonts.gstatic.com/s/prozalibre/v5/LYjbdGHgj0k1DIQRyUEyyEL3UP_fcpC69i6N.ttf",
        "600italic": "http://fonts.gstatic.com/s/prozalibre/v5/LYjZdGHgj0k1DIQRyUEyyEotTAfbeJSY8z6Np1k.ttf",
        "700": "http://fonts.gstatic.com/s/prozalibre/v5/LYjbdGHgj0k1DIQRyUEyyEKTUf_fcpC69i6N.ttf",
        "700italic": "http://fonts.gstatic.com/s/prozalibre/v5/LYjZdGHgj0k1DIQRyUEyyEotTGPaeJSY8z6Np1k.ttf",
        "800": "http://fonts.gstatic.com/s/prozalibre/v5/LYjbdGHgj0k1DIQRyUEyyEKPUv_fcpC69i6N.ttf",
        "800italic": "http://fonts.gstatic.com/s/prozalibre/v5/LYjZdGHgj0k1DIQRyUEyyEotTH_ZeJSY8z6Np1k.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Public Sans",
      "variants": [
        "100",
        "200",
        "300",
        "regular",
        "500",
        "600",
        "700",
        "800",
        "900",
        "100italic",
        "200italic",
        "300italic",
        "italic",
        "500italic",
        "600italic",
        "700italic",
        "800italic",
        "900italic"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v5",
      "lastModified": "2021-01-30",
      "files": {
        "100": "http://fonts.gstatic.com/s/publicsans/v5/ijwGs572Xtc6ZYQws9YVwllKVG8qX1oyOymuFpi5ww0pX189fg.ttf",
        "200": "http://fonts.gstatic.com/s/publicsans/v5/ijwGs572Xtc6ZYQws9YVwllKVG8qX1oyOymulpm5ww0pX189fg.ttf",
        "300": "http://fonts.gstatic.com/s/publicsans/v5/ijwGs572Xtc6ZYQws9YVwllKVG8qX1oyOymuSJm5ww0pX189fg.ttf",
        "regular": "http://fonts.gstatic.com/s/publicsans/v5/ijwGs572Xtc6ZYQws9YVwllKVG8qX1oyOymuFpm5ww0pX189fg.ttf",
        "500": "http://fonts.gstatic.com/s/publicsans/v5/ijwGs572Xtc6ZYQws9YVwllKVG8qX1oyOymuJJm5ww0pX189fg.ttf",
        "600": "http://fonts.gstatic.com/s/publicsans/v5/ijwGs572Xtc6ZYQws9YVwllKVG8qX1oyOymuyJ65ww0pX189fg.ttf",
        "700": "http://fonts.gstatic.com/s/publicsans/v5/ijwGs572Xtc6ZYQws9YVwllKVG8qX1oyOymu8Z65ww0pX189fg.ttf",
        "800": "http://fonts.gstatic.com/s/publicsans/v5/ijwGs572Xtc6ZYQws9YVwllKVG8qX1oyOymulp65ww0pX189fg.ttf",
        "900": "http://fonts.gstatic.com/s/publicsans/v5/ijwGs572Xtc6ZYQws9YVwllKVG8qX1oyOymuv565ww0pX189fg.ttf",
        "100italic": "http://fonts.gstatic.com/s/publicsans/v5/ijwAs572Xtc6ZYQws9YVwnNDZpDyNjGolS673tpRgQctfVotfj7j.ttf",
        "200italic": "http://fonts.gstatic.com/s/publicsans/v5/ijwAs572Xtc6ZYQws9YVwnNDZpDyNjGolS673trRgActfVotfj7j.ttf",
        "300italic": "http://fonts.gstatic.com/s/publicsans/v5/ijwAs572Xtc6ZYQws9YVwnNDZpDyNjGolS673toPgActfVotfj7j.ttf",
        "italic": "http://fonts.gstatic.com/s/publicsans/v5/ijwAs572Xtc6ZYQws9YVwnNDZpDyNjGolS673tpRgActfVotfj7j.ttf",
        "500italic": "http://fonts.gstatic.com/s/publicsans/v5/ijwAs572Xtc6ZYQws9YVwnNDZpDyNjGolS673tpjgActfVotfj7j.ttf",
        "600italic": "http://fonts.gstatic.com/s/publicsans/v5/ijwAs572Xtc6ZYQws9YVwnNDZpDyNjGolS673tqPhwctfVotfj7j.ttf",
        "700italic": "http://fonts.gstatic.com/s/publicsans/v5/ijwAs572Xtc6ZYQws9YVwnNDZpDyNjGolS673tq2hwctfVotfj7j.ttf",
        "800italic": "http://fonts.gstatic.com/s/publicsans/v5/ijwAs572Xtc6ZYQws9YVwnNDZpDyNjGolS673trRhwctfVotfj7j.ttf",
        "900italic": "http://fonts.gstatic.com/s/publicsans/v5/ijwAs572Xtc6ZYQws9YVwnNDZpDyNjGolS673tr4hwctfVotfj7j.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Puritan",
      "variants": [
        "regular",
        "italic",
        "700",
        "700italic"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v12",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/puritan/v12/845YNMgkAJ2VTtIo9JrwRdaI50M.ttf",
        "italic": "http://fonts.gstatic.com/s/puritan/v12/845aNMgkAJ2VTtIoxJj6QfSN90PfXA.ttf",
        "700": "http://fonts.gstatic.com/s/puritan/v12/845dNMgkAJ2VTtIozCbfYd6j-0rGRes.ttf",
        "700italic": "http://fonts.gstatic.com/s/puritan/v12/845fNMgkAJ2VTtIoxJjC_dup_2jDVevnLQ.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Purple Purse",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v9",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/purplepurse/v9/qWctB66gv53iAp-Vfs4My6qyeBb_ujA4ug.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Quando",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v9",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/quando/v9/xMQVuFNaVa6YuW0pC6WzKX_QmA.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Quantico",
      "variants": [
        "regular",
        "italic",
        "700",
        "700italic"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v10",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/quantico/v10/rax-HiSdp9cPL3KIF4xsLjxSmlLZ.ttf",
        "italic": "http://fonts.gstatic.com/s/quantico/v10/rax4HiSdp9cPL3KIF7xuJDhwn0LZ6T8.ttf",
        "700": "http://fonts.gstatic.com/s/quantico/v10/rax5HiSdp9cPL3KIF7TQARhasU7Q8Cad.ttf",
        "700italic": "http://fonts.gstatic.com/s/quantico/v10/rax7HiSdp9cPL3KIF7xuHIRfu0ry9TadML4.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Quattrocento",
      "variants": [
        "regular",
        "700"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v12",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/quattrocento/v12/OZpEg_xvsDZQL_LKIF7q4jPHxGL7f4jFuA.ttf",
        "700": "http://fonts.gstatic.com/s/quattrocento/v12/OZpbg_xvsDZQL_LKIF7q4jP_eE3fd6PZsXcM9w.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Quattrocento Sans",
      "variants": [
        "regular",
        "italic",
        "700",
        "700italic"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v13",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/quattrocentosans/v13/va9c4lja2NVIDdIAAoMR5MfuElaRB3zOvU7eHGHJ.ttf",
        "italic": "http://fonts.gstatic.com/s/quattrocentosans/v13/va9a4lja2NVIDdIAAoMR5MfuElaRB0zMt0r8GXHJkLI.ttf",
        "700": "http://fonts.gstatic.com/s/quattrocentosans/v13/va9Z4lja2NVIDdIAAoMR5MfuElaRB0RykmrWN33AiasJ.ttf",
        "700italic": "http://fonts.gstatic.com/s/quattrocentosans/v13/va9X4lja2NVIDdIAAoMR5MfuElaRB0zMj_bTPXnijLsJV7E.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Questrial",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v12",
      "lastModified": "2020-09-25",
      "files": {
        "regular": "http://fonts.gstatic.com/s/questrial/v12/QdVUSTchPBm7nuUeVf7EuStkm20oJA.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Quicksand",
      "variants": [
        "300",
        "regular",
        "500",
        "600",
        "700"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v22",
      "lastModified": "2021-01-30",
      "files": {
        "300": "http://fonts.gstatic.com/s/quicksand/v22/6xK-dSZaM9iE8KbpRA_LJ3z8mH9BOJvgkKEo18G0wx40QDw.ttf",
        "regular": "http://fonts.gstatic.com/s/quicksand/v22/6xK-dSZaM9iE8KbpRA_LJ3z8mH9BOJvgkP8o18G0wx40QDw.ttf",
        "500": "http://fonts.gstatic.com/s/quicksand/v22/6xK-dSZaM9iE8KbpRA_LJ3z8mH9BOJvgkM0o18G0wx40QDw.ttf",
        "600": "http://fonts.gstatic.com/s/quicksand/v22/6xK-dSZaM9iE8KbpRA_LJ3z8mH9BOJvgkCEv18G0wx40QDw.ttf",
        "700": "http://fonts.gstatic.com/s/quicksand/v22/6xK-dSZaM9iE8KbpRA_LJ3z8mH9BOJvgkBgv18G0wx40QDw.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Quintessential",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v8",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/quintessential/v8/fdNn9sOGq31Yjnh3qWU14DdtjY5wS7kmAyxM.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Qwigley",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v10",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/qwigley/v10/1cXzaU3UGJb5tGoCuVxsi1mBmcE.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Racing Sans One",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v8",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/racingsansone/v8/sykr-yRtm7EvTrXNxkv5jfKKyDCwL3rmWpIBtA.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Radley",
      "variants": [
        "regular",
        "italic"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v15",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/radley/v15/LYjDdGzinEIjCN19oAlEpVs3VQ.ttf",
        "italic": "http://fonts.gstatic.com/s/radley/v15/LYjBdGzinEIjCN1NogNAh14nVcfe.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Rajdhani",
      "variants": [
        "300",
        "regular",
        "500",
        "600",
        "700"
      ],
      "subsets": [
        "devanagari",
        "latin",
        "latin-ext"
      ],
      "version": "v10",
      "lastModified": "2020-09-02",
      "files": {
        "300": "http://fonts.gstatic.com/s/rajdhani/v10/LDI2apCSOBg7S-QT7pasEcOsc-bGkqIw.ttf",
        "regular": "http://fonts.gstatic.com/s/rajdhani/v10/LDIxapCSOBg7S-QT7q4AOeekWPrP.ttf",
        "500": "http://fonts.gstatic.com/s/rajdhani/v10/LDI2apCSOBg7S-QT7pb0EMOsc-bGkqIw.ttf",
        "600": "http://fonts.gstatic.com/s/rajdhani/v10/LDI2apCSOBg7S-QT7pbYF8Osc-bGkqIw.ttf",
        "700": "http://fonts.gstatic.com/s/rajdhani/v10/LDI2apCSOBg7S-QT7pa8FsOsc-bGkqIw.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Rakkas",
      "variants": [
        "regular"
      ],
      "subsets": [
        "arabic",
        "latin",
        "latin-ext"
      ],
      "version": "v9",
      "lastModified": "2020-09-25",
      "files": {
        "regular": "http://fonts.gstatic.com/s/rakkas/v9/Qw3cZQlNHiblL3j_lttPOeMcCw.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Raleway",
      "variants": [
        "100",
        "200",
        "300",
        "regular",
        "500",
        "600",
        "700",
        "800",
        "900",
        "100italic",
        "200italic",
        "300italic",
        "italic",
        "500italic",
        "600italic",
        "700italic",
        "800italic",
        "900italic"
      ],
      "subsets": [
        "cyrillic",
        "cyrillic-ext",
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v19",
      "lastModified": "2021-01-30",
      "files": {
        "100": "http://fonts.gstatic.com/s/raleway/v19/1Ptxg8zYS_SKggPN4iEgvnHyvveLxVvao4CPNLA3JC9c.ttf",
        "200": "http://fonts.gstatic.com/s/raleway/v19/1Ptxg8zYS_SKggPN4iEgvnHyvveLxVtaooCPNLA3JC9c.ttf",
        "300": "http://fonts.gstatic.com/s/raleway/v19/1Ptxg8zYS_SKggPN4iEgvnHyvveLxVuEooCPNLA3JC9c.ttf",
        "regular": "http://fonts.gstatic.com/s/raleway/v19/1Ptxg8zYS_SKggPN4iEgvnHyvveLxVvaooCPNLA3JC9c.ttf",
        "500": "http://fonts.gstatic.com/s/raleway/v19/1Ptxg8zYS_SKggPN4iEgvnHyvveLxVvoooCPNLA3JC9c.ttf",
        "600": "http://fonts.gstatic.com/s/raleway/v19/1Ptxg8zYS_SKggPN4iEgvnHyvveLxVsEpYCPNLA3JC9c.ttf",
        "700": "http://fonts.gstatic.com/s/raleway/v19/1Ptxg8zYS_SKggPN4iEgvnHyvveLxVs9pYCPNLA3JC9c.ttf",
        "800": "http://fonts.gstatic.com/s/raleway/v19/1Ptxg8zYS_SKggPN4iEgvnHyvveLxVtapYCPNLA3JC9c.ttf",
        "900": "http://fonts.gstatic.com/s/raleway/v19/1Ptxg8zYS_SKggPN4iEgvnHyvveLxVtzpYCPNLA3JC9c.ttf",
        "100italic": "http://fonts.gstatic.com/s/raleway/v19/1Pt_g8zYS_SKggPNyCgSQamb1W0lwk4S4WjNPrQVIT9c2c8.ttf",
        "200italic": "http://fonts.gstatic.com/s/raleway/v19/1Pt_g8zYS_SKggPNyCgSQamb1W0lwk4S4ejMPrQVIT9c2c8.ttf",
        "300italic": "http://fonts.gstatic.com/s/raleway/v19/1Pt_g8zYS_SKggPNyCgSQamb1W0lwk4S4TbMPrQVIT9c2c8.ttf",
        "italic": "http://fonts.gstatic.com/s/raleway/v19/1Pt_g8zYS_SKggPNyCgSQamb1W0lwk4S4WjMPrQVIT9c2c8.ttf",
        "500italic": "http://fonts.gstatic.com/s/raleway/v19/1Pt_g8zYS_SKggPNyCgSQamb1W0lwk4S4VrMPrQVIT9c2c8.ttf",
        "600italic": "http://fonts.gstatic.com/s/raleway/v19/1Pt_g8zYS_SKggPNyCgSQamb1W0lwk4S4bbLPrQVIT9c2c8.ttf",
        "700italic": "http://fonts.gstatic.com/s/raleway/v19/1Pt_g8zYS_SKggPNyCgSQamb1W0lwk4S4Y_LPrQVIT9c2c8.ttf",
        "800italic": "http://fonts.gstatic.com/s/raleway/v19/1Pt_g8zYS_SKggPNyCgSQamb1W0lwk4S4ejLPrQVIT9c2c8.ttf",
        "900italic": "http://fonts.gstatic.com/s/raleway/v19/1Pt_g8zYS_SKggPNyCgSQamb1W0lwk4S4cHLPrQVIT9c2c8.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Raleway Dots",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v8",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/ralewaydots/v8/6NUR8FifJg6AfQvzpshgwJ8kyf9Fdty2ew.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Ramabhadra",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "telugu"
      ],
      "version": "v10",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/ramabhadra/v10/EYq2maBOwqRW9P1SQ83LehNGX5uWw3o.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Ramaraja",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "telugu"
      ],
      "version": "v5",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/ramaraja/v5/SlGTmQearpYAYG1CABIkqnB6aSQU.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Rambla",
      "variants": [
        "regular",
        "italic",
        "700",
        "700italic"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v8",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/rambla/v8/snfrs0ip98hx6mr0I7IONthkwQ.ttf",
        "italic": "http://fonts.gstatic.com/s/rambla/v8/snfps0ip98hx6mrEIbgKFN10wYKa.ttf",
        "700": "http://fonts.gstatic.com/s/rambla/v8/snfos0ip98hx6mrMn50qPvN4yJuDYQ.ttf",
        "700italic": "http://fonts.gstatic.com/s/rambla/v8/snfus0ip98hx6mrEIYC2O_l86p6TYS-Y.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Rammetto One",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v9",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/rammettoone/v9/LhWiMV3HOfMbMetJG3lQDpp9Mvuciu-_SQ.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Ranchers",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v8",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/ranchers/v8/zrfm0H3Lx-P2Xvs2AoDYDC79XTHv.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Rancho",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v11",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/rancho/v11/46kulbzmXjLaqZRlbWXgd0RY1g.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Ranga",
      "variants": [
        "regular",
        "700"
      ],
      "subsets": [
        "devanagari",
        "latin",
        "latin-ext"
      ],
      "version": "v6",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/ranga/v6/C8ct4cYisGb28p6CLDwZwmGE.ttf",
        "700": "http://fonts.gstatic.com/s/ranga/v6/C8cg4cYisGb28qY-AxgR6X2NZAn2.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Rasa",
      "variants": [
        "300",
        "regular",
        "500",
        "600",
        "700"
      ],
      "subsets": [
        "gujarati",
        "latin",
        "latin-ext"
      ],
      "version": "v6",
      "lastModified": "2020-07-23",
      "files": {
        "300": "http://fonts.gstatic.com/s/rasa/v6/xn7gYHIn1mWmdg52sgC7S9XdZN8.ttf",
        "regular": "http://fonts.gstatic.com/s/rasa/v6/xn7vYHIn1mWmTqJelgiQV9w.ttf",
        "500": "http://fonts.gstatic.com/s/rasa/v6/xn7gYHIn1mWmdlZ3sgC7S9XdZN8.ttf",
        "600": "http://fonts.gstatic.com/s/rasa/v6/xn7gYHIn1mWmdnpwsgC7S9XdZN8.ttf",
        "700": "http://fonts.gstatic.com/s/rasa/v6/xn7gYHIn1mWmdh5xsgC7S9XdZN8.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Rationale",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v12",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/rationale/v12/9XUnlJ92n0_JFxHIfHcsdlFMzLC2Zw.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Ravi Prakash",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "telugu"
      ],
      "version": "v7",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/raviprakash/v7/gokpH6fsDkVrF9Bv9X8SOAKHmNZEq6TTFw.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Recursive",
      "variants": [
        "300",
        "regular",
        "500",
        "600",
        "700",
        "800",
        "900"
      ],
      "subsets": [
        "latin",
        "vietnamese"
      ],
      "version": "v23",
      "lastModified": "2021-01-30",
      "files": {
        "300": "http://fonts.gstatic.com/s/recursive/v23/8vJN7wMr0mhh-RQChyHEH06TlXhq_gukbYrFMk1QuAIcyEwG_X-dpEfaE5YaERmK-CImKsvxvU-MXGX2fSqasNfUvz2xbXfn1uEQadDck018vwxjDJCL.ttf",
        "regular": "http://fonts.gstatic.com/s/recursive/v23/8vJN7wMr0mhh-RQChyHEH06TlXhq_gukbYrFMk1QuAIcyEwG_X-dpEfaE5YaERmK-CImKsvxvU-MXGX2fSqasNfUvz2xbXfn1uEQadCCk018vwxjDJCL.ttf",
        "500": "http://fonts.gstatic.com/s/recursive/v23/8vJN7wMr0mhh-RQChyHEH06TlXhq_gukbYrFMk1QuAIcyEwG_X-dpEfaE5YaERmK-CImKsvxvU-MXGX2fSqasNfUvz2xbXfn1uEQadCwk018vwxjDJCL.ttf",
        "600": "http://fonts.gstatic.com/s/recursive/v23/8vJN7wMr0mhh-RQChyHEH06TlXhq_gukbYrFMk1QuAIcyEwG_X-dpEfaE5YaERmK-CImKsvxvU-MXGX2fSqasNfUvz2xbXfn1uEQadBclE18vwxjDJCL.ttf",
        "700": "http://fonts.gstatic.com/s/recursive/v23/8vJN7wMr0mhh-RQChyHEH06TlXhq_gukbYrFMk1QuAIcyEwG_X-dpEfaE5YaERmK-CImKsvxvU-MXGX2fSqasNfUvz2xbXfn1uEQadBllE18vwxjDJCL.ttf",
        "800": "http://fonts.gstatic.com/s/recursive/v23/8vJN7wMr0mhh-RQChyHEH06TlXhq_gukbYrFMk1QuAIcyEwG_X-dpEfaE5YaERmK-CImKsvxvU-MXGX2fSqasNfUvz2xbXfn1uEQadAClE18vwxjDJCL.ttf",
        "900": "http://fonts.gstatic.com/s/recursive/v23/8vJN7wMr0mhh-RQChyHEH06TlXhq_gukbYrFMk1QuAIcyEwG_X-dpEfaE5YaERmK-CImKsvxvU-MXGX2fSqasNfUvz2xbXfn1uEQadArlE18vwxjDJCL.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Red Hat Display",
      "variants": [
        "regular",
        "italic",
        "500",
        "500italic",
        "700",
        "700italic",
        "900",
        "900italic"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v4",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/redhatdisplay/v4/8vIQ7wUr0m80wwYf0QCXZzYzUoTQ-jSgZYvdCQ.ttf",
        "italic": "http://fonts.gstatic.com/s/redhatdisplay/v4/8vIS7wUr0m80wwYf0QCXZzYzUoTg-D6kR47NCV5Z.ttf",
        "500": "http://fonts.gstatic.com/s/redhatdisplay/v4/8vIV7wUr0m80wwYf0QCXZzYzUoToDh2EbaDBAEdAbw.ttf",
        "500italic": "http://fonts.gstatic.com/s/redhatdisplay/v4/8vIX7wUr0m80wwYf0QCXZzYzUoTg-AZQbqrFIkJQb7zU.ttf",
        "700": "http://fonts.gstatic.com/s/redhatdisplay/v4/8vIV7wUr0m80wwYf0QCXZzYzUoToRhuEbaDBAEdAbw.ttf",
        "700italic": "http://fonts.gstatic.com/s/redhatdisplay/v4/8vIX7wUr0m80wwYf0QCXZzYzUoTg-AYYaKrFIkJQb7zU.ttf",
        "900": "http://fonts.gstatic.com/s/redhatdisplay/v4/8vIV7wUr0m80wwYf0QCXZzYzUoTofhmEbaDBAEdAbw.ttf",
        "900italic": "http://fonts.gstatic.com/s/redhatdisplay/v4/8vIX7wUr0m80wwYf0QCXZzYzUoTg-AYgaqrFIkJQb7zU.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Red Hat Text",
      "variants": [
        "regular",
        "italic",
        "500",
        "500italic",
        "700",
        "700italic"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v3",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/redhattext/v3/RrQXbohi_ic6B3yVSzGBrMxgb60sE8yZPA.ttf",
        "italic": "http://fonts.gstatic.com/s/redhattext/v3/RrQJbohi_ic6B3yVSzGBrMxQbacoMcmJPECN.ttf",
        "500": "http://fonts.gstatic.com/s/redhattext/v3/RrQIbohi_ic6B3yVSzGBrMxYm4QIG-eFNVmULg.ttf",
        "500italic": "http://fonts.gstatic.com/s/redhattext/v3/RrQKbohi_ic6B3yVSzGBrMxQbZ_cGO2BF1yELmgy.ttf",
        "700": "http://fonts.gstatic.com/s/redhattext/v3/RrQIbohi_ic6B3yVSzGBrMxY04IIG-eFNVmULg.ttf",
        "700italic": "http://fonts.gstatic.com/s/redhattext/v3/RrQKbohi_ic6B3yVSzGBrMxQbZ-UHu2BF1yELmgy.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Red Rose",
      "variants": [
        "300",
        "regular",
        "500",
        "600",
        "700"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v5",
      "lastModified": "2021-01-21",
      "files": {
        "300": "http://fonts.gstatic.com/s/redrose/v5/QdVISTYiLBjouPgEUajvsfWwDtc3MH8y8_sDcjSsYUVUjg.ttf",
        "regular": "http://fonts.gstatic.com/s/redrose/v5/QdVISTYiLBjouPgEUajvsfWwDtc3MH8yrfsDcjSsYUVUjg.ttf",
        "500": "http://fonts.gstatic.com/s/redrose/v5/QdVISTYiLBjouPgEUajvsfWwDtc3MH8yn_sDcjSsYUVUjg.ttf",
        "600": "http://fonts.gstatic.com/s/redrose/v5/QdVISTYiLBjouPgEUajvsfWwDtc3MH8yc_wDcjSsYUVUjg.ttf",
        "700": "http://fonts.gstatic.com/s/redrose/v5/QdVISTYiLBjouPgEUajvsfWwDtc3MH8ySvwDcjSsYUVUjg.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Redressed",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v11",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/redressed/v11/x3dickHUbrmJ7wMy9MsBfPACvy_1BA.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Reem Kufi",
      "variants": [
        "regular"
      ],
      "subsets": [
        "arabic",
        "latin"
      ],
      "version": "v9",
      "lastModified": "2020-09-25",
      "files": {
        "regular": "http://fonts.gstatic.com/s/reemkufi/v9/2sDcZGJLip7W2J7v7wQDb2-4C7wFZQ.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Reenie Beanie",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v11",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/reeniebeanie/v11/z7NSdR76eDkaJKZJFkkjuvWxbP2_qoOgf_w.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Revalia",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v7",
      "lastModified": "2020-07-15",
      "files": {
        "regular": "http://fonts.gstatic.com/s/revalia/v7/WwkexPimBE2-4ZPEeVruNIgJSNM.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Rhodium Libre",
      "variants": [
        "regular"
      ],
      "subsets": [
        "devanagari",
        "latin",
        "latin-ext"
      ],
      "version": "v5",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/rhodiumlibre/v5/1q2AY5adA0tn_ukeHcQHqpx6pETLeo2gm2U.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Ribeye",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v9",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/ribeye/v9/L0x8DFMxk1MP9R3RvPCmRSlUig.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Ribeye Marrow",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v10",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/ribeyemarrow/v10/GFDsWApshnqMRO2JdtRZ2d0vEAwTVWgKdtw.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Righteous",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v9",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/righteous/v9/1cXxaUPXBpj2rGoU7C9mj3uEicG01A.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Risque",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v8",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/risque/v8/VdGfAZUfHosahXxoCUYVBJ-T5g.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Roboto",
      "variants": [
        "100",
        "100italic",
        "300",
        "300italic",
        "regular",
        "italic",
        "500",
        "500italic",
        "700",
        "700italic",
        "900",
        "900italic"
      ],
      "subsets": [
        "cyrillic",
        "cyrillic-ext",
        "greek",
        "greek-ext",
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v20",
      "lastModified": "2019-07-24",
      "files": {
        "100": "http://fonts.gstatic.com/s/roboto/v20/KFOkCnqEu92Fr1MmgWxPKTM1K9nz.ttf",
        "100italic": "http://fonts.gstatic.com/s/roboto/v20/KFOiCnqEu92Fr1Mu51QrIzcXLsnzjYk.ttf",
        "300": "http://fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmSU5vAx05IsDqlA.ttf",
        "300italic": "http://fonts.gstatic.com/s/roboto/v20/KFOjCnqEu92Fr1Mu51TjARc9AMX6lJBP.ttf",
        "regular": "http://fonts.gstatic.com/s/roboto/v20/KFOmCnqEu92Fr1Me5WZLCzYlKw.ttf",
        "italic": "http://fonts.gstatic.com/s/roboto/v20/KFOkCnqEu92Fr1Mu52xPKTM1K9nz.ttf",
        "500": "http://fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmEU9vAx05IsDqlA.ttf",
        "500italic": "http://fonts.gstatic.com/s/roboto/v20/KFOjCnqEu92Fr1Mu51S7ABc9AMX6lJBP.ttf",
        "700": "http://fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmWUlvAx05IsDqlA.ttf",
        "700italic": "http://fonts.gstatic.com/s/roboto/v20/KFOjCnqEu92Fr1Mu51TzBhc9AMX6lJBP.ttf",
        "900": "http://fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmYUtvAx05IsDqlA.ttf",
        "900italic": "http://fonts.gstatic.com/s/roboto/v20/KFOjCnqEu92Fr1Mu51TLBBc9AMX6lJBP.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Roboto Condensed",
      "variants": [
        "300",
        "300italic",
        "regular",
        "italic",
        "700",
        "700italic"
      ],
      "subsets": [
        "cyrillic",
        "cyrillic-ext",
        "greek",
        "greek-ext",
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v19",
      "lastModified": "2020-09-15",
      "files": {
        "300": "http://fonts.gstatic.com/s/robotocondensed/v19/ieVi2ZhZI2eCN5jzbjEETS9weq8-33mZKCMSbvtdYyQ.ttf",
        "300italic": "http://fonts.gstatic.com/s/robotocondensed/v19/ieVg2ZhZI2eCN5jzbjEETS9weq8-19eDpCEYatlYcyRi4A.ttf",
        "regular": "http://fonts.gstatic.com/s/robotocondensed/v19/ieVl2ZhZI2eCN5jzbjEETS9weq8-59WxDCs5cvI.ttf",
        "italic": "http://fonts.gstatic.com/s/robotocondensed/v19/ieVj2ZhZI2eCN5jzbjEETS9weq8-19e7CAk8YvJEeg.ttf",
        "700": "http://fonts.gstatic.com/s/robotocondensed/v19/ieVi2ZhZI2eCN5jzbjEETS9weq8-32meKCMSbvtdYyQ.ttf",
        "700italic": "http://fonts.gstatic.com/s/robotocondensed/v19/ieVg2ZhZI2eCN5jzbjEETS9weq8-19eDtCYYatlYcyRi4A.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Roboto Mono",
      "variants": [
        "100",
        "200",
        "300",
        "regular",
        "500",
        "600",
        "700",
        "100italic",
        "200italic",
        "300italic",
        "italic",
        "500italic",
        "600italic",
        "700italic"
      ],
      "subsets": [
        "cyrillic",
        "cyrillic-ext",
        "greek",
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v13",
      "lastModified": "2021-01-30",
      "files": {
        "100": "http://fonts.gstatic.com/s/robotomono/v13/L0xuDF4xlVMF-BfR8bXMIhJHg45mwgGEFl0_3vuPQ--5Ip2sSQ.ttf",
        "200": "http://fonts.gstatic.com/s/robotomono/v13/L0xuDF4xlVMF-BfR8bXMIhJHg45mwgGEFl0_XvqPQ--5Ip2sSQ.ttf",
        "300": "http://fonts.gstatic.com/s/robotomono/v13/L0xuDF4xlVMF-BfR8bXMIhJHg45mwgGEFl0_gPqPQ--5Ip2sSQ.ttf",
        "regular": "http://fonts.gstatic.com/s/robotomono/v13/L0xuDF4xlVMF-BfR8bXMIhJHg45mwgGEFl0_3vqPQ--5Ip2sSQ.ttf",
        "500": "http://fonts.gstatic.com/s/robotomono/v13/L0xuDF4xlVMF-BfR8bXMIhJHg45mwgGEFl0_7PqPQ--5Ip2sSQ.ttf",
        "600": "http://fonts.gstatic.com/s/robotomono/v13/L0xuDF4xlVMF-BfR8bXMIhJHg45mwgGEFl0_AP2PQ--5Ip2sSQ.ttf",
        "700": "http://fonts.gstatic.com/s/robotomono/v13/L0xuDF4xlVMF-BfR8bXMIhJHg45mwgGEFl0_Of2PQ--5Ip2sSQ.ttf",
        "100italic": "http://fonts.gstatic.com/s/robotomono/v13/L0xoDF4xlVMF-BfR8bXMIjhOsXG-q2oeuFoqFrlnAeW9AJi8SZwt.ttf",
        "200italic": "http://fonts.gstatic.com/s/robotomono/v13/L0xoDF4xlVMF-BfR8bXMIjhOsXG-q2oeuFoqFrnnAOW9AJi8SZwt.ttf",
        "300italic": "http://fonts.gstatic.com/s/robotomono/v13/L0xoDF4xlVMF-BfR8bXMIjhOsXG-q2oeuFoqFrk5AOW9AJi8SZwt.ttf",
        "italic": "http://fonts.gstatic.com/s/robotomono/v13/L0xoDF4xlVMF-BfR8bXMIjhOsXG-q2oeuFoqFrlnAOW9AJi8SZwt.ttf",
        "500italic": "http://fonts.gstatic.com/s/robotomono/v13/L0xoDF4xlVMF-BfR8bXMIjhOsXG-q2oeuFoqFrlVAOW9AJi8SZwt.ttf",
        "600italic": "http://fonts.gstatic.com/s/robotomono/v13/L0xoDF4xlVMF-BfR8bXMIjhOsXG-q2oeuFoqFrm5B-W9AJi8SZwt.ttf",
        "700italic": "http://fonts.gstatic.com/s/robotomono/v13/L0xoDF4xlVMF-BfR8bXMIjhOsXG-q2oeuFoqFrmAB-W9AJi8SZwt.ttf"
      },
      "category": "monospace",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Roboto Slab",
      "variants": [
        "100",
        "200",
        "300",
        "regular",
        "500",
        "600",
        "700",
        "800",
        "900"
      ],
      "subsets": [
        "cyrillic",
        "cyrillic-ext",
        "greek",
        "greek-ext",
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v13",
      "lastModified": "2021-01-30",
      "files": {
        "100": "http://fonts.gstatic.com/s/robotoslab/v13/BngbUXZYTXPIvIBgJJSb6s3BzlRRfKOFbvjojIWWaG5iddG-1A.ttf",
        "200": "http://fonts.gstatic.com/s/robotoslab/v13/BngbUXZYTXPIvIBgJJSb6s3BzlRRfKOFbvjoDISWaG5iddG-1A.ttf",
        "300": "http://fonts.gstatic.com/s/robotoslab/v13/BngbUXZYTXPIvIBgJJSb6s3BzlRRfKOFbvjo0oSWaG5iddG-1A.ttf",
        "regular": "http://fonts.gstatic.com/s/robotoslab/v13/BngbUXZYTXPIvIBgJJSb6s3BzlRRfKOFbvjojISWaG5iddG-1A.ttf",
        "500": "http://fonts.gstatic.com/s/robotoslab/v13/BngbUXZYTXPIvIBgJJSb6s3BzlRRfKOFbvjovoSWaG5iddG-1A.ttf",
        "600": "http://fonts.gstatic.com/s/robotoslab/v13/BngbUXZYTXPIvIBgJJSb6s3BzlRRfKOFbvjoUoOWaG5iddG-1A.ttf",
        "700": "http://fonts.gstatic.com/s/robotoslab/v13/BngbUXZYTXPIvIBgJJSb6s3BzlRRfKOFbvjoa4OWaG5iddG-1A.ttf",
        "800": "http://fonts.gstatic.com/s/robotoslab/v13/BngbUXZYTXPIvIBgJJSb6s3BzlRRfKOFbvjoDIOWaG5iddG-1A.ttf",
        "900": "http://fonts.gstatic.com/s/robotoslab/v13/BngbUXZYTXPIvIBgJJSb6s3BzlRRfKOFbvjoJYOWaG5iddG-1A.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Rochester",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v11",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/rochester/v11/6ae-4KCqVa4Zy6Fif-Uy31vWNTMwoQ.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Rock Salt",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v11",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/rocksalt/v11/MwQ0bhv11fWD6QsAVOZbsEk7hbBWrA.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Rokkitt",
      "variants": [
        "100",
        "200",
        "300",
        "regular",
        "500",
        "600",
        "700",
        "800",
        "900"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v20",
      "lastModified": "2021-01-30",
      "files": {
        "100": "http://fonts.gstatic.com/s/rokkitt/v20/qFdb35qfgYFjGy5hukqqhw5XeRgdi1rydpDLE76HvN6n.ttf",
        "200": "http://fonts.gstatic.com/s/rokkitt/v20/qFdb35qfgYFjGy5hukqqhw5XeRgdi1pyd5DLE76HvN6n.ttf",
        "300": "http://fonts.gstatic.com/s/rokkitt/v20/qFdb35qfgYFjGy5hukqqhw5XeRgdi1qsd5DLE76HvN6n.ttf",
        "regular": "http://fonts.gstatic.com/s/rokkitt/v20/qFdb35qfgYFjGy5hukqqhw5XeRgdi1ryd5DLE76HvN6n.ttf",
        "500": "http://fonts.gstatic.com/s/rokkitt/v20/qFdb35qfgYFjGy5hukqqhw5XeRgdi1rAd5DLE76HvN6n.ttf",
        "600": "http://fonts.gstatic.com/s/rokkitt/v20/qFdb35qfgYFjGy5hukqqhw5XeRgdi1oscJDLE76HvN6n.ttf",
        "700": "http://fonts.gstatic.com/s/rokkitt/v20/qFdb35qfgYFjGy5hukqqhw5XeRgdi1oVcJDLE76HvN6n.ttf",
        "800": "http://fonts.gstatic.com/s/rokkitt/v20/qFdb35qfgYFjGy5hukqqhw5XeRgdi1pycJDLE76HvN6n.ttf",
        "900": "http://fonts.gstatic.com/s/rokkitt/v20/qFdb35qfgYFjGy5hukqqhw5XeRgdi1pbcJDLE76HvN6n.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Romanesco",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v9",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/romanesco/v9/w8gYH2ozQOY7_r_J7mSn3HwLqOqSBg.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Ropa Sans",
      "variants": [
        "regular",
        "italic"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v10",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/ropasans/v10/EYqxmaNOzLlWtsZSScyKWjloU5KP2g.ttf",
        "italic": "http://fonts.gstatic.com/s/ropasans/v10/EYq3maNOzLlWtsZSScy6WDNscZef2mNE.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Rosario",
      "variants": [
        "300",
        "regular",
        "500",
        "600",
        "700",
        "300italic",
        "italic",
        "500italic",
        "600italic",
        "700italic"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v19",
      "lastModified": "2021-01-30",
      "files": {
        "300": "http://fonts.gstatic.com/s/rosario/v19/xfuu0WDhWW_fOEoY8l_VPNZfB7jPM69GCWczd-YnOzUD.ttf",
        "regular": "http://fonts.gstatic.com/s/rosario/v19/xfuu0WDhWW_fOEoY8l_VPNZfB7jPM68YCWczd-YnOzUD.ttf",
        "500": "http://fonts.gstatic.com/s/rosario/v19/xfuu0WDhWW_fOEoY8l_VPNZfB7jPM68qCWczd-YnOzUD.ttf",
        "600": "http://fonts.gstatic.com/s/rosario/v19/xfuu0WDhWW_fOEoY8l_VPNZfB7jPM6_GDmczd-YnOzUD.ttf",
        "700": "http://fonts.gstatic.com/s/rosario/v19/xfuu0WDhWW_fOEoY8l_VPNZfB7jPM6__Dmczd-YnOzUD.ttf",
        "300italic": "http://fonts.gstatic.com/s/rosario/v19/xfug0WDhWW_fOEoY2Fbnww42bCJhNLrQStFwfeIFPiUDn08.ttf",
        "italic": "http://fonts.gstatic.com/s/rosario/v19/xfug0WDhWW_fOEoY2Fbnww42bCJhNLrQSo9wfeIFPiUDn08.ttf",
        "500italic": "http://fonts.gstatic.com/s/rosario/v19/xfug0WDhWW_fOEoY2Fbnww42bCJhNLrQSr1wfeIFPiUDn08.ttf",
        "600italic": "http://fonts.gstatic.com/s/rosario/v19/xfug0WDhWW_fOEoY2Fbnww42bCJhNLrQSlF3feIFPiUDn08.ttf",
        "700italic": "http://fonts.gstatic.com/s/rosario/v19/xfug0WDhWW_fOEoY2Fbnww42bCJhNLrQSmh3feIFPiUDn08.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Rosarivo",
      "variants": [
        "regular",
        "italic"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v8",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/rosarivo/v8/PlI-Fl2lO6N9f8HaNAeC2nhMnNy5.ttf",
        "italic": "http://fonts.gstatic.com/s/rosarivo/v8/PlI4Fl2lO6N9f8HaNDeA0Hxumcy5ZX8.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Rouge Script",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v9",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/rougescript/v9/LYjFdGbiklMoCIQOw1Ep3S4PVPXbUJWq9g.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Rowdies",
      "variants": [
        "300",
        "regular",
        "700"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v3",
      "lastModified": "2021-01-21",
      "files": {
        "300": "http://fonts.gstatic.com/s/rowdies/v3/ptRMTieMYPNBAK219hth5O7yKQNute8.ttf",
        "regular": "http://fonts.gstatic.com/s/rowdies/v3/ptRJTieMYPNBAK21zrdJwObZNQo.ttf",
        "700": "http://fonts.gstatic.com/s/rowdies/v3/ptRMTieMYPNBAK219gtm5O7yKQNute8.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Rozha One",
      "variants": [
        "regular"
      ],
      "subsets": [
        "devanagari",
        "latin",
        "latin-ext"
      ],
      "version": "v8",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/rozhaone/v8/AlZy_zVFtYP12Zncg2khdXf4XB0Tow.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Rubik",
      "variants": [
        "300",
        "regular",
        "500",
        "600",
        "700",
        "800",
        "900",
        "300italic",
        "italic",
        "500italic",
        "600italic",
        "700italic",
        "800italic",
        "900italic"
      ],
      "subsets": [
        "cyrillic",
        "cyrillic-ext",
        "hebrew",
        "latin",
        "latin-ext"
      ],
      "version": "v12",
      "lastModified": "2021-01-30",
      "files": {
        "300": "http://fonts.gstatic.com/s/rubik/v12/iJWZBXyIfDnIV5PNhY1KTN7Z-Yh-WYi1UE80V4bVkA.ttf",
        "regular": "http://fonts.gstatic.com/s/rubik/v12/iJWZBXyIfDnIV5PNhY1KTN7Z-Yh-B4i1UE80V4bVkA.ttf",
        "500": "http://fonts.gstatic.com/s/rubik/v12/iJWZBXyIfDnIV5PNhY1KTN7Z-Yh-NYi1UE80V4bVkA.ttf",
        "600": "http://fonts.gstatic.com/s/rubik/v12/iJWZBXyIfDnIV5PNhY1KTN7Z-Yh-2Y-1UE80V4bVkA.ttf",
        "700": "http://fonts.gstatic.com/s/rubik/v12/iJWZBXyIfDnIV5PNhY1KTN7Z-Yh-4I-1UE80V4bVkA.ttf",
        "800": "http://fonts.gstatic.com/s/rubik/v12/iJWZBXyIfDnIV5PNhY1KTN7Z-Yh-h4-1UE80V4bVkA.ttf",
        "900": "http://fonts.gstatic.com/s/rubik/v12/iJWZBXyIfDnIV5PNhY1KTN7Z-Yh-ro-1UE80V4bVkA.ttf",
        "300italic": "http://fonts.gstatic.com/s/rubik/v12/iJWbBXyIfDnIV7nEt3KSJbVDV49rz8sDE0UwdYPFkJ1O.ttf",
        "italic": "http://fonts.gstatic.com/s/rubik/v12/iJWbBXyIfDnIV7nEt3KSJbVDV49rz8tdE0UwdYPFkJ1O.ttf",
        "500italic": "http://fonts.gstatic.com/s/rubik/v12/iJWbBXyIfDnIV7nEt3KSJbVDV49rz8tvE0UwdYPFkJ1O.ttf",
        "600italic": "http://fonts.gstatic.com/s/rubik/v12/iJWbBXyIfDnIV7nEt3KSJbVDV49rz8uDFEUwdYPFkJ1O.ttf",
        "700italic": "http://fonts.gstatic.com/s/rubik/v12/iJWbBXyIfDnIV7nEt3KSJbVDV49rz8u6FEUwdYPFkJ1O.ttf",
        "800italic": "http://fonts.gstatic.com/s/rubik/v12/iJWbBXyIfDnIV7nEt3KSJbVDV49rz8vdFEUwdYPFkJ1O.ttf",
        "900italic": "http://fonts.gstatic.com/s/rubik/v12/iJWbBXyIfDnIV7nEt3KSJbVDV49rz8v0FEUwdYPFkJ1O.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Rubik Mono One",
      "variants": [
        "regular"
      ],
      "subsets": [
        "cyrillic",
        "latin",
        "latin-ext"
      ],
      "version": "v9",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/rubikmonoone/v9/UqyJK8kPP3hjw6ANTdfRk9YSN-8wRqQrc_j9.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Ruda",
      "variants": [
        "regular",
        "500",
        "600",
        "700",
        "800",
        "900"
      ],
      "subsets": [
        "cyrillic",
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v14",
      "lastModified": "2021-01-30",
      "files": {
        "regular": "http://fonts.gstatic.com/s/ruda/v14/k3kKo8YQJOpFgHQ1mQ5VkEbUKaJFsi_-2KiSGg-H.ttf",
        "500": "http://fonts.gstatic.com/s/ruda/v14/k3kKo8YQJOpFgHQ1mQ5VkEbUKaJ3si_-2KiSGg-H.ttf",
        "600": "http://fonts.gstatic.com/s/ruda/v14/k3kKo8YQJOpFgHQ1mQ5VkEbUKaKbtS_-2KiSGg-H.ttf",
        "700": "http://fonts.gstatic.com/s/ruda/v14/k3kKo8YQJOpFgHQ1mQ5VkEbUKaKitS_-2KiSGg-H.ttf",
        "800": "http://fonts.gstatic.com/s/ruda/v14/k3kKo8YQJOpFgHQ1mQ5VkEbUKaLFtS_-2KiSGg-H.ttf",
        "900": "http://fonts.gstatic.com/s/ruda/v14/k3kKo8YQJOpFgHQ1mQ5VkEbUKaLstS_-2KiSGg-H.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Rufina",
      "variants": [
        "regular",
        "700"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v8",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/rufina/v8/Yq6V-LyURyLy-aKyoxRktOdClg.ttf",
        "700": "http://fonts.gstatic.com/s/rufina/v8/Yq6W-LyURyLy-aKKHztAvMxenxE0SA.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Ruge Boogie",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v11",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/rugeboogie/v11/JIA3UVFwbHRF_GIWSMhKNROiPzUveSxy.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Ruluko",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v8",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/ruluko/v8/xMQVuFNZVaODtm0pC6WzKX_QmA.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Rum Raisin",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v8",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/rumraisin/v8/nwpRtKu3Ih8D5avB4h2uJ3-IywA7eMM.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Ruslan Display",
      "variants": [
        "regular"
      ],
      "subsets": [
        "cyrillic",
        "latin",
        "latin-ext"
      ],
      "version": "v11",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/ruslandisplay/v11/Gw6jwczl81XcIZuckK_e3UpfdzxrldyFvm1n.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Russo One",
      "variants": [
        "regular"
      ],
      "subsets": [
        "cyrillic",
        "latin",
        "latin-ext"
      ],
      "version": "v9",
      "lastModified": "2020-09-10",
      "files": {
        "regular": "http://fonts.gstatic.com/s/russoone/v9/Z9XUDmZRWg6M1LvRYsH-yMOInrib9Q.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Ruthie",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v11",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/ruthie/v11/gokvH63sGkdqXuU9lD53Q2u_mQ.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Rye",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v8",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/rye/v8/r05XGLJT86YDFpTsXOqx4w.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Sacramento",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v8",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/sacramento/v8/buEzpo6gcdjy0EiZMBUG0CoV_NxLeiw.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Sahitya",
      "variants": [
        "regular",
        "700"
      ],
      "subsets": [
        "devanagari",
        "latin"
      ],
      "version": "v5",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/sahitya/v5/6qLAKZkOuhnuqlJAaScFPywEDnI.ttf",
        "700": "http://fonts.gstatic.com/s/sahitya/v5/6qLFKZkOuhnuqlJAUZsqGyQvEnvSexI.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Sail",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v11",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/sail/v11/DPEjYwiBxwYJFBTDADYAbvw.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Saira",
      "variants": [
        "100",
        "200",
        "300",
        "regular",
        "500",
        "600",
        "700",
        "800",
        "900",
        "100italic",
        "200italic",
        "300italic",
        "italic",
        "500italic",
        "600italic",
        "700italic",
        "800italic",
        "900italic"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v7",
      "lastModified": "2021-01-30",
      "files": {
        "100": "http://fonts.gstatic.com/s/saira/v7/memWYa2wxmKQyPMrZX79wwYZQMhsyuShhKMjjbU9uXuA71rDosg7lwYmUVY.ttf",
        "200": "http://fonts.gstatic.com/s/saira/v7/memWYa2wxmKQyPMrZX79wwYZQMhsyuShhKMjjbU9uXuA79rCosg7lwYmUVY.ttf",
        "300": "http://fonts.gstatic.com/s/saira/v7/memWYa2wxmKQyPMrZX79wwYZQMhsyuShhKMjjbU9uXuA7wTCosg7lwYmUVY.ttf",
        "regular": "http://fonts.gstatic.com/s/saira/v7/memWYa2wxmKQyPMrZX79wwYZQMhsyuShhKMjjbU9uXuA71rCosg7lwYmUVY.ttf",
        "500": "http://fonts.gstatic.com/s/saira/v7/memWYa2wxmKQyPMrZX79wwYZQMhsyuShhKMjjbU9uXuA72jCosg7lwYmUVY.ttf",
        "600": "http://fonts.gstatic.com/s/saira/v7/memWYa2wxmKQyPMrZX79wwYZQMhsyuShhKMjjbU9uXuA74TFosg7lwYmUVY.ttf",
        "700": "http://fonts.gstatic.com/s/saira/v7/memWYa2wxmKQyPMrZX79wwYZQMhsyuShhKMjjbU9uXuA773Fosg7lwYmUVY.ttf",
        "800": "http://fonts.gstatic.com/s/saira/v7/memWYa2wxmKQyPMrZX79wwYZQMhsyuShhKMjjbU9uXuA79rFosg7lwYmUVY.ttf",
        "900": "http://fonts.gstatic.com/s/saira/v7/memWYa2wxmKQyPMrZX79wwYZQMhsyuShhKMjjbU9uXuA7_PFosg7lwYmUVY.ttf",
        "100italic": "http://fonts.gstatic.com/s/saira/v7/memUYa2wxmKQyNkiV50dulWP7s95AqZTzZHcVdxWI9WH-pKBSooxkyQjQVYmxA.ttf",
        "200italic": "http://fonts.gstatic.com/s/saira/v7/memUYa2wxmKQyNkiV50dulWP7s95AqZTzZHcVdxWI9WH-pKByosxkyQjQVYmxA.ttf",
        "300italic": "http://fonts.gstatic.com/s/saira/v7/memUYa2wxmKQyNkiV50dulWP7s95AqZTzZHcVdxWI9WH-pKBFIsxkyQjQVYmxA.ttf",
        "italic": "http://fonts.gstatic.com/s/saira/v7/memUYa2wxmKQyNkiV50dulWP7s95AqZTzZHcVdxWI9WH-pKBSosxkyQjQVYmxA.ttf",
        "500italic": "http://fonts.gstatic.com/s/saira/v7/memUYa2wxmKQyNkiV50dulWP7s95AqZTzZHcVdxWI9WH-pKBeIsxkyQjQVYmxA.ttf",
        "600italic": "http://fonts.gstatic.com/s/saira/v7/memUYa2wxmKQyNkiV50dulWP7s95AqZTzZHcVdxWI9WH-pKBlIwxkyQjQVYmxA.ttf",
        "700italic": "http://fonts.gstatic.com/s/saira/v7/memUYa2wxmKQyNkiV50dulWP7s95AqZTzZHcVdxWI9WH-pKBrYwxkyQjQVYmxA.ttf",
        "800italic": "http://fonts.gstatic.com/s/saira/v7/memUYa2wxmKQyNkiV50dulWP7s95AqZTzZHcVdxWI9WH-pKByowxkyQjQVYmxA.ttf",
        "900italic": "http://fonts.gstatic.com/s/saira/v7/memUYa2wxmKQyNkiV50dulWP7s95AqZTzZHcVdxWI9WH-pKB44wxkyQjQVYmxA.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Saira Condensed",
      "variants": [
        "100",
        "200",
        "300",
        "regular",
        "500",
        "600",
        "700",
        "800",
        "900"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v6",
      "lastModified": "2020-09-02",
      "files": {
        "100": "http://fonts.gstatic.com/s/sairacondensed/v6/EJRMQgErUN8XuHNEtX81i9TmEkrnwetA2omSrzS8.ttf",
        "200": "http://fonts.gstatic.com/s/sairacondensed/v6/EJRLQgErUN8XuHNEtX81i9TmEkrnbcpg8Keepi2lHw.ttf",
        "300": "http://fonts.gstatic.com/s/sairacondensed/v6/EJRLQgErUN8XuHNEtX81i9TmEkrnCclg8Keepi2lHw.ttf",
        "regular": "http://fonts.gstatic.com/s/sairacondensed/v6/EJROQgErUN8XuHNEtX81i9TmEkrfpeFE-IyCrw.ttf",
        "500": "http://fonts.gstatic.com/s/sairacondensed/v6/EJRLQgErUN8XuHNEtX81i9TmEkrnUchg8Keepi2lHw.ttf",
        "600": "http://fonts.gstatic.com/s/sairacondensed/v6/EJRLQgErUN8XuHNEtX81i9TmEkrnfc9g8Keepi2lHw.ttf",
        "700": "http://fonts.gstatic.com/s/sairacondensed/v6/EJRLQgErUN8XuHNEtX81i9TmEkrnGc5g8Keepi2lHw.ttf",
        "800": "http://fonts.gstatic.com/s/sairacondensed/v6/EJRLQgErUN8XuHNEtX81i9TmEkrnBc1g8Keepi2lHw.ttf",
        "900": "http://fonts.gstatic.com/s/sairacondensed/v6/EJRLQgErUN8XuHNEtX81i9TmEkrnIcxg8Keepi2lHw.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Saira Extra Condensed",
      "variants": [
        "100",
        "200",
        "300",
        "regular",
        "500",
        "600",
        "700",
        "800",
        "900"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v6",
      "lastModified": "2020-09-02",
      "files": {
        "100": "http://fonts.gstatic.com/s/sairaextracondensed/v6/-nFsOHYr-vcC7h8MklGBkrvmUG9rbpkisrTri0jx9i5ss3a3.ttf",
        "200": "http://fonts.gstatic.com/s/sairaextracondensed/v6/-nFvOHYr-vcC7h8MklGBkrvmUG9rbpkisrTrJ2nR3ABgum-uoQ.ttf",
        "300": "http://fonts.gstatic.com/s/sairaextracondensed/v6/-nFvOHYr-vcC7h8MklGBkrvmUG9rbpkisrTrQ2rR3ABgum-uoQ.ttf",
        "regular": "http://fonts.gstatic.com/s/sairaextracondensed/v6/-nFiOHYr-vcC7h8MklGBkrvmUG9rbpkisrTT70L11Ct8sw.ttf",
        "500": "http://fonts.gstatic.com/s/sairaextracondensed/v6/-nFvOHYr-vcC7h8MklGBkrvmUG9rbpkisrTrG2vR3ABgum-uoQ.ttf",
        "600": "http://fonts.gstatic.com/s/sairaextracondensed/v6/-nFvOHYr-vcC7h8MklGBkrvmUG9rbpkisrTrN2zR3ABgum-uoQ.ttf",
        "700": "http://fonts.gstatic.com/s/sairaextracondensed/v6/-nFvOHYr-vcC7h8MklGBkrvmUG9rbpkisrTrU23R3ABgum-uoQ.ttf",
        "800": "http://fonts.gstatic.com/s/sairaextracondensed/v6/-nFvOHYr-vcC7h8MklGBkrvmUG9rbpkisrTrT27R3ABgum-uoQ.ttf",
        "900": "http://fonts.gstatic.com/s/sairaextracondensed/v6/-nFvOHYr-vcC7h8MklGBkrvmUG9rbpkisrTra2_R3ABgum-uoQ.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Saira Semi Condensed",
      "variants": [
        "100",
        "200",
        "300",
        "regular",
        "500",
        "600",
        "700",
        "800",
        "900"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v6",
      "lastModified": "2020-09-02",
      "files": {
        "100": "http://fonts.gstatic.com/s/sairasemicondensed/v6/U9MN6c-2-nnJkHxyCjRcnMHcWVWV1cWRRXdvaOM8rXT-8V8.ttf",
        "200": "http://fonts.gstatic.com/s/sairasemicondensed/v6/U9MM6c-2-nnJkHxyCjRcnMHcWVWV1cWRRXfDScMWg3j36Ebz.ttf",
        "300": "http://fonts.gstatic.com/s/sairasemicondensed/v6/U9MM6c-2-nnJkHxyCjRcnMHcWVWV1cWRRXenSsMWg3j36Ebz.ttf",
        "regular": "http://fonts.gstatic.com/s/sairasemicondensed/v6/U9MD6c-2-nnJkHxyCjRcnMHcWVWV1cWRRU8LYuceqGT-.ttf",
        "500": "http://fonts.gstatic.com/s/sairasemicondensed/v6/U9MM6c-2-nnJkHxyCjRcnMHcWVWV1cWRRXf_S8MWg3j36Ebz.ttf",
        "600": "http://fonts.gstatic.com/s/sairasemicondensed/v6/U9MM6c-2-nnJkHxyCjRcnMHcWVWV1cWRRXfTTMMWg3j36Ebz.ttf",
        "700": "http://fonts.gstatic.com/s/sairasemicondensed/v6/U9MM6c-2-nnJkHxyCjRcnMHcWVWV1cWRRXe3TcMWg3j36Ebz.ttf",
        "800": "http://fonts.gstatic.com/s/sairasemicondensed/v6/U9MM6c-2-nnJkHxyCjRcnMHcWVWV1cWRRXerTsMWg3j36Ebz.ttf",
        "900": "http://fonts.gstatic.com/s/sairasemicondensed/v6/U9MM6c-2-nnJkHxyCjRcnMHcWVWV1cWRRXePT8MWg3j36Ebz.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Saira Stencil One",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v2",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/sairastencilone/v2/SLXSc03I6HkvZGJ1GvvipLoYSTEL9AsMawif2YQ2.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Salsa",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v10",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/salsa/v10/gNMKW3FiRpKj-imY8ncKEZez.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Sanchez",
      "variants": [
        "regular",
        "italic"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v8",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/sanchez/v8/Ycm2sZJORluHnXbITm5b_BwE1l0.ttf",
        "italic": "http://fonts.gstatic.com/s/sanchez/v8/Ycm0sZJORluHnXbIfmxR-D4Bxl3gkw.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Sancreek",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v11",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/sancreek/v11/pxiHypAnsdxUm159X7D-XV9NEe-K.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Sansita",
      "variants": [
        "regular",
        "italic",
        "700",
        "700italic",
        "800",
        "800italic",
        "900",
        "900italic"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v5",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/sansita/v5/QldONTRRphEb_-V7HBm7TXFf3qw.ttf",
        "italic": "http://fonts.gstatic.com/s/sansita/v5/QldMNTRRphEb_-V7LBuxSVNazqx2xg.ttf",
        "700": "http://fonts.gstatic.com/s/sansita/v5/QldLNTRRphEb_-V7JKWUaXl0wqVv3_g.ttf",
        "700italic": "http://fonts.gstatic.com/s/sansita/v5/QldJNTRRphEb_-V7LBuJ9Xx-xodqz_joDQ.ttf",
        "800": "http://fonts.gstatic.com/s/sansita/v5/QldLNTRRphEb_-V7JLmXaXl0wqVv3_g.ttf",
        "800italic": "http://fonts.gstatic.com/s/sansita/v5/QldJNTRRphEb_-V7LBuJ6X9-xodqz_joDQ.ttf",
        "900": "http://fonts.gstatic.com/s/sansita/v5/QldLNTRRphEb_-V7JJ2WaXl0wqVv3_g.ttf",
        "900italic": "http://fonts.gstatic.com/s/sansita/v5/QldJNTRRphEb_-V7LBuJzX5-xodqz_joDQ.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Sansita Swashed",
      "variants": [
        "300",
        "regular",
        "500",
        "600",
        "700",
        "800",
        "900"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v3",
      "lastModified": "2021-01-21",
      "files": {
        "300": "http://fonts.gstatic.com/s/sansitaswashed/v3/BXR8vFfZifTZgFlDDLgNkBydPKTt3pVCeYWqJnZSW-ppbToVehmEa4Q.ttf",
        "regular": "http://fonts.gstatic.com/s/sansitaswashed/v3/BXR8vFfZifTZgFlDDLgNkBydPKTt3pVCeYWqJnZSW7RpbToVehmEa4Q.ttf",
        "500": "http://fonts.gstatic.com/s/sansitaswashed/v3/BXR8vFfZifTZgFlDDLgNkBydPKTt3pVCeYWqJnZSW4ZpbToVehmEa4Q.ttf",
        "600": "http://fonts.gstatic.com/s/sansitaswashed/v3/BXR8vFfZifTZgFlDDLgNkBydPKTt3pVCeYWqJnZSW2pubToVehmEa4Q.ttf",
        "700": "http://fonts.gstatic.com/s/sansitaswashed/v3/BXR8vFfZifTZgFlDDLgNkBydPKTt3pVCeYWqJnZSW1NubToVehmEa4Q.ttf",
        "800": "http://fonts.gstatic.com/s/sansitaswashed/v3/BXR8vFfZifTZgFlDDLgNkBydPKTt3pVCeYWqJnZSWzRubToVehmEa4Q.ttf",
        "900": "http://fonts.gstatic.com/s/sansitaswashed/v3/BXR8vFfZifTZgFlDDLgNkBydPKTt3pVCeYWqJnZSWx1ubToVehmEa4Q.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Sarabun",
      "variants": [
        "100",
        "100italic",
        "200",
        "200italic",
        "300",
        "300italic",
        "regular",
        "italic",
        "500",
        "500italic",
        "600",
        "600italic",
        "700",
        "700italic",
        "800",
        "800italic"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "thai",
        "vietnamese"
      ],
      "version": "v8",
      "lastModified": "2020-09-02",
      "files": {
        "100": "http://fonts.gstatic.com/s/sarabun/v8/DtVhJx26TKEr37c9YHZJmnYI5gnOpg.ttf",
        "100italic": "http://fonts.gstatic.com/s/sarabun/v8/DtVnJx26TKEr37c9aBBx_nwMxAzephhN.ttf",
        "200": "http://fonts.gstatic.com/s/sarabun/v8/DtVmJx26TKEr37c9YNpoulwm6gDXvwE.ttf",
        "200italic": "http://fonts.gstatic.com/s/sarabun/v8/DtVkJx26TKEr37c9aBBxUl0s7iLSrwFUlw.ttf",
        "300": "http://fonts.gstatic.com/s/sarabun/v8/DtVmJx26TKEr37c9YL5rulwm6gDXvwE.ttf",
        "300italic": "http://fonts.gstatic.com/s/sarabun/v8/DtVkJx26TKEr37c9aBBxNl4s7iLSrwFUlw.ttf",
        "regular": "http://fonts.gstatic.com/s/sarabun/v8/DtVjJx26TKEr37c9WBJDnlQN9gk.ttf",
        "italic": "http://fonts.gstatic.com/s/sarabun/v8/DtVhJx26TKEr37c9aBBJmnYI5gnOpg.ttf",
        "500": "http://fonts.gstatic.com/s/sarabun/v8/DtVmJx26TKEr37c9YOZqulwm6gDXvwE.ttf",
        "500italic": "http://fonts.gstatic.com/s/sarabun/v8/DtVkJx26TKEr37c9aBBxbl8s7iLSrwFUlw.ttf",
        "600": "http://fonts.gstatic.com/s/sarabun/v8/DtVmJx26TKEr37c9YMptulwm6gDXvwE.ttf",
        "600italic": "http://fonts.gstatic.com/s/sarabun/v8/DtVkJx26TKEr37c9aBBxQlgs7iLSrwFUlw.ttf",
        "700": "http://fonts.gstatic.com/s/sarabun/v8/DtVmJx26TKEr37c9YK5sulwm6gDXvwE.ttf",
        "700italic": "http://fonts.gstatic.com/s/sarabun/v8/DtVkJx26TKEr37c9aBBxJlks7iLSrwFUlw.ttf",
        "800": "http://fonts.gstatic.com/s/sarabun/v8/DtVmJx26TKEr37c9YLJvulwm6gDXvwE.ttf",
        "800italic": "http://fonts.gstatic.com/s/sarabun/v8/DtVkJx26TKEr37c9aBBxOlos7iLSrwFUlw.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Sarala",
      "variants": [
        "regular",
        "700"
      ],
      "subsets": [
        "devanagari",
        "latin",
        "latin-ext"
      ],
      "version": "v4",
      "lastModified": "2019-07-16",
      "files": {
        "regular": "http://fonts.gstatic.com/s/sarala/v4/uK_y4riEZv4o1w9RCh0TMv6EXw.ttf",
        "700": "http://fonts.gstatic.com/s/sarala/v4/uK_x4riEZv4o1w9ptjI3OtWYVkMpXA.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Sarina",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v9",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/sarina/v9/-F6wfjF3ITQwasLhLkDUriBQxw.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Sarpanch",
      "variants": [
        "regular",
        "500",
        "600",
        "700",
        "800",
        "900"
      ],
      "subsets": [
        "devanagari",
        "latin",
        "latin-ext"
      ],
      "version": "v6",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/sarpanch/v6/hESy6Xt4NCpRuk6Pzh2ARIrX_20n.ttf",
        "500": "http://fonts.gstatic.com/s/sarpanch/v6/hES16Xt4NCpRuk6PziV0ba7f1HEuRHkM.ttf",
        "600": "http://fonts.gstatic.com/s/sarpanch/v6/hES16Xt4NCpRuk6PziVYaq7f1HEuRHkM.ttf",
        "700": "http://fonts.gstatic.com/s/sarpanch/v6/hES16Xt4NCpRuk6PziU8a67f1HEuRHkM.ttf",
        "800": "http://fonts.gstatic.com/s/sarpanch/v6/hES16Xt4NCpRuk6PziUgaK7f1HEuRHkM.ttf",
        "900": "http://fonts.gstatic.com/s/sarpanch/v6/hES16Xt4NCpRuk6PziUEaa7f1HEuRHkM.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Satisfy",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v11",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/satisfy/v11/rP2Hp2yn6lkG50LoOZSCHBeHFl0.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Sawarabi Gothic",
      "variants": [
        "regular"
      ],
      "subsets": [
        "cyrillic",
        "japanese",
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v8",
      "lastModified": "2019-11-05",
      "files": {
        "regular": "http://fonts.gstatic.com/s/sawarabigothic/v8/x3d4ckfVaqqa-BEj-I9mE65u3k3NBSk3E2YljQ.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Sawarabi Mincho",
      "variants": [
        "regular"
      ],
      "subsets": [
        "japanese",
        "latin",
        "latin-ext"
      ],
      "version": "v10",
      "lastModified": "2019-11-05",
      "files": {
        "regular": "http://fonts.gstatic.com/s/sawarabimincho/v10/8QIRdiDaitzr7brc8ahpxt6GcIJTLahP46UDUw.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Scada",
      "variants": [
        "regular",
        "italic",
        "700",
        "700italic"
      ],
      "subsets": [
        "cyrillic",
        "cyrillic-ext",
        "latin",
        "latin-ext"
      ],
      "version": "v9",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/scada/v9/RLpxK5Pv5qumeWJoxzUobkvv.ttf",
        "italic": "http://fonts.gstatic.com/s/scada/v9/RLp_K5Pv5qumeVJqzTEKa1vvffg.ttf",
        "700": "http://fonts.gstatic.com/s/scada/v9/RLp8K5Pv5qumeVrU6BEgRVfmZOE5.ttf",
        "700italic": "http://fonts.gstatic.com/s/scada/v9/RLp6K5Pv5qumeVJq9Y0lT1PEYfE5p6g.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Scheherazade",
      "variants": [
        "regular",
        "700"
      ],
      "subsets": [
        "arabic",
        "latin"
      ],
      "version": "v19",
      "lastModified": "2020-09-25",
      "files": {
        "regular": "http://fonts.gstatic.com/s/scheherazade/v19/YA9Ur0yF4ETZN60keViq1kQgt5OohvbJ9A.ttf",
        "700": "http://fonts.gstatic.com/s/scheherazade/v19/YA9Lr0yF4ETZN60keViq1kQYC7yMjt3V_dB0Yw.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Schoolbell",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v11",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/schoolbell/v11/92zQtBZWOrcgoe-fgnJIVxIQ6mRqfiQ.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Scope One",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v7",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/scopeone/v7/WBLnrEXKYFlGHrOKmGD1W0_MJMGxiQ.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Seaweed Script",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v8",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/seaweedscript/v8/bx6cNx6Tne2pxOATYE8C_Rsoe0WJ-KcGVbLW.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Secular One",
      "variants": [
        "regular"
      ],
      "subsets": [
        "hebrew",
        "latin",
        "latin-ext"
      ],
      "version": "v5",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/secularone/v5/8QINdiTajsj_87rMuMdKypDlMul7LJpK.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Sedgwick Ave",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v6",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/sedgwickave/v6/uK_04rKEYuguzAcSYRdWTJq8Xmg1Vcf5JA.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Sedgwick Ave Display",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v6",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/sedgwickavedisplay/v6/xfuu0XPgU3jZPUoUo3ScvmPi-NapQ8OxM2czd-YnOzUD.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Sen",
      "variants": [
        "regular",
        "700",
        "800"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v2",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/sen/v2/6xKjdSxYI9_Hm_-MImrpLQ.ttf",
        "700": "http://fonts.gstatic.com/s/sen/v2/6xKudSxYI9__J9CoKkH1JHUQSQ.ttf",
        "800": "http://fonts.gstatic.com/s/sen/v2/6xKudSxYI9__O9OoKkH1JHUQSQ.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Sevillana",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v9",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/sevillana/v9/KFOlCnWFscmDt1Bfiy1vAx05IsDqlA.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Seymour One",
      "variants": [
        "regular"
      ],
      "subsets": [
        "cyrillic",
        "latin",
        "latin-ext"
      ],
      "version": "v8",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/seymourone/v8/4iCp6Khla9xbjQpoWGGd0myIPYBvgpUI.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Shadows Into Light",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v10",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/shadowsintolight/v10/UqyNK9UOIntux_czAvDQx_ZcHqZXBNQDcsr4xzSMYA.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Shadows Into Light Two",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v8",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/shadowsintolighttwo/v8/4iC86LVlZsRSjQhpWGedwyOoW-0A6_kpsyNmlAvNGLNnIF0.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Shanti",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v12",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/shanti/v12/t5thIREMM4uSDgzgU0ezpKfwzA.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Share",
      "variants": [
        "regular",
        "italic",
        "700",
        "700italic"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v11",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/share/v11/i7dEIFliZjKNF5VNHLq2cV5d.ttf",
        "italic": "http://fonts.gstatic.com/s/share/v11/i7dKIFliZjKNF6VPFr6UdE5dWFM.ttf",
        "700": "http://fonts.gstatic.com/s/share/v11/i7dJIFliZjKNF63xM56-WkJUQUq7.ttf",
        "700italic": "http://fonts.gstatic.com/s/share/v11/i7dPIFliZjKNF6VPLgK7UEZ2RFq7AwU.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Share Tech",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v10",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/sharetech/v10/7cHtv4Uyi5K0OeZ7bohUwHoDmTcibrA.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Share Tech Mono",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v10",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/sharetechmono/v10/J7aHnp1uDWRBEqV98dVQztYldFc7pAsEIc3Xew.ttf"
      },
      "category": "monospace",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Shojumaru",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v8",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/shojumaru/v8/rax_HiWfutkLLnaKCtlMBBJek0vA8A.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Short Stack",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v10",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/shortstack/v10/bMrzmS2X6p0jZC6EcmPFX-SScX8D0nq6.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Shrikhand",
      "variants": [
        "regular"
      ],
      "subsets": [
        "gujarati",
        "latin",
        "latin-ext"
      ],
      "version": "v6",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/shrikhand/v6/a8IbNovtLWfR7T7bMJwbBIiQ0zhMtA.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Siemreap",
      "variants": [
        "regular"
      ],
      "subsets": [
        "khmer"
      ],
      "version": "v13",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/siemreap/v13/Gg82N5oFbgLvHAfNl2YbnA8DLXpe.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Sigmar One",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v11",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/sigmarone/v11/co3DmWZ8kjZuErj9Ta3dk6Pjp3Di8U0.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Signika",
      "variants": [
        "300",
        "regular",
        "500",
        "600",
        "700"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v12",
      "lastModified": "2021-01-30",
      "files": {
        "300": "http://fonts.gstatic.com/s/signika/v12/vEFO2_JTCgwQ5ejvMV0O96D01E8J0tIJHJbGhs_cfKe1.ttf",
        "regular": "http://fonts.gstatic.com/s/signika/v12/vEFO2_JTCgwQ5ejvMV0O96D01E8J0tJXHJbGhs_cfKe1.ttf",
        "500": "http://fonts.gstatic.com/s/signika/v12/vEFO2_JTCgwQ5ejvMV0O96D01E8J0tJlHJbGhs_cfKe1.ttf",
        "600": "http://fonts.gstatic.com/s/signika/v12/vEFO2_JTCgwQ5ejvMV0O96D01E8J0tKJG5bGhs_cfKe1.ttf",
        "700": "http://fonts.gstatic.com/s/signika/v12/vEFO2_JTCgwQ5ejvMV0O96D01E8J0tKwG5bGhs_cfKe1.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Signika Negative",
      "variants": [
        "300",
        "regular",
        "600",
        "700"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v11",
      "lastModified": "2020-09-02",
      "files": {
        "300": "http://fonts.gstatic.com/s/signikanegative/v11/E217_cfngu7HiRpPX3ZpNE4kY5zKal6DipHD6z_iXAs.ttf",
        "regular": "http://fonts.gstatic.com/s/signikanegative/v11/E218_cfngu7HiRpPX3ZpNE4kY5zKUvKrrpno9zY.ttf",
        "600": "http://fonts.gstatic.com/s/signikanegative/v11/E217_cfngu7HiRpPX3ZpNE4kY5zKaiqFipHD6z_iXAs.ttf",
        "700": "http://fonts.gstatic.com/s/signikanegative/v11/E217_cfngu7HiRpPX3ZpNE4kY5zKak6EipHD6z_iXAs.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Simonetta",
      "variants": [
        "regular",
        "italic",
        "900",
        "900italic"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v11",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/simonetta/v11/x3dickHVYrCU5BU15c4BfPACvy_1BA.ttf",
        "italic": "http://fonts.gstatic.com/s/simonetta/v11/x3dkckHVYrCU5BU15c4xfvoGnSrlBBsy.ttf",
        "900": "http://fonts.gstatic.com/s/simonetta/v11/x3dnckHVYrCU5BU15c45-N0mtwTpDQIrGg.ttf",
        "900italic": "http://fonts.gstatic.com/s/simonetta/v11/x3d5ckHVYrCU5BU15c4xfsKCsA7tLwc7Gn88.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Single Day",
      "variants": [
        "regular"
      ],
      "subsets": [
        "korean"
      ],
      "version": "v3",
      "lastModified": "2021-01-21",
      "files": {
        "regular": "http://fonts.gstatic.com/s/singleday/v3/LYjHdGDjlEgoAcF95EI5jVoFUNfeQJU.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Sintony",
      "variants": [
        "regular",
        "700"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v8",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/sintony/v8/XoHm2YDqR7-98cVUITQnu98ojjs.ttf",
        "700": "http://fonts.gstatic.com/s/sintony/v8/XoHj2YDqR7-98cVUGYgIn9cDkjLp6C8.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Sirin Stencil",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v9",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/sirinstencil/v9/mem4YaWwznmLx-lzGfN7MdRydchGBq6al6o.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Six Caps",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v11",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/sixcaps/v11/6ae_4KGrU7VR7bNmabcS9XXaPCop.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Skranji",
      "variants": [
        "regular",
        "700"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v8",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/skranji/v8/OZpDg_dtriVFNerMYzuuklTm3Ek.ttf",
        "700": "http://fonts.gstatic.com/s/skranji/v8/OZpGg_dtriVFNerMW4eBtlzNwED-b4g.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Slabo 13px",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v8",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/slabo13px/v8/11hEGp_azEvXZUdSBzzRcKer2wkYnvI.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Slabo 27px",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v7",
      "lastModified": "2020-09-10",
      "files": {
        "regular": "http://fonts.gstatic.com/s/slabo27px/v7/mFT0WbgBwKPR_Z4hGN2qsxgJ1EJ7i90.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Slackey",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v11",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/slackey/v11/N0bV2SdQO-5yM0-dKlRaJdbWgdY.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Smokum",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v11",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/smokum/v11/TK3iWkUbAhopmrdGHjUHte5fKg.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Smythe",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v11",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/smythe/v11/MwQ3bhT01--coT1BOLh_uGInjA.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Sniglet",
      "variants": [
        "regular",
        "800"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v12",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/sniglet/v12/cIf9MaFLtkE3UjaJxCmrYGkHgIs.ttf",
        "800": "http://fonts.gstatic.com/s/sniglet/v12/cIf4MaFLtkE3UjaJ_ImHRGEsnIJkWL4.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Snippet",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v10",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/snippet/v10/bWt47f7XfQH9Gupu2v_Afcp9QWc.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Snowburst One",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v8",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/snowburstone/v8/MQpS-WezKdujBsXY3B7I-UT7eZ-UPyacPbo.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Sofadi One",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v9",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/sofadione/v9/JIA2UVBxdnVBuElZaMFGcDOIETkmYDU.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Sofia",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v9",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/sofia/v9/8QIHdirahM3j_vu-sowsrqjk.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Solway",
      "variants": [
        "300",
        "regular",
        "500",
        "700",
        "800"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v3",
      "lastModified": "2020-07-23",
      "files": {
        "300": "http://fonts.gstatic.com/s/solway/v3/AMOTz46Cs2uTAOCuLlgZms0QW3mqyg.ttf",
        "regular": "http://fonts.gstatic.com/s/solway/v3/AMOQz46Cs2uTAOCWgnA9kuYMUg.ttf",
        "500": "http://fonts.gstatic.com/s/solway/v3/AMOTz46Cs2uTAOCudlkZms0QW3mqyg.ttf",
        "700": "http://fonts.gstatic.com/s/solway/v3/AMOTz46Cs2uTAOCuPl8Zms0QW3mqyg.ttf",
        "800": "http://fonts.gstatic.com/s/solway/v3/AMOTz46Cs2uTAOCuIlwZms0QW3mqyg.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Song Myung",
      "variants": [
        "regular"
      ],
      "subsets": [
        "korean",
        "latin"
      ],
      "version": "v8",
      "lastModified": "2019-07-16",
      "files": {
        "regular": "http://fonts.gstatic.com/s/songmyung/v8/1cX2aUDWAJH5-EIC7DIhr1GqhcitzeM.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Sonsie One",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v9",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/sonsieone/v9/PbymFmP_EAnPqbKaoc18YVu80lbp8JM.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Sora",
      "variants": [
        "100",
        "200",
        "300",
        "regular",
        "500",
        "600",
        "700",
        "800"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v3",
      "lastModified": "2021-01-21",
      "files": {
        "100": "http://fonts.gstatic.com/s/sora/v3/xMQOuFFYT72X5wkB_18qmnndmSdSn3-KIwNhBti0.ttf",
        "200": "http://fonts.gstatic.com/s/sora/v3/xMQOuFFYT72X5wkB_18qmnndmSfSnn-KIwNhBti0.ttf",
        "300": "http://fonts.gstatic.com/s/sora/v3/xMQOuFFYT72X5wkB_18qmnndmScMnn-KIwNhBti0.ttf",
        "regular": "http://fonts.gstatic.com/s/sora/v3/xMQOuFFYT72X5wkB_18qmnndmSdSnn-KIwNhBti0.ttf",
        "500": "http://fonts.gstatic.com/s/sora/v3/xMQOuFFYT72X5wkB_18qmnndmSdgnn-KIwNhBti0.ttf",
        "600": "http://fonts.gstatic.com/s/sora/v3/xMQOuFFYT72X5wkB_18qmnndmSeMmX-KIwNhBti0.ttf",
        "700": "http://fonts.gstatic.com/s/sora/v3/xMQOuFFYT72X5wkB_18qmnndmSe1mX-KIwNhBti0.ttf",
        "800": "http://fonts.gstatic.com/s/sora/v3/xMQOuFFYT72X5wkB_18qmnndmSfSmX-KIwNhBti0.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Sorts Mill Goudy",
      "variants": [
        "regular",
        "italic"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v10",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/sortsmillgoudy/v10/Qw3GZR9MED_6PSuS_50nEaVrfzgEXH0OjpM75PE.ttf",
        "italic": "http://fonts.gstatic.com/s/sortsmillgoudy/v10/Qw3AZR9MED_6PSuS_50nEaVrfzgEbH8EirE-9PGLfQ.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Source Code Pro",
      "variants": [
        "200",
        "200italic",
        "300",
        "300italic",
        "regular",
        "italic",
        "500",
        "500italic",
        "600",
        "600italic",
        "700",
        "700italic",
        "900",
        "900italic"
      ],
      "subsets": [
        "cyrillic",
        "cyrillic-ext",
        "greek",
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v13",
      "lastModified": "2020-09-25",
      "files": {
        "200": "http://fonts.gstatic.com/s/sourcecodepro/v13/HI_XiYsKILxRpg3hIP6sJ7fM7Pqt8srztO0rzmmkDQ.ttf",
        "200italic": "http://fonts.gstatic.com/s/sourcecodepro/v13/HI_ViYsKILxRpg3hIP6sJ7fM7PqlONMbtecv7Gy0DRzS.ttf",
        "300": "http://fonts.gstatic.com/s/sourcecodepro/v13/HI_XiYsKILxRpg3hIP6sJ7fM7PqtlsnztO0rzmmkDQ.ttf",
        "300italic": "http://fonts.gstatic.com/s/sourcecodepro/v13/HI_ViYsKILxRpg3hIP6sJ7fM7PqlONN_tucv7Gy0DRzS.ttf",
        "regular": "http://fonts.gstatic.com/s/sourcecodepro/v13/HI_SiYsKILxRpg3hIP6sJ7fM7PqVOuHXvMY3xw.ttf",
        "italic": "http://fonts.gstatic.com/s/sourcecodepro/v13/HI_QiYsKILxRpg3hIP6sJ7fM7PqlOOvTnsMnx3C9.ttf",
        "500": "http://fonts.gstatic.com/s/sourcecodepro/v13/HI_XiYsKILxRpg3hIP6sJ7fM7PqtzsjztO0rzmmkDQ.ttf",
        "500italic": "http://fonts.gstatic.com/s/sourcecodepro/v13/HI_ViYsKILxRpg3hIP6sJ7fM7PqlONMnt-cv7Gy0DRzS.ttf",
        "600": "http://fonts.gstatic.com/s/sourcecodepro/v13/HI_XiYsKILxRpg3hIP6sJ7fM7Pqt4s_ztO0rzmmkDQ.ttf",
        "600italic": "http://fonts.gstatic.com/s/sourcecodepro/v13/HI_ViYsKILxRpg3hIP6sJ7fM7PqlONMLsOcv7Gy0DRzS.ttf",
        "700": "http://fonts.gstatic.com/s/sourcecodepro/v13/HI_XiYsKILxRpg3hIP6sJ7fM7Pqths7ztO0rzmmkDQ.ttf",
        "700italic": "http://fonts.gstatic.com/s/sourcecodepro/v13/HI_ViYsKILxRpg3hIP6sJ7fM7PqlONNvsecv7Gy0DRzS.ttf",
        "900": "http://fonts.gstatic.com/s/sourcecodepro/v13/HI_XiYsKILxRpg3hIP6sJ7fM7PqtvszztO0rzmmkDQ.ttf",
        "900italic": "http://fonts.gstatic.com/s/sourcecodepro/v13/HI_ViYsKILxRpg3hIP6sJ7fM7PqlONNXs-cv7Gy0DRzS.ttf"
      },
      "category": "monospace",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Source Sans Pro",
      "variants": [
        "200",
        "200italic",
        "300",
        "300italic",
        "regular",
        "italic",
        "600",
        "600italic",
        "700",
        "700italic",
        "900",
        "900italic"
      ],
      "subsets": [
        "cyrillic",
        "cyrillic-ext",
        "greek",
        "greek-ext",
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v14",
      "lastModified": "2020-09-15",
      "files": {
        "200": "http://fonts.gstatic.com/s/sourcesanspro/v14/6xKydSBYKcSV-LCoeQqfX1RYOo3i94_AkB1v_8CGxg.ttf",
        "200italic": "http://fonts.gstatic.com/s/sourcesanspro/v14/6xKwdSBYKcSV-LCoeQqfX1RYOo3qPZYokRdr3cWWxg40.ttf",
        "300": "http://fonts.gstatic.com/s/sourcesanspro/v14/6xKydSBYKcSV-LCoeQqfX1RYOo3ik4zAkB1v_8CGxg.ttf",
        "300italic": "http://fonts.gstatic.com/s/sourcesanspro/v14/6xKwdSBYKcSV-LCoeQqfX1RYOo3qPZZMkhdr3cWWxg40.ttf",
        "regular": "http://fonts.gstatic.com/s/sourcesanspro/v14/6xK3dSBYKcSV-LCoeQqfX1RYOo3aP6TkmDZz9g.ttf",
        "italic": "http://fonts.gstatic.com/s/sourcesanspro/v14/6xK1dSBYKcSV-LCoeQqfX1RYOo3qPa7gujNj9tmf.ttf",
        "600": "http://fonts.gstatic.com/s/sourcesanspro/v14/6xKydSBYKcSV-LCoeQqfX1RYOo3i54rAkB1v_8CGxg.ttf",
        "600italic": "http://fonts.gstatic.com/s/sourcesanspro/v14/6xKwdSBYKcSV-LCoeQqfX1RYOo3qPZY4lBdr3cWWxg40.ttf",
        "700": "http://fonts.gstatic.com/s/sourcesanspro/v14/6xKydSBYKcSV-LCoeQqfX1RYOo3ig4vAkB1v_8CGxg.ttf",
        "700italic": "http://fonts.gstatic.com/s/sourcesanspro/v14/6xKwdSBYKcSV-LCoeQqfX1RYOo3qPZZclRdr3cWWxg40.ttf",
        "900": "http://fonts.gstatic.com/s/sourcesanspro/v14/6xKydSBYKcSV-LCoeQqfX1RYOo3iu4nAkB1v_8CGxg.ttf",
        "900italic": "http://fonts.gstatic.com/s/sourcesanspro/v14/6xKwdSBYKcSV-LCoeQqfX1RYOo3qPZZklxdr3cWWxg40.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Source Serif Pro",
      "variants": [
        "200",
        "200italic",
        "300",
        "300italic",
        "regular",
        "italic",
        "600",
        "600italic",
        "700",
        "700italic",
        "900",
        "900italic"
      ],
      "subsets": [
        "cyrillic",
        "cyrillic-ext",
        "greek",
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v10",
      "lastModified": "2020-09-25",
      "files": {
        "200": "http://fonts.gstatic.com/s/sourceserifpro/v10/neIXzD-0qpwxpaWvjeD0X88SAOeasbsfhSugxYUvZrI.ttf",
        "200italic": "http://fonts.gstatic.com/s/sourceserifpro/v10/neIVzD-0qpwxpaWvjeD0X88SAOeauXEGbSqqwacqdrKvbQ.ttf",
        "300": "http://fonts.gstatic.com/s/sourceserifpro/v10/neIXzD-0qpwxpaWvjeD0X88SAOeasd8chSugxYUvZrI.ttf",
        "300italic": "http://fonts.gstatic.com/s/sourceserifpro/v10/neIVzD-0qpwxpaWvjeD0X88SAOeauXEGCSmqwacqdrKvbQ.ttf",
        "regular": "http://fonts.gstatic.com/s/sourceserifpro/v10/neIQzD-0qpwxpaWvjeD0X88SAOeaiXM0oSOL2Yw.ttf",
        "italic": "http://fonts.gstatic.com/s/sourceserifpro/v10/neIWzD-0qpwxpaWvjeD0X88SAOeauXE-pQGOyYw2fw.ttf",
        "600": "http://fonts.gstatic.com/s/sourceserifpro/v10/neIXzD-0qpwxpaWvjeD0X88SAOeasasahSugxYUvZrI.ttf",
        "600italic": "http://fonts.gstatic.com/s/sourceserifpro/v10/neIVzD-0qpwxpaWvjeD0X88SAOeauXEGfS-qwacqdrKvbQ.ttf",
        "700": "http://fonts.gstatic.com/s/sourceserifpro/v10/neIXzD-0qpwxpaWvjeD0X88SAOeasc8bhSugxYUvZrI.ttf",
        "700italic": "http://fonts.gstatic.com/s/sourceserifpro/v10/neIVzD-0qpwxpaWvjeD0X88SAOeauXEGGS6qwacqdrKvbQ.ttf",
        "900": "http://fonts.gstatic.com/s/sourceserifpro/v10/neIXzD-0qpwxpaWvjeD0X88SAOeasfcZhSugxYUvZrI.ttf",
        "900italic": "http://fonts.gstatic.com/s/sourceserifpro/v10/neIVzD-0qpwxpaWvjeD0X88SAOeauXEGISyqwacqdrKvbQ.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Space Grotesk",
      "variants": [
        "300",
        "regular",
        "500",
        "600",
        "700"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v3",
      "lastModified": "2021-01-21",
      "files": {
        "300": "http://fonts.gstatic.com/s/spacegrotesk/v3/V8mQoQDjQSkFtoMM3T6r8E7mF71Q-gOoraIAEj62UUsjNsFjTDJK.ttf",
        "regular": "http://fonts.gstatic.com/s/spacegrotesk/v3/V8mQoQDjQSkFtoMM3T6r8E7mF71Q-gOoraIAEj7oUUsjNsFjTDJK.ttf",
        "500": "http://fonts.gstatic.com/s/spacegrotesk/v3/V8mQoQDjQSkFtoMM3T6r8E7mF71Q-gOoraIAEj7aUUsjNsFjTDJK.ttf",
        "600": "http://fonts.gstatic.com/s/spacegrotesk/v3/V8mQoQDjQSkFtoMM3T6r8E7mF71Q-gOoraIAEj42VksjNsFjTDJK.ttf",
        "700": "http://fonts.gstatic.com/s/spacegrotesk/v3/V8mQoQDjQSkFtoMM3T6r8E7mF71Q-gOoraIAEj4PVksjNsFjTDJK.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Space Mono",
      "variants": [
        "regular",
        "italic",
        "700",
        "700italic"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v6",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/spacemono/v6/i7dPIFZifjKcF5UAWdDRUEZ2RFq7AwU.ttf",
        "italic": "http://fonts.gstatic.com/s/spacemono/v6/i7dNIFZifjKcF5UAWdDRYER8QHi-EwWMbg.ttf",
        "700": "http://fonts.gstatic.com/s/spacemono/v6/i7dMIFZifjKcF5UAWdDRaPpZYFKQHwyVd3U.ttf",
        "700italic": "http://fonts.gstatic.com/s/spacemono/v6/i7dSIFZifjKcF5UAWdDRYERE_FeaGy6QZ3WfYg.ttf"
      },
      "category": "monospace",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Spartan",
      "variants": [
        "100",
        "200",
        "300",
        "regular",
        "500",
        "600",
        "700",
        "800",
        "900"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v3",
      "lastModified": "2021-01-30",
      "files": {
        "100": "http://fonts.gstatic.com/s/spartan/v3/l7gAbjR61M69yt8Z8w6FZf9WoBxdBrGFuG6OChXtf4qS.ttf",
        "200": "http://fonts.gstatic.com/s/spartan/v3/l7gAbjR61M69yt8Z8w6FZf9WoBxdBrEFuW6OChXtf4qS.ttf",
        "300": "http://fonts.gstatic.com/s/spartan/v3/l7gAbjR61M69yt8Z8w6FZf9WoBxdBrHbuW6OChXtf4qS.ttf",
        "regular": "http://fonts.gstatic.com/s/spartan/v3/l7gAbjR61M69yt8Z8w6FZf9WoBxdBrGFuW6OChXtf4qS.ttf",
        "500": "http://fonts.gstatic.com/s/spartan/v3/l7gAbjR61M69yt8Z8w6FZf9WoBxdBrG3uW6OChXtf4qS.ttf",
        "600": "http://fonts.gstatic.com/s/spartan/v3/l7gAbjR61M69yt8Z8w6FZf9WoBxdBrFbvm6OChXtf4qS.ttf",
        "700": "http://fonts.gstatic.com/s/spartan/v3/l7gAbjR61M69yt8Z8w6FZf9WoBxdBrFivm6OChXtf4qS.ttf",
        "800": "http://fonts.gstatic.com/s/spartan/v3/l7gAbjR61M69yt8Z8w6FZf9WoBxdBrEFvm6OChXtf4qS.ttf",
        "900": "http://fonts.gstatic.com/s/spartan/v3/l7gAbjR61M69yt8Z8w6FZf9WoBxdBrEsvm6OChXtf4qS.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Special Elite",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v11",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/specialelite/v11/XLYgIZbkc4JPUL5CVArUVL0nhncESXFtUsM.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Spectral",
      "variants": [
        "200",
        "200italic",
        "300",
        "300italic",
        "regular",
        "italic",
        "500",
        "500italic",
        "600",
        "600italic",
        "700",
        "700italic",
        "800",
        "800italic"
      ],
      "subsets": [
        "cyrillic",
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v6",
      "lastModified": "2019-07-16",
      "files": {
        "200": "http://fonts.gstatic.com/s/spectral/v6/rnCs-xNNww_2s0amA9v2s13GY_etWWIJ.ttf",
        "200italic": "http://fonts.gstatic.com/s/spectral/v6/rnCu-xNNww_2s0amA9M8qrXHafOPXHIJErY.ttf",
        "300": "http://fonts.gstatic.com/s/spectral/v6/rnCs-xNNww_2s0amA9uSsF3GY_etWWIJ.ttf",
        "300italic": "http://fonts.gstatic.com/s/spectral/v6/rnCu-xNNww_2s0amA9M8qtHEafOPXHIJErY.ttf",
        "regular": "http://fonts.gstatic.com/s/spectral/v6/rnCr-xNNww_2s0amA-M-mHnOSOuk.ttf",
        "italic": "http://fonts.gstatic.com/s/spectral/v6/rnCt-xNNww_2s0amA9M8kn3sTfukQHs.ttf",
        "500": "http://fonts.gstatic.com/s/spectral/v6/rnCs-xNNww_2s0amA9vKsV3GY_etWWIJ.ttf",
        "500italic": "http://fonts.gstatic.com/s/spectral/v6/rnCu-xNNww_2s0amA9M8qonFafOPXHIJErY.ttf",
        "600": "http://fonts.gstatic.com/s/spectral/v6/rnCs-xNNww_2s0amA9vmtl3GY_etWWIJ.ttf",
        "600italic": "http://fonts.gstatic.com/s/spectral/v6/rnCu-xNNww_2s0amA9M8qqXCafOPXHIJErY.ttf",
        "700": "http://fonts.gstatic.com/s/spectral/v6/rnCs-xNNww_2s0amA9uCt13GY_etWWIJ.ttf",
        "700italic": "http://fonts.gstatic.com/s/spectral/v6/rnCu-xNNww_2s0amA9M8qsHDafOPXHIJErY.ttf",
        "800": "http://fonts.gstatic.com/s/spectral/v6/rnCs-xNNww_2s0amA9uetF3GY_etWWIJ.ttf",
        "800italic": "http://fonts.gstatic.com/s/spectral/v6/rnCu-xNNww_2s0amA9M8qt3AafOPXHIJErY.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Spectral SC",
      "variants": [
        "200",
        "200italic",
        "300",
        "300italic",
        "regular",
        "italic",
        "500",
        "500italic",
        "600",
        "600italic",
        "700",
        "700italic",
        "800",
        "800italic"
      ],
      "subsets": [
        "cyrillic",
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v5",
      "lastModified": "2019-07-16",
      "files": {
        "200": "http://fonts.gstatic.com/s/spectralsc/v5/Ktk0ALCRZonmalTgyPmRfs1qwkTXPYeVXJZB.ttf",
        "200italic": "http://fonts.gstatic.com/s/spectralsc/v5/Ktk2ALCRZonmalTgyPmRfsWg26zWN4O3WYZB_sU.ttf",
        "300": "http://fonts.gstatic.com/s/spectralsc/v5/Ktk0ALCRZonmalTgyPmRfs0OwUTXPYeVXJZB.ttf",
        "300italic": "http://fonts.gstatic.com/s/spectralsc/v5/Ktk2ALCRZonmalTgyPmRfsWg28jVN4O3WYZB_sU.ttf",
        "regular": "http://fonts.gstatic.com/s/spectralsc/v5/KtkpALCRZonmalTgyPmRfvWi6WDfFpuc.ttf",
        "italic": "http://fonts.gstatic.com/s/spectralsc/v5/KtkrALCRZonmalTgyPmRfsWg42T9E4ucRY8.ttf",
        "500": "http://fonts.gstatic.com/s/spectralsc/v5/Ktk0ALCRZonmalTgyPmRfs1WwETXPYeVXJZB.ttf",
        "500italic": "http://fonts.gstatic.com/s/spectralsc/v5/Ktk2ALCRZonmalTgyPmRfsWg25DUN4O3WYZB_sU.ttf",
        "600": "http://fonts.gstatic.com/s/spectralsc/v5/Ktk0ALCRZonmalTgyPmRfs16x0TXPYeVXJZB.ttf",
        "600italic": "http://fonts.gstatic.com/s/spectralsc/v5/Ktk2ALCRZonmalTgyPmRfsWg27zTN4O3WYZB_sU.ttf",
        "700": "http://fonts.gstatic.com/s/spectralsc/v5/Ktk0ALCRZonmalTgyPmRfs0exkTXPYeVXJZB.ttf",
        "700italic": "http://fonts.gstatic.com/s/spectralsc/v5/Ktk2ALCRZonmalTgyPmRfsWg29jSN4O3WYZB_sU.ttf",
        "800": "http://fonts.gstatic.com/s/spectralsc/v5/Ktk0ALCRZonmalTgyPmRfs0CxUTXPYeVXJZB.ttf",
        "800italic": "http://fonts.gstatic.com/s/spectralsc/v5/Ktk2ALCRZonmalTgyPmRfsWg28TRN4O3WYZB_sU.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Spicy Rice",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v9",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/spicyrice/v9/uK_24rSEd-Uqwk4jY1RyGv-2WkowRcc.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Spinnaker",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v12",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/spinnaker/v12/w8gYH2oyX-I0_rvR6Hmn3HwLqOqSBg.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Spirax",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v9",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/spirax/v9/buE3poKgYNLy0F3cXktt-Csn-Q.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Squada One",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v9",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/squadaone/v9/BCasqZ8XsOrx4mcOk6MtWaA8WDBkHgs.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Sree Krushnadevaraya",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "telugu"
      ],
      "version": "v8",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/sreekrushnadevaraya/v8/R70FjzQeifmPepmyQQjQ9kvwMkWYPfTA_EWb2FhQuXir.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Sriracha",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "thai",
        "vietnamese"
      ],
      "version": "v4",
      "lastModified": "2019-07-16",
      "files": {
        "regular": "http://fonts.gstatic.com/s/sriracha/v4/0nkrC9D4IuYBgWcI9ObYRQDioeb0.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Srisakdi",
      "variants": [
        "regular",
        "700"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "thai",
        "vietnamese"
      ],
      "version": "v4",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/srisakdi/v4/yMJRMIlvdpDbkB0A-jq8fSx5i814.ttf",
        "700": "http://fonts.gstatic.com/s/srisakdi/v4/yMJWMIlvdpDbkB0A-gIAUghxoNFxW0Hz.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Staatliches",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v5",
      "lastModified": "2020-09-25",
      "files": {
        "regular": "http://fonts.gstatic.com/s/staatliches/v5/HI_OiY8KO6hCsQSoAPmtMbectJG9O9PS.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Stalemate",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v8",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/stalemate/v8/taiIGmZ_EJq97-UfkZRpuqSs8ZQpaQ.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Stalinist One",
      "variants": [
        "regular"
      ],
      "subsets": [
        "cyrillic",
        "latin",
        "latin-ext"
      ],
      "version": "v26",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/stalinistone/v26/MQpS-WezM9W4Dd7D3B7I-UT7eZ-UPyacPbo.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Stardos Stencil",
      "variants": [
        "regular",
        "700"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v11",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/stardosstencil/v11/X7n94bcuGPC8hrvEOHXOgaKCc2TR71R3tiSx0g.ttf",
        "700": "http://fonts.gstatic.com/s/stardosstencil/v11/X7n44bcuGPC8hrvEOHXOgaKCc2TpU3tTvg-t29HSHw.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Stint Ultra Condensed",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v9",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/stintultracondensed/v9/-W_gXIrsVjjeyEnPC45qD2NoFPtBE0xCh2A-qhUO2cNvdg.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Stint Ultra Expanded",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v8",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/stintultraexpanded/v8/CSRg4yNNh-GbW3o3JkwoDcdvMKMf0oBAd0qoATQkWwam.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Stoke",
      "variants": [
        "300",
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v10",
      "lastModified": "2020-07-23",
      "files": {
        "300": "http://fonts.gstatic.com/s/stoke/v10/z7NXdRb7aTMfKNvFVgxC_pjcTeWU.ttf",
        "regular": "http://fonts.gstatic.com/s/stoke/v10/z7NadRb7aTMfKONpfihK1YTV.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Strait",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v8",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/strait/v8/DtViJxy6WaEr1LZzeDhtkl0U7w.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Stylish",
      "variants": [
        "regular"
      ],
      "subsets": [
        "korean",
        "latin"
      ],
      "version": "v8",
      "lastModified": "2019-07-16",
      "files": {
        "regular": "http://fonts.gstatic.com/s/stylish/v8/m8JSjfhPYriQkk7-fo35dLxEdmo.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Sue Ellen Francisco",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v11",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/sueellenfrancisco/v11/wXK3E20CsoJ9j1DDkjHcQ5ZL8xRaxru9ropF2lqk9H4.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Suez One",
      "variants": [
        "regular"
      ],
      "subsets": [
        "hebrew",
        "latin",
        "latin-ext"
      ],
      "version": "v5",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/suezone/v5/taiJGmd_EZ6rqscQgNFJkIqg-I0w.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Sulphur Point",
      "variants": [
        "300",
        "regular",
        "700"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v2",
      "lastModified": "2020-07-23",
      "files": {
        "300": "http://fonts.gstatic.com/s/sulphurpoint/v2/RLpkK5vv8KaycDcazWFPBj2afVU6n6kFUHPIFaU.ttf",
        "regular": "http://fonts.gstatic.com/s/sulphurpoint/v2/RLp5K5vv8KaycDcazWFPBj2aRfkSu6EuTHo.ttf",
        "700": "http://fonts.gstatic.com/s/sulphurpoint/v2/RLpkK5vv8KaycDcazWFPBj2afUU9n6kFUHPIFaU.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Sumana",
      "variants": [
        "regular",
        "700"
      ],
      "subsets": [
        "devanagari",
        "latin",
        "latin-ext"
      ],
      "version": "v5",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/sumana/v5/4UaDrE5TqRBjGj-G8Bji76zR4w.ttf",
        "700": "http://fonts.gstatic.com/s/sumana/v5/4UaArE5TqRBjGj--TDfG54fN6ppsKg.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Sunflower",
      "variants": [
        "300",
        "500",
        "700"
      ],
      "subsets": [
        "korean",
        "latin"
      ],
      "version": "v9",
      "lastModified": "2019-07-16",
      "files": {
        "300": "http://fonts.gstatic.com/s/sunflower/v9/RWmPoKeF8fUjqIj7Vc-06MfiqYsGBGBzCw.ttf",
        "500": "http://fonts.gstatic.com/s/sunflower/v9/RWmPoKeF8fUjqIj7Vc-0sMbiqYsGBGBzCw.ttf",
        "700": "http://fonts.gstatic.com/s/sunflower/v9/RWmPoKeF8fUjqIj7Vc-0-MDiqYsGBGBzCw.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Sunshiney",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v11",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/sunshiney/v11/LDIwapGTLBwsS-wT4vcgE8moUePWkg.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Supermercado One",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v10",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/supermercadoone/v10/OpNXnpQWg8jc_xps_Gi14kVVEXOn60b3MClBRTs.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Sura",
      "variants": [
        "regular",
        "700"
      ],
      "subsets": [
        "devanagari",
        "latin",
        "latin-ext"
      ],
      "version": "v5",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/sura/v5/SZc23FL5PbyzFf5UWzXtjUM.ttf",
        "700": "http://fonts.gstatic.com/s/sura/v5/SZc53FL5PbyzLUJ7fz3GkUrS8DI.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Suranna",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "telugu"
      ],
      "version": "v8",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/suranna/v8/gokuH6ztGkFjWe58tBRZT2KmgP0.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Suravaram",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "telugu"
      ],
      "version": "v8",
      "lastModified": "2020-09-25",
      "files": {
        "regular": "http://fonts.gstatic.com/s/suravaram/v8/_gP61R_usiY7SCym4xIAi261Qv9roQ.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Suwannaphum",
      "variants": [
        "regular"
      ],
      "subsets": [
        "khmer"
      ],
      "version": "v14",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/suwannaphum/v14/jAnCgHV7GtDvc8jbe8hXXIWl_8C0Wg2V.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Swanky and Moo Moo",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v10",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/swankyandmoomoo/v10/flUlRrKz24IuWVI_WJYTYcqbEsMUZ3kUtbPkR64SYQ.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Syncopate",
      "variants": [
        "regular",
        "700"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v12",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/syncopate/v12/pe0sMIuPIYBCpEV5eFdyAv2-C99ycg.ttf",
        "700": "http://fonts.gstatic.com/s/syncopate/v12/pe0pMIuPIYBCpEV5eFdKvtKaA_Rue1UwVg.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Syne",
      "variants": [
        "regular",
        "500",
        "600",
        "700",
        "800"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v3",
      "lastModified": "2021-01-21",
      "files": {
        "regular": "http://fonts.gstatic.com/s/syne/v3/8vIS7w4qzmVxsWxjBZRjr0FKM_04uT6kR47NCV5Z.ttf",
        "500": "http://fonts.gstatic.com/s/syne/v3/8vIS7w4qzmVxsWxjBZRjr0FKM_0KuT6kR47NCV5Z.ttf",
        "600": "http://fonts.gstatic.com/s/syne/v3/8vIS7w4qzmVxsWxjBZRjr0FKM_3mvj6kR47NCV5Z.ttf",
        "700": "http://fonts.gstatic.com/s/syne/v3/8vIS7w4qzmVxsWxjBZRjr0FKM_3fvj6kR47NCV5Z.ttf",
        "800": "http://fonts.gstatic.com/s/syne/v3/8vIS7w4qzmVxsWxjBZRjr0FKM_24vj6kR47NCV5Z.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Syne Mono",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v2",
      "lastModified": "2021-01-21",
      "files": {
        "regular": "http://fonts.gstatic.com/s/synemono/v2/K2FzfZNHj_FHBmRbFvHzIqCkDyvqZA.ttf"
      },
      "category": "monospace",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Syne Tactile",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v2",
      "lastModified": "2021-01-21",
      "files": {
        "regular": "http://fonts.gstatic.com/s/synetactile/v2/11hGGpna2UTQKjMCVzjAPMKh3ysdjvKU8Q.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Tajawal",
      "variants": [
        "200",
        "300",
        "regular",
        "500",
        "700",
        "800",
        "900"
      ],
      "subsets": [
        "arabic",
        "latin"
      ],
      "version": "v3",
      "lastModified": "2019-07-16",
      "files": {
        "200": "http://fonts.gstatic.com/s/tajawal/v3/Iurf6YBj_oCad4k1l_6gLrZjiLlJ-G0.ttf",
        "300": "http://fonts.gstatic.com/s/tajawal/v3/Iurf6YBj_oCad4k1l5qjLrZjiLlJ-G0.ttf",
        "regular": "http://fonts.gstatic.com/s/tajawal/v3/Iura6YBj_oCad4k1rzaLCr5IlLA.ttf",
        "500": "http://fonts.gstatic.com/s/tajawal/v3/Iurf6YBj_oCad4k1l8KiLrZjiLlJ-G0.ttf",
        "700": "http://fonts.gstatic.com/s/tajawal/v3/Iurf6YBj_oCad4k1l4qkLrZjiLlJ-G0.ttf",
        "800": "http://fonts.gstatic.com/s/tajawal/v3/Iurf6YBj_oCad4k1l5anLrZjiLlJ-G0.ttf",
        "900": "http://fonts.gstatic.com/s/tajawal/v3/Iurf6YBj_oCad4k1l7KmLrZjiLlJ-G0.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Tangerine",
      "variants": [
        "regular",
        "700"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v12",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/tangerine/v12/IurY6Y5j_oScZZow4VOBDpxNhLBQ4Q.ttf",
        "700": "http://fonts.gstatic.com/s/tangerine/v12/Iurd6Y5j_oScZZow4VO5srNpjJtM6G0t9w.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Taprom",
      "variants": [
        "regular"
      ],
      "subsets": [
        "khmer"
      ],
      "version": "v12",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/taprom/v12/UcCn3F82JHycULbFQyk3-0kvHg.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Tauri",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v9",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/tauri/v9/TwMA-IISS0AM3IpVWHU_TBqO.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Taviraj",
      "variants": [
        "100",
        "100italic",
        "200",
        "200italic",
        "300",
        "300italic",
        "regular",
        "italic",
        "500",
        "500italic",
        "600",
        "600italic",
        "700",
        "700italic",
        "800",
        "800italic",
        "900",
        "900italic"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "thai",
        "vietnamese"
      ],
      "version": "v6",
      "lastModified": "2020-09-02",
      "files": {
        "100": "http://fonts.gstatic.com/s/taviraj/v6/ahcbv8Cj3ylylTXzRIorV8N1jU2gog.ttf",
        "100italic": "http://fonts.gstatic.com/s/taviraj/v6/ahcdv8Cj3ylylTXzTOwTM8lxr0iwolLl.ttf",
        "200": "http://fonts.gstatic.com/s/taviraj/v6/ahccv8Cj3ylylTXzRCYKd-lbgUS5u0s.ttf",
        "200italic": "http://fonts.gstatic.com/s/taviraj/v6/ahcev8Cj3ylylTXzTOwTn-hRhWa8q0v8ag.ttf",
        "300": "http://fonts.gstatic.com/s/taviraj/v6/ahccv8Cj3ylylTXzREIJd-lbgUS5u0s.ttf",
        "300italic": "http://fonts.gstatic.com/s/taviraj/v6/ahcev8Cj3ylylTXzTOwT--tRhWa8q0v8ag.ttf",
        "regular": "http://fonts.gstatic.com/s/taviraj/v6/ahcZv8Cj3ylylTXzfO4hU-FwnU0.ttf",
        "italic": "http://fonts.gstatic.com/s/taviraj/v6/ahcbv8Cj3ylylTXzTOwrV8N1jU2gog.ttf",
        "500": "http://fonts.gstatic.com/s/taviraj/v6/ahccv8Cj3ylylTXzRBoId-lbgUS5u0s.ttf",
        "500italic": "http://fonts.gstatic.com/s/taviraj/v6/ahcev8Cj3ylylTXzTOwTo-pRhWa8q0v8ag.ttf",
        "600": "http://fonts.gstatic.com/s/taviraj/v6/ahccv8Cj3ylylTXzRDYPd-lbgUS5u0s.ttf",
        "600italic": "http://fonts.gstatic.com/s/taviraj/v6/ahcev8Cj3ylylTXzTOwTj-1RhWa8q0v8ag.ttf",
        "700": "http://fonts.gstatic.com/s/taviraj/v6/ahccv8Cj3ylylTXzRFIOd-lbgUS5u0s.ttf",
        "700italic": "http://fonts.gstatic.com/s/taviraj/v6/ahcev8Cj3ylylTXzTOwT6-xRhWa8q0v8ag.ttf",
        "800": "http://fonts.gstatic.com/s/taviraj/v6/ahccv8Cj3ylylTXzRE4Nd-lbgUS5u0s.ttf",
        "800italic": "http://fonts.gstatic.com/s/taviraj/v6/ahcev8Cj3ylylTXzTOwT9-9RhWa8q0v8ag.ttf",
        "900": "http://fonts.gstatic.com/s/taviraj/v6/ahccv8Cj3ylylTXzRGoMd-lbgUS5u0s.ttf",
        "900italic": "http://fonts.gstatic.com/s/taviraj/v6/ahcev8Cj3ylylTXzTOwT0-5RhWa8q0v8ag.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Teko",
      "variants": [
        "300",
        "regular",
        "500",
        "600",
        "700"
      ],
      "subsets": [
        "devanagari",
        "latin",
        "latin-ext"
      ],
      "version": "v10",
      "lastModified": "2020-09-02",
      "files": {
        "300": "http://fonts.gstatic.com/s/teko/v10/LYjCdG7kmE0gdQhfgCNqqVIuTN4.ttf",
        "regular": "http://fonts.gstatic.com/s/teko/v10/LYjNdG7kmE0gTaR3pCtBtVs.ttf",
        "500": "http://fonts.gstatic.com/s/teko/v10/LYjCdG7kmE0gdVBegCNqqVIuTN4.ttf",
        "600": "http://fonts.gstatic.com/s/teko/v10/LYjCdG7kmE0gdXxZgCNqqVIuTN4.ttf",
        "700": "http://fonts.gstatic.com/s/teko/v10/LYjCdG7kmE0gdRhYgCNqqVIuTN4.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Telex",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v9",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/telex/v9/ieVw2Y1fKWmIO9fTB1piKFIf.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Tenali Ramakrishna",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "telugu"
      ],
      "version": "v7",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/tenaliramakrishna/v7/raxgHj6Yt9gAN3LLKs0BZVMo8jmwn1-8KJXqUFFvtA.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Tenor Sans",
      "variants": [
        "regular"
      ],
      "subsets": [
        "cyrillic",
        "latin",
        "latin-ext"
      ],
      "version": "v12",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/tenorsans/v12/bx6ANxqUneKx06UkIXISr3JyC22IyqI.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Text Me One",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v8",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/textmeone/v8/i7dOIFdlayuLUvgoFvHQFWZcalayGhyV.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Texturina",
      "variants": [
        "100",
        "200",
        "300",
        "regular",
        "500",
        "600",
        "700",
        "800",
        "900",
        "100italic",
        "200italic",
        "300italic",
        "italic",
        "500italic",
        "600italic",
        "700italic",
        "800italic",
        "900italic"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v3",
      "lastModified": "2021-01-30",
      "files": {
        "100": "http://fonts.gstatic.com/s/texturina/v3/c4mM1nxpEtL3pXiAulRTkY-HGmNEX1b9NspjMwhAgliHhVrXy2eYG_Ug25riW1OD.ttf",
        "200": "http://fonts.gstatic.com/s/texturina/v3/c4mM1nxpEtL3pXiAulRTkY-HGmNEX1b9NspjMwhAgliHhVrXy2cYGvUg25riW1OD.ttf",
        "300": "http://fonts.gstatic.com/s/texturina/v3/c4mM1nxpEtL3pXiAulRTkY-HGmNEX1b9NspjMwhAgliHhVrXy2fGGvUg25riW1OD.ttf",
        "regular": "http://fonts.gstatic.com/s/texturina/v3/c4mM1nxpEtL3pXiAulRTkY-HGmNEX1b9NspjMwhAgliHhVrXy2eYGvUg25riW1OD.ttf",
        "500": "http://fonts.gstatic.com/s/texturina/v3/c4mM1nxpEtL3pXiAulRTkY-HGmNEX1b9NspjMwhAgliHhVrXy2eqGvUg25riW1OD.ttf",
        "600": "http://fonts.gstatic.com/s/texturina/v3/c4mM1nxpEtL3pXiAulRTkY-HGmNEX1b9NspjMwhAgliHhVrXy2dGHfUg25riW1OD.ttf",
        "700": "http://fonts.gstatic.com/s/texturina/v3/c4mM1nxpEtL3pXiAulRTkY-HGmNEX1b9NspjMwhAgliHhVrXy2d_HfUg25riW1OD.ttf",
        "800": "http://fonts.gstatic.com/s/texturina/v3/c4mM1nxpEtL3pXiAulRTkY-HGmNEX1b9NspjMwhAgliHhVrXy2cYHfUg25riW1OD.ttf",
        "900": "http://fonts.gstatic.com/s/texturina/v3/c4mM1nxpEtL3pXiAulRTkY-HGmNEX1b9NspjMwhAgliHhVrXy2cxHfUg25riW1OD.ttf",
        "100italic": "http://fonts.gstatic.com/s/texturina/v3/c4mO1nxpEtL3pXiAulR5mL129FhZmLj7I4oiSUJyfYDu7sB5zHJQWR1i0Z7AXkODN94.ttf",
        "200italic": "http://fonts.gstatic.com/s/texturina/v3/c4mO1nxpEtL3pXiAulR5mL129FhZmLj7I4oiSUJyfYDu7sB5zHJQWZ1j0Z7AXkODN94.ttf",
        "300italic": "http://fonts.gstatic.com/s/texturina/v3/c4mO1nxpEtL3pXiAulR5mL129FhZmLj7I4oiSUJyfYDu7sB5zHJQWUNj0Z7AXkODN94.ttf",
        "italic": "http://fonts.gstatic.com/s/texturina/v3/c4mO1nxpEtL3pXiAulR5mL129FhZmLj7I4oiSUJyfYDu7sB5zHJQWR1j0Z7AXkODN94.ttf",
        "500italic": "http://fonts.gstatic.com/s/texturina/v3/c4mO1nxpEtL3pXiAulR5mL129FhZmLj7I4oiSUJyfYDu7sB5zHJQWS9j0Z7AXkODN94.ttf",
        "600italic": "http://fonts.gstatic.com/s/texturina/v3/c4mO1nxpEtL3pXiAulR5mL129FhZmLj7I4oiSUJyfYDu7sB5zHJQWcNk0Z7AXkODN94.ttf",
        "700italic": "http://fonts.gstatic.com/s/texturina/v3/c4mO1nxpEtL3pXiAulR5mL129FhZmLj7I4oiSUJyfYDu7sB5zHJQWfpk0Z7AXkODN94.ttf",
        "800italic": "http://fonts.gstatic.com/s/texturina/v3/c4mO1nxpEtL3pXiAulR5mL129FhZmLj7I4oiSUJyfYDu7sB5zHJQWZ1k0Z7AXkODN94.ttf",
        "900italic": "http://fonts.gstatic.com/s/texturina/v3/c4mO1nxpEtL3pXiAulR5mL129FhZmLj7I4oiSUJyfYDu7sB5zHJQWbRk0Z7AXkODN94.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Thasadith",
      "variants": [
        "regular",
        "italic",
        "700",
        "700italic"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "thai",
        "vietnamese"
      ],
      "version": "v4",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/thasadith/v4/mtG44_1TIqPYrd_f5R1YsEkU0CWuFw.ttf",
        "italic": "http://fonts.gstatic.com/s/thasadith/v4/mtG-4_1TIqPYrd_f5R1oskMQ8iC-F1ZE.ttf",
        "700": "http://fonts.gstatic.com/s/thasadith/v4/mtG94_1TIqPYrd_f5R1gDGYw2A6yHk9d8w.ttf",
        "700italic": "http://fonts.gstatic.com/s/thasadith/v4/mtGj4_1TIqPYrd_f5R1osnus3QS2PEpN8zxA.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "The Girl Next Door",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v11",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/thegirlnextdoor/v11/pe0zMJCIMIsBjFxqYBIcZ6_OI5oFHCYIV7t7w6bE2A.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Tienne",
      "variants": [
        "regular",
        "700",
        "900"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v13",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/tienne/v13/AYCKpX7pe9YCRP0LkEPHSFNyxw.ttf",
        "700": "http://fonts.gstatic.com/s/tienne/v13/AYCJpX7pe9YCRP0zLGzjQHhuzvef5Q.ttf",
        "900": "http://fonts.gstatic.com/s/tienne/v13/AYCJpX7pe9YCRP0zFG7jQHhuzvef5Q.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Tillana",
      "variants": [
        "regular",
        "500",
        "600",
        "700",
        "800"
      ],
      "subsets": [
        "devanagari",
        "latin",
        "latin-ext"
      ],
      "version": "v6",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/tillana/v6/VuJxdNvf35P4qJ1OeKbXOIFneRo.ttf",
        "500": "http://fonts.gstatic.com/s/tillana/v6/VuJ0dNvf35P4qJ1OQFL-HIlMZRNcp0o.ttf",
        "600": "http://fonts.gstatic.com/s/tillana/v6/VuJ0dNvf35P4qJ1OQH75HIlMZRNcp0o.ttf",
        "700": "http://fonts.gstatic.com/s/tillana/v6/VuJ0dNvf35P4qJ1OQBr4HIlMZRNcp0o.ttf",
        "800": "http://fonts.gstatic.com/s/tillana/v6/VuJ0dNvf35P4qJ1OQAb7HIlMZRNcp0o.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Timmana",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "telugu"
      ],
      "version": "v5",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/timmana/v5/6xKvdShfL9yK-rvpCmvbKHwJUOM.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Tinos",
      "variants": [
        "regular",
        "italic",
        "700",
        "700italic"
      ],
      "subsets": [
        "cyrillic",
        "cyrillic-ext",
        "greek",
        "greek-ext",
        "hebrew",
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v15",
      "lastModified": "2020-09-25",
      "files": {
        "regular": "http://fonts.gstatic.com/s/tinos/v15/buE4poGnedXvwgX8dGVh8TI-.ttf",
        "italic": "http://fonts.gstatic.com/s/tinos/v15/buE2poGnedXvwjX-fmFD9CI-4NU.ttf",
        "700": "http://fonts.gstatic.com/s/tinos/v15/buE1poGnedXvwj1AW0Fp2i43-cxL.ttf",
        "700italic": "http://fonts.gstatic.com/s/tinos/v15/buEzpoGnedXvwjX-Rt1s0CoV_NxLeiw.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Titan One",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v8",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/titanone/v8/mFTzWbsGxbbS_J5cQcjykzIn2Etikg.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Titillium Web",
      "variants": [
        "200",
        "200italic",
        "300",
        "300italic",
        "regular",
        "italic",
        "600",
        "600italic",
        "700",
        "700italic",
        "900"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v9",
      "lastModified": "2020-09-10",
      "files": {
        "200": "http://fonts.gstatic.com/s/titilliumweb/v9/NaPDcZTIAOhVxoMyOr9n_E7ffAzHKIx5YrSYqWM.ttf",
        "200italic": "http://fonts.gstatic.com/s/titilliumweb/v9/NaPFcZTIAOhVxoMyOr9n_E7fdMbewI1zZpaduWMmxA.ttf",
        "300": "http://fonts.gstatic.com/s/titilliumweb/v9/NaPDcZTIAOhVxoMyOr9n_E7ffGjEKIx5YrSYqWM.ttf",
        "300italic": "http://fonts.gstatic.com/s/titilliumweb/v9/NaPFcZTIAOhVxoMyOr9n_E7fdMbepI5zZpaduWMmxA.ttf",
        "regular": "http://fonts.gstatic.com/s/titilliumweb/v9/NaPecZTIAOhVxoMyOr9n_E7fRMTsDIRSfr0.ttf",
        "italic": "http://fonts.gstatic.com/s/titilliumweb/v9/NaPAcZTIAOhVxoMyOr9n_E7fdMbmCKZXbr2BsA.ttf",
        "600": "http://fonts.gstatic.com/s/titilliumweb/v9/NaPDcZTIAOhVxoMyOr9n_E7ffBzCKIx5YrSYqWM.ttf",
        "600italic": "http://fonts.gstatic.com/s/titilliumweb/v9/NaPFcZTIAOhVxoMyOr9n_E7fdMbe0IhzZpaduWMmxA.ttf",
        "700": "http://fonts.gstatic.com/s/titilliumweb/v9/NaPDcZTIAOhVxoMyOr9n_E7ffHjDKIx5YrSYqWM.ttf",
        "700italic": "http://fonts.gstatic.com/s/titilliumweb/v9/NaPFcZTIAOhVxoMyOr9n_E7fdMbetIlzZpaduWMmxA.ttf",
        "900": "http://fonts.gstatic.com/s/titilliumweb/v9/NaPDcZTIAOhVxoMyOr9n_E7ffEDBKIx5YrSYqWM.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Tomorrow",
      "variants": [
        "100",
        "100italic",
        "200",
        "200italic",
        "300",
        "300italic",
        "regular",
        "italic",
        "500",
        "500italic",
        "600",
        "600italic",
        "700",
        "700italic",
        "800",
        "800italic",
        "900",
        "900italic"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v3",
      "lastModified": "2020-07-23",
      "files": {
        "100": "http://fonts.gstatic.com/s/tomorrow/v3/WBLgrETNbFtZCeGqgR2xe2XiKMiokE4.ttf",
        "100italic": "http://fonts.gstatic.com/s/tomorrow/v3/WBLirETNbFtZCeGqgRXXQwHoLOqtgE5h0A.ttf",
        "200": "http://fonts.gstatic.com/s/tomorrow/v3/WBLhrETNbFtZCeGqgR0dWkXIBsShiVd4.ttf",
        "200italic": "http://fonts.gstatic.com/s/tomorrow/v3/WBLjrETNbFtZCeGqgRXXQ63JDMCDjEd4yVY.ttf",
        "300": "http://fonts.gstatic.com/s/tomorrow/v3/WBLhrETNbFtZCeGqgR15WUXIBsShiVd4.ttf",
        "300italic": "http://fonts.gstatic.com/s/tomorrow/v3/WBLjrETNbFtZCeGqgRXXQ8nKDMCDjEd4yVY.ttf",
        "regular": "http://fonts.gstatic.com/s/tomorrow/v3/WBLmrETNbFtZCeGqgSXVcWHALdio.ttf",
        "italic": "http://fonts.gstatic.com/s/tomorrow/v3/WBLgrETNbFtZCeGqgRXXe2XiKMiokE4.ttf",
        "500": "http://fonts.gstatic.com/s/tomorrow/v3/WBLhrETNbFtZCeGqgR0hWEXIBsShiVd4.ttf",
        "500italic": "http://fonts.gstatic.com/s/tomorrow/v3/WBLjrETNbFtZCeGqgRXXQ5HLDMCDjEd4yVY.ttf",
        "600": "http://fonts.gstatic.com/s/tomorrow/v3/WBLhrETNbFtZCeGqgR0NX0XIBsShiVd4.ttf",
        "600italic": "http://fonts.gstatic.com/s/tomorrow/v3/WBLjrETNbFtZCeGqgRXXQ73MDMCDjEd4yVY.ttf",
        "700": "http://fonts.gstatic.com/s/tomorrow/v3/WBLhrETNbFtZCeGqgR1pXkXIBsShiVd4.ttf",
        "700italic": "http://fonts.gstatic.com/s/tomorrow/v3/WBLjrETNbFtZCeGqgRXXQ9nNDMCDjEd4yVY.ttf",
        "800": "http://fonts.gstatic.com/s/tomorrow/v3/WBLhrETNbFtZCeGqgR11XUXIBsShiVd4.ttf",
        "800italic": "http://fonts.gstatic.com/s/tomorrow/v3/WBLjrETNbFtZCeGqgRXXQ8XODMCDjEd4yVY.ttf",
        "900": "http://fonts.gstatic.com/s/tomorrow/v3/WBLhrETNbFtZCeGqgR1RXEXIBsShiVd4.ttf",
        "900italic": "http://fonts.gstatic.com/s/tomorrow/v3/WBLjrETNbFtZCeGqgRXXQ-HPDMCDjEd4yVY.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Trade Winds",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v10",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/tradewinds/v10/AYCPpXPpYNIIT7h8-QenM3Jq7PKP5Z_G.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Trirong",
      "variants": [
        "100",
        "100italic",
        "200",
        "200italic",
        "300",
        "300italic",
        "regular",
        "italic",
        "500",
        "500italic",
        "600",
        "600italic",
        "700",
        "700italic",
        "800",
        "800italic",
        "900",
        "900italic"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "thai",
        "vietnamese"
      ],
      "version": "v6",
      "lastModified": "2020-09-02",
      "files": {
        "100": "http://fonts.gstatic.com/s/trirong/v6/7r3EqXNgp8wxdOdOl-go3YRl6ujngw.ttf",
        "100italic": "http://fonts.gstatic.com/s/trirong/v6/7r3CqXNgp8wxdOdOn44QuY5hyO33g8IY.ttf",
        "200": "http://fonts.gstatic.com/s/trirong/v6/7r3DqXNgp8wxdOdOl0QJ_a5L5uH-mts.ttf",
        "200italic": "http://fonts.gstatic.com/s/trirong/v6/7r3BqXNgp8wxdOdOn44QFa9B4sP7itsB5g.ttf",
        "300": "http://fonts.gstatic.com/s/trirong/v6/7r3DqXNgp8wxdOdOlyAK_a5L5uH-mts.ttf",
        "300italic": "http://fonts.gstatic.com/s/trirong/v6/7r3BqXNgp8wxdOdOn44QcaxB4sP7itsB5g.ttf",
        "regular": "http://fonts.gstatic.com/s/trirong/v6/7r3GqXNgp8wxdOdOr4wi2aZg-ug.ttf",
        "italic": "http://fonts.gstatic.com/s/trirong/v6/7r3EqXNgp8wxdOdOn44o3YRl6ujngw.ttf",
        "500": "http://fonts.gstatic.com/s/trirong/v6/7r3DqXNgp8wxdOdOl3gL_a5L5uH-mts.ttf",
        "500italic": "http://fonts.gstatic.com/s/trirong/v6/7r3BqXNgp8wxdOdOn44QKa1B4sP7itsB5g.ttf",
        "600": "http://fonts.gstatic.com/s/trirong/v6/7r3DqXNgp8wxdOdOl1QM_a5L5uH-mts.ttf",
        "600italic": "http://fonts.gstatic.com/s/trirong/v6/7r3BqXNgp8wxdOdOn44QBapB4sP7itsB5g.ttf",
        "700": "http://fonts.gstatic.com/s/trirong/v6/7r3DqXNgp8wxdOdOlzAN_a5L5uH-mts.ttf",
        "700italic": "http://fonts.gstatic.com/s/trirong/v6/7r3BqXNgp8wxdOdOn44QYatB4sP7itsB5g.ttf",
        "800": "http://fonts.gstatic.com/s/trirong/v6/7r3DqXNgp8wxdOdOlywO_a5L5uH-mts.ttf",
        "800italic": "http://fonts.gstatic.com/s/trirong/v6/7r3BqXNgp8wxdOdOn44QfahB4sP7itsB5g.ttf",
        "900": "http://fonts.gstatic.com/s/trirong/v6/7r3DqXNgp8wxdOdOlwgP_a5L5uH-mts.ttf",
        "900italic": "http://fonts.gstatic.com/s/trirong/v6/7r3BqXNgp8wxdOdOn44QWalB4sP7itsB5g.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Trispace",
      "variants": [
        "100",
        "200",
        "300",
        "regular",
        "500",
        "600",
        "700",
        "800"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v3",
      "lastModified": "2021-01-21",
      "files": {
        "100": "http://fonts.gstatic.com/s/trispace/v3/Yq65-LKSQC3o56LxxgRrtA6yBqsrXL5GI5KI-IUZVGsxWFIlbH9qoQl0zHugpt0.ttf",
        "200": "http://fonts.gstatic.com/s/trispace/v3/Yq65-LKSQC3o56LxxgRrtA6yBqsrXL5GI5KI-IUZVGsxWFIlbP9roQl0zHugpt0.ttf",
        "300": "http://fonts.gstatic.com/s/trispace/v3/Yq65-LKSQC3o56LxxgRrtA6yBqsrXL5GI5KI-IUZVGsxWFIlbCFroQl0zHugpt0.ttf",
        "regular": "http://fonts.gstatic.com/s/trispace/v3/Yq65-LKSQC3o56LxxgRrtA6yBqsrXL5GI5KI-IUZVGsxWFIlbH9roQl0zHugpt0.ttf",
        "500": "http://fonts.gstatic.com/s/trispace/v3/Yq65-LKSQC3o56LxxgRrtA6yBqsrXL5GI5KI-IUZVGsxWFIlbE1roQl0zHugpt0.ttf",
        "600": "http://fonts.gstatic.com/s/trispace/v3/Yq65-LKSQC3o56LxxgRrtA6yBqsrXL5GI5KI-IUZVGsxWFIlbKFsoQl0zHugpt0.ttf",
        "700": "http://fonts.gstatic.com/s/trispace/v3/Yq65-LKSQC3o56LxxgRrtA6yBqsrXL5GI5KI-IUZVGsxWFIlbJhsoQl0zHugpt0.ttf",
        "800": "http://fonts.gstatic.com/s/trispace/v3/Yq65-LKSQC3o56LxxgRrtA6yBqsrXL5GI5KI-IUZVGsxWFIlbP9soQl0zHugpt0.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Trocchi",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v9",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/trocchi/v9/qWcqB6WkuIDxDZLcDrtUvMeTYD0.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Trochut",
      "variants": [
        "regular",
        "italic",
        "700"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v8",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/trochut/v8/CHyjV-fDDlP9bDIw5nSIfVIPLns.ttf",
        "italic": "http://fonts.gstatic.com/s/trochut/v8/CHyhV-fDDlP9bDIw1naCeXAKPns8jw.ttf",
        "700": "http://fonts.gstatic.com/s/trochut/v8/CHymV-fDDlP9bDIw3sinWVokMnIllmA.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Trykker",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v9",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/trykker/v9/KtktALyWZJXudUPzhNnoOd2j22U.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Tulpen One",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v10",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/tulpenone/v10/dFa6ZfeC474skLgesc0CWj0w_HyIRlE.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Turret Road",
      "variants": [
        "200",
        "300",
        "regular",
        "500",
        "700",
        "800"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v2",
      "lastModified": "2020-07-23",
      "files": {
        "200": "http://fonts.gstatic.com/s/turretroad/v2/pxidypMgpcBFjE84Zv-fE0ONEdeLYk1Mq3ap.ttf",
        "300": "http://fonts.gstatic.com/s/turretroad/v2/pxidypMgpcBFjE84Zv-fE0PpEteLYk1Mq3ap.ttf",
        "regular": "http://fonts.gstatic.com/s/turretroad/v2/pxiAypMgpcBFjE84Zv-fE3tFOvODSVFF.ttf",
        "500": "http://fonts.gstatic.com/s/turretroad/v2/pxidypMgpcBFjE84Zv-fE0OxE9eLYk1Mq3ap.ttf",
        "700": "http://fonts.gstatic.com/s/turretroad/v2/pxidypMgpcBFjE84Zv-fE0P5FdeLYk1Mq3ap.ttf",
        "800": "http://fonts.gstatic.com/s/turretroad/v2/pxidypMgpcBFjE84Zv-fE0PlFteLYk1Mq3ap.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Ubuntu",
      "variants": [
        "300",
        "300italic",
        "regular",
        "italic",
        "500",
        "500italic",
        "700",
        "700italic"
      ],
      "subsets": [
        "cyrillic",
        "cyrillic-ext",
        "greek",
        "greek-ext",
        "latin",
        "latin-ext"
      ],
      "version": "v15",
      "lastModified": "2020-09-10",
      "files": {
        "300": "http://fonts.gstatic.com/s/ubuntu/v15/4iCv6KVjbNBYlgoC1CzTt2aMH4V_gg.ttf",
        "300italic": "http://fonts.gstatic.com/s/ubuntu/v15/4iCp6KVjbNBYlgoKejZftWyIPYBvgpUI.ttf",
        "regular": "http://fonts.gstatic.com/s/ubuntu/v15/4iCs6KVjbNBYlgo6eAT3v02QFg.ttf",
        "italic": "http://fonts.gstatic.com/s/ubuntu/v15/4iCu6KVjbNBYlgoKeg7znUiAFpxm.ttf",
        "500": "http://fonts.gstatic.com/s/ubuntu/v15/4iCv6KVjbNBYlgoCjC3Tt2aMH4V_gg.ttf",
        "500italic": "http://fonts.gstatic.com/s/ubuntu/v15/4iCp6KVjbNBYlgoKejYHtGyIPYBvgpUI.ttf",
        "700": "http://fonts.gstatic.com/s/ubuntu/v15/4iCv6KVjbNBYlgoCxCvTt2aMH4V_gg.ttf",
        "700italic": "http://fonts.gstatic.com/s/ubuntu/v15/4iCp6KVjbNBYlgoKejZPsmyIPYBvgpUI.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Ubuntu Condensed",
      "variants": [
        "regular"
      ],
      "subsets": [
        "cyrillic",
        "cyrillic-ext",
        "greek",
        "greek-ext",
        "latin",
        "latin-ext"
      ],
      "version": "v11",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/ubuntucondensed/v11/u-4k0rCzjgs5J7oXnJcM_0kACGMtf-fVqvHoJXw.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Ubuntu Mono",
      "variants": [
        "regular",
        "italic",
        "700",
        "700italic"
      ],
      "subsets": [
        "cyrillic",
        "cyrillic-ext",
        "greek",
        "greek-ext",
        "latin",
        "latin-ext"
      ],
      "version": "v10",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/ubuntumono/v10/KFOjCneDtsqEr0keqCMhbBc9AMX6lJBP.ttf",
        "italic": "http://fonts.gstatic.com/s/ubuntumono/v10/KFOhCneDtsqEr0keqCMhbCc_CsHYkYBPY3o.ttf",
        "700": "http://fonts.gstatic.com/s/ubuntumono/v10/KFO-CneDtsqEr0keqCMhbC-BL-Hyv4xGemO1.ttf",
        "700italic": "http://fonts.gstatic.com/s/ubuntumono/v10/KFO8CneDtsqEr0keqCMhbCc_Mn33tYhkf3O1GVg.ttf"
      },
      "category": "monospace",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Ultra",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v13",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/ultra/v13/zOLy4prXmrtY-tT6yLOD6NxF.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Uncial Antiqua",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v8",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/uncialantiqua/v8/N0bM2S5WOex4OUbESzoESK-i-PfRS5VBBSSF.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Underdog",
      "variants": [
        "regular"
      ],
      "subsets": [
        "cyrillic",
        "latin",
        "latin-ext"
      ],
      "version": "v9",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/underdog/v9/CHygV-jCElj7diMroVSiU14GN2Il.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Unica One",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v8",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/unicaone/v8/DPEuYwWHyAYGVTSmalshdtffuEY7FA.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "UnifrakturCook",
      "variants": [
        "700"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v12",
      "lastModified": "2020-07-23",
      "files": {
        "700": "http://fonts.gstatic.com/s/unifrakturcook/v12/IurA6Yli8YOdcoky-0PTTdkm56n05Uw13ILXs-h6.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "UnifrakturMaguntia",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v11",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/unifrakturmaguntia/v11/WWXPlieVYwiGNomYU-ciRLRvEmK7oaVun2xNNgNa1A.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Unkempt",
      "variants": [
        "regular",
        "700"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v12",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/unkempt/v12/2EbnL-Z2DFZue0DSSYYf8z2Yt_c.ttf",
        "700": "http://fonts.gstatic.com/s/unkempt/v12/2EbiL-Z2DFZue0DScTow1zWzq_5uT84.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Unlock",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v10",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/unlock/v10/7Au-p_8ykD-cDl7GKAjSwkUVOQ.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Unna",
      "variants": [
        "regular",
        "italic",
        "700",
        "700italic"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v15",
      "lastModified": "2020-09-25",
      "files": {
        "regular": "http://fonts.gstatic.com/s/unna/v15/AYCEpXzofN0NCpgBlGHCWFM.ttf",
        "italic": "http://fonts.gstatic.com/s/unna/v15/AYCKpXzofN0NOpoLkEPHSFNyxw.ttf",
        "700": "http://fonts.gstatic.com/s/unna/v15/AYCLpXzofN0NMiQusGnpRFpr3vc.ttf",
        "700italic": "http://fonts.gstatic.com/s/unna/v15/AYCJpXzofN0NOpozLGzjQHhuzvef5Q.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "VT323",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v12",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/vt323/v12/pxiKyp0ihIEF2hsYHpT2dkNE.ttf"
      },
      "category": "monospace",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Vampiro One",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v11",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/vampiroone/v11/gokqH6DoDl5yXvJytFsdLkqnsvhIor3K.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Varela",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v11",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/varela/v11/DPEtYwqExx0AWHXJBBQFfvzDsQ.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Varela Round",
      "variants": [
        "regular"
      ],
      "subsets": [
        "hebrew",
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v13",
      "lastModified": "2020-09-10",
      "files": {
        "regular": "http://fonts.gstatic.com/s/varelaround/v13/w8gdH283Tvk__Lua32TysjIvoMGOD9gxZw.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Varta",
      "variants": [
        "300",
        "regular",
        "500",
        "600",
        "700"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v3",
      "lastModified": "2021-01-21",
      "files": {
        "300": "http://fonts.gstatic.com/s/varta/v3/Qw3AZQpJHj_6LzHUngWbrFkDH1x96j4EirE-9PGLfQ.ttf",
        "regular": "http://fonts.gstatic.com/s/varta/v3/Qw3AZQpJHj_6LzHUngWbrFkDH1x9tD4EirE-9PGLfQ.ttf",
        "500": "http://fonts.gstatic.com/s/varta/v3/Qw3AZQpJHj_6LzHUngWbrFkDH1x9hj4EirE-9PGLfQ.ttf",
        "600": "http://fonts.gstatic.com/s/varta/v3/Qw3AZQpJHj_6LzHUngWbrFkDH1x9ajkEirE-9PGLfQ.ttf",
        "700": "http://fonts.gstatic.com/s/varta/v3/Qw3AZQpJHj_6LzHUngWbrFkDH1x9UzkEirE-9PGLfQ.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Vast Shadow",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v10",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/vastshadow/v10/pe0qMImKOZ1V62ZwbVY9dfe6Kdpickwp.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Vesper Libre",
      "variants": [
        "regular",
        "500",
        "700",
        "900"
      ],
      "subsets": [
        "devanagari",
        "latin",
        "latin-ext"
      ],
      "version": "v13",
      "lastModified": "2020-09-25",
      "files": {
        "regular": "http://fonts.gstatic.com/s/vesperlibre/v13/bx6CNxyWnf-uxPdXDHUD_Rd4D0-N2qIWVQ.ttf",
        "500": "http://fonts.gstatic.com/s/vesperlibre/v13/bx6dNxyWnf-uxPdXDHUD_RdA-2ap0okKXKvPlw.ttf",
        "700": "http://fonts.gstatic.com/s/vesperlibre/v13/bx6dNxyWnf-uxPdXDHUD_RdAs2Cp0okKXKvPlw.ttf",
        "900": "http://fonts.gstatic.com/s/vesperlibre/v13/bx6dNxyWnf-uxPdXDHUD_RdAi2Kp0okKXKvPlw.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Viaoda Libre",
      "variants": [
        "regular"
      ],
      "subsets": [
        "cyrillic",
        "cyrillic-ext",
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v3",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/viaodalibre/v3/vEFW2_lWCgoR6OKuRz9kcRVJb2IY2tOHXg.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Vibes",
      "variants": [
        "regular"
      ],
      "subsets": [
        "arabic",
        "latin"
      ],
      "version": "v3",
      "lastModified": "2020-08-24",
      "files": {
        "regular": "http://fonts.gstatic.com/s/vibes/v3/QdVYSTsmIB6tmbd3HpbsuBlh.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Vibur",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v11",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/vibur/v11/DPEiYwmEzw0QRjTpLjoJd-Xa.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Vidaloka",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v13",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/vidaloka/v13/7cHrv4c3ipenMKlEass8yn4hnCci.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Viga",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v9",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/viga/v9/xMQbuFFdSaiX_QIjD4e2OX8.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Voces",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v10",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/voces/v10/-F6_fjJyLyU8d4PBBG7YpzlJ.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Volkhov",
      "variants": [
        "regular",
        "italic",
        "700",
        "700italic"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v12",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/volkhov/v12/SlGQmQieoJcKemNeQTIOhHxzcD0.ttf",
        "italic": "http://fonts.gstatic.com/s/volkhov/v12/SlGSmQieoJcKemNecTAEgF52YD0NYw.ttf",
        "700": "http://fonts.gstatic.com/s/volkhov/v12/SlGVmQieoJcKemNeeY4hoHRYbDQUego.ttf",
        "700italic": "http://fonts.gstatic.com/s/volkhov/v12/SlGXmQieoJcKemNecTA8PHFSaBYRagrQrA.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Vollkorn",
      "variants": [
        "regular",
        "500",
        "600",
        "700",
        "800",
        "900",
        "italic",
        "500italic",
        "600italic",
        "700italic",
        "800italic",
        "900italic"
      ],
      "subsets": [
        "cyrillic",
        "cyrillic-ext",
        "greek",
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v13",
      "lastModified": "2021-01-30",
      "files": {
        "regular": "http://fonts.gstatic.com/s/vollkorn/v13/0ybgGDoxxrvAnPhYGzMlQLzuMasz6Df2MHGuGWOdEbD63w.ttf",
        "500": "http://fonts.gstatic.com/s/vollkorn/v13/0ybgGDoxxrvAnPhYGzMlQLzuMasz6Df2AnGuGWOdEbD63w.ttf",
        "600": "http://fonts.gstatic.com/s/vollkorn/v13/0ybgGDoxxrvAnPhYGzMlQLzuMasz6Df27nauGWOdEbD63w.ttf",
        "700": "http://fonts.gstatic.com/s/vollkorn/v13/0ybgGDoxxrvAnPhYGzMlQLzuMasz6Df213auGWOdEbD63w.ttf",
        "800": "http://fonts.gstatic.com/s/vollkorn/v13/0ybgGDoxxrvAnPhYGzMlQLzuMasz6Df2sHauGWOdEbD63w.ttf",
        "900": "http://fonts.gstatic.com/s/vollkorn/v13/0ybgGDoxxrvAnPhYGzMlQLzuMasz6Df2mXauGWOdEbD63w.ttf",
        "italic": "http://fonts.gstatic.com/s/vollkorn/v13/0ybuGDoxxrvAnPhYGxksckM2WMCpRjDj-DJGWmmZM7Xq34g9.ttf",
        "500italic": "http://fonts.gstatic.com/s/vollkorn/v13/0ybuGDoxxrvAnPhYGxksckM2WMCpRjDj-DJ0WmmZM7Xq34g9.ttf",
        "600italic": "http://fonts.gstatic.com/s/vollkorn/v13/0ybuGDoxxrvAnPhYGxksckM2WMCpRjDj-DKYXWmZM7Xq34g9.ttf",
        "700italic": "http://fonts.gstatic.com/s/vollkorn/v13/0ybuGDoxxrvAnPhYGxksckM2WMCpRjDj-DKhXWmZM7Xq34g9.ttf",
        "800italic": "http://fonts.gstatic.com/s/vollkorn/v13/0ybuGDoxxrvAnPhYGxksckM2WMCpRjDj-DLGXWmZM7Xq34g9.ttf",
        "900italic": "http://fonts.gstatic.com/s/vollkorn/v13/0ybuGDoxxrvAnPhYGxksckM2WMCpRjDj-DLvXWmZM7Xq34g9.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Vollkorn SC",
      "variants": [
        "regular",
        "600",
        "700",
        "900"
      ],
      "subsets": [
        "cyrillic",
        "cyrillic-ext",
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v4",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/vollkornsc/v4/j8_v6-zQ3rXpceZj9cqnVhF5NH-iSq_E.ttf",
        "600": "http://fonts.gstatic.com/s/vollkornsc/v4/j8_y6-zQ3rXpceZj9cqnVimhGluqYbPN5Yjn.ttf",
        "700": "http://fonts.gstatic.com/s/vollkornsc/v4/j8_y6-zQ3rXpceZj9cqnVinFG1uqYbPN5Yjn.ttf",
        "900": "http://fonts.gstatic.com/s/vollkornsc/v4/j8_y6-zQ3rXpceZj9cqnVin9GVuqYbPN5Yjn.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Voltaire",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v10",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/voltaire/v10/1Pttg8PcRfSblAvGvQooYKVnBOif.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Waiting for the Sunrise",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v11",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/waitingforthesunrise/v11/WBL1rFvOYl9CEv2i1mO6KUW8RKWJ2zoXoz5JsYZQ9h_ZYk5J.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Wallpoet",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v12",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/wallpoet/v12/f0X10em2_8RnXVVdUNbu7cXP8L8G.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Walter Turncoat",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v11",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/walterturncoat/v11/snfys0Gs98ln43n0d-14ULoToe67YB2dQ5ZPqQ.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Warnes",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v10",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/warnes/v10/pONn1hc0GsW6sW5OpiC2o6Lkqg.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Wellfleet",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v8",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/wellfleet/v8/nuF7D_LfQJb3VYgX6eyT42aLDhO2HA.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Wendy One",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v9",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/wendyone/v9/2sDcZGJOipXfgfXV5wgDb2-4C7wFZQ.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Wire One",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v11",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/wireone/v11/qFdH35Wah5htUhV75WGiWdrCwwcJ.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Work Sans",
      "variants": [
        "100",
        "200",
        "300",
        "regular",
        "500",
        "600",
        "700",
        "800",
        "900",
        "100italic",
        "200italic",
        "300italic",
        "italic",
        "500italic",
        "600italic",
        "700italic",
        "800italic",
        "900italic"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v9",
      "lastModified": "2021-01-30",
      "files": {
        "100": "http://fonts.gstatic.com/s/worksans/v9/QGY_z_wNahGAdqQ43RhVcIgYT2Xz5u32K0nWNigDp6_cOyA.ttf",
        "200": "http://fonts.gstatic.com/s/worksans/v9/QGY_z_wNahGAdqQ43RhVcIgYT2Xz5u32K8nXNigDp6_cOyA.ttf",
        "300": "http://fonts.gstatic.com/s/worksans/v9/QGY_z_wNahGAdqQ43RhVcIgYT2Xz5u32KxfXNigDp6_cOyA.ttf",
        "regular": "http://fonts.gstatic.com/s/worksans/v9/QGY_z_wNahGAdqQ43RhVcIgYT2Xz5u32K0nXNigDp6_cOyA.ttf",
        "500": "http://fonts.gstatic.com/s/worksans/v9/QGY_z_wNahGAdqQ43RhVcIgYT2Xz5u32K3vXNigDp6_cOyA.ttf",
        "600": "http://fonts.gstatic.com/s/worksans/v9/QGY_z_wNahGAdqQ43RhVcIgYT2Xz5u32K5fQNigDp6_cOyA.ttf",
        "700": "http://fonts.gstatic.com/s/worksans/v9/QGY_z_wNahGAdqQ43RhVcIgYT2Xz5u32K67QNigDp6_cOyA.ttf",
        "800": "http://fonts.gstatic.com/s/worksans/v9/QGY_z_wNahGAdqQ43RhVcIgYT2Xz5u32K8nQNigDp6_cOyA.ttf",
        "900": "http://fonts.gstatic.com/s/worksans/v9/QGY_z_wNahGAdqQ43RhVcIgYT2Xz5u32K-DQNigDp6_cOyA.ttf",
        "100italic": "http://fonts.gstatic.com/s/worksans/v9/QGY9z_wNahGAdqQ43Rh_ebrnlwyYfEPxPoGU3moJo43ZKyDSQQ.ttf",
        "200italic": "http://fonts.gstatic.com/s/worksans/v9/QGY9z_wNahGAdqQ43Rh_ebrnlwyYfEPxPoGUXmsJo43ZKyDSQQ.ttf",
        "300italic": "http://fonts.gstatic.com/s/worksans/v9/QGY9z_wNahGAdqQ43Rh_ebrnlwyYfEPxPoGUgGsJo43ZKyDSQQ.ttf",
        "italic": "http://fonts.gstatic.com/s/worksans/v9/QGY9z_wNahGAdqQ43Rh_ebrnlwyYfEPxPoGU3msJo43ZKyDSQQ.ttf",
        "500italic": "http://fonts.gstatic.com/s/worksans/v9/QGY9z_wNahGAdqQ43Rh_ebrnlwyYfEPxPoGU7GsJo43ZKyDSQQ.ttf",
        "600italic": "http://fonts.gstatic.com/s/worksans/v9/QGY9z_wNahGAdqQ43Rh_ebrnlwyYfEPxPoGUAGwJo43ZKyDSQQ.ttf",
        "700italic": "http://fonts.gstatic.com/s/worksans/v9/QGY9z_wNahGAdqQ43Rh_ebrnlwyYfEPxPoGUOWwJo43ZKyDSQQ.ttf",
        "800italic": "http://fonts.gstatic.com/s/worksans/v9/QGY9z_wNahGAdqQ43Rh_ebrnlwyYfEPxPoGUXmwJo43ZKyDSQQ.ttf",
        "900italic": "http://fonts.gstatic.com/s/worksans/v9/QGY9z_wNahGAdqQ43Rh_ebrnlwyYfEPxPoGUd2wJo43ZKyDSQQ.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Xanh Mono",
      "variants": [
        "regular",
        "italic"
      ],
      "subsets": [
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v4",
      "lastModified": "2021-01-21",
      "files": {
        "regular": "http://fonts.gstatic.com/s/xanhmono/v4/R70YjykVmvKCep-vWhSYmACQXzLhTg.ttf",
        "italic": "http://fonts.gstatic.com/s/xanhmono/v4/R70ejykVmvKCep-vWhSomgqUfTfxTo24.ttf"
      },
      "category": "monospace",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Yanone Kaffeesatz",
      "variants": [
        "200",
        "300",
        "regular",
        "500",
        "600",
        "700"
      ],
      "subsets": [
        "cyrillic",
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v16",
      "lastModified": "2021-01-30",
      "files": {
        "200": "http://fonts.gstatic.com/s/yanonekaffeesatz/v16/3y9I6aknfjLm_3lMKjiMgmUUYBs04aUXNxt9gW2LIftodtWpcGuLCnXkVA.ttf",
        "300": "http://fonts.gstatic.com/s/yanonekaffeesatz/v16/3y9I6aknfjLm_3lMKjiMgmUUYBs04aUXNxt9gW2LIftoqNWpcGuLCnXkVA.ttf",
        "regular": "http://fonts.gstatic.com/s/yanonekaffeesatz/v16/3y9I6aknfjLm_3lMKjiMgmUUYBs04aUXNxt9gW2LIfto9tWpcGuLCnXkVA.ttf",
        "500": "http://fonts.gstatic.com/s/yanonekaffeesatz/v16/3y9I6aknfjLm_3lMKjiMgmUUYBs04aUXNxt9gW2LIftoxNWpcGuLCnXkVA.ttf",
        "600": "http://fonts.gstatic.com/s/yanonekaffeesatz/v16/3y9I6aknfjLm_3lMKjiMgmUUYBs04aUXNxt9gW2LIftoKNKpcGuLCnXkVA.ttf",
        "700": "http://fonts.gstatic.com/s/yanonekaffeesatz/v16/3y9I6aknfjLm_3lMKjiMgmUUYBs04aUXNxt9gW2LIftoEdKpcGuLCnXkVA.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Yantramanav",
      "variants": [
        "100",
        "300",
        "regular",
        "500",
        "700",
        "900"
      ],
      "subsets": [
        "devanagari",
        "latin",
        "latin-ext"
      ],
      "version": "v6",
      "lastModified": "2020-09-02",
      "files": {
        "100": "http://fonts.gstatic.com/s/yantramanav/v6/flU-Rqu5zY00QEpyWJYWN5-QXeNzDB41rZg.ttf",
        "300": "http://fonts.gstatic.com/s/yantramanav/v6/flUhRqu5zY00QEpyWJYWN59Yf8NZIhI8tIHh.ttf",
        "regular": "http://fonts.gstatic.com/s/yantramanav/v6/flU8Rqu5zY00QEpyWJYWN6f0V-dRCQ41.ttf",
        "500": "http://fonts.gstatic.com/s/yantramanav/v6/flUhRqu5zY00QEpyWJYWN58AfsNZIhI8tIHh.ttf",
        "700": "http://fonts.gstatic.com/s/yantramanav/v6/flUhRqu5zY00QEpyWJYWN59IeMNZIhI8tIHh.ttf",
        "900": "http://fonts.gstatic.com/s/yantramanav/v6/flUhRqu5zY00QEpyWJYWN59wesNZIhI8tIHh.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Yatra One",
      "variants": [
        "regular"
      ],
      "subsets": [
        "devanagari",
        "latin",
        "latin-ext"
      ],
      "version": "v7",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/yatraone/v7/C8ch4copsHzj8p7NaF0xw1OBbRDvXw.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Yellowtail",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v11",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/yellowtail/v11/OZpGg_pnoDtINPfRIlLotlzNwED-b4g.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Yeon Sung",
      "variants": [
        "regular"
      ],
      "subsets": [
        "korean",
        "latin"
      ],
      "version": "v8",
      "lastModified": "2019-07-16",
      "files": {
        "regular": "http://fonts.gstatic.com/s/yeonsung/v8/QldMNTpbohAGtsJvUn6xSVNazqx2xg.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Yeseva One",
      "variants": [
        "regular"
      ],
      "subsets": [
        "cyrillic",
        "cyrillic-ext",
        "latin",
        "latin-ext",
        "vietnamese"
      ],
      "version": "v15",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/yesevaone/v15/OpNJno4ck8vc-xYpwWWxpipfWhXD00c.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Yesteryear",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v9",
      "lastModified": "2020-09-02",
      "files": {
        "regular": "http://fonts.gstatic.com/s/yesteryear/v9/dg4g_p78rroaKl8kRKo1r7wHTwonmyw.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Yrsa",
      "variants": [
        "300",
        "regular",
        "500",
        "600",
        "700"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v6",
      "lastModified": "2020-09-02",
      "files": {
        "300": "http://fonts.gstatic.com/s/yrsa/v6/wlpxgwnQFlxs3af93IQ73W5OcCk.ttf",
        "regular": "http://fonts.gstatic.com/s/yrsa/v6/wlp-gwnQFlxs5QvV-IwQwWc.ttf",
        "500": "http://fonts.gstatic.com/s/yrsa/v6/wlpxgwnQFlxs3f_83IQ73W5OcCk.ttf",
        "600": "http://fonts.gstatic.com/s/yrsa/v6/wlpxgwnQFlxs3dP73IQ73W5OcCk.ttf",
        "700": "http://fonts.gstatic.com/s/yrsa/v6/wlpxgwnQFlxs3bf63IQ73W5OcCk.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Yusei Magic",
      "variants": [
        "regular"
      ],
      "subsets": [
        "japanese",
        "latin",
        "latin-ext"
      ],
      "version": "v3",
      "lastModified": "2021-01-21",
      "files": {
        "regular": "http://fonts.gstatic.com/s/yuseimagic/v3/yYLt0hbAyuCmoo5wlhPkpjHR-tdfcIT_.ttf"
      },
      "category": "sans-serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "ZCOOL KuaiLe",
      "variants": [
        "regular"
      ],
      "subsets": [
        "chinese-simplified",
        "latin"
      ],
      "version": "v5",
      "lastModified": "2019-11-05",
      "files": {
        "regular": "http://fonts.gstatic.com/s/zcoolkuaile/v5/tssqApdaRQokwFjFJjvM6h2WpozzoXhC2g.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "ZCOOL QingKe HuangYou",
      "variants": [
        "regular"
      ],
      "subsets": [
        "chinese-simplified",
        "latin"
      ],
      "version": "v5",
      "lastModified": "2019-11-05",
      "files": {
        "regular": "http://fonts.gstatic.com/s/zcoolqingkehuangyou/v5/2Eb5L_R5IXJEWhD3AOhSvFC554MOOahI4mRIi_28c8bHWA.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    },
    {
      "family": "ZCOOL XiaoWei",
      "variants": [
        "regular"
      ],
      "subsets": [
        "chinese-simplified",
        "latin"
      ],
      "version": "v5",
      "lastModified": "2019-11-05",
      "files": {
        "regular": "http://fonts.gstatic.com/s/zcoolxiaowei/v5/i7dMIFFrTRywPpUVX9_RJyM1YFKQHwyVd3U.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Zeyada",
      "variants": [
        "regular"
      ],
      "subsets": [
        "latin"
      ],
      "version": "v10",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/zeyada/v10/11hAGpPTxVPUbgZDNGatWKaZ3g.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Zhi Mang Xing",
      "variants": [
        "regular"
      ],
      "subsets": [
        "chinese-simplified",
        "latin"
      ],
      "version": "v5",
      "lastModified": "2019-11-05",
      "files": {
        "regular": "http://fonts.gstatic.com/s/zhimangxing/v5/f0Xw0ey79sErYFtWQ9a2rq-g0actfektIJ0.ttf"
      },
      "category": "handwriting",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Zilla Slab",
      "variants": [
        "300",
        "300italic",
        "regular",
        "italic",
        "500",
        "500italic",
        "600",
        "600italic",
        "700",
        "700italic"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v6",
      "lastModified": "2020-09-02",
      "files": {
        "300": "http://fonts.gstatic.com/s/zillaslab/v6/dFa5ZfeM_74wlPZtksIFYpEY2HSjWlhzbaw.ttf",
        "300italic": "http://fonts.gstatic.com/s/zillaslab/v6/dFanZfeM_74wlPZtksIFaj8CVHapXnp2fazkfg.ttf",
        "regular": "http://fonts.gstatic.com/s/zillaslab/v6/dFa6ZfeM_74wlPZtksIFWj0w_HyIRlE.ttf",
        "italic": "http://fonts.gstatic.com/s/zillaslab/v6/dFa4ZfeM_74wlPZtksIFaj86-F6NVlFqdA.ttf",
        "500": "http://fonts.gstatic.com/s/zillaslab/v6/dFa5ZfeM_74wlPZtksIFYskZ2HSjWlhzbaw.ttf",
        "500italic": "http://fonts.gstatic.com/s/zillaslab/v6/dFanZfeM_74wlPZtksIFaj8CDHepXnp2fazkfg.ttf",
        "600": "http://fonts.gstatic.com/s/zillaslab/v6/dFa5ZfeM_74wlPZtksIFYuUe2HSjWlhzbaw.ttf",
        "600italic": "http://fonts.gstatic.com/s/zillaslab/v6/dFanZfeM_74wlPZtksIFaj8CIHCpXnp2fazkfg.ttf",
        "700": "http://fonts.gstatic.com/s/zillaslab/v6/dFa5ZfeM_74wlPZtksIFYoEf2HSjWlhzbaw.ttf",
        "700italic": "http://fonts.gstatic.com/s/zillaslab/v6/dFanZfeM_74wlPZtksIFaj8CRHGpXnp2fazkfg.ttf"
      },
      "category": "serif",
      "kind": "webfonts#webfont"
    },
    {
      "family": "Zilla Slab Highlight",
      "variants": [
        "regular",
        "700"
      ],
      "subsets": [
        "latin",
        "latin-ext"
      ],
      "version": "v8",
      "lastModified": "2020-07-23",
      "files": {
        "regular": "http://fonts.gstatic.com/s/zillaslabhighlight/v8/gNMbW2BrTpK8-inLtBJgMMfbm6uNVDvRxhtIY2DwSXlM.ttf",
        "700": "http://fonts.gstatic.com/s/zillaslabhighlight/v8/gNMUW2BrTpK8-inLtBJgMMfbm6uNVDvRxiP0TET4YmVF0Mb6.ttf"
      },
      "category": "display",
      "kind": "webfonts#webfont"
    }
  ]
}
';