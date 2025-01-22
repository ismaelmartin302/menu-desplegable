const { registerBlockType } = wp.blocks;
const { createElement } = wp.element;
const { BlockControls, AlignmentToolbar } = wp.blockEditor;
const { ToolbarGroup } = wp.components;

registerBlockType('custom/menu', {
    title: 'Custom Menu',
    icon: 'menu',
    category: 'widgets',
    attributes: {
        alignment: {
            type: 'string',
            default: 'none',
        },
    },
    edit: ({ attributes, setAttributes }) => {
        const { alignment } = attributes;

        const onChangeAlignment = (newAlignment) => {
            setAttributes({ alignment: newAlignment === undefined ? 'none' : newAlignment });
        };

        return createElement(
            'div',
            null,
            createElement(
                BlockControls,
                null,
                createElement(
                    ToolbarGroup,
                    null,
                    createElement(AlignmentToolbar, {
                        value: alignment,
                        onChange: onChangeAlignment,
                    })
                )
            ),
            createElement(
                'div',
                { className: `custom-menu-block custom-menu-block-${alignment}` },
                createElement('p', null, 'Aquí aparecerá el menú desplegable en la vista previa')
            )
        );
    },
    save: ({ attributes }) => {
        const { alignment } = attributes;
        return createElement(
            'div',
            { className: `custom-menu-block custom-menu-block-${alignment}` },
            createElement('p', null, 'Este es un menú desplegable responsive.'),
            createElement('div', { className: 'wp-block-custom-menu' }, '[custom-menu]')
        );
    },
});
