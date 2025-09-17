import * as React from "react";
import {Example} from "../components/Example";

export function getComponent(container: HTMLElement) {
  const classList = container.classList
  if (classList.contains('wp-block-rocket-example')) {
    return (props: any) => React.cloneElement(<Example />, props)
  }
  return (props: any) => React.createElement('div', {
    dangerouslySetInnerHTML: {
      __html: props.children
    }
  })
}