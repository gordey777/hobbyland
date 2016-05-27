<?php 
global $media_data;

if (isset($media_data['favicon']) && $media_data['favicon'] != "") :
	if (!empty($_SERVER['HTTPS'])) {
		$media_data['favicon'] = str_replace('http:', 'https:', $media_data['favicon']);
	} ?>
    <link rel="shortcut icon" href="<?php echo $media_data['favicon']; ?>" type="image/x-icon" />
<?php endif; ?>