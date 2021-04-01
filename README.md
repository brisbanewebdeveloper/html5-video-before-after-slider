# HTML5 Video Before After Slider

WordPress Plugin to show a video comparison (Before After).

The original code is picked from [here](https://gist.github.com/CodeMyUI/34f82e50cde3c10fbf09e37a6fbf2fa5). I just made it happen as WordPress Plugin.

## Summary

- Shortcode with `h5vbas` gets converted to the slider.

- You can adjust the size of the slider with CSS by setting `height` with `!important`.

## Example

```
<div>[h5vbas poster1="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/dirty.jpg" video1="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/floodplain-dirty.mp4" poster2="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/clean.jpg" video2="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/floodplain-clean.mp4"]</div>
```

## Restriction

- MP4 only. You must overwrite the template file if you need to use non-MP4 video.

## Template Override

Copy `wp-content/plugins/html5-video-before-after-slider/templates/default.php` to your theme directory (e.g. `wp-content/themes/your-theme/h5vbas/default.php`).
