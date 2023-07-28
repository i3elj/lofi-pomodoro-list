<?php

function previous_icon(
    int $width = 37,
    int $height = 32,
    string $color = '#D6D6D6'
): string {
    return "<svg width='$width' height='$height' viewBox='0 0 37 32' fill='none'>
        <path d='M36.2295 3.03039V28.2207C36.2295 29.4578 34.8507 30.1957 33.8214 29.5095L14.9286 16.9143C14.009 16.3012 14.009 14.9498 14.9286 14.3367L33.8214 1.7416C34.8507 1.05536 36.2295 1.79326 36.2295 3.03039Z'
            fill='$color' />
        <path d='M23.2341 3.03039L23.2341 28.2207C23.2341 29.4578 21.8554 30.1957 20.826 29.5095L1.93328 16.9143C1.01362 16.3012 1.01362 14.9498 1.93328 14.3367L20.826 1.7416C21.8554 1.05536 23.2341 1.79326 23.2341 3.03039Z'
            fill='$color' />
    </svg>";
}

function play_icon(
    int $width = 23,
    int $height = 29,
    string $color = '#D6D6D6'
): string {
    return "<svg width='$width' height='$height' viewBox='0 0 23 29' fill='none'>
        <path d='M0.304443 27.2207V2.03038C0.304443 0.793255 1.68322 0.0553554 2.71258 0.741591L21.6053 13.3367C22.525 13.9498 22.525 15.3012 21.6053 15.9143L2.71257 28.5095C1.68322 29.1957 0.304443 28.4578 0.304443 27.2207Z' fill='$color' />
    </svg>";
}

function pause_icon(
    int $width = 25,
    int $height = 32,
    string $color = '#D6D6D6'
): string {
    return "<svg width='$width' height='$height' viewBox='0 0 25 32' fill='none'>
        <rect x='0.613281' y='0.136169' width='9.42345' height='30.9787' rx='1.54894' fill='$color' />
        <rect x='15.272' y='0.136169' width='9.42345' height='30.9787' rx='1.54894' fill='$color' />
    </svg>";
}

function next_icon(
    int $width = 37,
    int $height = 32,
    string $color = '#D6D6D6'
): string {
    return "<svg width='$width' height='$height' viewBox='0 0 37 32' fill='none'>
        <path d='M0.770508 28.2207V3.03038C0.770508 1.79325 2.14929 1.05536 3.17864 1.74159L22.0714 14.3367C22.991 14.9498 22.991 16.3012 22.0714 16.9143L3.17864 29.5095C2.14929 30.1957 0.770508 29.4578 0.770508 28.2207Z' fill='$color' />
        <path d='M13.7659 28.2207V3.03038C13.7659 1.79325 15.1446 1.05536 16.174 1.74159L35.0667 14.3367C35.9864 14.9498 35.9864 16.3012 35.0667 16.9143L16.174 29.5095C15.1446 30.1957 13.7659 29.4578 13.7659 28.2207Z' fill='$color' />
    </svg>";
}

function plus_icon(
    int $width = 48,
    int $height = 49,
    string $color = '#fff'
): string {
    return "<svg width='$width' height='$height' viewBox='0 0 48 49' fill='none'>
      <path d='M24 37.1289V11.986M11.4286 24.5574H36.5714M45.9999 24.5574C45.9999 36.7077 36.1502 46.5574 24 46.5574C11.8497 46.5574 2 36.7077 2 24.5574C2 12.4072 11.8497 2.55743 24 2.55743C36.1502 2.55743 45.9999 12.4072 45.9999 24.5574Z' stroke='$color' stroke-width='3.14285' stroke-linecap='round'/>
    </svg>";
}

function settings_icon(
    int $width = 48,
    int $height = 49,
    string $color = '#fff'
): string {
    return "<svg width='$width' height='$height' viewBox='0 0 48 49' fill='none'>
      <circle cx='24' cy='24.5574' r='22' stroke='$color' stroke-width='3.14286'/>
      <path d='M35 24.5574C35 27.595 33.7688 30.345 31.7782 32.3356M35 24.5574C35 21.5198 33.7688 18.7698 31.7782 16.7792M35 24.5574H38.1429M24 35.5574C27.0376 35.5574 29.7876 34.3262 31.7782 32.3356M24 35.5574C20.9624 35.5574 18.2124 34.3262 16.2218 32.3356M24 35.5574V38.7003M13 24.5574C13 21.5199 14.2312 18.7699 16.2218 16.7793M13 24.5574C13 27.595 14.2312 30.345 16.2218 32.3356M13 24.5574H9.85718M24 13.5574C20.9625 13.5574 18.2124 14.7887 16.2218 16.7793M24 13.5574C27.0376 13.5574 29.7876 14.7886 31.7782 16.7792M24 13.5574V10.4146M13.9994 34.5579L16.2218 32.3356M34.0005 14.5569L31.7782 16.7792M13.9994 14.5569L16.2218 16.7793M34.0005 34.5579L31.7782 32.3356' stroke='$color' stroke-width='6.28571' stroke-linecap='square'/>
    </svg>";
}

function change_icon(
    int $width = 35,
    int $height = 36,
    string $color = '#757575'
): string {
    return "<svg width='$width' height='$height' viewBox='0 0 35 36' fill='none'>
      <path d='M26.25 3.41666L32.0833 9.24999M10.9375 30.3958L27.7083 13.625L21.875 7.79166L5.10413 24.5625L2.91663 32.5833L10.9375 30.3958Z' stroke='#757575' stroke-width='2.91667' stroke-linecap='round' stroke-linejoin='round'/>
    </svg>";
}

function sub_icon(
    int $width = 12,
    int $height = 2,
    string $color = "#424242"
): string {
    return "<svg width='$width' height='$height' viewBox='0 0 12 2' fill='none'>
      <path d='M1 1L11 1' stroke='$color' stroke-width='2' stroke-linecap='round'/>
    </svg>";
}

function add_icon(
    int $width = 12,
    int $height = 12,
    string $color = "#424242"
): string {
    return "<svg width='$width' height='$height' viewBox='0 0 12 12' fill='none'>
        <path d='M1 6H11M6 11V1' stroke='$color' stroke-width='2' stroke-linecap='round'/>
    </svg>";
}
