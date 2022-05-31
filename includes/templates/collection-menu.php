<form method="post" action="">

    <select

        name=""
        class="collection-menu__select"
        onchange="if( this.value != 0 ) {

            this.form.submit(); 

        }"

    >

        <option value="1">Collection-1</option>
        <option value="2">Collection-2</option>
        <option value="3">Collection-3</option>

    </select>
    <i class="icon-select icon-angle-circled-down"></i>

</form>