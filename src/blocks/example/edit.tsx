import {InspectorControls} from '@wordpress/block-editor'
import {BlockEditProps} from '@wordpress/blocks'
import {PanelBody} from '@wordpress/components'
import { Input, Form } from 'antd'
import withBlock from '../_shared/tools/withBlock'
import React from 'react'
import './editor.css'

function Edit(props: BlockEditProps<any>) {
  const { attributes, setAttributes } = props

  const onChanges = (changed, values) => {
    setAttributes({...values})
  }

  return (
    <div>
      Block
      <Form initialValues={attributes} layout={'vertical'} onValuesChange={onChanges}>
        <InspectorControls>
          <PanelBody title={'Configuration'}>

          </PanelBody>
        </InspectorControls>
        <Form.Item name={'title'} label={'Title'}>
          <Input placeholder={'Type your title'} />
        </Form.Item>
      </Form>
    </div>
  )
}

export default withBlock(Edit)