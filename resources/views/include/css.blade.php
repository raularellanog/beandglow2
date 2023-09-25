@livewireStyles
<style>
    .columns .columns-right .btn-group .float-righ {
        padding: 0px;
        margin: 0px;
    }

    .bootstrap-table .fixed-table-toolbar .columns .dropdown-menu {}

    .myTable {
        color: black;
    }

    .myTable tr:nth-child(odd) {
        background-color: white;
    }

    .myTable tr:nth-child(even) {
        background-color: #E5E8E8;
    }

    .export.btn-group {
        display: flex;
    }

    a.dropdown-item {
        padding: 6px;
        background-color: #FAE5D3;
        margin: 8px;
        border-radius: 25%
    }

    .imgCenter {
        display: flex !important;
        justify-content: center !important;
    }

    .select-none {
        color: #5499C7 !important;
    }

    .editor__main {
        min-height: 500px;
    }

    @font-face {
        font-family: 'Emola Royce';
        src:
            url({{ URL('/public/font/Emola Royce/Emola Royce.ttf') }}) format('truetype');
        font-style: normal;
        font-weight: normal;
    }
</style>
