import {getProps} from "./get-props";
import {getComponent} from "./get-component";
import * as ReactDOM from 'react-dom'
import {createRoot} from "@wordpress/element";

export const load = (container: HTMLElement) => {
  const props = getProps(container)
  const Component = getComponent(container)

  if (ReactDOM.version.startsWith('18')) {
    const root = createRoot(container)
    root.render(<Component {...props} />)
  }
}