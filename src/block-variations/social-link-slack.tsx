import { BlockAttributes, BlockVariation, registerBlockVariation } from '@wordpress/blocks';
import { __ } from '@wordpress/i18n';
import { Path, SVG } from '@wordpress/components';

const slackSvgIcon =
	<SVG xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 512 512"><Path d="M126.12 315.1A47.06 47.06 0 1 1 79.06 268h47.06Zm23.72 0a47.06 47.06 0 0 1 94.12 0v117.84a47.06 47.06 0 1 1-94.12 0Zm47.06-188.98A47.06 47.06 0 1 1 244 79.06v47.06Zm0 23.72a47.06 47.06 0 0 1 0 94.12H79.06a47.06 47.06 0 0 1 0-94.12Zm188.98 47.06a47.06 47.06 0 1 1 47.06 47.1h-47.06Zm-23.72 0a47.06 47.06 0 0 1-94.12 0V79.06a47.06 47.06 0 1 1 94.12 0ZM315.1 385.88a47.06 47.06 0 1 1-47.1 47.06v-47.06Zm0-23.72a47.06 47.06 0 0 1 0-94.12h117.84a47.06 47.06 0 1 1 0 94.12Z" />
	</SVG>;

const slackSocialLink: BlockVariation = {
	name: 'slack',
	title: __( 'Slack', 'blockify' ),
	icon: slackSvgIcon,
	attributes: { service: 'slack' },
	isActive: ( blockAttributes: BlockAttributes, variationAttributes: BlockAttributes ) => blockAttributes.service === variationAttributes.service,
};

registerBlockVariation( 'core/social-link', slackSocialLink );
