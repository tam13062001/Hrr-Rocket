import Edit from './edit'
import metadata from './block.json'
import {registerDynamicBlock} from '../_shared/tools/registerDynamicBlock'

registerDynamicBlock(metadata, {
  edit: Edit
})

