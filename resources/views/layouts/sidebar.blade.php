<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color:dodgerblue">
    <a href="{{ url('/home') }}" class="brand-link">
        <img src="https://lh3.googleusercontent.com/jv1MykJOU5SJPZT1GIW4J9U9lnqtOzE8NjeDt7nWD7XKXoI9ufYTbgaiOtivnFTIRgj6Ik1MWYq0az1wNaDDzkMlNpwu6SBiz7eL8nwtrb2NO4312tf4pvWsxJrP_vGvZbT-13QDc0nHumqYealY3tDW-_N8uVBM375lwUOlWyaSGSwckOC5g38d4tu0Q_qdv3eCcq2l56ueQUBlYGWhXW4_jIUBEYtfHKDazpIOHCDuaK9mW7bbuK0J1xQzeI7BaSeuRQwK3f-Lrqw5ko6POlMqeeiwBrTG6qahJ-eBZRPTHeg27-MNupIGcZ-afIIvYnWPUxxbrBmN1Y22IqXpC9YiVcuytu7TZRAyTIdePk9Ysska9rxByq8qJgquEKxjM8bdKdQEUF91CiKTeXyce7z2Exu98lq3rqiCpQEjOSggdIHKXuhKpbfBArt8078qwaXUMhjlwzKi_S7qGRi0nz5ax6jroag7LXl7x6EJ8CF78vfMomTFB5SmBZVJw-uoLA67aswdMZZI-8F2zk1kYeceEGdoD4uyIgPuXMukGJkbOYQek2TtT2-oItoi3BxKdkbbg94aILACqtY3nTGw1lBnI_SQtBlJfzCOQ5GGSam3SvSQ0H11uSbOlVxAwd7rl6hkewZgXkTwsFqPcld-RubPOmpXZ3riSn0uVhATx7PAYfY6s_MgUn-vV8CwdGm9zmEnSPeYBT1xcYjEBaep-eG-cNyNavqNe70apjZNEw4Wx-NkppJBZF_ixNM=s500-no?authuser=0"
             alt="{{ config('app.name') }} Logo"
             class="brand-image img-circle elevation-3">
        <span class="brand-text font-weight-light">HOME</span>
    </a>
    <div class="sidebar" style="background-color:dodgerblue">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @include('layouts.menu')
            </ul>
        </nav>
    </div>
</aside>
