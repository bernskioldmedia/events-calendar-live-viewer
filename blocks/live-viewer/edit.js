import { useBlockProps } from '@wordpress/block-editor';
import { Placeholder } from '@wordpress/components';
import { __ } from '@wordpress/i18n';

export default function Edit( props ) {
	const { attributes, setAttributes } = props;

	const blockProps = useBlockProps();

	return (
		<div { ...blockProps }>
			<Placeholder
				label={ __( 'Live Viewer' ) }
				instructions={ __( 'The live viewer is not previewed in the editor. When you visit this page the live viewer will show the next live event video.' ) }
			/>
		</div>
	);
}
