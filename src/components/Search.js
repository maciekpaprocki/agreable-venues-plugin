import React, {Component, PropTypes} from 'react';
import InlineSVG from 'svg-inline-react/lib';

const classNames = require('classnames')

class Search extends Component {

  constructor(props) {
    super(props);
    this.handleOnKeyUp = this.handleOnKeyUp.bind(this);
    this.handleSubmit = this.handleSubmit.bind(this);
  }

  handleSubmit(e) {
    e.preventDefault()
    const value = this.refs.locationInput.value.trim()
    this.props.onImmediateSearch(value)
  }

  handleOnKeyUp(e) {
    const value = e.currentTarget.value.trim()
    e.preventDefault()

    if (value !== '') {
      this.props.onDebounceSearch(value)
    }

    // Blur focus on textfield if enter is pressed.
    if(e.keyCode == '13'){
      document.activeElement.blur()
    }
  }

  render() {
    const { searchTerm, isLocating, onGeolocate } = this.props

    const searchClasses = classNames({
      'venues-search': true,
      'venues-search--hide-sml': this.props.hasVenueRoute
    })

    return (
        <div className={searchClasses}>
          <form onSubmit={this.handleSubmit}>
            <input placeholder='Enter a location' ref="locationInput" onKeyUp={this.handleOnKeyUp} type='text' />
            <div className="venues-search__icon">
              <InlineSVG src={require(`!svg-inline!../svgs/search.svg`)} />
            </div>
          </form>
          <small className='venues-search__locateme'>
            <InlineSVG src={require(`!svg-inline!../svgs/locate_me.svg`)} />
            <a disabled={isLocating} onClick={onGeolocate}>Find my location</a>
          </small>
        </div>
    );
  }
}

Search.defaultProps = {
  isLocating: false
}

export default Search;
